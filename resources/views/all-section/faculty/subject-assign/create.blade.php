@extends('all-section.faculty.index')



@section('content')


    <div class="container">


        <div style="margin-top: 5em">

            <a href="{{Route('subject.index')}}" class="btn btn-primary pull-right"><span style="margin-right: 1em"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>Back</a>

        </div>

        <div>

            <form >

                {{csrf_field()}}

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="Subject">Subject:</label>
                            <input type="text" class="form-control" name="subject" placeholder="Add subject name">

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="semester">Select semester</label>
                            <select class="form-control">
                                <option></option>
                            </select>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="faculty">Assign To this</label>
                            <select class="form-control">
                                <option></option>
                            </select>

                        </div>

                    </div>

                </div>


                <input type="submit" value="Assign Subject" class="btn btn-primary">
                <a class="btn btn-danger" style=" margin-left: 1em" href="{{Route('subject.index')}}">Cancle</a>

            </form>


        </div>

    </div>


@stop