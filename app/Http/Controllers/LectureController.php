<?php

namespace App\Http\Controllers;

use App\Lecture;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecture=Lecture::auth()->get();
        return view('all-section.faculty.lecture.index',['lecture'=>$lecture]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject =  Subject::where('user_id',Auth::user()->id)->get();
        return view('all-section.faculty.lecture.create',['subject'=>$subject]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lecture =new Lecture();
        $lecture->user_id= Auth::user()->id;
        $lecture->subject_id = $request->subject_id;
        $lecture->title = $request->title;
        $lecture->date =$request->date;
        $lecture->information =$request->information;
        $lecture->summernote_lecture =$request->summernote_lecture;
        $lecture->save();
        return redirect()->route('lecture.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject =Auth::user()->subjects()->get();
        $lecture =Lecture::find($id);


        return view('all-section.faculty.lecture.edit',['subject'=>$subject,'lecture'=>$lecture]);
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
        $lecture =Lecture::find($id);
        $lecture->user_id= Auth::user()->id;
        $lecture->subject_id = $request->subject_id;
        $lecture->title = $request->title;
        $lecture->date =$request->date;
        $lecture->information =$request->information;
        $lecture->summernote_lecture =$request->summernote_lecture;
        $lecture->save();
        return redirect()->route('lecture.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lecture =Lecture::find($id);
        $lecture->delete();
        return redirect()->route('lecture.index');

    }
}
