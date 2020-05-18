<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="https://kit.fontawesome.com/c57eadf68e.js" crossorigin="anonymous"></script>
    @yield('css')
</head>
<body>
@include('frontend.components.header')
@yield('content')
@include('frontend.components.footer')
@yield('script')
</body>
</html>
