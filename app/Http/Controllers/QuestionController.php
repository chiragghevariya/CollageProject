<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $question= new Question();
        $question->hint =$request->hint;
        $question->question =$request->question;
        $question->user_id =Auth::user()->id;
        $question->assignment_id =$request->assignment_id;
        $question->subject_id =Assignment::find($request->assignment_id)->subject_id;
        $question->save();
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
        $question = Question::find($id);
        $subject = Auth::user()->subjects()->get();
        $assignment = Assignment::find($question->assignment_id);
        return view('all-section.faculty.assignment.edit',['question'=>$question,'assignment'=>$assignment,'subject'=>$subject]);

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
        $question = Question::find($id);
        $question->hint =$request->hint;
        $question->question =$request->question;
        $question->user_id =Auth::user()->id;
        $question->assignment_id =$request->assignment_id;
        $question->subject_id =Assignment::find($request->assignment_id)->subject_id;
        $question->save();
        return redirect()->route('assignment.edit',['id'=>$question->assignment_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $question = Question::find($id);
       $question->delete();
        return redirect()->route('assignment.edit',['id'=>$question->assignment_id]);


    }
}
