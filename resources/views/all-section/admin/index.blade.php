<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('layout.head')
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

                    <a class="navbar-brand" href="{{url('all-section/admin/home')}}"><span><i class="fa fa-home" aria-hidden="true"></i></span>Home</a>

                </div>

                <div id="navbar" class="navbar-collapse collapse">

                    <ul class="nav navbar-nav">

                        <li><a href="{{Route('department.index')}}"><span><i class="fa fa-building-o" aria-hidden="true"></i></span>Department</a></li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="{{Route('department.create')}}"><span><i class="fa fa-plus" aria-hidden="true"></i></span>Create Department</a></li>
                        <li><a href="{{url('logout')}}"><span class="glyphicon glyphicon-off"></span>Logout</a></li>

                    </ul>

                </div><!--/.nav-collapse -->

            </div>

        </nav>


    </div>



        @yield('content')


</body>
</html>
