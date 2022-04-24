<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

ROute::get('/posts',[PostsController::class,'index']); //index
#ROute::get('/posts/create',[PostsController::class,'create']); //create
#ROute::post('/posts',[PostsController::class,'store']); //store
#ROute::get('/posts/{post}',[PostsController::class,'show']); //show
#ROute::get('/posts/{post}/edit',[PostsController::class,'edit']); //edit
#ROute::patch('/posts/{post}',[PostsController::class,'update']); //update
#ROute::delete('/posts/{post}',[PostsController::class,'destroy']); //destroy