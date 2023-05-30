<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function update()
    {
        // return 'hello';
        // return response()->redirectTo('/profile');
        // return response()->redirectTo(route('profile.edit'));
        // return redirect()->route('profile.edit');
        // return back();

        return back()->with('message', 'Avatar Updated Successfully!'); //Adding a message prompt

        
    }
}
