<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>@yield('title','This is default title.')</title>
    <!-- Font awesome -->
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
<!-- Bootstrap -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">   
<!-- Slick slider -->
<link href="{{asset('css/slick.css')}}" rel="stylesheet" type="text/css">          
<!-- Fancybox slider -->
<link href="{{asset('css/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" media="screen"> 
<!-- Theme color -->
<link id="switcher" href="{{asset('css/theme-color/default-theme.css')}}" rel="stylesheet">          
 
<!-- Main style sheet -->
<link href="{{asset('css/style.css')}}" rel="stylesheet">    
 
 
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700" rel="stylesheet" type="text/css">
 
 


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white ">
            <!-- <div class="container"> -->
            @include('inc.bar')
            <main class="py-4">
            @yield('content')
            </main>
            @include('inc.footer')
            </div>
        </nav>
        
    <!-- </div> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!-- [if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif] -->
<!-- Javascript Files
================================================== --> 
 
   <!-- jQuery library -->
  <script src="{{asset('js/jquery.min.js')}}"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('js/bootstrap.js')}}"></script>   
  <!-- Slick slider -->
  <script src="{{asset('js/slick.js')}}" type="text/javascript"></script>
  <!-- Counter -->
  <script src="{{asset('js/waypoints.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/jquery.counterup.js')}}" type="text/javascript"></script>  
  <!-- Mixit slider -->
  <script src="{{asset('js/jquery.mixitup.js')}}" type="text/javascript"></script>
  <!-- Add fancyBox -->       
  <script src="{{asset('js/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
  <!-- Custom js -->
  <script src="{{asset('js/custom.js')}}"></script> 
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
   
 <!-- jQuery library -->
 <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

</body>
</html>
