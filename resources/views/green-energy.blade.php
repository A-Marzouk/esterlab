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

          <p><img src="/images/solar-image.png" alt="Image" class="img-fluid"></p>
          <p class="p-3">
          <h3 class="text-center">
            @lang('green-energy/main.tracker_overview')
          </h3>
          </p>
          <div class="d-flex justify-content-center">
            @if($lang === 'en')
              <p><img src="/images/solar-image2.png" alt="Image" class="img-fluid"></p>
            @elseif($lang === 'de')
              <p><img src="/images/green-energy-de.jpg" alt="Image" class="img-fluid"></p>
            @endif
          </div>


          <div class="d-flex justify-content-center pt-5">
            <p><img src="/images/tracker.png" alt="Image" class="img-fluid w-100"></p>
          </div>

          <div class="d-flex justify-content-center pt-5">
            <p><img src="/images/tracker/tracker-4.png" alt="Image" class="img-fluid w-100"></p>
          </div>


          <h3 class="text-center p-4 pt-5">
            @lang('green-energy/main.visual_of_5_forms')
          </h3>


        </div>

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
    </div>
  </section>

@endsection