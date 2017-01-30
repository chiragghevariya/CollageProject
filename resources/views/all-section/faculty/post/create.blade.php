@extends('all-section.faculty.index')

@section('content')



    <div class="container">

        <div class="post-form">

            <form >

                {{csrf_field()}}

                <div class="row">

                    <div class="col-md-10">

                        <div class="form-group">

                            <label for="Title">Title:</label>
                            <input type="text" class="form-control" name="title" placeholder="Write Post Title">

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-10">

                        <div class="form-group">

                            <label for="Title">Add link ,images and text:</label>
                            <textarea class="form-control" rows="20" cols="20" name="summernote-post" id="summernote-post" ></textarea>

                        </div>

                    </div>

                </div>


                <input type="submit" value="create post" class="btn btn-primary">
                <a class="btn btn-danger" style="margin-left: 1em">Cancle</a>

            </form>


        </div>




    </div>


    <script>
        $(document).ready(function() {
            $('#summernote-post').summernote();

        });

    </script>


 @stop