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

                                    <li style="margin-top: 1em;background:#E91E63">Hi,{{Auth::user()->name}}</li>
                                    <li><a href="{{url('logout')}}">Logout</a></li>

                                </ul>

                            </div><!--/.nav-collapse -->


                    </nav>



                @yield('content')

</body>
</html>
