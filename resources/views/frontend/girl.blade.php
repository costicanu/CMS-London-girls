@extends('layouts.frontend.frontend')

@section('extraScripts')

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
                coverflowHeight: 730,
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
                numberOfThumbnailsToDisplayLeftAndRight: "2",
                slideshowDelay: 3000,
                autoplay: "yes",
                showPrevButton: "yes",
                showNextButton: "yes",
                showSlideshowButton: "yes",
                disableNextAndPrevButtonsOnMobile: "no",
                controlsMaxWidth: 940,
                controlsHeight: 31,
                showLargeNextAndPrevButtons: "yes",
                largeNextAndPrevButtonsOffest: 15,
                slideshowTimerColor: "#777777",
                showContextMenu: "no",
                addKeyboardSupport: "yes",
                useDragAndSwipe: "yes",
                fluidWidthZIndex: 0,

                //thumbnail settings
                thumbnailWidth: 440,
                thumbnailHeight: 660,
                thumbnailXOffset3D: 80,
                thumbnailXSpace3D: 78,
                thumbnailZOffset3D: 200,
                thumbnailZSpace3D: 93,
                thumbnailYAngle3D: 0,
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
                reflectionHeight: 85,
                reflectionDistance: 0,
                reflectionOpacity: .4,

                //scrollbar settings
                showScrollbar: "yes",
                disableScrollbarOnMobile: "yes",
                enableMouseWheelScroll: "no",
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
                slideShowAutoPlay: "yes",
                addKeyboardSupport: "yes",
                showCloseButton: "yes",
                showShareButton: "yes",
                showZoomButton: "no",
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

    <!-- tabs -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/mTab-style.css')}}"/>
    <script type="text/javascript" src="{{URL::asset('js/jquery-mTab-min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function (e) {
            $('.tabbing').mTab({
                navigation: ".tabNav"
                , container: ".tabContainer"
                , activeTab: 1
                , activeClass: "active"
                , scrollOffset: true
                , accordScreen: 768
                , toggleClose: true
                , animation: false
                , openWithUrl: true
                , callbackonclick: function () {
                }
                , callback: function () {
                }
            });

        });

    </script>

    <!-- end of Tabs -->


@stop


@section('content')
    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {{ucfirst($girl->name)}}
            </h1>
            <!-- div used as a holder for the coverflow -->
            <div id="myDiv"></div>

            <!-- carousel data -->
            <div id="coverflowData" style="display: none;">

                <!-- category  -->
                <div data-cat="Category one">

                    @foreach($girl->images as $image)
                        <ul>
                            <li data-url="{{URL::asset('/media/thumbnails/1100x700/'.$image->name)}}" data-width="1100"
                                data-height="700"></li>
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


        </div>


        <div class="col-lg-12">
            <div class="tabbing">
                <ul class="tabNav">
                    <li><a href="#tab-book-me">Book Me</a></li>
                    <li><a href="#tab-about-me">About Me</a></li>
                    <li><a href="#tab-details">Details</a></li>
                    <li><a href="#tab-more-details">More Details</a></li>
                    <li><a href="#tab-services">Services</a></li>
                    <li><a href="#tab-rates">Rates</a></li>
                    <li><a href="#tab-claudias-view">Claudia's View</a></li>
                    <li><a href="#tab-interview">Interview</a></li>
                    <li><a href="#tab-reviews">Reviews</a></li>
                </ul>
                <div class="tabContainer">
                    <div class="tabContent" id="tab-book-me">
                        <h3>Tab Content 1</h3>
                        <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria referrentur pri, dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id. Utroque percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam cotidieque.</p>
                        <p>At sit modus posse porro, duis doming interesset id pro. Vis vero ignota cetero ex, mentitum vituperatoribus quo id, eam eu modo sententiae. Cu iudico rationibus eum, ne duo elit nostrum constituam. Mea ea atqui minim. Eros primis persius eu sed. Usu cu aperiri utroque. An per voluptua phaedrum percipitur, ne ius scribentur dissentiunt. Lobortis principes est te, inermis placerat hendrerit mea ne, duo dicat nonumy sententiae an. An mel eius noster, dolore vituperata efficiendi pro at. Electram incorrupte mea at, percipit torquatos instructior sed eu, unum dolores ne vel. Id has tacimates intellegam, putent recusabo corrumpit nam ea.</p>
                    </div>
                    <div class="tabContent" id="tab-about-me">
                        <h3>Tab Content 2</h3>
                        <p>At sit modus posse porro, duis doming interesset id pro. Vis vero ignota cetero ex, mentitum vituperatoribus quo id, eam eu modo sententiae. Cu iudico rationibus eum, ne duo elit nostrum constituam. Mea ea atqui minim. Eros primis persius eu sed. Usu cu aperiri utroque. An per voluptua phaedrum percipitur, ne ius scribentur dissentiunt. Lobortis principes est te, inermis placerat hendrerit mea ne, duo dicat nonumy sententiae an. An mel eius noster, dolore vituperata efficiendi pro at.</p>
                        <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria referrentur pri, dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id. Utroque percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam cotidieque.</p>
                    </div>
                    <div class="tabContent" id="tab-details">
                        <h3>Tab Content 3</h3>
                        <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria referrentur pri, dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id. Utroque percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam cotidieque.</p>
                        <p>Ea oblique ceteros vix, ex quo paulo labore maiorum, falli detraxit ad pri. Ex sea populo tacimates definitionem, et mel sale erant, has ad probatus adipiscing. Mea cibo sententiae cotidieque ea. In viris quodsi lucilius vim, purto rebum graeco sea ad. In cum reque suscipit, moderatius philosophia sed ut. Denique platonem scribentur sed no, est natum electram abhorreant ei. Vis et possim quaerendum, sed primis nominavi ad. Nec munere lucilius ea, vel in latine erroribus, ius te porro regione. Te sed tollit tamquam invenire. Ad quo nihil virtute ancillae, pri ad idque singulis, iuvaret molestie dissentias ut cum.</p>
                    </div>
                    <div class="tabContent" id="tab-more-details">
                        <h3>Tab Content 4</h3>
                        <p>Ea oblique ceteros vix, ex quo paulo labore maiorum, falli detraxit ad pri. Ex sea populo tacimates definitionem, et mel sale erant, has ad probatus adipiscing. Mea cibo sententiae cotidieque ea. In viris quodsi lucilius vim, purto rebum graeco sea ad.</p>
                        <p> In cum reque suscipit, moderatius philosophia sed ut. Denique platonem scribentur sed no, est natum electram abhorreant ei. Vis et possim quaerendum, sed primis nominavi ad. Nec munere lucilius ea, vel in latine erroribus, ius te porro regione. Te sed tollit tamquam invenire. Ad quo nihil virtute ancillae, pri ad idque singulis, iuvaret molestie dissentias ut cum.</p>
                    </div>
                    <div class="tabContent" id="tab-services">
                        <h3>Tab Content 5</h3>
                        <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria referrentur pri, dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id. Utroque percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam cotidieque.</p>
                        <p>At sit modus posse porro, duis doming interesset id pro. Vis vero ignota cetero ex, mentitum vituperatoribus quo id, eam eu modo sententiae. Cu iudico rationibus eum, ne duo elit nostrum constituam. Mea ea atqui minim. Eros primis persius eu sed. Usu cu aperiri utroque. An per voluptua phaedrum percipitur, ne ius scribentur dissentiunt. Lobortis principes est te, inermis placerat hendrerit mea ne, duo dicat nonumy sententiae an. An mel eius noster, dolore vituperata efficiendi pro at. Electram incorrupte mea at, percipit torquatos instructior sed eu, unum dolores ne vel. Id has tacimates intellegam, putent recusabo corrumpit nam ea.</p>
                    </div>
                    <div class="tabContent" id="tab-rates">
                        <h3>Tab Content 6</h3>
                        <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria referrentur pri, dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id. Utroque percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam cotidieque.</p>
                        <p>At sit modus posse porro, duis doming interesset id pro. Vis vero ignota cetero ex, mentitum vituperatoribus quo id, eam eu modo sententiae. Cu iudico rationibus eum, ne duo elit nostrum constituam. Mea ea atqui minim. Eros primis persius eu sed. Usu cu aperiri utroque. An per voluptua phaedrum percipitur, ne ius scribentur dissentiunt. Lobortis principes est te, inermis placerat hendrerit mea ne, duo dicat nonumy sententiae an. An mel eius noster, dolore vituperata efficiendi pro at. Electram incorrupte mea at, percipit torquatos instructior sed eu, unum dolores ne vel. Id has tacimates intellegam, putent recusabo corrumpit nam ea.</p>
                    </div>
                    <div class="tabContent" id="tab-claudias-view">
                        <h3>Tab Content 7</h3>
                        <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria referrentur pri, dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id. Utroque percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam cotidieque.</p>
                        <p>At sit modus posse porro, duis doming interesset id pro. Vis vero ignota cetero ex, mentitum vituperatoribus quo id, eam eu modo sententiae. Cu iudico rationibus eum, ne duo elit nostrum constituam. Mea ea atqui minim. Eros primis persius eu sed. Usu cu aperiri utroque. An per voluptua phaedrum percipitur, ne ius scribentur dissentiunt. Lobortis principes est te, inermis placerat hendrerit mea ne, duo dicat nonumy sententiae an. An mel eius noster, dolore vituperata efficiendi pro at. Electram incorrupte mea at, percipit torquatos instructior sed eu, unum dolores ne vel. Id has tacimates intellegam, putent recusabo corrumpit nam ea.</p>
                    </div>
                    <div class="tabContent" id="tab-interview">
                        <h3>Tab Content 8</h3>
                        <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria referrentur pri, dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id. Utroque percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam cotidieque.</p>
                        <p>At sit modus posse porro, duis doming interesset id pro. Vis vero ignota cetero ex, mentitum vituperatoribus quo id, eam eu modo sententiae. Cu iudico rationibus eum, ne duo elit nostrum constituam. Mea ea atqui minim. Eros primis persius eu sed. Usu cu aperiri utroque. An per voluptua phaedrum percipitur, ne ius scribentur dissentiunt. Lobortis principes est te, inermis placerat hendrerit mea ne, duo dicat nonumy sententiae an. An mel eius noster, dolore vituperata efficiendi pro at. Electram incorrupte mea at, percipit torquatos instructior sed eu, unum dolores ne vel. Id has tacimates intellegam, putent recusabo corrumpit nam ea.</p>
                    </div>
                    <div class="tabContent" id="tab-reviews">
                        <h3>Tab Content 9</h3>
                        <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria referrentur pri, dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id. Utroque percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam cotidieque.</p>
                        <p>At sit modus posse porro, duis doming interesset id pro. Vis vero ignota cetero ex, mentitum vituperatoribus quo id, eam eu modo sententiae. Cu iudico rationibus eum, ne duo elit nostrum constituam. Mea ea atqui minim. Eros primis persius eu sed. Usu cu aperiri utroque. An per voluptua phaedrum percipitur, ne ius scribentur dissentiunt. Lobortis principes est te, inermis placerat hendrerit mea ne, duo dicat nonumy sententiae an. An mel eius noster, dolore vituperata efficiendi pro at. Electram incorrupte mea at, percipit torquatos instructior sed eu, unum dolores ne vel. Id has tacimates intellegam, putent recusabo corrumpit nam ea.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /.row -->




@stop
