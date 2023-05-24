<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;//for using the user model here.
use Illuminate\Support\Facades\DB; //This is used for the Database practice here.

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');

    // dd('Nayeem');

    //****SQL query using DB facade *****

    //Select users 
    // $users = DB::select('select * from users');
    // $users = DB::select('select * from users where email = ?',['nayeemmd229@gmail.com']);
    // $users = DB::select('select * from users where id=? and email = ?',[1,'nayeemmd229@gmail.com']);

    //Insert user
    // $user = DB::insert('insert into users (name, email, password) values(?,?,?)',['nadim','nadim@gmail.com','45214521']);

    //Update user
    // $user = DB::update('update users set name=? where id=?',['Person',3]);

    //Delete user
    // $user = DB::delete('delete from users where name=?' , ['Person']);



    //*****Query Builder laravel... here the collection will be used ****

    //select user
    $users = DB::table('users')->get();
    // $users = DB::table('users')->where('email','2')->get();

    //insert user
    // $user = DB::table('users')->insert([
    //     'name'=>'Nadim',
    //     'email'=>'nadim@gmail.com',
    //     'password'=>'45214521'
    // ]);

    //update user 
    // $user = DB::table('users')
    //     ->where('id', 4)
    //     ->update(['name' => 'Person']);
    
    //delete user
    // $user = DB::table('users')
    //     ->where('name','Person')
    //     ->delete();

    //*****CRUD using eloquent model****


    //Getting data using eloquent model
    // $user = User::where('id',1)->first();

    //Inserting or creating user 
    // $user = User::create([
    //     'name'=>'Nadim',
    //     'email'=>'nadim@gmail.com',
    //     'password'=>'45214521'
    // ]);

    //Updating user 
    // $user = User::find(6);
    // $user->update([
    //     'name' => 'Person'
    // ]);

    //Delete user 
    // $user = User::find(6)->delete();



    dd($users);








});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
