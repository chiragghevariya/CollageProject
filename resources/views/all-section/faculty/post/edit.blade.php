@extends('all-section.faculty.index')

@section('content')



    <div class="container">

        <div style=" margin-top: 5em">

            <a href="{{Route('post.index')}}" class="btn btn-primary pull-right"><span style="margin-right: 1em"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>Back</a>

        </div>

        <div class="post-form">

            <form method="post" action="{{route('post.update',['id'=>$post->id])}}">

                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                {{--<input type="hidden" name="_method" value="put">--}}


                <div class="row">

                    <div class="col-md-10">

                        <div class="form-group">

                            <label for="Title">Title:</label>
                            <input type="text" class="form-control" name="title" value="{{$post->title}}">

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-10">

                        <div class="form-group">

                            <label for="Title">Add link ,images and text:</label>
                            <textarea class="form-control" rows="20" cols="20" name="description" id="summernote-post">{{$post->description}}</textarea>

                        </div>

                    </div>

                </div>


                <input type="submit" value="update post" class="btn btn-primary">
                <a class="btn btn-danger" style="margin-left: 1em" href="{{Route('post.index')}}">Cancle</a>

            </form>


        </div>




    </div>


    <script>
        $(document).ready(function() {
            $('#summernote-post').summernote();

        });

    </script>


@stop