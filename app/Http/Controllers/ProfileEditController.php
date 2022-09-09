<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UsersComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileEditController extends Controller
{
    public function update(Request $request)
    {
        $old_name=Auth::user()->name;
        $new_name=$request->input(['name']);
        $comment=$request->input(['comment']);
        $id=Auth::user()->id;
        UsersComment::intro_update($new_name,$old_name,$comment,$id);
        rename( 'public/users/' . $old_name, 'public/users/' . $new_name);
        return redirect('/home/' .$new_name);
    }
}
