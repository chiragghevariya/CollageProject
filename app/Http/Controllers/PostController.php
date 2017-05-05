<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post =Post::where('user_id',Auth::user()->id)->get();
        return view('all-section.faculty.post.index',['post'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('all-section.faculty.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post =new Post();
        $post->user_id =Auth::user()->id;
        $post->title =$request->title;
        $post->description =$request->description;
        $post->date =$request->date;

        if($file =$request->file('photo')){

            $name =time() .$file->getClientOriginalName();

            $file->move('Post/'.Auth::user()->id.'/images',$name);

            $post->photo =$name;
        }

        $post->save();
        return redirect()->route('post.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('all-section.faculty.post.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return view('all-section.faculty.post.edit',['post'=>$post]);
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
        $postupdate =Post::find($id);
        $postupdate->user_id =Auth::user()->id;
        $postupdate->title =$request->title;
        $postupdate->description =$request->description;
        $postupdate->date =$request->date;

        if($file =$request->file('photo')){

            $name =time() .$file->getClientOriginalName();

            $file->move('Post/'.Auth::user()->id.'/images',$name);

            $postupdate->photo =$name;
        }


        $postupdate->save();
        return redirect()->route('post.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =Post::find($id);
        $post->delete();
        return redirect()->route('post.index');
    }
}
