<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\UpdateAvatarRequest; // custom request 

class AvatarController extends Controller
{
    // public function update()
    // {
    //     // return 'hello';
    //     // return response()->redirectTo('/profile');
    //     // return response()->redirectTo(route('profile.edit'));
    //     // return redirect()->route('profile.edit');
    //     // return back();

    //     // return back()->with('message', 'Avatar Updated Successfully!'); //Adding a message prompt

    // }

    /* public function update(Request $request)
    {
        // return dd($request->input('_token'));
        // return dd($request->input('avatar'));
        
        $request->validate([
            'avatar'=>'required|image',
        ]);
        return dd($request->all());
    } */
    
    public function update(UpdateAvatarRequest $request)
    {
        
        return dd($request->all());
    }


}
