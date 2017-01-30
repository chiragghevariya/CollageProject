@extends('all-section.admin.index')

@section('content')

<div class="container">


    <div class="add-department">


        <a class="btn btn-primary pull-right" href="{{Route('department.create')}}"><span><i class="fa fa-plus" aria-hidden="true"></i></span>Create Department</a>


    </div>

    <div class="department-table ">

        <table class="table table-hover table-striped table-responsive tableinfo" >

                <tr>

                    <th>Id</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>

            @foreach($department as $dept)

                    <tr>
                        <td>{{$dept->id}}</td>
                        <td>{{$dept->name}}</td>
                        <td><a class="btn btn-primary" href="{{Route('department.edit',['id'=>$dept->id])}}">Edit</a></td>
                        <td>
                            <form method="post" action="{{Route('department.destroy',['id'=>$dept->id])}}">
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






