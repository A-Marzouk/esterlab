@extends('layouts.app')

@section('content')

    <div class="site-section-cover overlay inner-page bg-light science-cover" data-aos="fade">

        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-10">

                    <div class="box-shadow-content">
                        <div class="block-heading-1">
                            <h3 class="d-block mb-3 text-white"  data-aos="fade-up">@lang('scientific-publications/main.scientific_publications_sub')</h3>
                            <h1 class="mb-4" data-aos="fade-up"
                                data-aos-delay="100">@lang('scientific-publications/main.scientific_publications')</h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <section class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto blog-content">
                    <p class="lead">
                        @lang('scientific-publications/main.main_description')
                    </p>
                        <br/>
                    <p>
                        @lang('scientific-publications/main.sub_description')
                    </p>

                    <div class="row">
                        <div class="col-12">
                            <div>
                                @lang('scientific-publications/main.more_info')
                            </div>
                            <div class="mt-3">
                                <a href="{{route('download.scientific.pdf')}}" class="d-flex align-items-center pr-3"  style="border:1px lightgrey dotted; width: fit-content;">
                                    <img src="/images/scientific-publications/pdf-icon.png" width="100px" alt="download pdf icon">
                                    <div>
                                        @lang('scientific-publications/main.download_pdf')
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('includes.contact_us_button_section')



    </section>

@endsection