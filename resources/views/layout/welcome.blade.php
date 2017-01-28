<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>

   @include('layout.head')

</head>
<body>

@include('layout.welcome-nav-body')
@yield('content')

</body>
</html>
