@extends('all-section.faculty.index')


@section('content')


    <div class="container">

        <div style="margin-right: 1em">

            <a href="{{Route('lecture.create')}}" class="btn btn-primary pull-right"><span style="margin-right: 1em"><i class="fa fa-plus" aria-hidden="true"></i></span>Add Lecture</a>

        </div>



        <div style="margin-top:5em" >

            <table class="table table-hover table-striped table-responsive" >

                <tr>

                    <th>Id</th>
                    <th>Lecture Title</th>
                    <th>Subject</th>
                    <th>Created Date</th>
                    {{--<th>Info</th>--}}
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>

                @foreach($lecture as $lecture)

                <tr>
                    <td>{{$lecture->id}}</td>
                    <td>{{$lecture->title}}</td>
                    <td>{{App\subject::Name($lecture->subject_id)}}</td>
                    <td>{{$lecture->date}}</td>
                    <td><a href="{{Route('lecture.edit',['id'=>$lecture->id])}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form method="post" action="{{Route('lecture.destroy',['id'=>$lecture->id])}}">
                        {{csrf_field()}}
                        {{method_field('delete')}}
                        <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>

                </tr>

                @endforeach

            </table>

        </div>




    </div>



@stop