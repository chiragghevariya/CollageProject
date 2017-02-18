<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile =Profile::where('user_id',Auth::user()->id)->get();
        return view('all-section.student.profile.index',['profile'=>$profile]);
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
        $profile =new Profile();
        $profile->user_id =Auth::user()->id;

        if($file =$request->file('photo')){

            $name =time().$file->getClientOriginalName();
            $file->move('Profile/'.Auth::user()->id .'/images',$name);
            $profile->photo =$name;
        }

        $profile->save();
        return redirect()->route('studentprofile.edit',['id'=>$profile->id]);
    }

            //if($file =$request->file('photo')){
            //
            //$name =time() .$file->getClientOriginalName();
            //
            //$file->move('Result/'.Auth::user()->id.'/images',$name);
            //
            //$result->photo =$name;
            //}

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
        $profile =Profile::find($id);
        return view('all-section.student.profile.edit',['profile'=>$profile]);

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
       $profile = Profile::find($id);
        $profile->user_id =Auth::user()->id;

        if($file =$request->file('photo')){

            $name =time().$file->getClientOriginalName();
            $file->move('Profile/'.Auth::user()->id .'/images',$name);
            $profile->photo =$name;
        }

        $profile->save();
        return redirect()->route('studentprofile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $profile = Profile::find($id);
       $profile->delete();
        return redirect()->route('studentprofile.index');

    }
}
