<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>

    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{asset('projectstylefile/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('projectstylefile/js/bootstrap.min.js')}}"></script>
    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/stylefile/faculty.css')}}">

</head>
<body>



<nav class="navbar navbar-fixed-top for-faculty">


    <div class="navbar-header ">

        <a class="navbar-brand" href=""><span><i class="fa fa-home fa" aria-hidden="true"></i></span>Home</a>

    </div>

    <ul class="nav navbar-nav">

        <li><a href="#">Lecture</a></li>
        <li><a href="#">Post</a></li>
        <li><a href="#">Assignment</a></li>

    </ul>

    <ul class="nav navbar-nav pull-right">

        <li><a href="#" class="pull-right">Logout</a></li>

    </ul>


</nav>

@yield('content')

</body>
</html>
