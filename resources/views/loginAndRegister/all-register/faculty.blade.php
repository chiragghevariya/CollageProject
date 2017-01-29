@include('layout.head')


@yield('content')


<div class="container">

    <button class="btn btn-default pull-right back"><a href="{{url('getregistration')}}">Back</a></button>

    <h2 style="padding:2em">For Faculty Register Apply Here</h2>

    <form method="post" action="{{Route('faculty.login')}}">

        {{csrf_field()}}
        <div class="form-group">

            <label for="name">Name</label>
            <input type="name" class="form-control" name="name" placeholder="Write Full Name">

        </div>

        <div class="form-group">

            <label for="Email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="xyz@gmail.com">

        </div>

        <div class="form-group">

            <label for="Info">Your Info</label>
            <textarea rows="5" cols="50" name="info" class="form-control" placeholder="Enter about your self or about you"></textarea>

        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="+91" maxlength="10">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            {{--<input type="text" name="address" class="form-control" placeholder="Enter Your address">--}}

            <textarea rows="5" cols="50" name="address" class="form-control" placeholder="Enter your Address for proof"></textarea>

        </div>

        <div class="form-group">

            <label for="password">password</label>
            <input type="password" class="form-control" name="password" placeholder="Create your password">

        </div>

        <input type="submit" class="btn btn-success" value="submit">
        <button class="btn btn-danger"><a href="{{url('/')}}">Calcle</a></button>

    </form>





</div>