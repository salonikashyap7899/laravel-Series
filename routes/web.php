<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\formController;
use App\Http\Controllers\HomeController;




Route::get('/', function () {
    return view('welcome');
});



Route::view('home', 'home');
Route::view('about', 'about');


// Route::controller(HomeController::class)->group(function(){
//  Route::get('show',  'show');
// Route::get('add',  'add');
// Route::get('delete',  'deleted ');
// Route::get('about/{name}',  'about ');

// }); 


// Route::get('about/{name}', [HomeController::class, 'about']);














// route groupin with prefix 

// Route::prefix('students')->group(function(){
   
// Route::view('/home', 'home');
// Route::get('/show', [HomeController::class, 'show']);
// Route::get('/add', [HomeController::class, 'show']);

// });
// Route::prefix('students/india')->group(function(){
   
// Route::view('/home', 'home');
// Route::get('/show', [HomeController::class, 'show']);
// Route::get('/add', [HomeController::class, 'show']);

// });



































































































// Route::view('home/profile/user', 'home')->name('hm');
// Route::view('home/profile/{name}', 'home')->name('user');

// Route::get('show', [UserController::class, 'show']);
// Route::get('user', [UserController::class, 'user']);


// Route::view('user', 'home');
// Route::view('about', 'about');
// Route::view('about\{name}', 'about');


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


