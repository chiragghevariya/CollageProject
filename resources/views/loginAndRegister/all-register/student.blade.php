@include('layout.head')


@yield('content')


<div class="container">

    <div>

        <button class="btn btn-default pull-right back"><a href="{{url('getregistration')}}">Back</a></button>


    </div>

    <div style="width:50%;margin-left: auto;margin: auto;padding: 1em">

        <h2>For Student Register Apply Here</h2>

    </div>


    <form method="post" action="{{Route('student.login')}}" style="width: 85%;margin-left: auto" >

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


            <div class="row">

                <div class="col-md-3">

                    <div class="form-group">

                        <label for="name">Name</label>
                        <input type="name" required class="form-control" name="name" placeholder="Write Full Name" value="{{old("name")}}">

                    </div>


                </div>


                <div class="col-md-3">


                    <div class="form-group">

                        <label for="Email">Email</label>
                        <input type="email" required class="form-control" name="email" placeholder="xyz@gmail.com" value="{{old("email")}}">

                    </div>


                </div>


                <div class="col-md-3">

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" required name="phone" placeholder="+91" maxlength="10" value="{{old("phone")}}">
                    </div>


                </div>

            </div>


            <div class="row">

                <div class="col-md-3">

                    <div class="form-group">
                        <label for="semester">select semester</label>
                        <select name="semester" class="form-control">
                            @for($i=1;$i<=10;$i++)
                                <option value="{{$i}}" {{(old("semester") == $i ? "selected":"")}}>semester {{$i}}</option>
                            @endfor
                        </select>
                    </div>


                </div>


                <div class="col-md-3">

                    <div class="form-group">
                        <label for="Enroll">Enroll</label>
                        <input type="text" maxlength="12" name="enroll" required class="form-control" placeholder="Enter your Enrollment Number" value="{{old("enroll")}}">
                    </div>


                </div>


                <div class="col-md-3">

                    <div class="form-group">
                        <label for="department">Department</label>
                        <select name="department_id" class="form-control">

                            @foreach($department as $department)
                                <option value="{{$department->id}}" {{ (old("department_id") == $department->id ? "selected":"") }}>{{$department->name}}</option>

                            @endforeach

                        </select>

                    </div>


                </div>

            </div>


            <div class="row">

                <div class="col-md-9">

                    <div class="form-group">
                        <label for="address">Address</label>
                        {{--<input type="text" name="address" class="form-control" placeholder="Enter Your address">--}}

                        <textarea rows="5" cols="50" name="address" required class="form-control" placeholder="Enter your Address for proof">{{old("address")}}</textarea>

                    </div>


                </div>

            </div>


            <div class="row">

                <div class="col-md-9">

                    <div class="form-group">

                        <label for="password">password</label>
                        <input type="password" class="form-control" required name="password" placeholder="Create your password">

                    </div>


                </div>

            </div>



        <div class="row">
            <div class="col-md-9">

                <div class="form-group">

                    <input type="submit" class="btn btn-success" value="submit">
                    <button class="btn btn-danger"><a href="{{url('/')}}">Calcle</a></button>


                </div>

            </div>

        </div>




    </form>





</div>