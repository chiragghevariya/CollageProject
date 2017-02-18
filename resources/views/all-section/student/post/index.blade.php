@extends('all-section.student.index')

@section('stylefile')

        <style type="text/css">

            .panelbody{

                text-align: center;
                font-size: large;
            }

        </style>


    @stop

@section('content')




        <div class="container">


            <div style=" width:40%;margin: auto">


                @foreach($post as $post)

                <div class="row">

                    <div class="col-md-12">

                        <div class="panel panel-success">

                            <div class="panel-heading panelbody">{{$post->title}}</div>

                            <div class="panel-body">

                                <img width="100%" height="100%" src="{{url('Post/'.$post->user_id. '/images/'.$post->photo)}}">

                                <hr>

                                <div style="text-align:center">{{$post->description}}</div>

                            </div>

                            <hr>

                            <div class="panel-footer bg-success"  >

                                <h6 style=" text-align: center">{{$post->created_at->diffForHumans()}}</h6>

                            </div>

                        </div>

                    </div>

                </div>

            @endforeach
            </div>



        </div>


     @stop