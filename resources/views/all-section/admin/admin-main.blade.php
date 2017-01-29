<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('layout.head')
</head>
<body>



        <nav class="navbar nav-justified navbar-fixed-top for-nav">


            <div class="navbar-header">
                <a class="navbar-brand" href="#"><span><i class="fa fa-home" aria-hidden="true"></i></span>Home</a>
            </div>

            <ul class="nav navbar-nav">

                <li><a href="#"><span><i class="fa fa-building-o" aria-hidden="true"></i></span>Department</a></li>


            </ul>

            <ul class="nav navbar-nav pull-right">
                <li><a href="#"><span><i class="fa fa-plus" aria-hidden="true"></i></span>Create Department</a></li>
                <li><a href="#" class="pull-right"><span class="glyphicon glyphicon-off"></span>Logout</a></li>

            </ul>


        </nav>



            @yield('content')

</body>
</html>
