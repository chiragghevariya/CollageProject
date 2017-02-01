<?php

namespace App\Http\Controllers;

use App\Subject;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject =Subject::all();
        return view('all-section.faculty.subject-assign.index',['subject'=>$subject]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Auth::user()->department()->first();
        $faculties =$department->faculties()->get();
        return view('all-section.faculty.subject-assign.create',['faculties'=>$faculties]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subject =new Subject();
        $subject->name =$request->subject;
        $subject->semester =$request->semester;
        $subject->department_id =Auth::user()->department_id;
        $subject->user_id = Auth::user()->id;
        $subject->save();
//        $subject->users()->sync($request->faculties);
        $subject->users()->sync($request->faculties);
        return redirect()->route('subject.index');
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
        $department= \Auth::user()->department()->first();
        $faculties = $department->faculties()->get();

        $subject =Subject::find($id);
        $faculty_selected =  $subject->users()->pluck('user_id')->toArray();
        return view('all-section.faculty.subject-assign.edit',['subject'=>$subject,'faculties'=>$faculties,'faculty_selected'=>$faculty_selected]);
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

        $subject =Subject::find($id);
        $subject->name =$request->subject;
        $subject->semester =$request->semester;
        $subject->department_id =Auth::user()->department_id;
        $subject->user_id = Auth::user()->id;
        $subject->save();
//        $subject->users()->sync($request->faculties);
        $subject->users()->sync($request->faculties);
        return redirect()->route('subject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject=Subject::find($id);
        $subject->delete();
        return redirect()->route('subject.index');
    }
}
