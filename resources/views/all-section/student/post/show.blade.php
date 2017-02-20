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
        .comment-form{

            width:48% ;
            margin: auto;
        }

    </style>


@stop

@section('content')




    <div class="container">



        <div class="row" style="width: 50%;margin: auto">


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


                        <div class="post-description">{{$post->description}}</div>


                        <div class="panel-body">

                            <img width="100%" height="100%" src="{{url('Post/'.$post->user_id. '/images/'.$post->photo)}}">

                        </div>

                        <div class="panel-footer">

                            <div class="row" style="text-align: center">

                                <div class="col-md-4"><span class="icon"><i class="fa fa-thumbs-up" aria-hidden="true"></i></span>Like</div>
                                <div class="col-md-4"><a href="{{route('fpost.show',['id'=>$post->id])}}"><span class="icon"><i class="fa fa-comment" aria-hidden="true"></i></span>Comment</a></div>
                                <div class="col-md-4"><span class="icon"><i class="fa fa-share-alt" aria-hidden="true"></i></span>Share</div>

                            </div>

                            <hr>

                            @foreach($comment as $comment)
                                <div style="margin-bottom: 1em">

                                    <img width="32" height="32" class="img img-circle" src="{{url('Profile/'.$comment->user_id.'/images/'.App\Profile::where('user_id',$comment->user_id)->value('photo'))}}">
                                    <b>{{App\User::Name($comment->user_id)}}</b>
                                    {{$comment->comment}}<br>
                                    <div class="small" style="margin-left: 3em">{{$comment->created_at->diffForHumans()}}</div>


                                </div>

                                @endforeach

                        </div>

                    </div>


                </div>

        </div>

        <div class="comment-form">

            <div class="panel panel-default">

                <div class="panel-heading panelheading">

                    <form method="post" action="{{route('fpost.store')}}">


                        {{csrf_field()}}

                        <input type="hidden" name="post_id" value="{{$post->id}}">

                        <div class="row">

                            <div class="col-sm-10">

                                <div class="form-group">

                                    <label for="Comment"><span><img width="35" src="{{url('Profile/'.Auth::user()->id.'/images/'.App\Profile::where('user_id',Auth::user()->id)->value('photo'))}}" alt="No" class="img-responsive img-circle profile-image"></span></label>
                                    <textarea name="comment"  cols="50" row="4" style="margin-left: 10px" placeholder="Add comment"></textarea>

                                </div>


                            </div>

                            <div class="col-sm-2" style="margin-top: 1em;margin-left: 4em">

                                <input  type="submit" value="comment"  class="btn btn-success">

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>





@stop