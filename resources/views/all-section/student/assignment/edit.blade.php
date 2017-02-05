@extends('all-section.student.index')

@section('content')







    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if($assignment->questions()->count() > 0)
                @foreach($assignment->questions()->get() as $question)
                    @if( ($question->answerByUser( Auth::user()->id ) == null ) )
                        <form action="" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="" class="control-label">{{$question->question}}</label>
                                <input type="hidden" name="question_id" value="{{$question->id}}">
                                <textarea name="answer" class="form-control aston-summernote" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input type="submit" value="Save" class="btn btn-success pull-right">
                                    </div>
                                </div>
                            </div>
                        </form>
                    @else
                        <form action="" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group">
                                <label for="" class="control-label"></label>
                                <input type="hidden" name="question_id" value="">
                                <textarea name="answer" class="form-control aston-summernote" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input type="submit" value="Update" class="btn btn-success pull-right">
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endif
                @endforeach
            @endif
        </div>
    </div>