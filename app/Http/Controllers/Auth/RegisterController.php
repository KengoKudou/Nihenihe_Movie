<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Jobs\SendVerificationEmail;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'email_token' => base64_encode($data['email']),
        ]);
    }

    /**
     *  Handle a registration request for the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        dispatch(new SendVerificationEmail($user));
        return view('auth.verification');
    }

    public function showReSendForm()
    {
        return view('auth.resend');
    }

    public function reSend(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect('/resend')
                ->with('warning', '登録されていないアドレスです');
        }
        if ($user->verified == 1) {
            return redirect('/resend')
                ->with('warning', 'すでに検証されています．ログイン画面からログインしてください');
        }
        // メールの送信時間を現在時刻に変更
        $user->sent_at = Carbon::now();
        $user->save();
        // メールの送信ジョブを作成し，キューに投入する
        event(new Registered($user));
        dispatch(new SendVerificationEmail($user));
        return view('auth.verification');
    }

    /**
     *  Handle a registration request for the application.
     *
     * @param $token
     * @return \Illuminate\Http\Response
     */
    public function verify($token)
    {
        $user = User::where('email_token', $token)->first();

        // 現在の時刻を取得
        $date_now = new Carbon(Carbon::now());
        // メールの送信時刻を取得し，１時間加えた時刻を有効期限とする
        $date_expire = Carbon::createFromFormat('Y-m-d H:i:s', $user->sent_at);
        $date_expire->addHour();
        // リンクの有効期限のチェック
        if ($date_now->gt($date_expire)) {  // gt は Grater Than，つまり "より大きい"
            return redirect('/')->with('warning', 'メールリンクの有効期限（１時間）を過ぎました');
        }

        $user->verified = 1;
        if ($user->save()) {
            return view('auth.emailconfirm', ['user' => $user]);
        }
    }
}
