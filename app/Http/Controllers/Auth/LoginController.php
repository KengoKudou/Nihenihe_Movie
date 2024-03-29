<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\MyList;
use App\Providers\RouteServiceProvider;
use DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    /**
     * The user has been authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @param mixed $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        // ログイン後にここが呼び出される
        // メールでの認証が済んでいるかをチェックする
        if (!$user->verified) {
            // メールでの認証が済んでいないので強制ログアウト
            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect('/login')->with('warning', 'メールの確認をしてください');
        }

        // 「storage」フォルダ内の「users」フォルダの中に各ユーザーのフォルダが無かった場合
        if (!file_exists(storage_path('app/public/users/' . $user['name']))) {
            // ユーザーフォルダを作成
            mkdir(storage_path('app/public/users/' . $user['name']));
        }

        $judge=DB::table('my_lists')->where('user_id', $user['id'])->exists();
        if(!$judge){
            MyList::insert_myList($user['id']);
        }
    }
}
