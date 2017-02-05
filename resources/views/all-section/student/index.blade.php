<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('layout.head')
    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/stylefile/student.css')}}">
</head>
<body>

<div class="container">

    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="container">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>

                <a class="navbar-brand" href="{{url('all-section/student/home')}}"><span><i class="fa fa-home" aria-hidden="true"></i></span>Home</a>

            </div>

            <div id="navbar" class="navbar-collapse collapse">

                <ul class="nav navbar-nav">

                    <li><a href="{{route('submit.index')}}"><span><i class="fa fa-building-o" aria-hidden="true"></i></span>Assignment</a></li>
                    <li><a href="{{route('result.index')}}"><span><i class="fa fa-building-o" aria-hidden="true"></i></span>Result</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <li style="margin-top: 1em;background:#E91E63">Hi,{{Auth::user()->name}}</li>
                    <li><a href="{{url('logout')}}"><span class="glyphicon glyphicon-off"></span>Logout</a></li>

                </ul>

            </div><!--/.nav-collapse -->

        </div>

    </nav>


</div>



@yield('content')


</body>
</html>
