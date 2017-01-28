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

            <label for="password">password</label>
            <input type="password" class="form-control" name="password" placeholder="Create your password">

        </div>

        <input type="submit" class="btn btn-success" value="submit">

    </form>





</div>