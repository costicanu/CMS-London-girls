@extends('layouts.frontend.frontend')

@section('extraScripts')

    <!-- Mansonry Gallery -->

    <link href="{{URL::asset('css/gallery/Icomoon/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/gallery/animated-masonry-gallery.css')}}" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="_scripts/jquery-2.0.2.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('js/gallery/jquery-ui-1.10.4.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/gallery/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/custom-scripts.js')}}"></script>
    <script type="text/javascript">
        $(window).load(function () {

            var size = 1;
            var button = 1;
            var button_class = "gallery-header-center-right-links-current";
            var normal_size_class = "gallery-content-center-normal";
            var full_size_class = "gallery-content-center-full";
            var $container = $('#gallery-content-center');

            $container.isotope({itemSelector: 'div.each-girl-masonry'});


            function check_button() {
                $('.gallery-header-center-right-links').removeClass(button_class);
                if (button == 1) {
                    $("#filter-all").addClass(button_class);
                    $("#gallery-header-center-left-title").html('All Galleries');
                }
                if (button == 2) {
                    $("#filter-studio").addClass(button_class);
                    $("#gallery-header-center-left-title").html('Studio Gallery');
                }
                if (button == 3) {
                    $("#filter-landscape").addClass(button_class);
                    $("#gallery-header-center-left-title").html('Landscape Gallery');
                }
            }

            function check_size() {
                $("#gallery-content-center").removeClass(normal_size_class).removeClass(full_size_class);
                if (size == 0) {
                    $("#gallery-content-center").addClass(normal_size_class);
                    $("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23a;"></span>');
                }
                if (size == 1) {
                    $("#gallery-content-center").addClass(full_size_class);
                    $("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23b;"></span>');
                }
                $container.isotope({itemSelector: 'div.each-girl-masonry'});
            }


            $("#filter-all").click(function () {
                $container.isotope({filter: '.all'});
                button = 1;
                check_button();
            });
            $("#filter-studio").click(function () {
                $container.isotope({filter: '.studio'});
                button = 2;
                check_button();
            });
            $("#filter-landscape").click(function () {
                $container.isotope({filter: '.landscape'});
                button = 3;
                check_button();
            });
            $("#gallery-header-center-left-icon").click(function () {
                if (size == 0) {
                    size = 1;
                } else if (size == 1) {
                    size = 0;
                }
                check_size();
            });


            check_button();
            check_size();
        });
    </script>



    <!-- end of Masonry Gallery -->
    <style type="text/css">


    </style>


@stop


@section('content')



@stop


@section('after_content')
    <div class="container container-full-width">

        <div class="col-lg-12">
            <h1 class="page-header">
                Gallery
            </h1>

            <div id="gallery">
                <div id="gallery-header">
                    <div id="gallery-header-center">
                        <div id="gallery-header-center-left">
                            <div id="gallery-header-center-left-icon"><span class="iconb"
                                                                            data-icon="&#xe23a;"></span>
                            </div>
                            <div id="gallery-header-center-left-title">All Galleries</div>
                        </div>
                        <div id="gallery-header-center-right">
                            <div class="gallery-header-center-right-links" id="filter-all">All</div>
                            <div class="gallery-header-center-right-links" id="filter-studio">Studio</div>
                            <div class="gallery-header-center-right-links" id="filter-landscape">Landscapes</div>
                        </div>
                    </div>
                </div>
                <div id="gallery-content">
                    <div id="gallery-content-center">
                        <div class="each-girl-masonry">
                            <a href="#">
                                <img src="_assets/studio1.jpg" class="all studio"/>
                            </a>
                            <div class="masonry-details">
                                <div class="girl-name-gallery">Lara</div>
                                <div class="location-gallery">London</div>
                                <div class="details-to-hide">
                                    <div class="girl-age-gallery">23</div>
                                    <div class="girl-height-gallery">2'22</div>
                                    <div class="girl-nationality-gallery">asdfs</div>
                                    <div class="girl-rates-gallery">asdfas</div>
                                </div>

                            </div>
                        </div>

                        <div class="each-girl-masonry">

                            <img src="_assets/landscape1.jpg" class="all landscape"/>
                            <div class="masonry-details">
                                <div class="girl-name-gallery">Lara</div>
                                <div class="girl-age-gallery">23</div>
                                <div class="girl-height-gallery">23</div>
                                <div class="girl-nationality-gallery">asdfs</div>
                                <div class="girl-rates-gallery">asdfas</div>

                            </div>


                        </div>

                        <div class="each-girl-masonry">
                            <a href="">
                                <img src="_assets/studio2.jpg" class="all studio"/>
                            </a>
                        </div>


                        <div class="each-girl-masonry">
                            <img src="_assets/studio1.jpg" class="all studio"/>
                        </div>


                        <div class="each-girl-masonry">
                            <img src="_assets/landscape1.jpg" class="all landscape"/>
                        </div>

                        <div class="each-girl-masonry">
                            <img src="_assets/studio24.jpg" class="all studio"/>
                        </div>

                        <div class="each-girl-masonry">
                            <img src="_assets/studio3.jpg" class="all studio"/>
                        </div>


                    </div>
                </div>
            </div>
            <!-- end of gallery -->


        </div>

    </div>

@stop
