<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Template</title>


    <!-- jQuery -->
    <script src="{{URL::asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/slicebox.css')}}"/>

    <!-- Custom CSS -->

    <link href="{{URL::asset('css/modern-business.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/custom.css')}}"/>
    <script type="text/javascript" src="{{URL::asset('js/modernizr.custom.46884.js')}}"></script>

    <!-- Custom Fonts -->
    <link href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


@yield('extraScripts')


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{URL::asset('/js/html5shiv.js')}}"></script>
    <script src="{{URL::asset('/js/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->


@include('layouts.frontend.topmenu')

<!-- Page Content -->
<div class="container">

    @yield('content')
    <!-- Footer -->
    @include('layouts.frontend.footer')

</div>
<!-- /.container -->


</body>

</html>
