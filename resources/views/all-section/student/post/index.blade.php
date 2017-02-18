@extends('all-section.student.index')

@section('stylefile')

        <style type="text/css">

            .panelheading{



            }
            .profile-image{


            }

        </style>


    @stop

@section('content')




        <div class="container">





                @foreach($post as $post)

                <div class="row">

                    <div class="panel panel-default">

                            <div class="panel-heading panelheading">

                                <img width="40" height="40"  src="{{url('Profile/'.$post->user_id.'/images/'.App\Profile::where('user_id',$post->user_id)->value('photo'))}}" alt="No" class="img-responsive img-circle profile-image">
                                    {{App\User::Name($post->user_id)}}



                            </div>

                            <div class="panel-body">

                                <img width="100%" height="100%" src="{{url('Post/'.$post->user_id. '/images/'.$post->photo)}}">

                                <hr>

                                <div style=" text-align:center">{{$post->description}}</div>

                            </div>

                            <hr>

                            <div class="panel-footer bg-success"  >

                                <h6 style=" text-align: center">{{$post->created_at->diffForHumans()}}</h6>

                            </div>

                        </div>

                    </div>


            @endforeach
            </div>





     @stop