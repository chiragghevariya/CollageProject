<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>

   @include('layout.head')



</head>
<body style="width: 100%;height: 100%">

@include('layout.welcome-nav-body')
@yield('content')



</body>
</html>
