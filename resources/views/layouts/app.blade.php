<!DOCTYPE html>
<html lang="en">


<head>
    <title>Esterlab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NJP735K');</script>

    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5H7XXMM');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-146363355-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700"  rel="preload" as="style" onload="this.rel='stylesheet'">

    <link  rel="preload" as="style" onload="this.rel='stylesheet'" href="fonts/icomoon/style.css">

    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="/css/jquery-ui.css">
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="/css/owl.carousel.min.css">
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="/css/owl.theme.default.min.css">
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="/css/bootstrap-datepicker.css">


    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
          integrity="sha256-3h45mwconzsKjTUULjY+EoEkoRhXcOIU4l5YAw2tSOU=" crossorigin="anonymous"/>
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
          integrity="sha256-etrwgFLGpqD4oNAFW08ZH9Bzif5ByXK2lXNHKy7LQGo=" crossorigin="anonymous"/>


    <meta name="description" content="Esterlab, A fast growing research &amp; developing company ">
    <meta name="author" content="Esterlab">

    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Esterlab"/>
    <meta property="og:description" content=" A fast growing research &amp; developing company"/>

    <meta property="og:image" content="https://www.esterlab.org/images/logo-new-og.webp"/>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="/css/style.css">
    <link rel="icon"
          type="image/png"
          href="/favicon.png">

</head>


<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background: white;">

{{--<div class="spinner-wrapper">--}}
    {{--<div class="spinner">--}}
        {{--<div class="rect1"></div>--}}
        {{--<div class="rect2"></div>--}}
        {{--<div class="rect3"></div>--}}
        {{--<div class="rect4"></div>--}}
        {{--<div class="rect5"></div>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body">
            <div id="languageSelector_navbar">
                <language-selector></language-selector>
            </div>
        </div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">


                <div class="site-logo">
                    <a href="/" class="">
                        <img src="/images/logo-new.webp" alt="" style=" width: 260px; height: 80px;">
                    </a>
                </div>

                <nav class="site-navigation text-center ml-auto" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li class="nav-item-box">
                            <a @if(isset($view))href="#home-section" @else href="/#home-section"
                               @endif class="nav-link itemBorder">@lang('navbar.home')</a>
                        </li>
                        <li class="nav-item dropdown nav-item-box">
                            <a class="nav-link  dropdown-toggle itemBorder" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @lang('navbar.about')
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a style="color: black!important;" @if(isset($view))href="#certificates"
                                   @else href="/#certificates"
                                   @endif class="dropdown-item">@lang('navbar.certificates')</a>
                                <a class="dropdown-item" href="{{route('scientific.publication')}}"
                                   style="color: black!important;">@lang('navbar.scientific_publications')</a>
                            </div>
                        </li>
                        <li class="nav-item-box"><a @if(isset($view))href="#services-section" @else href="/#services-section"
                               @endif  class="nav-link itemBorder">@lang('navbar.development_concept')</a></li>
                        <li class="nav-item-box"><a @if(isset($view))href="#projects-section" @else href="/#projects-section"
                               @endif class="nav-link itemBorder">@lang('navbar.our_solutions')</a></li>
                        <li class="nav-item-box"><a @if(isset($view))href="#services" @else href="/#services"
                               @endif class="nav-link itemBorder">@lang('navbar.services')</a></li>
                        <li class="nav-item-box"><a @if(isset($view))href="/join" @else href="/join"
                                                    @endif class="nav-link itemBorder">@lang('navbar.oversee_your_project')</a></li>
                        <li>
                            <div id="languageSelector">
                                <language-selector></language-selector>
                            </div>
                        </li>
                    </ul>
                </nav>


                <div class="toggle-button d-inline-block d-lg-none"><a href="#"
                                                                       class="site-menu-toggle py-5 js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>


    <div>
        @yield('content')
    </div>


    <div class="site-section bg-light pt-5" id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="block-heading-1">
                        <span> @lang('index/contact.get_in_touch')</span>
                        <h2>   @lang('index/contact.contact_us')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ml-auto">
                    <h4 class="text-black pt-1">   @lang('index/contact.more_details')<br><br/>
                    </h4>
                    <h6>
                        <div class="row pt-1">
                            <div class="col-md-2">
                                @lang('index/contact.address_title')
                            </div>
                            <div class="col-md-4">
                                <a target="_blank"
                                   href="https://www.google.com/maps/place/ул.+Сечевых+Стрельцов,+60,+Киев,+04050/@50.4565667,30.4894762,17z/data=!4m5!3m4!1s0x40d4ce63673bc087:0xb0a3a2c1274c970!8m2!3d50.4569751!4d30.4899461/">
                                    @lang('index/contact.address')
                                </a><br>
                            </div>
                        </div>
                        <div class="row pt-1">
                            <div class="col-md-2 col-4">
                                @lang('index/contact.tel_title')
                            </div>
                            <div class="col-md-4 col-8">
                                <a href="tel:+38 068 192 92 92">+38 068 192 92 92
                                </a>
                            </div>
                        </div>
                        <div class="row pt-1">
                            <div class="col-md-2 col-4">
                                @lang('index/contact.email_title')
                            </div>
                            <div class="col-md-4 col-8">
                                <a href="mailto:info@esterlab.org">info@esterlab.org</a>
                            </div>
                        </div>
                    </h6>
                </div>
            </div>
        </div>
    </div>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="footer-heading mb-4">@lang('navbar.about')</h2>
                            <p>
                                @lang('footer.about_us_explain')
                            </p>
                        </div>
                        <div class="col-md-4 ml-auto">
                            <h2 class="footer-heading mb-4">@lang('footer.quick_links')</h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a @if(isset($view))href="#home-section" @else href="/#home-section"
                                       @endif class="">@lang('navbar.home')</a>
                                </li>
                                <li><a href="#about-section" class="">@lang('navbar.about')</a></li>
                                <li>
                                    <a @if(isset($view))href="#certificates" @else href="/#certificates"
                                       @endif  class="">@lang('navbar.certificates')</a>
                                </li>
                                <li><a href="#contact-section" class="">@lang('navbar.contact')</a></li>
                                <li><a @if(isset($view))href="#services-section" @else href="/#services-section"
                                       @endif  class="">@lang('navbar.development_concept')</a></li>
                                <li><a @if(isset($view))href="#projects-section" @else href="/#projects-section"
                                       @endif class="">@lang('navbar.our_solutions')</a></li>
                                <li><a @if(isset($view))href="#services" @else href="/#services"
                                       @endif class="">@lang('navbar.services')</a></li>

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
    <div class="modal fade" id="certificate_1" tabindex="-1" role="dialog" aria-labelledby="certificate"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background: none;border:0;">
                <div class="modal-body">
                    <img src="" data-src="/images/certificates/1.webp" class="lazyLoad" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="certificate_2" tabindex="-1" role="dialog" aria-labelledby="certificate"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background: none;border:0;">
                <div class="modal-body">
                    <img src="" data-src="/images/certificates/2.webp" class="lazyLoad" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="certificate_3" tabindex="-1" role="dialog" aria-labelledby="certificate"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background: none;border:0;">
                <div class="modal-body">
                    <img src=""  data-src="/images/certificates/3.webp" class="lazyLoad" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="certificate_4" tabindex="-1" role="dialog" aria-labelledby="certificate"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background: none;border:0;">
                <div class="modal-body">
                    <img src="" data-src="/images/certificates/4.webp" class="lazyLoad" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="certificate_5" tabindex="-1" role="dialog" aria-labelledby="certificate"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background: none;border:0;">
                <div class="modal-body">
                    <img src=""  data-src="/images/certificates/5.webp" class="lazyLoad" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="certificate_6" tabindex="-1" role="dialog" aria-labelledby="certificate"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background: none;border:0;">
                <div class="modal-body">
                    <img src="" data-src="/images/certificates/6.webp" class="lazyLoad" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>

    <a id="button" href="javascript:void(0)"></a>

    <a class="contactBtn" href="javascript:void(0)" data-toggle="modal" data-target="#contactUsModal">
        <img src="/images/phone-red-light.svg" alt="contact us">
    </a>

    <div class="successMessage d-none">
        <div class="alert alert-success">
            @if($lang === 'de')
                Vielen Dank! Wir melden uns umgehend bei Ihnen!
            @elseif($lang === 'en')
                Thank you! We'll contact you soon
            @endif
            <span id="closeMessage">&times;</span>
        </div>
    </div>

    <div class="errorMessage d-none">
        <div class="alert alert-danger">
            @if($lang === 'de')
                Fehler beim Absenden des Formulars.
            @elseif($lang === 'en')
                Error while submitting form.
            @endif
            <span id="closeMessage">&times;</span>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="contactUsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg contactModalDialog" role="document">
            <div class="modal-content" style="background: none;border: none;">
                <div class="modal-body">
                    <div id="contact_us">
                        <contact-us language="{{ Config::get('app.locale') }}"></contact-us>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/app.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/jquery.sticky.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.animateNumber.min.js"></script>
<script src="/js/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha256-NXRS8qVcmZ3dOv3LziwznUHPegFhPZ1F/4inU7uC8h0=" crossorigin="anonymous"></script>

<script src="/js/main.js"></script>

<script>
    $(document).ready(function () {
        $(window).on("load", function () {
            preloaderFadeOutTime = 150;

            function hidePreloader() {
                var preloader = $('.spinner-wrapper');
                preloader.fadeOut(preloaderFadeOutTime);
            }

            hidePreloader();

            $('.lazyLoad').each( (index,img) => {
                img.src = img.getAttribute("data-src");
            });

        });

        // main album auto listing every 7 seconds
        setInterval(() => {
            $('.owl-next').click();
        }, 7000 );
    });
</script>


</body>


</html>
