@extends('layouts.app')

@section('content')

    <div class="site-section-cover overlay inner-page bg-light science-cover" data-aos="fade">

        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-10">

                    <div class="box-shadow-content">
                        <div class="block-heading-1">
                            <h1 class="mb-4 mt-4" data-aos="fade-up"
                                data-aos-delay="100">@lang('scientific-publications/main.scientific_publications')</h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <section class="site-section">

        <div class="site-section pb-0 pt-0" id="projects-section">
            <div class="container d-flex flex-column">
                <div class="solution-box-wrapper">
                    <div class="solution-box w-100">
                        <div class="box-header">
                            Scientific Publication
                        </div>
                        <div class="solution-sub-title" style="padding-bottom: 0;padding-top: 15px;">
                            Paper title :
                        </div>
                        <div class="solution-title pt-0" style="font-size: 20px;">
                            @lang('scientific-publications/main.main_description')
                        </div>
                        <div class="solution-sub-title"  style="padding-bottom: 0;padding-top: 15px; font-size: 16px;">
                            Abstract :
                        </div>
                        <div class="solution-description">
                            @lang('scientific-publications/main.sub_description')
                        </div>

                        <div class="discover-btn">
                            <a  href="{{route('download.scientific.pdf')}}"> @lang('scientific-publications/main.download_pdf')</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @include('includes.contact_us_button_section')



    </section>

@endsection