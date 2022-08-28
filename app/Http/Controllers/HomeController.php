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
        $now_name = Auth::user()->name;
        $judge = null;

        if ($now_name == $name) {
            $judge = True;
        } else {
            $judge = False;
        }

        $send_data = [
            'data'=>Artwork::get_data_name($name),
            'user'=>User::where('name', $name)->get(),
            'judge' => $judge
        ];

        //dd($data);
        return view('home', $send_data);
    }
}
