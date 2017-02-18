<?php

namespace App\Http\Controllers;

use App\Post;
use App\Profile;
use Illuminate\Http\Request;

class StudentPostController extends Controller
{
    public function index(){

        $post = Post::all();
        return view('all-section.student.post.index',['post'=>$post]);
    }
}
