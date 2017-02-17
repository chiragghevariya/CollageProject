@extends('all-section.student.index')

@section('content')

<div class="container">


        <div class="department-table ">


            <table class="table table-hover table-striped table-responsive tableinfo" >


                <tr>

                    <th>Id</th>
                    <th>Title</th>
                    <th>subject</th>
                    <th>Answered/TotalQuestion</th>
                    <th>Faculty</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>

                @foreach($assignment as $assignment)

                    <tr>
                        <td>{{$assignment->id}}</td>
                        <td>{{$assignment->title}}</td>
                        <td>{{App\Subject::name($assignment->subject_id)}}</td>
                        <td>{{0}}/{{$assignment->questions()->count()}}</td>
                        <td>{{App\User::name($assignment->user_id)}}</td>
                        {{--<td>UnAttempt</td>--}}
                        {{--<td>--}}
                            {{--<form action="{{route('submit.store')}}" method="post">--}}
                                {{--{{ csrf_field() }}--}}
                                {{--<input type="hidden" name="assignment_id" value="{{$assignment->id}}">--}}
                                {{--<input type="submit" value="attempt"--}}
                                       {{--class="btn btn-sm btn-primary">--}}
                                {{--</input>--}}
                            {{--</form>--}}
                        {{--</td>--}}

                        @if( \App\Submit::submitExists($assignment->id) )
                            <td>{{  \App\Submit::submitStatus($assignment->id) }}</td>
                            <td><a href="{{route('submit.edit',['id'=> \App\Submit::submitId($assignment->id)])}}"
                                   class="btn btn-sm btn-primary">Update
                                </a>
                            </td>
                        @else
                            <td> UnAttmpted </td>
                            <td>
                                <form action="{{route('submit.store')}}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="assignment_id" value="{{$assignment->id}}">
                                    <input type="submit" value="attempt"
                                           class="btn btn-sm btn-primary">
                                    </input>
                                </form>
                            </td>
                        @endif

                    </tr>

                @endforeach

            </table>

        </div>


</div>
@stop






