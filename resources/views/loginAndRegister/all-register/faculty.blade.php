@include('layout.head')


@yield('content')


<div class="container">

    <button class="btn btn-default pull-right back"><a href="{{url('getregistration')}}">Back</a></button>

    <div style="width:50%;margin-left: auto;margin: auto;padding: 1em">

        <h2>For Faculty Register Apply Here</h2>

    </div>

    <form method="post" action="{{Route('faculty.login')}}" style="width:85%;margin-left:auto">

        {{csrf_field()}}


        <div class="row">

            <div class="col-md-3">

                <div class="form-group">

                    <label for="name">Name</label>
                    <input type="name" class="form-control" name="name" placeholder="Write Full Name" value="{{old("name")}}" required >

                </div>


            </div>

            <div class="col-md-3">

                <div class="form-group">

                    <label for="Email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="xyz@gmail.com" value="{{old("email")}}" required>
                </div>


            </div>

            <div class="col-md-3">

                <div class="form-group">
                    <label for="department">Department:</label>
                    <select name="department_id" class="form-control">
                        @foreach($department as $department)
                            <option value="{{$department->id}}" {{(old("department_id") == $department->id ? "selected":"")}}>{{$department->name}}</option>
                        @endforeach
                    </select>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-md-4">

                <div class="form-group">

                    <label for="Info">Your Info:</label>
                    <textarea rows="5" cols="50" name="info" class="form-control" placeholder="Enter about your self or about you" required>{{old("info")}}</textarea>

                </div>

            </div>

            <div class="col-md-5">

                <div class="form-group">
                    <label for="address">Address</label>
                    {{--<input type="text" name="address" class="form-control" placeholder="Enter Your address">--}}

                    <textarea rows="5" cols="50" required name="address" class="form-control" placeholder="Enter your Address for proof">{{old("address")}}</textarea>

                </div>


            </div>

        </div>


        <div class="row">

            <div class="col-md-9">


                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" name="phone" placeholder="+91" maxlength="10" value="{{old("phone")}}" required>
                </div>


            </div>

        </div>

        <div class="row">

            <div class="col-md-9">


                <div class="form-group">

                    <label for="password">password</label>
                    <input type="password" class="form-control" name="password" placeholder="Create your password" required>

                </div>



            </div>

        </div>

        <div class="form-group">


                    <input type="submit" class="btn btn-success" value="submit">
                    <button class="btn btn-danger"><a href="{{url('/')}}">Calcle</a></button>

        </div>


    </form>





</div>