
@extends('layouts.app')

@section('content')


  <div class="site-section-cover overlay inner-page bg-light cover-electric-bus" data-aos="fade">

    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-10">

          <div class="box-shadow-content">
            <div class="block-heading-1">
              <h3 class="d-block mb-3 text-white"  data-aos="fade-up">@lang('electric-bus/main.public_transport')</h3>
              <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">@lang('electric-bus/main.electric_bus')</h1>
            </div>


          </div>
        </div>
      </div>
    </div>

  </div>

  <section class="site-section" style="padding-bottom: 50px;">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-8 mx-auto blog-content">
          <p class="lead">
            @lang('electric-bus/main.main_description')
          </p>

          @if($lang === 'en')
            <p class="text-center"><img src="/images/bus.png" alt="Image" class="img-fluid p-4"></p>
          @elseif($lang === 'de')
            <p class="text-center"><img src="/images/bus-de.png" alt="Image" class="img-fluid p-4" width="70%"></p>
          @endif

          <p>
            @lang('electric-bus/main.description_1') <br/>
            @lang('electric-bus/main.description_2')
          </p>

          <blockquote>
            <h3 class="pt-5 pb-3 text-center">
              @lang('electric-bus/main.main_target')
            </h3>
            <p>
              - @lang('electric-bus/main.target_1')   <br/>
              - @lang('electric-bus/main.target_2')   <br/>
              - @lang('electric-bus/main.target_3')   <br>
            </p>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

  @include('includes.contact_us_button_section')

  <div class="container" style="margin-top: 50px;">
    <div class="row">
      <div class="col-md-8 mx-auto blog-content">
        <blockquote>
          <h4 class="pt-3 pb-0 text-center">
            @lang('electric-bus/main.general_properties')
          </h4>
          <div class="d-flex justify-content-center flex-wrap">
            @if($lang === 'en')
              <img src="/images/bus-images/bus-system6.jpg" alt="Image" class="img-fluid p-2">
            @elseif($lang === 'de')
              <img src="/images/bus-images/bus-system6-de.jpg" alt="Image" class="img-fluid p-2">
            @endif
          </div>
          <h4 class="pt-3 pb-0 text-center">
            @lang('electric-bus/main.particular_bus')
          </h4>
          <div class="d-flex justify-content-center flex-wrap">
            @if($lang === 'en')
              <img src="/images/bus-images/bus-system7.jpg" alt="Image" class="img-fluid p-2">
            @elseif($lang === 'de')
              <img src="/images/bus-images/bus-system7.jpg" alt="Image" class="img-fluid p-2">
            @endif
          </div>


          <div id="slickAlbum" class="mt-5">
            <slick-album :images="{{json_encode($images)}}"></slick-album>
          </div>


          <h4 class="pt-5 pb-0 text-center">
            @lang('electric-bus/main.video_head_1')
          </h4>
          <div class="row d-flex justify-content-center">
            <video controls autoplay  class="w-100 p-3" style="max-width:448px;">
              <source src="/videos/bus/f1.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>

          <h4 class="pt-5 pb-0 text-center">
            @lang('electric-bus/main.video_head_2')
          </h4>
          <div class="row d-flex justify-content-center">
            <video controls autoplay  class="w-100 p-3" style="max-width:448px;">
              <source src="/videos/bus/f2.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>



        </blockquote>
      </div>
    </div>
  </div>


@endsection
