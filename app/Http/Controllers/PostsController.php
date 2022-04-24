<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = [
            [
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
            ]
        ];
        return view('posts/index',[
            'allPosts'=>$posts
        ]);
    }

}
