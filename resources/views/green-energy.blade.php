@extends('layouts.app')

@section('content')

  <div class="site-section-cover overlay inner-page bg-light solar-cover" data-aos="fade">

    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-10">

          <div class="box-shadow-content">
            <div class="block-heading-1">
              <h3 class="d-block mb-3 text-white"  data-aos="fade-up">@lang('green-energy/main.solar_tracker')</h3>
              <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">@lang('green-energy/main.green_energy') </h1>
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
            @lang('green-energy/main.main_description')
          </p>


          <div id="slickAlbum" class="mt-5">
            <slick-album :images="{{json_encode($images)}}"></slick-album>
          </div>

        </div>
      </div>
    </div>

    @include('includes.contact_us_button_section')

    <div class="container">

      <h3 class="text-center p-4 pt-5">
        @lang('green-energy/main.visual_of_5_forms')
      </h3>


      <div class="d-flex justify-content-center flex-wrap">
        <div>
          <video controls autoplay  class="w-100 p-3" style="max-width:448px;">
            <source src="/videos/tracker/f1.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>

        <div>
          <video controls autoplay class="w-100 p-3" style="max-width:448px;">
            <source src="/videos/tracker/f2.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>

        <div>
          <video controls autoplay class="w-100 p-3" style="max-width:448px;">
            <source src="/videos/tracker/f3.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>

        <div>
          <video controls autoplay class="w-100 p-3" style="max-width:448px;">
            <source src="/videos/tracker/f4.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>

        <div>
          <video controls autoplay class="w-100 p-3" style="max-width:448px;">
            <source src="/videos/tracker/f5.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>

  </section>

@endsection
