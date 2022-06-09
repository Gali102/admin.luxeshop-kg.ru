<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('files/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('files/vendors/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('files/css/style.css')}}">
    <script src="{{asset('files/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('files/js/loader.js')}}"></script>
</head>
<body>
<div class="edica-loader"></div>

@yield('content')

<script src="{{asset('files/vendors/popper.js/popper.min.js')}}"></script>
<script src="{{asset('files/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('files/vendors/aos/aos.js')}}"></script>
</body>
</html>