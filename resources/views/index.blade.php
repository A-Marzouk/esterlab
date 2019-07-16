@extends('layouts.app')

@section('content')


  <div class="owl-carousel slide-one-item">

    <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/hero_2-min.jpg'); " >
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
            <p><a href="#contact-section" class="btn btn-white-outline border-w-2 btn-md"> @lang('index/slide.btn_text')</a></p>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/hero_1-min.jpg'); " >
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12 col-lg-7 text-center">
            <h1> @lang('index/slide.slide2_main_text')</h1>
          </div>
        </div>
      </div>
    </div>

  </div>


  <div class="pb-5" style="position: relative; z-index: 8;">
    <div class="container">
      <div class="row smart-solutions-section">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <img src="images/gears-min.jpg" alt="Image" class="img-fluid mb-3" style="height: 195px; width: 350px;">
          <h3 class="text-primary h4 mb-2">Smart solutions</h3>
          <p>our main task is developing smart solutions to make life safety and insure more comfortable for future users of multifunctional  mechanical applications.</p>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <img src="images/science-min.jpg" alt="Image" class="img-fluid mb-3" style="height: 195px; width: 350px;">
          <h3 class="text-primary h4 mb-2"> Scientific research</h3>
          <p>

            it's the main pillar in our ideology. Our developments must keep up with trends of science.

          </p>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <img src="images/hero_1-min.jpg" alt="Image" class="img-fluid mb-3" style="height: 195px; width: 350px;">
          <h3 class="text-primary h4 mb-2">Сost effective
          </h3>
          <p>
            it's not enough to solve your technical issue. We're talent with balancing ideal solution in a cost effective way            </p>

        </div>
      </div>
    </div>
  </div>

  <div class="pt-5" id="investors-section">
    <div class="container d-flex align-items-center flex-column">
      <div class="row">
        <div class="col-12 text-center">
          <div class="block-heading-1">
            <h2>Applications which our specialists are using</h2>
          </div>
        </div>
      </div>
      <div class="row align-items-center pt-5 d-flex justify-content-center flex-wrap w-100">
        <div>
          <img src="images/image1.gif" alt="Image" class="img-fluid" style=" margin-top:20px; ">
        </div>
        <div>
          <img src="images/image2-min.png" alt="Image" class="img-fluid" style=" margin-top:20px; ">
        </div>
        <div>
          <img src="images/image3-min.jpg" alt="Image" class="img-fluid" style=" margin-top:20px; ">
        </div>
        <div>
          <img src="images/image4-min.png" alt="Image" class="img-fluid" style=" margin-top:20px; ">
        </div>
      </div>
      <div  class="row align-items-center pt-5 d-flex justify-content-center flex-wrap w-100">
        <div>
          <img src="images/image5-min.png" alt="Image" class="img-fluid" style=" margin-top:55px; ">
        </div>
        <div>
          <img src="images/image7-min.png" alt="Image" class="img-fluid ml-lg-4" style=" margin-top:55px; ">
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

  <div class="site-section" id="about-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-6 mb-4">
          <img src="images/design-thinking-min.jpg" alt="" style="width: 100%">
        </div>
        <div class="col-lg-5 ml-auto">
          <h2 class="text-primary mb-4">Welcome to ESTERLAB</h2>
          <p>A fast growing research & developing company with a professional team who is smartly developing your ideas from scratch up to prototype in the world of mechanisms.
          </p>
          <p>Our success is based on find the optimal solution with high quality & cost effectively results which meet the consumer needs.</p>

        </div>
      </div>
      <div class="row pt-5">
        <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
          <div class="block-counter-1">
            <span class="number"><span data-number="46">0</span></span>
            <span class="caption">Years of Experience</span><br/>
            <span class="caption"> in designing in the areas of mechanical engineering & material science</span>
          </div>
        </div>
        <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
          <div class="block-counter-1">
            <span class="number">3</span>
            <span class="caption">Years of Experience</span><br/>
            <span class="caption">designing details made from polymer composite materials</span>
          </div>
        </div>
        <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
          <div class="block-counter-1">
            <span class="number">2</span>
            <span class="caption">Years of Experience</span><br/>
            <span class="caption">
                 in developing novel composite material based on rubber with nanoparticles as filler
              </span>
          </div>
        </div>
        <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
          <div class="block-counter-1">
            <span class="number"><span data-number="35 ">0</span></span>
            <span class="caption">Open source published papers</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-light pb-0" id="services-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12">
          <div class="block-heading-1 text-center">
            <h2>Our concept of development</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 mb-4">
          <span class="icon-find_in_page d-block mb-3 display-3 text-secondary"></span>
          <h3 class="text-primary h4 mb-2">Scientific research</h3>
          <p>
            Our team is analyzing market to offer you the best solution
          </p>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
          <span class="icon-brush d-block mb-3 display-3 text-secondary"></span>
          <h3 class="text-primary h4 mb-2">Design</h3>
          <p>
            we're finding the optimal solution which meets your needs.
          </p>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
          <span class="icon-developer_board d-block mb-3 display-3 text-secondary"></span>
          <h3 class="text-primary h4 mb-2">Production development </h3>
          <p>
            our specialists are turning your idea into reality
          </p>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
          <span class="icon-extension d-block mb-3 display-3 text-secondary"></span>
          <h3 class="text-primary h4 mb-2">Prototype</h3>
          <p>
            Esterlab is working on your idea till getting sample for testing
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section pb-0" id="projects-section">
    <div class="container d-flex flex-column">
      <div class="block-heading-1 text-center p-5 pt-0">
        <h2>Our Solutions</h2>
      </div>
      <div class="d-flex justify-content-between wrap-on-phone">
        <div class="d-flex flex-column flex-wrap w-100  p-3">
          <div class="mr-lg-5 mb-4 d-flex justify-content-center" style="height: 270px;">
            <img src="images/TRACKER_2.png" alt="Image" class="" style="width: 250px; height: 250px;">
          </div>
          <div style="margin-top: 14px;">
            <h2 class="h4 text-black">Green energy</h2>
            <span class="d-block text-secondary mb-4">Solar tracker EL-98</span>
            <p>A tracker is a smart robot designed to orient the supporting structure in such a way as to obtain maximum efficiency from photovoltaic modules (or other devices installed on the tracker).</p>
            <p>
              <a href="/green-energy">Read more..</a>
            </p>
          </div>
        </div>

        <div class="d-flex flex-column flex-wrap w-100 pt-md-0 pt-5  p-3">
          <div class="mr-lg-5 mb-4 d-flex justify-content-center" style="height: 270px;">
            <img src="images/bus-images/bus2.png" alt="Image" class="" style="width: 250px; height: 250px;">
          </div>
          <div style="margin-top: 30px;">
            <h2 class="h4 text-black">Automotive</h2>
            <span class="d-block text-secondary mb-4">Electric Bus "Tarpan"</span>
            <p>
              Production of electric/CNG/hybrid microbuses<br/>
              Reduce the weight of the bus<br/>
              Maximum using of electric/green energy
            </p>
            <p>
              <a href="/electric-bus">Read more..</a>
            </p>
          </div>
        </div>

        <div class="d-flex flex-column flex-wrap w-100 pt-md-0 pt-5 p-3">
          <div class="mr-lg-5 mb-4 d-flex justify-content-center" style="height: 270px;">
            <img src="images/R-4.png" alt="Image" class="" style="width: 250px; height: 250px;">
          </div>
          <div style="margin-top: 30px;">
            <h2 class="h4 text-black">Math modeling</h2>
            <span class="d-block text-secondary mb-4">Solving mechanical problems</span>
            <p>
              Structural strength is a mandatory requirement when designing products. In any industry,
              engineers ask themselves the same fundamental questions: “How long will this product last for daily use?”, “Under what conditions will it break?”
            </p>
            <p>
              <a href="/math-modeling">Read more..</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section pb-0 pt-0" id="certificates">
    <div class="container d-flex flex-column align-items-center">
      <div class="block-heading-1 text-center p-5 pt-0">
        <h2>Certificates</h2>
      </div>


      <div class="multiple-items pb-4" style="width: 90%;">
        <a class="d-flex justify-content-center align-items-center" href="javascript:void(0)"  data-toggle="modal" data-target="#certificate_1">
          <img src="images/certificates/1.jpg" alt="" style="width: 250px; height: 300px;">
          <div class="certificate-title">
            Quality Management Systems <br/>
            Internal Auditor Training course
          </div>
        </a>
        <a class="d-flex justify-content-center" href="javascript:void(0)"  data-toggle="modal" data-target="#certificate_2">
          <img src="images/certificates/2.jpg" alt="" style="width: 250px; height: 300px;">
          <div class="certificate-title">
            Aviation Security Instructors Course
          </div>
        </a>
        <a class="d-flex justify-content-center" href="javascript:void(0)"  data-toggle="modal" data-target="#certificate_3">
          <img src="images/certificates/3.jpg" alt="" style="width: 250px; height: 300px;">
          <div class="certificate-title">
            Quality Management Systems <br/>
            Requirements for Aviation, Space and Defense Organizations <br/>
            Internal Auditor Training course
          </div>
        </a>

        <a class="d-flex justify-content-center" href="javascript:void(0)"  data-toggle="modal" data-target="#certificate_4">
          <img src="images/certificates/4.jpg" alt="" style="width: 250px; height: 300px;">
          <div class="certificate-title">
            Intellectual Property Registration Certificate

          </div>
        </a>

        <a class="d-flex justify-content-center" href="javascript:void(0)"  data-toggle="modal" data-target="#certificate_5">
          <img src="images/certificates/5.jpg" alt="" style="width: 250px; height: 300px;">
          <div class="certificate-title">
            Initial Aviation Security Training of Aviation Personnel
          </div>
        </a>

        <a class="d-flex justify-content-center" href="javascript:void(0)"  data-toggle="modal" data-target="#certificate_6">
          <img src="images/certificates/6.jpg" alt="" style="width: 250px; height: 300px;">
          <div class="certificate-title">
            ICAO SAFETY MANAGEMENT SYSTEMS TRAINING COURSE
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="site-section bg-light pt-5" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-5">
          <div class="block-heading-1">
            <span>Get In Touch</span>
            <h2>Contact Us</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 ml-auto">
          <h4 class="text-black pt-1">Need to know more on details?<br><br/>
          </h4>
          <h6>
            <div class="row pt-1">
              <div class="col-md-2">
                Address :
              </div>
              <div class="col-md-4">
                60 Sichovych Striltsiv St., Kiev, Ukraine, 04050 <br>
              </div>
            </div>
            <div class="row pt-1">
              <div class="col-md-2 col-4">
                Tel./Fax :
              </div>
              <div class="col-md-4 col-8">
                <a href="tel:+38 068 192 92 92">+38 068 192 92 92
                </a>
              </div>
            </div>
            <div class="row pt-1">
              <div class="col-md-2 col-4">
                Email :
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


@endsection