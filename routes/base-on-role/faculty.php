<?php


use Symfony\Component\HttpFoundation\Request;

Route::group(['prefix'=>'faculty'],function (){



    Route::get('home',function (Request $request){

        $user =new \App\User();
        return view('all-section.faculty.home')->with(['user'=>$user]);

    });

    Route::resource('faculty/post','PostController');

    Route::resource('faculty/lecture','LectureController');


    Route::resource('faculty/subject','SubjectController');



});