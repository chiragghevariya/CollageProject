@extends('all-section.admin.index')


@section('content')



        <div class="department-form">

            <form method="post" action="{{Route('department.store')}}">

                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group">

                            <label for="Name">Department Name:</label>
                            <input type="text" class="form-control" name="department" placeholder="Write department name">

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4">


                        <input type="submit" class="btn btn-success" value="create">
                        <a class="btn btn-danger" href="{{Route('department.index')}}">Cancle</a>

                    </div>


                </div>


            </form>

        </div>



