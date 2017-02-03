@extends('all-section.faculty.index')


@section('content')


    <div class="container">


        <div style="margin-top: 5em">

            <a href="{{Route('assignment.create')}}" class="btn btn-primary pull-right"><span style="margin-right: 1em"><i class="fa fa-plus" aria-hidden="true"></i></span>Add Lecture</a>

        </div>


        <div style="margin-top:10em" >

            <table class="table table-hover table-striped table-responsive" >

                <tr>

                    <th>Id</th>
                    <th>Title</th>
                    <th>Subject</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>

                @foreach($assignment as $assignment)

                    <tr>
                        <td>{{$assignment->id}}</td>
                        <td>{{$assignment->title}}</td>
                        <td>{{App\subject::Name($assignment->subject_id)}}</td>

                        <td><a href="{{Route('assignment.edit',['id'=>$assignment->id])}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form method="post" action="{{Route('assignment.destroy',['id'=>$assignment->id])}}">
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