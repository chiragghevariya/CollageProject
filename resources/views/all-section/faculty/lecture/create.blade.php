@extends('all-section.faculty.index')

@section('content')



    <div class="container">


        <div style="margin-top: 5em">

            <a href="{{Route('lecture.index')}}" class="btn btn-primary pull-right"><span style="margin-right: 1em"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>Back</a>

        </div>

        <div class="lecture-form">

            <form >

                {{csrf_field()}}

                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">

                            <label for="Title">Title:</label>
                            <input type="text" class="form-control" name="title" placeholder="Write Lecture Title">

                        </div>

                    </div>

                        <div class="col-md-3">

                            <div class="form-group">

                                <label for="subject">Select subject:</label>
                                <select class="form-control">
                                    <option></option>
                                </select>

                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="form-group">

                                <label for="Title">Date:</label>
                                <input type="date" class="form-control" name="date">

                            </div>

                    </div>


                </div>



                <div class="row">

                    <div class="col-md-10">

                        <div class="form-group">

                            <label for="info">Information:</label>
                            <input type="text" class="form-control" name="information" placeholder="Write some info about lecture">

                        </div>

                    </div>

                </div>


                <div class="row">

                    <div class="col-md-10">

                        <div class="form-group">

                            <label for="Title">Add link ,images and text:</label>
                            <textarea class="form-control" rows="20" cols="20" name="summernote-lecture" id="summernote-lecture" ></textarea>

                        </div>

                    </div>

                </div>


                <input type="submit" value="Create lecture" class="btn btn-primary">
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