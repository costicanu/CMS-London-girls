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


    <!-- Girl Gallery -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('js/girl_gallery/load/skin_modern_silver.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('js/girl_gallery/load/html_content.css')}}"/>
    <script type="text/javascript" src="{{URL::asset('js/girl_gallery/java/FWDRoyal3DCoverflow.js')}}"></script>
    <script type="text/javascript">
        FWDR3DCovUtils.onReady(function () {
            var coverflow = new FWDRoyal3DCoverflow({
                //required settings
                coverflowHolderDivId: "myDiv",
                coverflowDataListDivId: "coverflowData",
                displayType: "fluidwidth",
                autoScale: "yes",
                coverflowWidth: 940,
                coverflowHeight: 538,
                mainFolderPath: "load",
                skinPath: "../../js/girl_gallery/load/skin_modern_silver",

                //main settings
                backgroundColor: "#DDDDDD",
                backgroundImagePath: "{{URL::asset('js/girl_gallery/load/skin_modern_silver/main_skin/background.jpg')}}",
                thumbnailsBackgroundImagePath: "",
                scrollbarBackgroundImagePath: "{{URL::asset('js/girl_gallery/load/skin_modern_silver/main_skin/scrollbarBackground.jpg')}}",
                backgroundRepeat: "repeat-x",
                showDisplay2DAlways: "no",
                coverflowStartPosition: "center",
                numberOfThumbnailsToDisplayLeftAndRight: "all",
                slideshowDelay: 3000,
                autoplay: "no",
                showPrevButton: "yes",
                showNextButton: "yes",
                showSlideshowButton: "yes",
                disableNextAndPrevButtonsOnMobile: "no",
                controlsMaxWidth: 940,
                controlsHeight: 31,
                showLargeNextAndPrevButtons: "no",
                largeNextAndPrevButtonsOffest: 15,
                slideshowTimerColor: "#777777",
                showContextMenu: "no",
                addKeyboardSupport: "yes",
                useDragAndSwipe: "yes",
                fluidWidthZIndex: 99999999,

                //thumbnail settings
                thumbnailWidth: 400,
                thumbnailHeight: 266,
                thumbnailXOffset3D: 86,
                thumbnailXSpace3D: 78,
                thumbnailZOffset3D: 200,
                thumbnailZSpace3D: 93,
                thumbnailYAngle3D: 70,
                thumbnailXOffset2D: 20,
                thumbnailXSpace2D: 30,
                thumbnailBorderSize: 10,
                thumbnailBackgroundColor: "#666666",
                thumbnailBorderColor1: "#fcfdfd",
                thumbnailBorderColor2: "#e4e4e4",
                transparentImages: "no",
                maxNumberOfThumbnailsOnMobile: 13,
                showThumbnailsGradient: "yes",
                showThumbnailsHtmlContent: "no",
                textBackgroundColor: "#333333",
                textBackgroundOpacity: .7,
                showText: "yes",
                showTextBackgroundImage: "yes",
                showThumbnailBoxShadow: "yes",
                thumbnailBoxShadowCss: "0px 2px 2px #555555",
                showReflection: "yes",
                reflectionHeight: 60,
                reflectionDistance: 0,
                reflectionOpacity: .2,

                //scrollbar settings
                showScrollbar: "yes",
                disableScrollbarOnMobile: "yes",
                enableMouseWheelScroll: "yes",
                scrollbarHandlerWidth: 300,
                scrollbarTextColorNormal: "#777777",
                scrollbarTextColorSelected: "#000000",

                //combobox settings
                showComboBox: "no",
                startAtCategory: 1,
                selectLabel: "SELECT CATEGORIES",
                allCategoriesLabel: "All Categories",
                showAllCategories: "no",
                comboBoxPosition: "topright",
                selectorBackgroundNormalColor1: "#fcfdfd",
                selectorBackgroundNormalColor2: "#e4e4e4",
                selectorBackgroundSelectedColor1: "#a7a7a7",
                selectorBackgroundSelectedColor2: "#8e8e8e",
                selectorTextNormalColor: "#8b8b8b",
                selectorTextSelectedColor: "#FFFFFF",
                buttonBackgroundNormalColor1: "#e7e7e7",
                buttonBackgroundNormalColor2: "#e7e7e7",
                buttonBackgroundSelectedColor1: "#a7a7a7",
                buttonBackgroundSelectedColor2: "#8e8e8e",
                buttonTextNormalColor: "#000000",
                buttonTextSelectedColor: "#FFFFFF",
                comboBoxShadowColor: "#000000",
                comboBoxHorizontalMargins: 12,
                comboBoxVerticalMargins: 12,
                comboBoxCornerRadius: 0,

                //bullets navigation settings
                showBulletsNavigation: "no",
                bulletsBackgroundNormalColor1: "#fcfdfd",
                bulletsBackgroundNormalColor2: "#e4e4e4",
                bulletsBackgroundSelectedColor1: "#000000",
                bulletsBackgroundSelectedColor2: "#666666",
                bulletsShadow: "0px 0px 4px #888888",
                bulletsNormalRadius: 7,
                bulletsSelectedRadius: 8,
                spaceBetweenBullets: 16,
                bulletsOffset: 18,

                //lightbox settings
                buttonsAlignment: "in",
                itemBoxShadow: "none",
                descriptionWindowAnimationType: "opacity",
                descriptionWindowPosition: "bottom",
                slideShowAutoPlay: "no",
                addKeyboardSupport: "yes",
                showCloseButton: "yes",
                showShareButton: "yes",
                showZoomButton: "yes",
                showSlideShowButton: "yes",
                showSlideShowAnimation: "yes",
                showNextAndPrevButtons: "yes",
                showNextAndPrevButtonsOnMobile: "yes",
                showDescriptionButton: "yes",
                showDescriptionByDefault: "no",
                videoShowFullScreenButton: "yes",
                videoAutoPlay: "no",
                nextVideoOrAudioAutoPlay: "yes",
                videoLoop: "no",
                audioAutoPlay: "no",
                audioLoop: "no",
                backgroundOpacity: .9,
                descriptionWindowBackgroundOpacity: .95,
                buttonsHideDelay: 3,
                slideShowDelay: 4,
                defaultItemWidth: 640,
                defaultItemHeight: 480,
                itemOffsetHeight: 50,
                spaceBetweenButtons: 1,
                buttonsOffsetIn: 2,
                buttonsOffsetOut: 5,
                itemBorderSize: 5,
                itemBorderRadius: 0,
                itemBackgroundColor: "#333333",
                itemBorderColor1: "#fcfdfd",
                itemBorderColor2: "#e4e4e4",
                lightBoxBackgroundColor: "#000000",
                descriptionWindowBackgroundColor: "#FFFFFF",
                videoPosterBackgroundColor: "#0099FF",
                videoControllerBackgroundColor: "#FFFFFF",
                audioControllerBackgroundColor: "#FFFFFF",
                timeColor: "#000000"
            });
        })
    </script>
    <!-- end of Girl Gallery -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{URL::asset('/js/html5shiv.js')}}"></script>
    <script src="{{URL::asset('/js/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="services.html">Services</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="portfolio-1-col.html">1 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-2-col.html">2 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-3-col.html">3 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-4-col.html">4 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-item.html">Single Portfolio Item</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="blog-home-1.html">Blog Home 1</a>
                        </li>
                        <li>
                            <a href="blog-home-2.html">Blog Home 2</a>
                        </li>
                        <li>
                            <a href="blog-post.html">Blog Post</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="full-width.html">Full Width Page</a>
                        </li>
                        <li>
                            <a href="sidebar.html">Sidebar Page</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li>
                            <a href="pricing.html">Pricing Table</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


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
                            <li data-url="{{URL::asset('/media/thumbnails/440x660/'.$image->name)}}" data-width="900" data-height="550"></li>
                            <li data-thumbnail-path="{{URL::asset('/images/thumbnails/7.jpg')}}"></li>
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
