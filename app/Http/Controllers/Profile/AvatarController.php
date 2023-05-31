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
        
        // return dd($request->all());
        //Storing file using store function

        // return dd($request->file('avatar'));

        $path = $request->file('avatar')->store('avatars');
        // dd($path);

        // return redirect()->route('profile.edit')->with('message', 'Avatar Updated Successfully!');


        $user = auth()->user();

        // $user->update(['avatar'=>'****']);
        // $user->update(['avatar'=>$path]);



        //User avatar information update

        /* The "storage_path()" function returns the fully qualified path to your 
        application's storage directory.*/
        
        $user->update(['avatar'=> storage_path('app')."/$path"]); // storage_path('app') = Storage path till app .



        dd($user);
    }


}
