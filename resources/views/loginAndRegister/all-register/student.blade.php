@include('layout.head')


@yield('content')


<div class="container">

    <h2>For Student Register Apply Here</h2>

    <form method="post" action="{{Route('student.login')}}">

        {{csrf_field()}}
        <div class="form-group">

            <label for="name">Name</label>
            <input type="name" class="form-control" name="name" placeholder="Write Full Name">

        </div>

        <div class="form-group">

            <label for="Email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Your Email Id">

        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Your phone Number" maxlength="10">
        </div>

        <div class="form-group">
            <label for="Enroll">Enroll</label>
            <input type="text" maxlength="13" name="enroll" class="form-control" placeholder="Enter your Enrollment Number">
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

    </form>





</div>