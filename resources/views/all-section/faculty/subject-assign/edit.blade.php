@extends('all-section.faculty.index')



@section('content')


    <div class="container">


        <div style="margin-top: 5em">

            <a href="{{Route('subject.index')}}" class="btn btn-primary pull-right"><span style="margin-right: 1em"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>Back</a>

        </div>

        <div class="subject-form">

            <div class="panel panel-default" style="width: 70%">
                <div class="panel-heading">Assign Subject to Faculty</div>
                <div class="panel-body">

                    <form method="post">

                        {{csrf_field()}}

                        <div class="row" style="width:100%;margin-left: 4em;">

                            <div class="col-md-5">

                                <div class="form-group">

                                    <label for="Subject">Subject:</label>
                                    <input type="text" class="form-control" name="subject" placeholder="Add subject name">

                                </div>

                            </div>

                            <div class="col-md-5">

                                <div class="form-group">

                                    <label for="semester">Select semester</label>
                                    <select class="form-control" name="semester" id="">

                                        <option selected>Select Semester</option>

                                        @for($i=1;$i<=8;$i++)

                                            <option value="{{$i}}">semester {{$i}}</option>

                                        @endfor

                                    </select>

                                </div>

                            </div>

                        </div>


                        <div class="row" style="width:100%;margin-left: 4em;">

                            <div class="col-md-10">

                                <div class="form-group">

                                    <label for="faculty">Assign To this</label>
                                    <select class="form-control" name="faculties[]" multiple="multiple">

                                        @foreach($faculties as $faculty)

                                            <option value="{{$faculty->id}}">{{$faculty->name}}</option>

                                        @endforeach

                                    </select>

                                </div>

                            </div>

                        </div>

                        <div class="row" style="width: 100%;margin-left: 15em">

                            <div class="col-md-10">

                                <input type="submit" value="Assign Subject" class="btn btn-primary">
                                <a class="btn btn-danger" style=" margin-left: 1em" href="{{Route('subject.index')}}">Cancle</a>


                            </div>


                        </div>

                    </form>



                </div>
            </div>




        </div>

    </div>


@stop