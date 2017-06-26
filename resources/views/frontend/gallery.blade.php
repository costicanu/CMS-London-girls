@extends('layouts.frontend.frontend')

@section('extraScripts')

    <!-- Mansonry Gallery -->

    <!-- end of Masonry Gallery -->
    <style type="text/css">
        .button {
            display: inline-block;
            padding: 0.5em 1.0em;
            background: #EEE;
            border: none;
            border-radius: 7px;
            background-image: linear-gradient( to bottom, hsla(0, 0%, 0%, 0), hsla(0, 0%, 0%, 0.2) );
            color: #222;
            font-family: sans-serif;
            font-size: 16px;
            text-shadow: 0 1px white;
            cursor: pointer;
        }

        .button:hover {
            background-color: #8CF;
            text-shadow: 0 1px hsla(0, 0%, 100%, 0.5);
            color: #222;
        }

        .button:active,
        .button.is-checked {
            background-color: #28F;
        }

        .button.is-checked {
            color: white;
            text-shadow: 0 -1px hsla(0, 0%, 0%, 0.8);
        }

        .button:active {
            box-shadow: inset 0 1px 10px hsla(0, 0%, 0%, 0.8);
        }

        /* ---- button-group ---- */

        .button-group {
            margin-bottom: 20px;
        }

        .button-group:after {
            content: '';
            display: block;
            clear: both;
        }

        .button-group .button {
            float: left;
            border-radius: 0;
            margin-left: 0;
            margin-right: 1px;
        }

        .button-group .button:first-child { border-radius: 0.5em 0 0 0.5em; }
        .button-group .button:last-child { border-radius: 0 0.5em 0.5em 0; }

        /* ---- isotope ---- */

        .grid {
            border: 1px solid #333;
        }

        /* clear fix */
        .grid:after {
            content: '';
            display: block;
            clear: both;
        }

        /* ---- .element-item ---- */

        .element-item {
            position: relative;
            float: left;
            width: 100px;
            height: 100px;
            margin: 5px;
            padding: 10px;
            background: #888;
            color: #262524;
        }

        .element-item > * {
            margin: 0;
            padding: 0;
        }

        .element-item .name {
            position: absolute;

            left: 10px;
            top: 60px;
            text-transform: none;
            letter-spacing: 0;
            font-size: 12px;
            font-weight: normal;
        }

        .element-item .symbol {
            position: absolute;
            left: 10px;
            top: 0px;
            font-size: 42px;
            font-weight: bold;
            color: white;
        }

        .element-item .number {
            position: absolute;
            right: 8px;
            top: 5px;
        }

        .element-item .weight {
            position: absolute;
            left: 10px;
            top: 76px;
            font-size: 12px;
        }

        .element-item.alkali          { background: #F00; background: hsl(   0, 100%, 50%); }
        .element-item.alkaline-earth  { background: #F80; background: hsl(  36, 100%, 50%); }
        .element-item.lanthanoid      { background: #FF0; background: hsl(  72, 100%, 50%); }
        .element-item.actinoid        { background: #0F0; background: hsl( 108, 100%, 50%); }
        .element-item.transition      { background: #0F8; background: hsl( 144, 100%, 50%); }
        .element-item.post-transition { background: #0FF; background: hsl( 180, 100%, 50%); }
        .element-item.metalloid       { background: #08F; background: hsl( 216, 100%, 50%); }
        .element-item.diatomic        { background: #00F; background: hsl( 252, 100%, 50%); }
        .element-item.halogen         { background: #F0F; background: hsl( 288, 100%, 50%); }
        .element-item.noble-gas       { background: #F08; background: hsl( 324, 100%, 50%); }


    </style>



    <script type="text/javascript">
        // external js: isotope.pkgd.js


        // init Isotope
        var $grid = $('.grid').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows',
            getSortData: {
                name: '.name',
                symbol: '.symbol',
                number: '.number parseInt',
                category: '[data-category]',
                weight: function( itemElem ) {
                    var weight = $( itemElem ).find('.weight').text();
                    return parseFloat( weight.replace( /[\(\)]/g, '') );
                }
            }
        });

        // filter functions
        var filterFns = {
            // show if number is greater than 50
            numberGreaterThan50: function() {
                var number = $(this).find('.number').text();
                return parseInt( number, 10 ) > 50;
            },
            // show if name ends with -ium
            ium: function() {
                var name = $(this).find('.name').text();
                return name.match( /ium$/ );
            }
        };

        // bind filter button click
        $('#filters').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $grid.isotope({ filter: filterValue });
        });

        // bind sort button click
        $('#sorts').on( 'click', 'button', function() {
            var sortByValue = $(this).attr('data-sort-by');
            $grid.isotope({ sortBy: sortByValue });
        });

        // change is-checked class on buttons
        $('.button-group').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $( this ).addClass('is-checked');
            });
        });


    </script>

@stop


@section('content')
    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {{ucfirst($cateogry->name)}}
            </h1>

            <h1>Isotope - filtering &amp; sorting</h1>
            <h2>Filter</h2>
            <div id="filters" class="button-group">  <button class="button is-checked" data-filter="*">show all</button>
                <button class="button" data-filter=".metal">metal</button>
                <button class="button" data-filter=".transition">transition</button>
                <button class="button" data-filter=".alkali, .alkaline-earth">alkali and alkaline-earth</button>
                <button class="button" data-filter=":not(.transition)">not transition</button>
                <button class="button" data-filter=".metal:not(.transition)">metal but not transition</button>
                <button class="button" data-filter="numberGreaterThan50">number > 50</button>
                <button class="button" data-filter="ium">name ends with &ndash;ium</button>
            </div>

            <h2>Sort</h2>
            <div id="sorts" class="button-group">  <button class="button is-checked" data-sort-by="original-order">original order</button>
                <button class="button" data-sort-by="name">name</button>
                <button class="button" data-sort-by="symbol">symbol</button>
                <button class="button" data-sort-by="number">number</button>
                <button class="button" data-sort-by="weight">weight</button>
                <button class="button" data-sort-by="category">category</button>
            </div>

            <div class="grid">
                <div class="element-item transition metal " data-category="transition">
                    <h3 class="name">Mercury</h3>
                    <p class="symbol">Hg</p>
                    <p class="number">80</p>
                    <p class="weight">200.59</p>
                </div>
                <div class="element-item metalloid " data-category="metalloid">
                    <h3 class="name">Tellurium</h3>
                    <p class="symbol">Te</p>
                    <p class="number">52</p>
                    <p class="weight">127.6</p>
                </div>
                <div class="element-item post-transition metal " data-category="post-transition">
                    <h3 class="name">Bismuth</h3>
                    <p class="symbol">Bi</p>
                    <p class="number">83</p>
                    <p class="weight">208.980</p>
                </div>
                <div class="element-item post-transition metal " data-category="post-transition">
                    <h3 class="name">Lead</h3>
                    <p class="symbol">Pb</p>
                    <p class="number">82</p>
                    <p class="weight">207.2</p>
                </div>
                <div class="element-item transition metal " data-category="transition">
                    <h3 class="name">Gold</h3>
                    <p class="symbol">Au</p>
                    <p class="number">79</p>
                    <p class="weight">196.967</p>
                </div>
                <div class="element-item alkali metal " data-category="alkali">
                    <h3 class="name">Potassium</h3>
                    <p class="symbol">K</p>
                    <p class="number">19</p>
                    <p class="weight">39.0983</p>
                </div>
                <div class="element-item alkali metal " data-category="alkali">
                    <h3 class="name">Sodium</h3>
                    <p class="symbol">Na</p>
                    <p class="number">11</p>
                    <p class="weight">22.99</p>
                </div>
                <div class="element-item transition metal " data-category="transition">
                    <h3 class="name">Cadmium</h3>
                    <p class="symbol">Cd</p>
                    <p class="number">48</p>
                    <p class="weight">112.411</p>
                </div>
                <div class="element-item alkaline-earth metal " data-category="alkaline-earth">
                    <h3 class="name">Calcium</h3>
                    <p class="symbol">Ca</p>
                    <p class="number">20</p>
                    <p class="weight">40.078</p>
                </div>
                <div class="element-item transition metal " data-category="transition">
                    <h3 class="name">Rhenium</h3>
                    <p class="symbol">Re</p>
                    <p class="number">75</p>
                    <p class="weight">186.207</p>
                </div>
                <div class="element-item post-transition metal " data-category="post-transition">
                    <h3 class="name">Thallium</h3>
                    <p class="symbol">Tl</p>
                    <p class="number">81</p>
                    <p class="weight">204.383</p>
                </div>
                <div class="element-item metalloid " data-category="metalloid">
                    <h3 class="name">Antimony</h3>
                    <p class="symbol">Sb</p>
                    <p class="number">51</p>
                    <p class="weight">121.76</p>
                </div>
                <div class="element-item transition metal " data-category="transition">
                    <h3 class="name">Cobalt</h3>
                    <p class="symbol">Co</p>
                    <p class="number">27</p>
                    <p class="weight">58.933</p>
                </div>
                <div class="element-item lanthanoid metal inner-transition " data-category="lanthanoid">
                    <h3 class="name">Ytterbium</h3>
                    <p class="symbol">Yb</p>
                    <p class="number">70</p>
                    <p class="weight">173.054</p>
                </div>
                <div class="element-item noble-gas nonmetal " data-category="noble-gas">
                    <h3 class="name">Argon</h3>
                    <p class="symbol">Ar</p>
                    <p class="number">18</p>
                    <p class="weight">39.948</p>
                </div>
                <div class="element-item diatomic nonmetal " data-category="diatomic">
                    <h3 class="name">Nitrogen</h3>
                    <p class="symbol">N</p>
                    <p class="number">7</p>
                    <p class="weight">14.007</p>
                </div>
                <div class="element-item actinoid metal inner-transition " data-category="actinoid">
                    <h3 class="name">Uranium</h3>
                    <p class="symbol">U</p>
                    <p class="number">92</p>
                    <p class="weight">238.029</p>
                </div>
                <div class="element-item actinoid metal inner-transition " data-category="actinoid">
                    <h3 class="name">Plutonium</h3>
                    <p class="symbol">Pu</p>
                    <p class="number">94</p>
                    <p class="weight">(244)</p>
                </div>
            </div>



        </div>

    </div>
    <!-- /.row -->

@stop


@section('after_content')
    <div class="fullwidth">
        <div class="container">
            <div class="row">
                <h2 class="about-heading">About {{$girl->name}}</h2>
            </div>
        </div>
    </div>

    <div class="fullwidth grey-background">
        <div class="container tabs-container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabbing col-lg-12">
                        <ul class="tabNav col-lg-2">
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
                        <div class="tabContainer col-lg-10">
                            <div class="tabContent" id="tab-book-me">
                                <h3>Tab Content 1</h3>
                                <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria
                                    referrentur pri,
                                    dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id.
                                    Utroque
                                    percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam
                                    cotidieque.</p>
                                <p>At sit modus posse porro, duis doming interesset id pro. Vis vero ignota cetero ex,
                                    mentitum
                                    vituperatoribus quo id, eam eu modo sententiae. Cu iudico rationibus eum, ne duo
                                    elit
                                    nostrum constituam. Mea ea atqui minim. Eros primis persius eu sed. Usu cu aperiri
                                    utroque.
                                    An per voluptua phaedrum percipitur, ne ius scribentur dissentiunt. Lobortis
                                    principes est
                                    te, inermis placerat hendrerit mea ne, duo dicat nonumy sententiae an. An mel eius
                                    noster,
                                    dolore vituperata efficiendi pro at. Electram incorrupte mea at, percipit torquatos
                                    instructior sed eu, unum dolores ne vel. Id has tacimates intellegam, putent
                                    recusabo
                                    corrumpit nam ea.</p>
                            </div>
                            <div class="tabContent" id="tab-about-me">
                                <h3>Tab Content 2</h3>
                                <p>At sit modus posse porro, duis doming interesset id pro. Vis vero ignota cetero ex,
                                    mentitum
                                    vituperatoribus quo id, eam eu modo sententiae. Cu iudico rationibus eum, ne duo
                                    elit
                                    nostrum constituam. Mea ea atqui minim. Eros primis persius eu sed. Usu cu aperiri
                                    utroque.
                                    An per voluptua phaedrum percipitur, ne ius scribentur dissentiunt. Lobortis
                                    principes est
                                    te, inermis placerat hendrerit mea ne, duo dicat nonumy sententiae an. An mel eius
                                    noster,
                                    dolore vituperata efficiendi pro at.</p>
                                <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria
                                    referrentur pri,
                                    dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id.
                                    Utroque
                                    percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam
                                    cotidieque.</p>
                            </div>
                            <div class="tabContent" id="tab-details">
                                <h3>Tab Content 3</h3>
                                <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria
                                    referrentur pri,
                                    dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id.
                                    Utroque
                                    percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam
                                    cotidieque.</p>
                                <p>Ea oblique ceteros vix, ex quo paulo labore maiorum, falli detraxit ad pri. Ex sea
                                    populo
                                    tacimates definitionem, et mel sale erant, has ad probatus adipiscing. Mea cibo
                                    sententiae
                                    cotidieque ea. In viris quodsi lucilius vim, purto rebum graeco sea ad. In cum reque
                                    suscipit, moderatius philosophia sed ut. Denique platonem scribentur sed no, est
                                    natum
                                    electram abhorreant ei. Vis et possim quaerendum, sed primis nominavi ad. Nec munere
                                    lucilius ea, vel in latine erroribus, ius te porro regione. Te sed tollit tamquam
                                    invenire.
                                    Ad quo nihil virtute ancillae, pri ad idque singulis, iuvaret molestie dissentias ut
                                    cum.</p>
                            </div>
                            <div class="tabContent" id="tab-more-details">
                                <h3>Tab Content 4</h3>
                                <p>Ea oblique ceteros vix, ex quo paulo labore maiorum, falli detraxit ad pri. Ex sea
                                    populo
                                    tacimates definitionem, et mel sale erant, has ad probatus adipiscing. Mea cibo
                                    sententiae
                                    cotidieque ea. In viris quodsi lucilius vim, purto rebum graeco sea ad.</p>
                                <p> In cum reque suscipit, moderatius philosophia sed ut. Denique platonem scribentur
                                    sed no,
                                    est natum electram abhorreant ei. Vis et possim quaerendum, sed primis nominavi ad.
                                    Nec
                                    munere lucilius ea, vel in latine erroribus, ius te porro regione. Te sed tollit
                                    tamquam
                                    invenire. Ad quo nihil virtute ancillae, pri ad idque singulis, iuvaret molestie
                                    dissentias
                                    ut cum.</p>
                            </div>
                            <div class="tabContent" id="tab-services">
                                <h3>Tab Content 5</h3>
                                <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria
                                    referrentur pri,
                                    dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id.
                                    Utroque
                                    percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam
                                    cotidieque.</p>
                                <p>At sit modus posse porro, duis doming interesset id pro. Vis vero ignota cetero ex,
                                    mentitum
                                    vituperatoribus quo id, eam eu modo sententiae. Cu iudico rationibus eum, ne duo
                                    elit
                                    nostrum constituam. Mea ea atqui minim. Eros primis persius eu sed. Usu cu aperiri
                                    utroque.
                                    An per voluptua phaedrum percipitur, ne ius scribentur dissentiunt. Lobortis
                                    principes est
                                    te, inermis placerat hendrerit mea ne, duo dicat nonumy sententiae an. An mel eius
                                    noster,
                                    dolore vituperata efficiendi pro at. Electram incorrupte mea at, percipit torquatos
                                    instructior sed eu, unum dolores ne vel. Id has tacimates intellegam, putent
                                    recusabo
                                    corrumpit nam ea.</p>
                            </div>
                            <div class="tabContent" id="tab-rates">
                                <h3>Tab Content 6</h3>
                                <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria
                                    referrentur pri,
                                    dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id.
                                    Utroque
                                    percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam
                                    cotidieque.</p>
                                <p>At sit modus posse porro, duis doming interesset id pro. Vis vero ignota cetero ex,
                                    mentitum
                                    vituperatoribus quo id, eam eu modo sententiae. Cu iudico rationibus eum, ne duo
                                    elit
                                    nostrum constituam. Mea ea atqui minim. Eros primis persius eu sed. Usu cu aperiri
                                    utroque.
                                    An per voluptua phaedrum percipitur, ne ius scribentur dissentiunt. Lobortis
                                    principes est
                                    te, inermis placerat hendrerit mea ne, duo dicat nonumy sententiae an. An mel eius
                                    noster,
                                    dolore vituperata efficiendi pro at. Electram incorrupte mea at, percipit torquatos
                                    instructior sed eu, unum dolores ne vel. Id has tacimates intellegam, putent
                                    recusabo
                                    corrumpit nam ea.</p>
                            </div>
                            <div class="tabContent" id="tab-claudias-view">
                                <h3>Tab Content 7</h3>
                                <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria
                                    referrentur pri,
                                    dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id.
                                    Utroque
                                    percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam
                                    cotidieque.</p>
                                <p>At sit modus posse porro, duis doming interesset id pro. Vis vero ignota cetero ex,
                                    mentitum
                                    vituperatoribus quo id, eam eu modo sententiae. Cu iudico rationibus eum, ne duo
                                    elit
                                    nostrum constituam. Mea ea atqui minim. Eros primis persius eu sed. Usu cu aperiri
                                    utroque.
                                    An per voluptua phaedrum percipitur, ne ius scribentur dissentiunt. Lobortis
                                    principes est
                                    te, inermis placerat hendrerit mea ne, duo dicat nonumy sententiae an. An mel eius
                                    noster,
                                    dolore vituperata efficiendi pro at. Electram incorrupte mea at, percipit torquatos
                                    instructior sed eu, unum dolores ne vel. Id has tacimates intellegam, putent
                                    recusabo
                                    corrumpit nam ea.</p>
                            </div>
                            <div class="tabContent" id="tab-interview">
                                <h3>Tab Content 8</h3>
                                <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria
                                    referrentur pri,
                                    dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id.
                                    Utroque
                                    percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam
                                    cotidieque.</p>
                                <p>At sit modus posse porro, duis doming interesset id pro. Vis vero ignota cetero ex,
                                    mentitum
                                    vituperatoribus quo id, eam eu modo sententiae. Cu iudico rationibus eum, ne duo
                                    elit
                                    nostrum constituam. Mea ea atqui minim. Eros primis persius eu sed. Usu cu aperiri
                                    utroque.
                                    An per voluptua phaedrum percipitur, ne ius scribentur dissentiunt. Lobortis
                                    principes est
                                    te, inermis placerat hendrerit mea ne, duo dicat nonumy sententiae an. An mel eius
                                    noster,
                                    dolore vituperata efficiendi pro at. Electram incorrupte mea at, percipit torquatos
                                    instructior sed eu, unum dolores ne vel. Id has tacimates intellegam, putent
                                    recusabo
                                    corrumpit nam ea.</p>
                            </div>
                            <div class="tabContent" id="tab-reviews">
                                <h3>Tab Content 9</h3>
                                <p>Lorem ipsum dolor sit amet, prompta molestie ad eam, ea commodo voluptaria
                                    referrentur pri,
                                    dicant consul est et. Corpora detraxit inciderint eam no, nonumy denique his id.
                                    Utroque
                                    percipit accusata usu eu, eu choro offendit consetetur nec. Cum at purto timeam
                                    cotidieque.</p>
                                <p>At sit modus posse porro, duis doming interesset id pro. Vis vero ignota cetero ex,
                                    mentitum
                                    vituperatoribus quo id, eam eu modo sententiae. Cu iudico rationibus eum, ne duo
                                    elit
                                    nostrum constituam. Mea ea atqui minim. Eros primis persius eu sed. Usu cu aperiri
                                    utroque.
                                    An per voluptua phaedrum percipitur, ne ius scribentur dissentiunt. Lobortis
                                    principes est
                                    te, inermis placerat hendrerit mea ne, duo dicat nonumy sententiae an. An mel eius
                                    noster,
                                    dolore vituperata efficiendi pro at. Electram incorrupte mea at, percipit torquatos
                                    instructior sed eu, unum dolores ne vel. Id has tacimates intellegam, putent
                                    recusabo
                                    corrumpit nam ea.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./row -->
        </div>
    </div>
@stop
