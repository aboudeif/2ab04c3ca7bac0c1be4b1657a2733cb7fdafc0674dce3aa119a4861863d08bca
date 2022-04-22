<?php

use Illuminate\Support\Facades\Route;

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

ROute::get('/posts',function (){
    $post = [[
        'id' => 1,
        'title' => 'My First Post',
        'posted_by' => 'John Doe',
        'posted_at' => '2019-01-01 12:00:00',
    ],[
        'id' => 2,
        'title' => 'My Second Post',
        'posted_by' => 'Jane Doe',
        'posted_at' => '2019-01-02 12:00:00',
    ],[
        'id' => 3,
        'title' => 'My Third Post',
        'posted_by' => 'John Doe',
        'posted_at' => '2019-01-03 12:00:00',
    ],[
        'id' => 4,
        'title' => 'My Fourth Post',
        'posted_by' => 'Jane Doe',
        'posted_at' => '2019-01-04 12:00:00',
    ]];
    return view('posts',[
        'allPosts'=>$post
    ]);
});