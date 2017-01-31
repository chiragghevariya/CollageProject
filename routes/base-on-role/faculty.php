<?php


use Symfony\Component\HttpFoundation\Request;

Route::group(['prefix'=>'faculty'],function (){



    Route::get('home',function (Request $request){


        if(\Auth::check())

        return view('all-section.faculty.home');

        else
            return redirect('/');

    });

    Route::resource('faculty/post','PostController');

    Route::resource('faculty/lecture','LectureController');




    Route::resource('faculty/subject','SubjectController');



});