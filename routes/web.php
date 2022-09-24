<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;



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
    return view('home',[
        'posts'=> Post::latest()->paginate(7)

        //Things to go: change the way the url is displayed so I can paginate and use the category filters
    ]);
});

Route::get('/post/{post:slug}',function(Post $post){
    
    return view('post',[
        'post'=>$post
    ]);

});

Route::get('/category/{category:category}',function(Category $category){
    return view('categoryFilter',[
        'categoryposts'=>$category->posts,
        'posts'=> Post::with('category')->get()
    ]);
});

Route::get('/signupuser',[SignupController::class,'create'])->middleware('guest');
Route::post('/signup',[SignupController::class,'store'])->middleware('guest');

Route::get('/loginuser',[LoginController::class,'create'])->middleware('guest');
Route::post('/login',[LoginController::class,'store'])->middleware('guest');

Route::post('/logout',[LoginController::class,'destroy'])->middleware('auth');

Route::get('/dashboard',[AdminController::class,'index'])->middleware('auth');


Route::get('/newpost',[AdminController::class,'create'])->middleware('auth');
Route::post('/newpostpublish',[AdminController::class,'store'])->middleware('auth');

Route::get('/edit/{post:slug}',[AdminController::class,'edit'])->middleware('auth');
Route::patch('/update/{post:slug}',[AdminController::class,'update'])->middleware('auth');
Route::delete('/delete/{post:slug}',[AdminController::class,'destroy'])->middleware('auth');




