
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

  <section class="site-section">
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

          <p>
          <h3 class="pt-5 text-center">
            @lang('electric-bus/main.create_smart_exp')
          </h3>
          </p>
          <div class="d-flex justify-content-center flex-wrap ">
            <div class="d-flex flex-column align-items-center p-4">
              <div>
                @lang('electric-bus/main.passengers')
              </div>
              <img src="/images/bus-images/bus-image-a.png" alt="" style="width: 120px; height: 120px;">
            </div>
            <div class="d-flex flex-column align-items-center p-4">
              <div>
                @lang('electric-bus/main.cities')
              </div>
              <img src="/images/bus-images/bus-image-b.png" alt="" style="width: 120px; height: 120px;">
            </div>
            <div class="d-flex flex-column align-items-center p-4">
              <div>
                @lang('electric-bus/main.operators')
              </div>
              <img src="/images/bus-images/bus-image-c.png" alt="" style="width: 120px; height: 120px;">
            </div>
            <div class="d-flex flex-column align-items-center p-4">
              <div>
                @lang('electric-bus/main.manufacturers')
              </div>
              <img src="/images/bus-images/bus-image-d.png" alt="" style="width: 120px; height: 120px;">
            </div>
          </div>


          <blockquote>
            <h3 class="pt-5 pb-3 text-center">
              @lang('electric-bus/main.benefits')
            </h3>
            <p>
              - @lang('electric-bus/main.benefit_1')<br/>
              - @lang('electric-bus/main.benefit_2')<br/>
              - @lang('electric-bus/main.benefit_3')<br/>
              - @lang('electric-bus/main.benefit_4') <br/>
              - @lang('electric-bus/main.benefit_5')<br/>
            </p>
          </blockquote>

        </div>
        <div class="d-flex pt-5 flex-wrap justify-content-center align-items-center">
          <div class="text-center"><img src="/images/bus-images/bus4.jpg" alt="Image" class="img-fluid"  style="width: 350px;" ></div>
          <div class="text-center"><img src="/images/bus-images/bus5.jpg" alt="Image" class="img-fluid"  style="width: 350px;" ></div>
          <div class="text-center"><img src="/images/bus-images/bus6.jpg" alt="Image" class="img-fluid"  style="width: 350px;"></div>
        </div>
      </div>
    </div>
  </section>

  @include('includes.contact_us_button_section')


  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto blog-content">
        <blockquote>
          <h2 class="pt-5 pb-3 text-center">
            @lang('electric-bus/main.analysis_head')
          </h2>
          <h4 class="pt-3 pb-0 text-center">
            @lang('electric-bus/main.analysis_sub_head')
          </h4>
          @if($lang === 'en')
            <img src="/images/bus-images/bus-system1.jpg" alt="Image" class="img-fluid p-2">
          @elseif($lang === 'de')
            <img src="/images/bus-images/bus-system1-de.jpg" alt="Image" class="img-fluid p-2">
          @endif
          <img src="/images/bus-images/bus-system1_2-de.png" alt="Image" class="img-fluid p-2">
          <div class="text-center pb-4">
            <small>
              @lang('electric-bus/main.figure_1')
            </small>
          </div>
          <h4 class="pt-3 pb-0 text-center">
            @lang('electric-bus/main.strength_for_samples')
          </h4>
          <div class="d-flex justify-content-center flex-wrap">
            <img src="/images/bus-images/bus-system2-de.jpg" alt="Image" class="img-fluid p-2">
            <img src="/images/bus-images/bus-system3-de.png" alt="Image" class="img-fluid p-2">
            <div class="text-center pb-4">
              <small>
                @lang('electric-bus/main.figure_2')
              </small>
            </div>
            <img src="/images/bus-images/bus-system4-de.png" alt="Image" class="img-fluid p-2">
            <div class="text-center pb-4">
              <small>
                @lang('electric-bus/main.figure_3')
              </small>
            </div>
            <img src="/images/bus-images/bus-system5-de.png" alt="Image" class="img-fluid p-2">
            <div class="text-center pb-4">
              <small>
                @lang('electric-bus/main.figure_4')
              </small>
            </div>
          </div>

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


          <h3 class="pt-5 pb-3 text-center">
            @lang('electric-bus/main.interior_head')
          </h3>
          <p>
            - @lang('electric-bus/main.interior_1') <br/>
            - @lang('electric-bus/main.interior_2') <br/>
            - @lang('electric-bus/main.interior_3') <br/>
            - @lang('electric-bus/main.interior_4') <br/>
            - @lang('electric-bus/main.interior_5') <br/>
            - @lang('electric-bus/main.interior_6') <br/>
            - @lang('electric-bus/main.interior_7') <br/>
          </p>
          <div class="d-flex justify-content-center flex-wrap">
            <img src="/images/bus-images/bus-system8.jpg" alt="Image" class="img-fluid p-2">
          </div>

          <h4 class="pt-3 pb-0 text-center">
            @lang('electric-bus/main.mock_up')
          </h4>
          <div class="d-flex justify-content-center flex-wrap">
            <img src="/images/bus-images/bus-system9.jpg" alt="Image" class="img-fluid p-2">
          </div>

          <h4 class="pt-3 pb-0 text-center">
            @lang('electric-bus/main.e_pay_head')
          </h4>

          <div class="row">
            <div class="col-md-6 d-flex align-items-center" style="font-size: larger;">
              @lang('electric-bus/main.e_pay1')
            </div>
            <div class="col-md-6 d-flex justify-content-center">
              <img src="/images/bus-images/bus-system10.jpg" alt="Image" class="img-fluid p-2">
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 d-flex align-items-center" style="font-size: larger;">
              @lang('electric-bus/main.e_pay2')
            </div>
            <div class="col-md-6 d-flex justify-content-center">
              <img src="/images/bus-images/bus-system11.jpg" alt="Image" class="img-fluid p-2">
            </div>
          </div>

          <h4 class="pt-5 pb-0 text-center">
            @lang('electric-bus/main.gps_head')
          </h4>
          <div class="row">
            <div class="col-md-6 d-flex align-items-center" style="font-size: larger;">
              @lang('electric-bus/main.gps1')
            </div>
            <div class="col-md-6 d-flex justify-content-center">
              <img src="/images/bus-images/bus-system12.jpg" alt="Image" class="img-fluid p-2">
            </div>
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