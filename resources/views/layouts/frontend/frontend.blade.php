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

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">

            <!-- div used as a holder for the coverflow -->
            <div id="myDiv"></div>

            <!-- carousel data -->
            <div id="coverflowData" style="display: none;">

                <!-- category  -->
                <div data-cat="Category one">

                    @foreach($girl->images as $image)
                        <ul>
                            <li data-url="{{URL::asset('/media/thumbnails/1100x700/'.$image->name)}}" data-width="1100" data-height="700"></li>
                            <li data-thumbnail-path="{{URL::asset('/media/thumbnails/440x660/'.$image->name)}}"></li>
                            <li data-thumbnail-text="" data-thumbnail-text-title-offset="43"
                                data-thumbnail-text-offset-top="16"
                                data-thumbnail-text-offset-bottom="7">
                                <p class="largeLabel">{{$girl->name}}</p>
                                <p class="smallLabel">{{str_limit(strip_tags($girl->own_words),25)}}</p>
                            </li>
                            <li data-info="">
                                <p class="mediaDescriptionHeader">fullsize title</p>
                                <p class="mediaDescriptionText">
                                    Full size description.
                                </p>
                            </li>
                        </ul>

                    @endforeach

                </div>
                <!-- end  -->


            </div>

            <h1 class="page-header">
                Welcome to Modern Business
            </h1>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.3.7</h4>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                        aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                        eveniet incidunt dicta nostrum quod?</p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                        aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                        eveniet incidunt dicta nostrum quod?</p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                        aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                        eveniet incidunt dicta nostrum quod?</p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->


    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Modern Business Features</h2>
        </div>
        <div class="col-md-6">
            <p>The Modern Business template by Start Bootstrap includes:</p>
            <ul>
                <li><strong>Bootstrap v3.3.7</strong>
                </li>
                <li>jQuery v1.11.1</li>
                <li>Font Awesome v4.2.0</li>
                <li>Working PHP contact form with validation</li>
                <li>Unstyled page elements for easy customization</li>
                <li>17 HTML pages</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id
                reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia
                dolorum ducimus unde.</p>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="http://placehold.it/700x450" alt="">
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="well">
        <div class="row">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum
                    deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->


</body>

</html>