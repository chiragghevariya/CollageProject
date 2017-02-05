<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Subject;
use App\Submit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject_ids = Subject::where('semester',(Auth::user()->semester))->pluck('id');
        $assignments = Assignment::wherein('subject_id', $subject_ids)->get();
        return view('all-section.student.assignment.index',['assignment'=>$assignments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        $submit = new Submit();
        $submit->user_id = Auth::user()->id;
        $submit->assignment_id = $request->assignment_id;
        $submit->status = 1;
        $submit->comment = 'uncommented';
        $submit->save();
        return redirect()->route('submit.edit',['id'=>$submit->id]);

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
        $submit = Submit::find($id);
        $assignment = Assignment::where('id',$submit->assignment_id)->first();
        return view('all-section.student.assignment.edit')->with(['assignment' => $assignment, 'submit' => $submit]);
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
