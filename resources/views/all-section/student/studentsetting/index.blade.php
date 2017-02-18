@extends('all-section.student.index')


@section('content')

        <div class="container">

            <div>


                <form action="{{route('setting.update',['id'=>$user->id])}}" class="form-horizontal" method="post">

                    {{--@if (count($errors) > 0)--}}
                    {{--<div class="alert alert-danger">--}}
                    {{--<ul>--}}
                    {{--@foreach ($errors->all() as $error)--}}
                    {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--@endif--}}

                    {{csrf_field()}}

                    <input type="hidden" value="put" name="_method">

                    <div class="row" style="margin: auto;width:40%;margin-bottom: 1em">
                        <div class="col-md-6">

                            <img height="85" width="60" class="img-responsive img-circle" src="{{url('Profile/'.Auth::user()->id.'/images/'.App\Profile::where('user_id',Auth::user()->id)->value('photo'))}}">

                        </div>
                    </div>

                            <div class="form-group">

                                    <label for="name" class="control-label col-sm-2">Name:</label>
                                    <div class="col-sm-4">
                                        <input type="name" required class="form-control" name="name"  value="{{$user->name}}">
                                    </div>

                                </div>


                            <div class="form-group">

                                <label for="Email" class="control-label col-sm-2">Email:</label>
                                <div class="col-sm-4">

                                    <input type="email" required class="form-control" name="email" value="{{$user->email}}">

                                </div>

                            </div>






                            <div class="form-group">
                                <label for="phone" class="control-label col-sm-2">Phone:</label>
                                <div class="col-sm-4">

                                    <input type="text" class="form-control" required name="phone" maxlength="10" value="{{$user->phone}}">

                                </div>
                            </div>






                            <div class="form-group">
                                <label for="semester" class="control-label col-sm-2">semester:</label>
                                <div class="col-sm-4">
                                    <select name="semester" class="form-control">
                                        @for($i=1;$i<=8;$i++)
                                            <option value="{{$i}}" @if($user->semester == $i) selected @endif>semester {{$i}}</option>
                                        @endfor
                                    </select>
                                </div>

                            </div>



                    <div class="form-group">
                        <label for="department" class="control-label col-sm-2">Department</label>
                        <div class="col-sm-4">

                            <select name="department_id" class="form-control">

                                @foreach($department as $department)
                                    <option value="{{$department->id}}" @if($user->department_id == $department->id) selected @endif>{{$department->name}}</option>

                                @endforeach

                            </select>

                        </div>

                    </div>






                    <div class="form-group">
                                <label for="Enroll" class="control-label col-sm-2">Enrollment:</label>
                                <div class="col-sm-4">

                                    <input type="text" maxlength="12" name="enroll" required class="form-control" value="{{App\Student::where('user_id',Auth::user()->id)->value('Enrollment')}}">

                                </div>
                            </div>




                            {{--<div class="form-group">--}}
                                {{--<label for="department">Department</label>--}}
                                {{--<select name="department_id" class="form-control">--}}

                                    {{--@foreach($department as $department)--}}
                                        {{--<option value="{{$department->id}}" {{ (old("department_id") == $department->id ? "selected":"") }}>{{$department->name}}</option>--}}

                                    {{--@endforeach--}}

                                {{--</select>--}}

                            {{--</div>--}}






                            <div class="form-group">
                                <label for="address" class="control-label col-sm-2">Address:</label>
                                {{--<input type="text" name="address" class="form-control" placeholder="Enter Your address">--}}
                                <div class="col-sm-4">

                                    <textarea rows="5" cols="50" name="address" required class="form-control">{{$user->address}}</textarea>

                                </div>


                            </div>


                            {{--<div class="form-group">--}}

                                {{--<label for="password" class="control-label col-sm-2">password:</label>--}}
                                {{--<div class="col-sm-4">--}}

                                    {{--<input type="password" class="form-control" required name="password" value="{{$user->password}}">--}}

                                {{--</div>--}}

                            {{--</div>--}}

                            <div style="margin-left: 14em;margin-top: 3em">


                                <input type="submit" class="btn btn-success" value="Update">
                                <button class="btn btn-danger"><a href="">Calcle</a></button>

                            </div>








                </form>


            </div>

        </div>


@stop



