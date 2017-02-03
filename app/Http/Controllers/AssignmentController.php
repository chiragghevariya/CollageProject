<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignment =Assignment::auth()->get();
        return view('all-section.faculty.assignment.index',['assignment'=>$assignment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject =  Auth::user()->subjects()->get();
        return view('all-section.faculty.assignment.create',['subject'=>$subject]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assignment =new Assignment();
        $assignment->user_id =Auth::user()->id;
        $assignment->subject_id =$request->subject_id;
        $assignment->title =$request->title;
        $assignment->information =$request->information;
        $assignment->save();
        return redirect()->route('assignment.index');
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
        $subject =Auth()->user()->subjects()->get();
        $assignment =Assignment::find($id);

        return view('all-section.faculty.assignment.edit',['subject'=>$subject,'assignment'=>$assignment]);
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
        $assignment =Assignment::find($id);
        $assignment->user_id =Auth::user()->id;
        $assignment->subject_id =$request->subject_id;
        $assignment->title =$request->title;
        $assignment->information =$request->information;
        $assignment->save();
        return redirect()->route('assignment.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assignment =Assignment::find($id);
        $assignment->delete();
        return redirect()->route('assignment.index');
    }
}
