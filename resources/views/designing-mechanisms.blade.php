@extends('layouts.app')

@section('content')

    <div class="site-section-cover smaller overlay inner-page bg-light cover-math-modeling" data-aos="fade">

        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-10">

                    <div class="box-shadow-content">
                        <div class="block-heading-1">
                            <h3 class="d-block mb-3 text-white"  data-aos="fade-up"> @lang('designing-mechanisms/main.sub_head')</h3>
                            <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">@lang('designing-mechanisms/main.head')</h1>
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
                    <p class="lead" style="line-height: 36px;">
                        <b>@lang('designing-mechanisms/main.sub_head') :</b><br/>

                        @lang('designing-mechanisms/main.main_points') <br/><br/>
                    </p>

                </div>
            </div>
        </div>

        @include('includes.contact_us_button_section')


        <div id="slickAlbum">
            <slick-album :images="{{json_encode($images)}}"></slick-album>
        </div>


    </section>

@endsection
