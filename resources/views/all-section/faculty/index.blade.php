<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>

    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{asset('projectstylefile/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('projectstylefile/js/bootstrap.min.js')}}"></script>

    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/stylefile/faculty.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/stylefile/hod.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css')}}">
    <script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js')}}"></script>

    @yield('stylefile')

    <style type="text/css">

        .right-img-menu{

            background:#4527A0;
            text-align: center;
        }
        nav ul li a{
            color: white;
        }

        nav a{
            color: white;
        }

        .content {display:none;}
        .preload {
            width:100px;
            height: 100px;
            position: fixed;
            top: 50%;
            left: 50%;

        }

    </style>


</head>
<body>



                    <nav class="navbar  for-faculty" style="background:#673AB7;">


                            <div class="navbar-header">

                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>

                                </button>

                                <a class="navbar-brand" href="{{url('all-section/faculty/home')}}"><span><i class="fa fa-home fa" aria-hidden="true"></i></span>Home</a>

                            </div>

                            <div id="navbar" class="navbar-collapse collapse">

                                <ul class="nav navbar-nav">

                                    @if(Auth::user()->role ==2)

                                        <li><a href="{{Route('lecture.index')}}">Lecture</a></li>
                                        <li><a href="{{Route('post.index')}}">Post</a></li>
                                        <li><a href="{{Route('assignment.index')}}">Assignment</a></li>


                                    @else

                                        <li><a href="{{Route('lecture.index')}}">Lecture</a></li>
                                        <li><a href="{{Route('post.index')}}">Post</a></li>
                                        <li><a href="{{Route('assignment.index')}}">Assignment</a></li>
                                        <li><a href="{{Route('subject.index')}}">Subject</a></li>
                                        <li><a href="">Verify User</a></li>

                                    @endif



                                </ul>

                                <ul class="nav navbar-nav navbar-right">
                                    {{--<li><a href="{{route('facultyprofile.index')}}"><span><i class="fa fa-user" aria-hidden="true"></i></span>Profile</a></li>--}}
                                    {{--<li><a href="{{route('facultysetting.edit',['id'=>Auth::user()->id])}}"><span><i class="fa fa-cog" aria-hidden="true"></i></span>setting</a></li>--}}
                                    {{--<li style="margin-top: 1em;background:#E91E63">Hi,{{Auth::user()->name}}</li>--}}
                                    {{--<li><a href="{{url('logout')}}"><span class="glyphicon glyphicon-off"></span>Logout</a></li>--}}


                                    <li class="dropdown" style="margin-right: 1em">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <img width="30" class="img-responsive img-circle" alt="set" src="{{url('Profile/'.Auth::user()->id.'/images/'.App\Profile::where('user_id',Auth::user()->id)->value('photo'))}}
                                            ">
                                        </a>
                                        <ul class="dropdown-menu">


                                            <li><a href="{{route('facultyprofile.index')}}" class="right-img-menu"><span><i class="fa fa-user" aria-hidden="true"></i></span>Profile</a></li>
                                            <li class="divider"></li>
                                            <li><a href="{{route('facultysetting.edit',['id'=>Auth::user()->id])}}" class="right-img-menu"><span><i class="fa fa-cog" aria-hidden="true"></i></span>setting</a></li>
                                            <li class="divider"></li>
                                            {{--<li style="margin-top: 1em;background:#E91E63">Hi,{{Auth::user()->name}}</li>--}}
                                            <li><a href="{{url('logout')}}" class="right-img-menu"><span class="glyphicon glyphicon-off"></span>Logout</a></li>


                                            {{--<li><a href="#">Page 1-1</a></li>--}}
                                            {{--<li><a href="#">Page 1-2</a></li>--}}
                                            {{--<li><a href="#">Page 1-3</a></li>--}}
                                        </ul>
                                    </li>

                                </ul>

                            </div><!--/.nav-collapse -->


                    </nav>

                    <div class="content">

                    </div>


                    <script type="text/javascript">

                        $(function() {
                            $(".preload").fadeOut(2000, function() {
                                $(".content").fadeIn(1000);
                            });
                        });


                    </script>


                @yield('content')

</body>
</html>
