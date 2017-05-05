<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result =Auth::user()->result()->get();
        return view('all-section.student.result.index',['result'=>$result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('all-section.student.result.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $result = new Result();
            $result->user_id =Auth::user()->id;
            $result->title =$request->title;
            $result->semester =$request->semester;
            $result->spi =$request->spi;
            $result->pass_fail= $request->ps;

        if($file =$request->file('photo')){

            $name =time() .$file->getClientOriginalName();

            $file->move('Result/'.Auth::user()->id.'/images',$name);

            $result->photo =$name;
        }



        $result->save();
            return redirect()->route('result.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $result = Result::find($id);
       return view('all-section.student.result.show',['result'=>$result]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $resultt = Result::find($id);
       return view('all-section.student.result.edit',['resultt'=>$resultt]);

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
       $resulttt= Result::find($id);
        $resulttt->user_id =Auth::user()->id;
        $resulttt->title =$request->title;
        $resulttt->semester =$request->semester;
        $resulttt->spi =$request->spi;
        $resulttt->pass_fail= $request->ps;

        if($file =$request->file('photo')){

            $name =time() .$file->getClientOriginalName();

            $file->move('Result/'.Auth::user()->id.'/images',$name);

            $resulttt->photo =$name;
        }



        $resulttt->save();
        return redirect()->route('result.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result =Result::find($id);
        $result->delete();
        return redirect()->route('result.index');
    }
}
