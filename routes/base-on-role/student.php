<?php


use Symfony\Component\HttpFoundation\Request;

Route::group(['prefix'=>'student'],function (){

    Route::get('home',function (Request $request){

       if(\Auth::check())

           return "you are student";

               else

                   return redirect('/');

    });

});






