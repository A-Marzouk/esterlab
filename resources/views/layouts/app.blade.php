<!DOCTYPE html>
<html lang="en">


<head>
    <title>Esterlab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    <meta name="description" content="Esterlab, A fast growing research &amp; developing company ">
    <meta name="author" content="Esterlab">

    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Esterlab" />
    <meta property="og:description"        content=" A fast growing research &amp; developing company" />
    <meta property="og:image"              content="http://www.esterlab.org/images/logo-esterlab-min.png" />

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="icon"
          type="image/png"
          href="favicon.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141185574-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-141185574-1');
    </script>

</head>




<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">


                <div class="site-logo">
                    <a href="/" class="">
                        <img src="images/esterlabs logo 2.jpg" alt="" style=" width: 216px; height: 67px;">
                    </a>
                </div>

                <nav class="site-navigation text-center ml-auto" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a @if(isset($view))href="#home-section" @else href="/#home-section" @endif class="nav-link">@lang('navbar.home')</a></li>
                        <li><a @if(isset($view))href="#about-section" @else href="/#about-section" @endif  class="nav-link">@lang('navbar.about')</a></li>
                        <li><a @if(isset($view))href="#services-section" @else href="/#services-section" @endif  class="nav-link">@lang('navbar.development_concept')</a></li>
                        <li><a @if(isset($view))href="#projects-section" @else href="/#projects-section" @endif class="nav-link">@lang('navbar.our_solutions')</a></li>
                        <li><a @if(isset($view))href="#certificates" @else href="/#certificates" @endif class="nav-link">@lang('navbar.certificates')</a></li>
                        <li><a  @if(isset($view))href="#contact-section" @else href="/#contact-section" @endif class="nav-link">@lang('navbar.contact')</a></li>
                    </ul>
                </nav>



                <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>


    <div>
        @yield('content')
    </div>




    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="footer-heading mb-4">@lang('navbar.about_us')</h2>
                            <p>
                                @lang('footer.about_us_explain')
                            </p>
                        </div>
                        <div class="col-md-4 ml-auto">
                            <h2 class="footer-heading mb-4">@lang('footer.quick_links')</h2>
                            <ul class="list-unstyled">
                                <li><a href="#home-section" class="nav-link">@lang('navbar.home')</a></li>
                                <li><a href="#about-section" class="nav-link">@lang('navbar.about')</a></li>
                                <li><a href="#services-section" class="nav-link">@lang('navbar.development_concept')</a></li>
                                <li><a href="#projects-section" class="nav-link">@lang('navbar.our_solutions')</a></li>
                                <li><a href="#certificates" class="nav-link">@lang('navbar.certificates')</a></li>
                                <li><a href="#contact-section" class="nav-link">@lang('navbar.contact')</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 ml-auto">

                    <div class="mb-5">
                        <div class="mb-5">
                            <h2 class="footer-heading mb-4">ESTERLAB</h2>
                            <p>@lang('index/slide.slide2_main_text')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- modals -->

    <!-- Modal -->
    <div class="modal fade" id="certificate_1" tabindex="-1" role="dialog" aria-labelledby="certificate" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background: none;border:0;">
                <div class="modal-body">
                    <img src="images/certificates/1.jpg" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="certificate_2" tabindex="-1" role="dialog" aria-labelledby="certificate" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background: none;border:0;">
                <div class="modal-body">
                    <img src="images/certificates/2.jpg" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="certificate_3" tabindex="-1" role="dialog" aria-labelledby="certificate" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background: none;border:0;">
                <div class="modal-body">
                    <img src="images/certificates/3.jpg" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="certificate_4" tabindex="-1" role="dialog" aria-labelledby="certificate" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background: none;border:0;">
                <div class="modal-body">
                    <img src="images/certificates/4.jpg" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="certificate_5" tabindex="-1" role="dialog" aria-labelledby="certificate" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background: none;border:0;">
                <div class="modal-body">
                    <img src="images/certificates/5.jpg" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="certificate_6" tabindex="-1" role="dialog" aria-labelledby="certificate" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background: none;border:0;">
                <div class="modal-body">
                    <img src="images/certificates/6.jpg" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>

    <a id="button" href="javascript:void(0)"></a>


</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/aos.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script src="js/main.js"></script>

<script>
    $(document).ready(function(){
        let certificatesSlider = $('.multiple-items');

        certificatesSlider.slick({
            centerMode: false,
            arrows:false,
            dots: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        arrows: false,
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                }
            ]
        });

        certificatesSlider.show();

        $('#button').on('click' , function () {
            $('html, body').stop().animate( {
                'scrollTop': 395
            }, 900, 'swing',function () {});
        });

        // back to top button :

        $(window).scroll(function() {
            console.log($(window).scrollTop());
            if ($(window).scrollTop() > 1000) {
                $('#button').addClass('show');
            } else {
                $('#button').removeClass('show');
            }
        });


    });

</script>

</body>


</html>