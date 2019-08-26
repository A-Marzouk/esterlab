@extends('layouts.app')

@section('content')


    <div class="owl-carousel slide-one-item">

        <div class="site-section-cover overlay img-bg-section"
             style="background-image: url('images/hero_2-min.webp'); ">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 col-lg-7 text-center">
                        <h1 class="padding-on-phone">ESTERLAB</h1>
                        <p class="small-line-height-phone">
                            @lang('index/slide.main_text_part1')
                            <span class="hideOnPhone">
                                 @lang('index/slide.main_text_part2')
                             </span>
                        </p>
                        <p>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#contactUsModal"
                              class="getInTouch btn btn-red-outline border-w-2 btn-md"> @lang('index/slide.btn_text')</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/hero_1.webp'); ">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 col-lg-7 text-center">
                        <h1> @lang('index/slide.slide2_main_text')</h1>
                        <div>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#contactUsModal"
                               class="getInTouch btn btn-red-outline border-w-2 btn-md"> @lang('index/slide.btn_text')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="pb-5" style="position: relative; z-index: 8;">
        <div class="container">
            <div class="row smart-solutions-section">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <img src="images/gears-min.webp" alt="Image" class="img-fluid mb-3"
                         style="height: 195px; width: 350px;">
                    <h3 class="text-primary h4 mb-2">@lang('index/pre_section.smart_solutions')</h3>
                    <p>
                        @lang('index/pre_section.smart_solutions_explain')
                    </p>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <img src="images/science-min.webp" alt="Image" class="img-fluid mb-3"
                         style="height: 195px; width: 350px;">
                    <h3 class="text-primary h4 mb-2">@lang('index/pre_section.scientific_research')</h3>
                    <p>
                        @lang('index/pre_section.scientific_research_explain')
                    </p>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <img src="images/hero_1-min.webp" alt="Image" class="img-fluid mb-3"
                         style="height: 195px; width: 350px;">
                    <h3 class="text-primary h4 mb-2">
                        @lang('index/pre_section.cost_effective')
                    </h3>
                    <p>
                        @lang('index/pre_section.cost_effective_explain')
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class="pt-5" id="investors-section">
        <div class="container d-flex align-items-center flex-column">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="block-heading-1">
                        <h2>@lang('index/section1.applications_header')</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center pt-5 d-flex justify-content-center flex-wrap w-100">
                <div>
                    <img src="images/image1.png" alt="Image" class="img-fluid" style=" margin-top:20px; ">
                </div>
                <div>
                    <img src="images/image2-min.png" alt="Image" class="img-fluid" style=" margin-top:20px; ">
                </div>
                <div>
                    <img src="images/image3-min.webp" alt="Image" class="img-fluid"
                         style=" margin-top:20px; width: 250px ">
                </div>
                <div>
                    <img src="images/image4-min.webp" alt="Image" class="img-fluid"
                         style=" margin-top:20px; width: 250px; ">
                </div>
            </div>
            <div class="row align-items-center pt-5 d-flex justify-content-center flex-wrap w-100">
                <div>
                    <img src="images/image5-min.png" alt="Image" class="img-fluid" style=" margin-top:55px; ">
                </div>
                <div>
                    <img src="images/image7-min.png" alt="Image" class="img-fluid ml-md-4" style=" margin-top:55px; ">
                </div>
                <div>
                    <img src="images/image6-min.png" alt="Image" class="img-fluid" style=" margin-top:20px; ">
                </div>
                <div>
                    <img src="images/image8-min.png" alt="Image" class="img-fluid" style=" margin-top:20px; ">
                </div>
            </div>
        </div>
    </div>

    <div class="site-section pb-5" id="about-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 mb-4">
                    <img src="images/design-thinking-min.webp" alt="" style="width: 100%">
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="text-primary mb-4">@lang('index/section1.welcome_message')</h2>
                    <p>
                        @lang('index/section1.description1')
                    </p>
                    <p>
                        @lang('index/section1.description2')
                    </p>

                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
                    <div class="block-counter-1">
                        <span class="number"><span data-number="46">0</span></span>
                        <span class="caption">@lang('index/section2.years_of_exp')</span><br/>
                        <span class="caption"> @lang('index/section2.desc1')</span>
                    </div>
                </div>
                <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
                    <div class="block-counter-1">
                        <span class="number">3</span>
                        <span class="caption">@lang('index/section2.years_of_exp2')</span><br/>
                        <span class="caption">@lang('index/section2.desc2')</span>
                    </div>
                </div>
                <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
                    <div class="block-counter-1">
                        <span class="number">2</span>
                        <span class="caption">@lang('index/section2.years_of_exp2')</span><br/>
                        <span class="caption">
                @lang('index/section2.desc3')
              </span>
                    </div>
                </div>
                <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
                    <div class="block-counter-1">
                        <span class="number"><span data-number="35 ">0</span></span>
                        <span class="caption">@lang('index/section2.desc4')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.contact_us_button_section')


    <div class="site-section bg-light pb-0  pt-5" id="services-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="block-heading-1 text-center">
                        <h2>@lang('index/section3.concept_of_dev_head')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <span class="icon-find_in_page d-block mb-3 display-3 text-secondary"></span>
                    <h3 class="text-primary h4 mb-2">@lang('index/section3.scientific_research')</h3>
                    <p>
                        @lang('index/section3.scientific_research_explain')
                    </p>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <span class="icon-brush d-block mb-3 display-3 text-secondary"></span>
                    <h3 class="text-primary h4 mb-2">@lang('index/section3.design')</h3>
                    <p>
                        @lang('index/section3.design_explain')
                    </p>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <span class="icon-developer_board d-block mb-3 display-3 text-secondary"></span>
                    <h3 class="text-primary h4 mb-2">@lang('index/section3.production_dev')</h3>
                    <p>
                        @lang('index/section3.production_dev_explain')
                    </p>
                </div>

                <div class="col-md-6 col-lg-3 mb-4">
                    <span class="icon-extension d-block mb-3 display-3 text-secondary"></span>
                    <h3 class="text-primary h4 mb-2">@lang('index/section3.proto')</h3>
                    <p>
                        @lang('index/section3.proto_explain')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section pb-0 pt-0" id="projects-section">
        <div class="container d-flex flex-column">
            <div class="solution-box-wrapper">
                <div class="solution-box">
                    <div class="box-header">
                        @lang('index/section4.our_solutions')
                    </div>
                    <div class="solution-title">
                        @lang('index/section4.green_energy')
                    </div>
                    <div class="solution-sub-title">
                        @lang('index/section4.green_energy_sub_head')
                    </div>
                    <div class="solution-description">
                        @lang('index/section4.green_energy_explain')
                    </div>

                    <div class="discover-btn">
                        <a href="/green-energy">@lang('index/section4.read_more_btn')</a>
                    </div>
                </div>

                <div class="solution-box">
                    <div class="box-header">
                        @lang('index/section4.our_solutions')
                    </div>
                    <div class="solution-title">
                        @lang('index/section4.automotive')
                    </div>
                    <div class="solution-sub-title">
                        @lang('index/section4.automotive_sub_head')
                    </div>
                    <div class="solution-description">
                        @lang('index/section4.automotive_explain')
                    </div>

                    <div class="discover-btn">
                        <a href="/electric-bus">@lang('index/section4.read_more_btn')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section pb-0 pt-0" id="services">
        <div class="container d-flex flex-column">
            <div class="block-heading-1 text-center p-5 pt-0">
                <h2> @lang('navbar.services')</h2>
            </div>
            <div class="solution-box-wrapper justify-content-center">
                <div class="solution-box">
                    <div class="box-header">
                        @lang('navbar.services')
                    </div>
                    <div class="solution-title">
                        @lang('index/section4.math_modeling')
                    </div>
                    <div class="solution-sub-title">
                        @lang('index/section4.math_modeling_sub_head')
                    </div>
                    <div class="solution-description">
                        @lang('index/section4.math_modeling_explain')
                    </div>

                    <div class="discover-btn">
                        <a href="/math-modeling">@lang('index/section4.read_more_btn')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section pb-0 pt-0" id="certificates">
        <div class="container d-flex flex-column align-items-center">
            <div class="block-heading-1 text-center p-5 pt-0">
                <h2>@lang('index/section5.certificates')</h2>
            </div>


            <div class="multiple-items pb-4" style="width: 90%;">
                <a class="d-flex justify-content-center align-items-center" href="javascript:void(0)"
                   data-toggle="modal" data-target="#certificate_1">
                    <img src="images/certificates/1.jpg" alt="" style="width: 250px; height: 300px;">
                    <div class="certificate-title">
                        @lang('index/section5.certificate_1_title')
                    </div>
                </a>
                <a class="d-flex justify-content-center" href="javascript:void(0)" data-toggle="modal"
                   data-target="#certificate_2">
                    <img src="images/certificates/2.webp" alt="" style="width: 250px; height: 300px;">
                    <div class="certificate-title">
                        @lang('index/section5.certificate_2_title')
                    </div>
                </a>
                <a class="d-flex justify-content-center" href="javascript:void(0)" data-toggle="modal"
                   data-target="#certificate_3">
                    <img src="images/certificates/3.jpg" alt="" style="width: 250px; height: 300px;">
                    <div class="certificate-title" style="font-size: 17px;">
                        @lang('index/section5.certificate_3_title')
                    </div>
                </a>

                <a class="d-flex justify-content-center" href="javascript:void(0)" data-toggle="modal"
                   data-target="#certificate_4">
                    <img src="images/certificates/4.jpg" alt="" style="width: 250px; height: 300px;">
                    <div class="certificate-title">
                        @lang('index/section5.certificate_4_title')
                    </div>
                </a>

                <a class="d-flex justify-content-center" href="javascript:void(0)" data-toggle="modal"
                   data-target="#certificate_5">
                    <img src="images/certificates/5.webp" alt="" style="width: 250px; height: 300px;">
                    <div class="certificate-title">
                        @lang('index/section5.certificate_5_title')
                    </div>
                </a>

                <a class="d-flex justify-content-center" href="javascript:void(0)" data-toggle="modal"
                   data-target="#certificate_6">
                    <img src="images/certificates/6.jpg" alt="" style="width: 250px; height: 300px;">
                    <div class="certificate-title">
                        @lang('index/section5.certificate_6_title')
                    </div>
                </a>
            </div>
        </div>
    </div>


@endsection