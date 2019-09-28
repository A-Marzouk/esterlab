@extends('layouts.app')

@section('content')

  <div class="site-section-cover overlay inner-page bg-light cover-math-modeling" data-aos="fade">

    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-10">

          <div class="box-shadow-content">
            <div class="block-heading-1">
              <h3 class="d-block mb-3 text-white"  data-aos="fade-up"> @lang('math-modeling/main.solving_mechanical_problems')</h3>
              <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">@lang('math-modeling/main.math_modeling')</h1>
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
            <b>@lang('math-modeling/main.solving_mechanical_problems_head')</b><br/>
            @lang('math-modeling/main.main_description') <br/><br/>
            @lang('math-modeling/main.sub_description')
          </p>

        </div>
      </div>
    </div>


    @include('includes.contact_us_button_section')

    <div id="slickAlbum" class="mt-5">

      <b class="d-flex w-100 justify-content-center">
        @lang('math-modeling/main.examples_head') <br/>
      </b>

      <slick-album :images="{{json_encode($images)}}"></slick-album>
    </div>



  </section>

@endsection
