<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("users/{user}/{age}",[Users::class, 'index']);

// Route::get("/user1", function(){
//     return view("user1");
// });

// Route::get("/user1/{name}", function($name){
//     return view("user1",['user1'=>$name]);
// });

// Route::get("username/{name}",[UsersController::class,'loadView']);

// Route::view("user1","user1");

Route::view("username","username");

