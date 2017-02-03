@extends('all-section.faculty.index')

@section('content')



    <div class="container">


        <div style="margin-top: 5em">

            <a href="{{Route('lecture.index')}}" class="btn btn-primary pull-right"><span style="margin-right: 1em"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>Back</a>

        </div>

        <div class="lecture-form">

            <form method="post" action="{{Route('lecture.update',['id'=>$lecture->id])}}" >

                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">

                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">

                            <label for="Title">Title:</label>
                            <input type="text" class="form-control" name="title" value="{{$lecture->title}}">

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="form-group">

                            <label for="subject">Select subject:</label>
                            <select class="form-control" name="subject_id">

                                @foreach($subject as $subject)

                                    <option value="{{$subject->id}}">{{$subject->name}}</option>

                                @endforeach

                            </select>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="form-group">

                            <label for="Title">Date:</label>
                            <input type="date" class="form-control" name="date" value="{{$lecture->date}}">

                        </div>

                    </div>


                </div>



                <div class="row">

                    <div class="col-md-10">

                        <div class="form-group">

                            <label for="info">Information:</label>
                            <input type="text" class="form-control" name="information" value="{{$lecture->information}}">

                        </div>

                    </div>

                </div>


                <div class="row">

                    <div class="col-md-10">

                        <div class="form-group">

                            <label for="Title">Add link ,images and text:</label>
                            <textarea class="form-control" rows="20" cols="20" name="summernote_lecture" id="summernote-lecture" >{{$lecture->summernote_lecture}}</textarea>

                        </div>

                    </div>

                </div>


                <input type="submit" value="update lecture" class="btn btn-primary">
                <a class="btn btn-danger" style="margin-left: 1em" href="{{Route('lecture.index')}}">Cancle</a>

            </form>


        </div>




    </div>


    <script>

        $(document).ready(function() {
            $('#summernote-lecture').summernote();

        });

    </script>


@stop