@extends('all-section.faculty.index')

@section('content')



    <div class="container">

        <div >

            <a href="{{Route('post.index')}}" class="btn btn-primary pull-right"><span style="margin-right: 1em"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>Back</a>

        </div>

        <div >

            <form method="post" action="{{Route('post.store')}}" enctype="multipart/form-data">

                {{csrf_field()}}

                <div class="row">

                    <div class="col-md-5">

                        <div class="form-group">

                            <label for="Title">Title:</label>
                            <input type="text" class="form-control" name="title" placeholder="Write Post Title">

                        </div>

                    </div>


                    <div class="col-md-5">

                        <div class="form-group">

                            <label for="Title">Title:</label>
                            <input type="date" class="form-control" name="date">

                        </div>

                    </div>


                </div>

                <div class="row">

                    <div class="col-md-10">

                        <div class="form-group">

                            <label for="Title">Description</label>
                            <textarea class="form-control" rows="8" cols="20" name="description"></textarea>

                        </div>

                    </div>

                </div>


                <div class="row">

                    <div class="col-md-10">

                        <div class="form-group">

                            <label for="Title">Image:</label>
                            <input type="file" name="photo" class="form-control">

                        </div>

                    </div>

                </div>



                <input type="submit" value="create post" class="btn btn-primary">
                        <a class="btn btn-danger" style="margin-left: 1em" href="{{Route('post.index')}}">Cancle</a>

            </form>


        </div>




    </div>




 @stop