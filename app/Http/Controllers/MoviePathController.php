<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Support\Facades\Auth;

class MoviePathController extends Controller
{
    public function path()
    {
        $artwork=new Artwork();
        $user = Auth::user();
        $data = $artwork->get_data_name($user['name']);
        dd($data);
    }
}
