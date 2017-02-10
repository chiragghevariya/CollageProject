@extends('all-section.faculty.index')

@section('content')



    <div class="container">


        <div >

            <a href="{{Route('assignment.index')}}" class="btn btn-primary pull-right"><span style="margin-right: 1em"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>Back</a>

        </div>

        <div style="margin-top: 10em">

            <form method="post" action="{{Route('assignment.update',['id'=>$assignment->id])}}" >

                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">

                <div class="row">

                    <div class="col-md-5">

                        <div class="form-group">

                            <label for="Title">Title:</label>
                            <input type="text" class="form-control" name="title" value="{{$assignment->title}}">

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
                            <textarea cols="15" rows="5" name="information" class="form-control">{{$assignment->information}}</textarea>
                        </div>

                    </div>

                </div>

                <input type="submit" value="update assignment" class="btn btn-primary">
                <a class="btn btn-danger" style="margin-left: 1em" href="{{Route('assignment.index')}}">Cancle</a>

            </form>


        </div>

                                                        <hr>


        @if(isset($question))

        <form  method="post" action="{{route('question.update',['id'=>$question->id])}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            <input type="hidden" name="assignment_id" value="{{$assignment->id}}">

            <div class="row">
                <div class="col-md-5">

                    <div class="form-group">

                        <label for="question">Question</label>
                        <input type="text" name="question" class="form-control" value="{{$question->question}}">

                    </div>

                </div>


                <div class="col-md-5">

                    <div class="form-group">

                        <label for="">Hint</label>
                        <textarea name="hint" id="" cols="30" rows="4" class="form-control">{{$question->hint}}</textarea>
                    </div>

                </div>

                <hr>

                <input type="submit" value="update Question" class="btn btn-success pull-right">

            </div>

        </form>

        @else

            <form action="{{route('question.store')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="assignment_id" value="{{$assignment->id}}">

            <div class="row">
                <div class="col-md-5">

                    <div class="form-group">

                        <label for="question">Question</label>
                        <input type="text" name="question" class="form-control" placeholder="add question">

                    </div>

                </div>


                <div class="col-md-5">

                    <div class="form-group">

                        <label for="">Hint</label>
                        <textarea name="hint" id="" cols="30" placeholder="give some tips about this question" rows="4" class="form-control"></textarea>
                    </div>

                </div>

                <hr>

                <input type="submit" value="Add Question" class="btn btn-success pull-right">

            </div>

        </form>

        @endif

        <hr>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Question</th>
                <th>Edit</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($assignment->questions()->get() as $question)
                <tr>

                    <td>{{$question->id}}</td>
                    <td>{{$question->question}}</td>
                    <td><a href="{{route('question.edit',['id'=>$question->id])}}"
                           class="btn btn-primary">Edit</a></td>
                    <td>

                        <form method="post" action="{{Route('question.destroy',['id'=>$question->id])}}">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>




    </div>



@stop