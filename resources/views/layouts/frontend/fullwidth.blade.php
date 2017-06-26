<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/slicebox.css')}}"/>

    <!-- Custom CSS -->

    <link href="{{URL::asset('css/modern-business.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <script type="text/javascript" src="js/modernizr.custom.46884.js"></script>

    <!-- Custom Fonts -->
    <link href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

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

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <ul id="sb-slider" class="sb-slider">
        <li>
            <a href="#" target="_blank"><img src="{{URL::asset('media/slider/top1.jpg')}}"/></a>
            <div class="sb-description">
                <h3>Creative Lifesaver</h3>
            </div>
        </li>
        <li>
            <a href="#" target="_blank"><img src="{{URL::asset('media/slider/top2.jpg')}}"/></a>
            <div class="sb-description">
                <h3>Second title</h3>
            </div>
        </li>
        <li>
            <a href="#" target="_blank"><img src="{{URL::asset('media/slider/top3.jpg')}}"/></a>
            <div class="sb-description">
                <h3>Third Title</h3>
            </div>
        </li>

    </ul>


    <div id="nav-arrows" class="nav-arrows">
        <a href="#">Next</a>
        <a href="#">Previous</a>
    </div>

    <div id="nav-dots" class="nav-dots">
        <span class="nav-dot-current"></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>


</header>

<div class="slide">
    <div class="col-lg-12">
        <h1 class="page-header home-first-header">
            International Models &amp; Companions
        </h1>
    </div>
    <div class="col-lg-12">
        <h2 class="page-header home-second-header">
            Allure News
        </h2>
    </div>
</div>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">


        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="homepage-list-blog-title">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </div>
                    <div class="panel-body">

                        <h4>May</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                            aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                            eveniet incidunt dicta nostrum quod? rerum ea excepturi expedita tenetur assumenda
                            voluptatibus
                            eveniet incidunt dicta nostrum</p>
                        <a href="#" class="btn btn-default">Continue Reading</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="homepage-list-blog-title">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </div>
                    <div class="panel-body">

                        <h4>May</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                            aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                            eveniet incidunt dicta nostrum quod? rerum ea excepturi expedita tenetur assumenda
                            voluptatibus
                            eveniet incidunt dicta nostrum</p>
                        <a href="#" class="btn btn-default">Continue Reading</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="homepage-list-blog-title">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </div>
                    <div class="panel-body">

                        <h4>May</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                            aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                            eveniet incidunt dicta nostrum quod? rerum ea excepturi expedita tenetur assumenda
                            voluptatibus
                            eveniet incidunt dicta nostrum</p>
                        <a href="#" class="btn btn-default">Continue Reading</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.row -->


    <hr>

    <!-- Footer -->
    @include('layouts.frontend.footer')

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script type="text/javascript" src="{{URL::asset('js/jquery.slicebox.min.js')}}"></script>
<script type="text/javascript">
    $(function () {

        var Page = (function () {

            var $navArrows = $('#nav-arrows').hide(),
                    $navDots = $('#nav-dots').hide(),
                    $nav = $navDots.children('span'),
                    $shadow = $('#shadow').hide(),
                    slicebox = $('#sb-slider').slicebox({
                        onReady: function () {

                            $navArrows.show();
                            $navDots.show();
                            $shadow.show();

                        },
                        onBeforeChange: function (pos) {

                            $nav.removeClass('nav-dot-current');
                            $nav.eq(pos).addClass('nav-dot-current');

                        }
                    }),

                    init = function () {

                        initEvents();

                    },
                    initEvents = function () {

                        // add navigation events
                        $navArrows.children(':first').on('click', function () {

                            slicebox.next();
                            return false;

                        });

                        $navArrows.children(':last').on('click', function () {

                            slicebox.previous();
                            return false;

                        });

                        $nav.each(function (i) {

                            $(this).on('click', function (event) {

                                var $dot = $(this);

                                if (!slicebox.isActive()) {

                                    $nav.removeClass('nav-dot-current');
                                    $dot.addClass('nav-dot-current');

                                }

                                slicebox.jump(i + 1);
                                return false;

                            });

                        });

                    };

            return {init: init};

        })();

        Page.init();

    });
</script>

</body>

</html>
