<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Corpobello :: Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href='{{ asset('assets/backend/css/bootstrap.min.css') }}' media='all' rel='stylesheet'>
<link href="{{ asset('assets/backend/css/Lstyle.css') }}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('assets/backend/css/animate.min.css') }}"> 
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font --> 
</head>
<body>
        @yield('content')
    
    <!-- copyright -->
    <div class="w3-agile-copyright">
        <p class="agileinfo"> © 2018 Corpobello. Todos Los Derechos Reservados | Design by <a href="http://Equinox.com/" target="_blank">Equinox</a></p>
    </div>
    <!-- //copyright -->  
    <!-- js -->
    <script src="{{ asset('assets/backend/js/jquery-2.2.3.min.js') }}"></script>
    <script src='{{ asset('assets/backend/js/jquery.validate.min.js') }}'></script>
    <script src='{{ asset('assets/backend/js/formAnimation.js') }}'></script>
    <script src='{{ asset('assets/backend/js/shake.js') }}'></script> 
    <!-- //js -->
</body>
</html>