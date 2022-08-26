<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function path($name)
    {
        $artwork = new Artwork();
        $user = Auth::user();
        $data['data'] = $artwork->get_data_name($name);

        $now_name = $user['name'];

        if ($now_name == $name) {
            $data['judge'] = True;
        } else {
            $data['judge'] = False;
        }

        $data['user'] = User::where('name', $name)->get();

        //dd($data);
        return view('home', $data);
    }
}
