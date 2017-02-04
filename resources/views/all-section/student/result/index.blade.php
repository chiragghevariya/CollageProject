@extends('all-section.student.index')

@section('content')

    <div class="container">


        <div class="add-department">


            <a class="btn btn-primary pull-right" href="{{Route('result.create')}}"><span><i class="fa fa-plus" aria-hidden="true"></i></span>Add result</a>


        </div>

        <div class="department-table ">

            <table class="table table-hover table-striped table-responsive tableinfo" >

                <tr>

                    <th>Id</th>
                    <th>Semester</th>
                    <th>Spi</th>
                    <th>Result</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>

                @foreach($result as $result)

                    <tr>
                        <td>{{$result->id}}</td>
                        <td>{{$result->semester}}</td>
                        <td>{{$result->spi}}</td>
                        <td>{{$result->pass_fail}}</td>
                        <td><a class="btn btn-primary" href="{{route('result.edit',['id'=>$result->id])}}">Edit</a></td>
                        <td>
                            <form method="post" action="{{Route('result.destroy',['id'=>$result->id])}}">
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






