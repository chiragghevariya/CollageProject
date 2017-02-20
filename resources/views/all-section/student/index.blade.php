<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('layout.head')
    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/stylefile/student.css')}}">

    @yield('stylefile')
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
                    <li><a href="{{route('fpost.index')}}" style="color:white;"><span><i class="fa fa-building-o" aria-hidden="true"></i></span>Faculty Post</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown" style="margin-right: 2em">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <img width="30" class="img-responsive img-circle" src="{{url('Profile/'.Auth::user()->id.'/images/'.App\Profile::where('user_id',Auth::user()->id)->value('photo'))}}">
                            </a>
                        <ul class="dropdown-menu">


                            <li><a href="{{route('studentprofile.index')}}" style="text-align: center"><span><i class="fa fa-user" aria-hidden="true"></i></span>Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="{{route('setting.edit',['id'=>Auth::user()->id])}}" style="text-align: center"><span><i class="fa fa-cog" aria-hidden="true"></i></span>Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('logout')}}" style="text-align: center"><span class="glyphicon glyphicon-off"></span>Logout</a></li>


                            {{--<li><a href="#">Page 1-1</a></li>--}}
                            {{--<li><a href="#">Page 1-2</a></li>--}}
                            {{--<li><a href="#">Page 1-3</a></li>--}}
                        </ul>
                    </li>


                </ul>

            </div><!--/.nav-collapse -->

        </div>

    </nav>


</div>



@yield('content')


</body>
</html>
