@extends('all-section.admin.admin-main')

@section('content')

<div class="container">


    <div class="add-department">


        <a class="btn btn-primary pull-right" href="{{Route('department.create')}}"><span><i class="fa fa-plus" aria-hidden="true"></i></span>Create Department</a>


    </div>

    <div class="department-table table-responsive">

        <table class="table table-hover" >

                <tr>

                    <th>Id</th>
                    <th>Name</th>

                </tr>

            @foreach($department as $dept)

                    <tr>

                        <td>{{$dept->id}}</td>
                        <td>{{$dept->name}}</td>
                        <td></td>

                    </tr>

            @endforeach

        </table>

    </div>


</div>






