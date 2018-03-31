<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Awesome News | @yield('title')</title>

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/admin/fonts/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ asset('assets/admin/css/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/icheck/flat/green.css')}}" rel="stylesheet">


    <script src="{{ asset('assets/admin/js/jquery.min.js')}}"></script>


</head>

<body style="background:#F7F7F7;">

<div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
        @yield('content')
    </div>
</div>
</body>

</html>
