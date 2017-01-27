<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>

    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{asset('projectstylefile/js/bootstrap.min.js')}}"></script>
    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('stylefile/style.css')}}">

</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">OnlineSubmission</a>
        </div>

        <ul class="nav navbar-nav pull-right">

            <li ><a href="{{asset('')}}">Login</a></li>
            <li ><a href="{{asset('')}}">Register</a></li>

        </ul>
    </div>
</nav>

</body>
</html>
