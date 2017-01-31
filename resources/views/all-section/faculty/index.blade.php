<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>

    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{asset('projectstylefile/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('projectstylefile/js/bootstrap.min.js')}}"></script>

    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('projectstylefile/stylefile/faculty.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css')}}">
    <script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js')}}"></script>

</head>
<body>



                <nav class="navbar navbar-fixed-top for-faculty">


                    <div class="navbar-header ">

                        <a class="navbar-brand" href="{{url('all-section/faculty/home')}}"><span><i class="fa fa-home fa" aria-hidden="true"></i></span>Home</a>

                    </div>

                    <ul class="nav navbar-nav">

                        @if(Auth::user()->role ==2)

                            <li><a href="{{Route('lecture.index')}}">Lecture</a></li>
                            <li><a href="{{Route('post.index')}}">Post</a></li>
                            <li><a href="#">Assignment</a></li>


                        @else

                            <li><a href="{{Route('lecture.index')}}">Lecture</a></li>
                            <li><a href="{{Route('post.index')}}">Post</a></li>
                            <li><a href="#">Assignment</a></li>
                            <li><a href="{{Route('subject.index')}}">Subject</a></li>
                            <li><a href="">Verify User</a></li>

                        @endif

                    </ul>

                    <ul class="nav navbar-nav pull-right">

                        <li><a href="{{url('logout')}}" class="pull-right">Logout</a></li>

                    </ul>


                </nav>


                @yield('content')



</body>
</html>
