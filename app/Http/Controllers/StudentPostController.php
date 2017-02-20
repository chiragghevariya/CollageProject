<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentPostController extends Controller
{
    public function index(){

        $post = Post::orderBy('id', 'desc')->get();
        return view('all-section.student.post.index',['post'=>$post]);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment =new Comment();
        $comment->user_id =Auth::user()->id;
        $comment->post_id =$request->post_id;
        $comment->comment =$request->comment;
        $comment->save();
        return redirect()->route('fpost.show',['id'=>$comment->post_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =Post::find($id);
        $comment =Comment::where('post_id',$post->id)->get();
        return view('all-section.student.post.show',['post'=>$post,'comment'=>$comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
