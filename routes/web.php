<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\formController;




Route::get('/', function () {
    return view('welcome');
});
Route::view('home', 'home');
Route::view('about', 'about');


// Route::view('user-form', 'user-form');
// Route::post('addUser',[formController::class , 'addUser']);






// Route::view('home',  [UserController::class, 'home']);
// Route::view('about',  [UserController::class, 'about']);
// Route::view('about', 'common.about');
// Route::view('/admin', 'admin.login'); 

// Route::get('/about/{name}', function ($name) {
//     return view('about', ['user' => $name]);
// });

// Route::get('user-home', [UserController::class, 'userHome']);
// Route::get('user-about/{name}', [UserController::class, 'userAbout']);
// Route::get('admin-login', [UserController::class, 'adminLogin']);

// Route::get('user', [UserController::class, 'getUser']);
// Route::get('about', [UserController::class, 'aboutUser']);
// Route::get('user/{name}', [UserController::class, 'getUserName']);
// Route::get('admin', [UserController::class, 'adminLogin']);








// Route::get('/home', function () {
//     return view('home');
// });

// Route::view('/home', 'home' );

// Route::redirect('/home', '/');


// Route::get('/about/{name}', function($name){

//     return view('about',['name' => $name]);
// });


