<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
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
    public function path()
    {
        $artwork = new Artwork();
        $user = Auth::user();
        $data['data'] = $artwork->get_data_name($user['name']);
        return view('home', $data);
    }
}
