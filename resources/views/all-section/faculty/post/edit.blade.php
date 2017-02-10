@extends('all-section.faculty.index')

@section('content')



    <div class="container">

        <div style=" margin-top: 5em">

            <a href="{{Route('post.index')}}" class="btn btn-primary pull-right"><span style="margin-right: 1em"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>Back</a>

        </div>

        <div class="post-form">

            <form method="post" action="{{route('post.update',['id'=>$post->id])}}" enctype="multipart/form-data">

                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                {{--<input type="hidden" name="_method" value="put">--}}


                <div class="row">

                    <div class="col-md-5">

                        <div class="form-group">

                            <label for="Title">Title:</label>
                            <input type="text" class="form-control" name="title" value="{{$post->title}}">

                        </div>

                    </div>

                    <div class="col-md-5">

                        <div class="form-group">

                            <label for="Title">Date:</label>
                            <input type="date" class="form-control" name="title" value="{{$post->date}}">

                        </div>

                    </div>


                </div>

                <div class="row">

                    <div class="col-md-10">

                        <div class="form-group">

                            <label for="Title">Description:</label>
                            <textarea class="form-control" rows="10" cols="20" name="description">{{$post->description}}</textarea>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-10">

                        <div class="form-group">

                            <label for="Title">photo:</label>
                            <input type="file" name="photo" class="form-control" value="{{url('Post/'.Auth::user()->id.'/images/'.$post->photo)}}">
                        </div>

                    </div>

                </div>


                <input type="submit" value="update post" class="btn btn-primary">
                <a class="btn btn-danger" style="margin-left: 1em" href="{{Route('post.index')}}">Cancle</a>

            </form>

        </div>

    </div>

@stop