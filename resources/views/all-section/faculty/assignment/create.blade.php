@extends('all-section.faculty.index')

@section('content')



    <div class="container">


        <div style="margin-top: 5em">

            <a href="{{Route('assignment.index')}}" class="btn btn-primary pull-right"><span style="margin-right: 1em"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>Back</a>

        </div>

        <div style="margin-top: 10em">

            <form method="post" action="{{Route('assignment.store')}}">

                {{csrf_field()}}

                <div class="row">

                    <div class="col-md-5">

                        <div class="form-group">

                            <label for="Title">Title:</label>
                            <input type="text" class="form-control" name="title" placeholder="Write assignment Title">

                        </div>

                    </div>

                    <div class="col-md-5">

                        <div class="form-group">

                            <label for="subject">Select subject:</label>
                            <select class="form-control" name="subject_id">
                                @foreach($subject as $subject)

                                    <option value="{{$subject->id}}">{{$subject->name}}</option>

                                @endforeach

                            </select>

                        </div>

                    </div>

                </div>



                <div class="row">

                    <div class="col-md-10">

                        <div class="form-group">

                            <label for="info">Information:</label>
                            {{--<input type="text" class="form-control" name="information" placeholder="Write some info about assignment">--}}
                            <textarea cols="15" rows="5" name="information" class="form-control"></textarea>
                        </div>

                    </div>

                </div>

                <input type="submit" value="Create lecture" class="btn btn-primary">
                <a class="btn btn-danger" style="margin-left: 1em" href="{{Route('assignment.index')}}">Cancle</a>

            </form>


        </div>




    </div>



@stop