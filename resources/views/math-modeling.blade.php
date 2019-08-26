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

          <p class="text-center"><img src="/images/math-modeling/R-2.png" alt="Image" class="img-fluid p-4"></p>


          <blockquote>
            <h3 class="pt-5 pb-3 text-center">
              @lang('math-modeling/main.tasks_head')
              @lang('math-modeling/main.task1')
            </h3>
            <div class="d-flex flex-wrap justify-content-around">
              <div>
                • @lang('math-modeling/main.task1')<br/>
                • @lang('math-modeling/main.task2')<br/>
                <div style="padding-left: 20px;">
                  - @lang('math-modeling/main.task2_sub1')<br/>
                  - @lang('math-modeling/main.task2_sub1')<br/>
                </div>
                • @lang('math-modeling/main.task3')<br/>
                <div style="padding-left: 20px;">
                  - @lang('math-modeling/main.task3_sub1')<br/>
                  - @lang('math-modeling/main.task3_sub2')<br/>
                  - @lang('math-modeling/main.task3_sub3')<br/>
                  - @lang('math-modeling/main.task3_sub4')<br/>
                </div>
                • @lang('math-modeling/main.task4')<br/>
                • @lang('math-modeling/main.task5')<br/>
              </div>
              <div>
                •@lang('math-modeling/main.task6')<br/>
                <div style="padding-left: 20px;">

                  - @lang('math-modeling/main.task6_sub1')<br/>
                  - @lang('math-modeling/main.task6_sub1')<br/>
                </div>
                • @lang('math-modeling/main.task7')<br/>
                <div style="padding-left: 20px;">

                  - @lang('math-modeling/main.task7_sub1')<br/>
                  - @lang('math-modeling/main.task7_sub2')<br/>
                </div>
                •@lang('math-modeling/main.task8')<br/>
                <div style="padding-left: 20px;">

                  - @lang('math-modeling/main.task8_sub1')<br/>
                  - @lang('math-modeling/main.task8_sub2')<br/>
                  - @lang('math-modeling/main.task8_sub3')<br/>
                  - @lang('math-modeling/main.task8_sub4')<br/>
                </div>
              </div>
            </div>

          </blockquote>

          <h3 class="pt-5 pb-3 text-center">
            @lang('math-modeling/main.static_calc_head')
          </h3>
          <div>
            @lang('math-modeling/main.static_calc_main_desc') <br/>

            <div style="padding-left: 20px;">
              • @lang('math-modeling/main.static_calc_desc_point1') <br/>
              • @lang('math-modeling/main.static_calc_desc_point2') <br/>
              • @lang('math-modeling/main.static_calc_desc_point3') <br/>
              • @lang('math-modeling/main.static_calc_desc_point4') <br/>

           </div>
          </div>


          <h3 class="pt-5 pb-3 text-center">
            @lang('math-modeling/main.examples_head')
          </h3>

          <div>
            <img src="/images/bus-images/bus3.png" alt="bus static strength " style="width: 100%; margin-top: 35px;">

            <h5 class="pt-1 pb-3 text-center">
              @lang('math-modeling/main.static_strength_body')
            </h5>
          </div>

          <div>
            <img src="/images/math-modeling/R-2.png" alt="bus static strength " style="width: 100%; margin-top: 35px;">

            <h5 class="pt-1 pb-3 text-center">
              @lang('math-modeling/main.static_strength_gear')
            </h5>
          </div>

          <div class="pt-4">
            <img src="/images/math-modeling/1.jpg" alt="bus static strength " style="width: 100%; margin-top: 35px;">

            <h5 class="pt-1 pb-3 text-center">
              @lang('math-modeling/main.static_strength_joint')
            </h5>
          </div>

          {{-- --}}

        </div>
      </div>
    </div>

    @include('includes.contact_us_button_section')

    <div class="container">
      <div class="">

        <div class="row">
          <div class="col-md-8 mx-auto blog-content">
            <div class="pt-4">
              <img src="/images/math-modeling/2.jpg" alt="bus static strength " style="width: 100%; margin-top: 35px;">

              <h5 class="pt-1 pb-3 text-center">
                @lang('math-modeling/main.static_strength_installation')
              </h5>
            </div>


            <div class="pt-4">
              <img src="/images/math-modeling/3.jpg" alt="bus static strength " style="width: 100%; margin-top: 35px;">

              <h5 class="pt-1 pb-3 text-center">
                @lang('math-modeling/main.static_strength_roller')
              </h5>
            </div>

            <div class="pt-4">
              <img src="/images/math-modeling/4.jpg" alt="bus static strength " style="width: 100%; margin-top: 35px;">

              <h5 class="pt-1 pb-3 text-center">
                @lang('math-modeling/main.static_strength_tool')
              </h5>
            </div>


            <div class="pt-4">
              <img src="/images/math-modeling/5.jpg" alt="bus static strength " style="width: 100%; margin-top: 35px;">

              <h5 class="pt-1 pb-3 text-center">
                @lang('math-modeling/main.static_strength_pressure')
              </h5>
            </div>


            <div>
              <h3 class="pt-5 pb-3 text-center">
                @lang('math-modeling/main.dynamic_calc')
              </h3>

              <p>
                @lang('math-modeling/main.dynamic_calc_main_desc')
                <br/><br/>
                @lang('math-modeling/main.dynamic_calc_main_desc2')
              </p>
            </div>

            <div class="pt-4">
              <img src="/images/math-modeling/6.jpg" alt="bus static strength " style="width: 100%; margin-top: 35px;">

              <h5 class="pt-1 pb-3 text-center">
                @lang('math-modeling/main.first_forms')
              </h5>
            </div>


            <div class="pt-4">
              <img src="/images/math-modeling/7.jpg" alt="bus static strength " style="width: 100%; margin-top: 35px;">

              <h5 class="pt-1 pb-3 text-center">
                @lang('math-modeling/main.gearing_elements')
              </h5>
            </div>


            <div>
              <h3 class="pt-5 pb-3 text-center">
                @lang('math-modeling/main.thermal_calc')
              </h3>

              <p>
                • @lang('math-modeling/main.thermal_calc_point1') <br/><br/>
                • @lang('math-modeling/main.thermal_calc_point2') <br/><br/>
              </p>
            </div>


            <div class="pt-4 d-flex align-items-center flex-column">
              <img src="/images/math-modeling/8.jpg" alt="bus static strength " style="width: 50%; margin-top: 35px;">

              <h5 class="pt-1 pb-3 text-center">
                @lang('math-modeling/main.finite_element_motor')
              </h5>
            </div>

            <div class="pt-4 d-flex align-items-center flex-column">
              <img src="/images/math-modeling/9.jpg" alt="bus static strength " style="width: 50%; margin-top: 35px;">

              <h5 class="pt-1 pb-3 text-center">
                @lang('math-modeling/main.pressure_distribution')
              </h5>
            </div>



            <div class="pt-4">
              <h3 class="pt-5 pb-3 text-center">
                @lang('math-modeling/main.control_design')
              </h3>

              <div class="pt-1 d-flex align-items-center flex-column">
                <img src="/images/math-modeling/10.jpg" alt="bus static strength " style="width: 50%; margin-top: 35px;">

                <h5 class="pt-1 pb-3 text-center">
                  @lang('math-modeling/main.structure_analysis')

                </h5>
              </div>
            </div>

            <div>
              <h3 class="pt-5 pb-3 text-center">
                @lang('math-modeling/main.large_models_calc_head')
              </h3>

              <p>
                @lang('math-modeling/main.large_models_calc_desc')
              </p>


              <div class="pt-1 d-flex align-items-center flex-column">
                <img src="/images/math-modeling/11.jpg" alt="bus static strength " style="width: 75%; margin-top: 35px;">

                <h5 class="pt-1 pb-3 text-center">
                  @lang('math-modeling/main.analysis_scheme')
                </h5>
              </div>

            </div>

            <div>
              <h3 class="pt-5 pb-3 text-center">
                @lang('math-modeling/main.choice_head')
              </h3>

              <p>
                @lang('math-modeling/main.choice_desc1')
                <br/><br/>
                @lang('math-modeling/main.choice_desc2')
              </p>

            </div>



          </div>
        </div>
      </div>

    </div>
  </section>

@endsection
