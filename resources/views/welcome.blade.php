<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gulf Range</title>
    <!-- FAVICONS -->
    <link rel="shortcut icon" href="images/favicon/favicon.png" />
    <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700" rel="stylesheet"
        type="text/css" />
    <!-- REVOSLIDER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets\rs-plugin/css/settings.min.css') }}"
        media="screen">

    <!--  BOOTSTRAP -->
    <link href="{{ URL::asset('assets\css\bootstrap.min.css') }}" rel="stylesheet">
    <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->
    <link rel="stylesheet" href="{{ URL::asset('assets\css\icons-fonts.css') }}" />
    <!--  CSS THEME -->
    <link rel="stylesheet" href="{{ URL::asset('assets\css\style.css') }}" />

    <!-- ANIMATE -->
    <link rel="stylesheet" href="{{ URL::asset('assets\css\animate.min.css') }}" />
</head>

<body>
    <div id="loader-overflow">
        <div id="loader3">Please enable JS</div>
    </div>

    <div id="wrap" class="boxed">
        <div class="grey-bg">
            <header id="nav" class="header header-1 black-header mobile-no-transparent">
                <div class="header-wrapper">
                    <div class="container-m-30 clearfix">
                        <div class="logo-row">
                            <!-- LOGO -->
                            <div class="logo-container-2">
                                <div class="logo-2">
                                    <a href="index.html" class="clearfix">
                                        <img src="{{ URL::asset('assets\images\logo.png') }}" alt="Logo" />
                                    </a>
                                </div>
                            </div>
                            <!-- BUTTON -->
                            <div class="menu-btn-respons-container">
                                <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse"
                                    data-target="#main-menu .navbar-collapse">
                                    <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- END header-wrapper -->
            </header>
            <!-- REVO SLIDER FULLSCREEN 1 -->
            <div class="relative">
                <div class="rs-fullscr-container">
                    <div id="rs-fullwidth" class="tp-banner dark-bg">
                        <ul>
                            <!-- SLIDE 1 -->
                            <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1500"
                                data-thumb="{{ URL::asset('assets/images/slider/Gulfrage-Website2-thum.jpg') }}"
                                data-saveperformance="on" data-title="HASWELL">
                                <!-- MAIN IMAGE -->

                                <img src="{{ URL::asset('assets/images/revo-slider/dummy.png') }}" alt="slidebg1"
                                    data-lazyload="{{ URL::asset('assets/images/slider/Gulfrage-Website2.jpg') }}"
                                    data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
                            </li>

                            <!-- SLIDE 2 -->
                            <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1500"
                                data-thumb="{{ URL::asset('assets/images/slider/Gulfrage-Website-thum.jpg') }}"
                                data-saveperformance="on" data-title="IMAGINATION">
                                <!-- MAIN IMAGE -->
                                <img src="{{ URL::asset('assets/images/revo-slider/dummy.png') }}" alt="slidebg2"
                                    data-lazyload="{{ URL::asset('assets/images/slider/Gulfrage-Website.jpg') }}"
                                    data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="page-section">
        <div class="container fes1-cont">
            <div class="row">

                <div class="col-md-4 fes1-img-cont wow fadeInUp mb-20"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <img src="{{ URL::asset('assets/images/phone-with-arrow.png') }}" alt="img">
                </div>

                <div class="col-md-8">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="fes1-main-title-cont wow fadeInDown"
                                style="visibility: visible; animation-name: fadeInDown;">
                                <div class="title-fs-60">
                                    WE ARE<br>
                                    <span class="bold">CREATIVE</span>
                                </div>
                                <div class="line-3-100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6 col-sm-6">
                            <div class="fes1-box wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                <div class="fes1-box-icon">
                                    <div class="icon icon-basic-mixer2"></div>
                                </div>
                                <h3>Our Mission</h3>
                                <p>Helping business and teams build highly profitable and scalable systems</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="fes1-box wow fadeIn" data-wow-delay="200ms"
                                style="visibility: visible; animation-delay: 200ms; animation-name: fadeIn;">
                                <div class="fes1-box-icon">
                                    <div class="icon icon-basic-lightbulb"></div>
                                </div>
                                <h3>Our Values</h3>
                                <p>We create solutions that focus on team collaboration while being easily approchable.</p>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6 col-sm-6">
                            <div class="fes1-box wow fadeIn" data-wow-delay="400ms"
                                style="visibility: visible; animation-delay: 400ms; animation-name: fadeIn;">
                                <div class="fes1-box-icon">
                                    <div class="icon icon-basic-helm"></div>
                                </div>
                                <h3>Our Services</h3>
                                <p>We offer a wide range of services for accounting and reporting to HR services and advertising solutions.</p>
                            </div>
                        </div>



                    </div>

                </div>

            </div>
        </div>
    </div>
    <section>
        @include("emails.contactForm")
    </section>
    <!-- jQuery  -->
    <script src="{{ URL::asset('assets/js/jquery-1.11.2.min.js') }}"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- MAGNIFIC POPUP -->
    <script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- APPEAR -->
    <script src="{{ URL::asset('assets/js/jquery.appear.js') }}"></script>
    <!-- OWL CAROUSEL -->
    <script src="{{ URL::asset('assets/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- MAIN SCRIPT -->
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="{{ URL::asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ URL::asset('assets/rs-plugin/js/jquery.themepunch.revolution-parallax.min.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            if (navigator.appVersion.indexOf("Win") != -1 && ieDetect == false) {
                jQuery("#rs-fullwidth").revolution({
                    dottedOverlay: "none",
                    delay: 1500,
                    startwidth: 1170,
                    startheight: 665,
                    hideThumbs: 200,

                    thumbWidth: 100,
                    thumbHeight: 50,
                    thumbAmount: 5,

                    //fullScreenAlignForce: "off",

                    navigationType: "none",
                    navigationArrows: "solo",
                    navigationStyle: "preview4",

                    hideTimerBar: "on",

                    touchenabled: "on",
                    onHoverStop: "on",

                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,

                    parallax: "scroll",
                    parallaxBgFreeze: "on",
                    parallaxLevels: [45, 40, 35, 50],
                    parallaxDisableOnMobile: "on",

                    keyboardNavigation: "off",

                    navigationHAlign: "center",
                    navigationVAlign: "bottom",
                    navigationHOffset: 0,
                    navigationVOffset: 20,

                    soloArrowLeftHalign: "left",
                    soloArrowLeftValign: "center",
                    soloArrowLeftHOffset: 20,
                    soloArrowLeftVOffset: 0,

                    soloArrowRightHalign: "right",
                    soloArrowRightValign: "center",
                    soloArrowRightHOffset: 20,
                    soloArrowRightVOffset: 0,

                    shadow: 0,
                    fullWidth: "on",
                    fullScreen: "off",

                    spinner: "spinner4",

                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,

                    shuffle: "off",

                    autoHeight: "off",
                    forceFullWidth: "off",

                    hideThumbsOnMobile: "off",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "off",
                    hideArrowsOnMobile: "off",
                    //hideThumbsUnderResolution: 0,

                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                    //fullScreenOffsetContainer: ""
                });
            } else {
                jQuery("#rs-fullwidth").revolution({
                    dottedOverlay: "none",
                    delay: 1500,
                    startwidth: 1170,
                    startheight: 760,
                    //hideThumbs: 200,

                    thumbWidth: 100,
                    thumbHeight: 50,
                    thumbAmount: 5,

                    navigationType: "none",
                    navigationArrows: "solo",
                    navigationStyle: "preview4",

                    hideTimerBar: "on",

                    touchenabled: "on",
                    onHoverStop: "on",

                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,

                    parallax: "mouse",
                    parallaxBgFreeze: "on",
                    parallaxLevels: [0],
                    parallaxDisableOnMobile: "on",

                    keyboardNavigation: "off",

                    navigationHAlign: "center",
                    navigationVAlign: "bottom",
                    navigationHOffset: 0,
                    navigationVOffset: 20,

                    soloArrowLeftHalign: "left",
                    soloArrowLeftValign: "center",
                    soloArrowLeftHOffset: 20,
                    soloArrowLeftVOffset: 0,

                    soloArrowRightHalign: "right",
                    soloArrowRightValign: "center",
                    soloArrowRightHOffset: 20,
                    soloArrowRightVOffset: 0,

                    shadow: 0,
                    fullWidth: "on",
                    fullScreen: "off",

                    spinner: "spinner4",

                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,

                    shuffle: "off",

                    autoHeight: "off",
                    forceFullWidth: "off",

                    hideThumbsOnMobile: "off",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "off",
                    hideArrowsOnMobile: "off",
                    //hideThumbsUnderResolution: 0,

                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                });
            }
        }); //ready
    </script>
    @stack('scripts')

</body>

</html>
