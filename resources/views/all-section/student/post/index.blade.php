@extends('all-section.student.index')

@section('stylefile')

        <style type="text/css">

            .panelheading{



            }
            .profile-image{


            }
            .post-description{

                font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
                margin-left: 1em;
                font-weight: 400;
                font-size: medium;
                background: white;
                padding: 1em;
            }
            .icon{

                margin-right: 1em;
            }

        </style>


    @stop

@section('content')




        <div class="container">



        <div class="row facultypost" style=" width: 50%;margin: auto">

            @foreach($post as $post)


                        <div class="col-sm-12">

                            <div class="panel panel-default">

                                <div class="panel-heading panelheading">
                                    <div class="row">
                                        <div class="col-sm-2">

                                            <img src="{{url('Profile/'.$post->user_id.'/images/'.App\Profile::where('user_id',$post->user_id)->value('photo'))}}" alt="No" class="img-responsive img-circle profile-image">

                                        </div>
                                        <div class="col-sm-5">

                                            <b> {{App\User::Name($post->user_id)}}</b><br>
                                            <h5 style="font-size:smaller">{{$post->created_at->diffForHumans()}}</h5>

                                        </div>
                                    </div>

                                </div>

                                <div style=" margin-left: 2em;margin-top: 1em"><b>{{$post->title}}</b></div>
                                <div class="post-description">~ {{$post->description}}</div>
                                <hr>


                                <div class="panel-body">

                                    <img width="100%" height="100%" src="{{url('Post/'.$post->user_id. '/images/'.$post->photo)}}">

                                </div>

                                <div class="panel-footer">

                                    <div class="row" style="text-align: center">

                                        <div class="col-md-4"><span class="icon"><i class="fa fa-thumbs-up" aria-hidden="true"></i></span>Like</div>
                                        <div class="col-md-4"><a href="{{route('fpost.show',['id'=>$post->id])}}" target="_blank"><span class="icon"><i class="fa fa-comment" aria-hidden="true"></i></span>Comment</a></div>
                                        <div class="col-md-4"><span class="icon"><i class="fa fa-share-alt" aria-hidden="true"></i></span>Share</div>

                                    </div>

                                </div>

                            </div>


                        </div>

            @endforeach


        </div>


        <script>

            $(document).ready(function() {
                $(window).endlessScroll({
                    inflowPixels: 300,
                    callback: function() {
                        var $img = $('.facultypost :nth-last-child(3)').clone();
                        $('.facultypost').append($img);
                    }
                });
            });


        </script>

            <script type="text/javascript" src="{{asset('projectstylefile/js/jquery.min.js')}}"></script>

        </div>





     @stop