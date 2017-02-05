@include('layout.head')


@yield('content')


<div class="container">

    <button class="btn btn-default pull-right back"><a href="{{url('getregistration')}}">Back</a></button>

    <h2 style="padding:2em">For Faculty Register Apply Here</h2>

    <form method="post" action="{{Route('faculty.login')}}">

        {{csrf_field()}}

        <div class="row">

            <div class="col-md-6">


                <div class="form-group">

                    <label for="name">Name</label>
                    <input type="name" class="form-control" name="name" placeholder="Write Full Name" value="{{old("name")}}" >

                </div>

                <div class="form-group">

                    <label for="Email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="xyz@gmail.com" value="{{old("email")}}">

                </div>

                <div class="form-group">

                    <label for="Info">Your Info</label>
                    <textarea rows="5" cols="50" name="info" class="form-control" placeholder="Enter about your self or about you">{{old("info")}}</textarea>

                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="+91" maxlength="10" value="{{old("phone")}}">
                </div>


                <div class="form-group">

                    <select name="department_id" class="form-control">

                        @foreach($department as $department)
                            <option value="{{$department->id}}" {{(old("department_id") == $department->id ? "selected":"")}}>{{$department->name}}</option>

                        @endforeach

                    </select>

                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    {{--<input type="text" name="address" class="form-control" placeholder="Enter Your address">--}}

                    <textarea rows="5" cols="50" name="address" class="form-control" placeholder="Enter your Address for proof">{{old("address")}}</textarea>

                </div>

                <div class="form-group">

                    <label for="password">password</label>
                    <input type="password" class="form-control" name="password" placeholder="Create your password">

                </div>

                <div class="form-group">


                    <input type="submit" class="btn btn-success" value="submit">
                    <button class="btn btn-danger"><a href="{{url('/')}}">Calcle</a></button>

                </div>


            </div>


            <div class="col-md-6" style="margin-top: 10em">

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


            </div>

        </div>


    </form>





</div>