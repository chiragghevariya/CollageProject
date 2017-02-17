<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('layout.head')
    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/stylefile/student.css')}}">
</head>
<body>

<div class="container">

    <nav class="navbar navbar-default" style="background:#311B92;">

        <div class="container">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>

                <a class="navbar-brand" href="{{url('all-section/student/home')}}" style="color:white;"><span><i class="fa fa-home" aria-hidden="true"></i></span>Home</a>

            </div>

            <div id="navbar" class="navbar-collapse collapse">

                <ul class="nav navbar-nav">

                    <li><a href="{{route('submit.index')}}" style="color:white;"><span><i class="fa fa-building-o" aria-hidden="true"></i></span>Assignment</a></li>
                    <li><a href="{{route('result.index')}}" style="color:white;"><span><i class="fa fa-building-o" aria-hidden="true"></i></span>Result</a></li>
                    <li><a href="{{route('student.post.index')}}" style="color:white;"><span><i class="fa fa-building-o" aria-hidden="true"></i></span>Faculty Post</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="{{route('setting.edit',['id'=>Auth::user()->id])}}" style="color:white"><span><i class="fa fa-cog" aria-hidden="true"></i></span>Setting</a></li>
                    <li style=" margin-top: 1em;color: white"><span><img width="25" src="{{url('authenticate.png')}}"></span>Hi,{{Auth::user()->name}}</li>
                    <li><a href="{{url('logout')}}" style="color:white;"><span class="glyphicon glyphicon-off"></span>Logout</a></li>

                </ul>

            </div><!--/.nav-collapse -->

        </div>

    </nav>


</div>



@yield('content')


</body>
</html>
