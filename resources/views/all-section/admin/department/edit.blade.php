@extends('all-section.admin.admin-main')


@section('content')

    <div class="container">


        <div class="department-form">

            <form method="post" action="{{Route('department.update',['id'=>$deptedit->id])}}">

                <input type="hidden" name="_method" value="put">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="Name">Department Name:</label>
                            <input type="text" class="form-control" name="department" value="{{$deptedit->name}}">

                        </div>

                    </div>

                </div>

                <input type="submit" class="btn btn-success" value="update">
                <a class="btn btn-danger" href="{{Route('department.index')}}">Cancle</a>

            </form>

        </div>


    </div>

