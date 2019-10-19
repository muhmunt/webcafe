@extends('layouts.landing')


@section('custom-css')

    <style>
        .bg-gradient-brown {
            background: linear-gradient(87deg, #f4f5f7 0, #f4f5f7 100%) !important;
        }

        .bg-gradient-black {
            background: linear-gradient(87deg, #232526 0, #3b3b3b 100%) !important;
        }

        .bg-white{
            background: #ffffff;
        }

        .bg-silver{
            background: #dadad2;
        }

        .bg-black{
            background: #383838;
        }

        .bg-gradient-red{
            background: #FF416C;
            background: -webkit-linear-gradient(to left, #FF4B2B, #FF416C);
            background: linear-gradient(to left, #FF4B2B, #FF416C);
        }

        .btns-gradient-red{
            background: #FF416C;
            background: -webkit-linear-gradient(to left, #FF4B2B, #FF416C);
            background: linear-gradient(to left, #FF4B2B, #FF416C);

            border: none !important;
        }

        .btns-primary{
            background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
        }

        .btns-warning{
            background: linear-gradient(87deg, #fb6340 0, #fbb140 100%) !important;
        }

        .btns-success{
            background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;

        }

        input[type=text] {
            color: rgba(59, 59, 59, 0.8) !important;
        }

        input[type=email] {
            color: rgba(59, 59, 59, 0.8) !important;
        }

        .f-black{
            color: rgba(59, 59, 59, 1) !important;
        }

        .f-red{
            background: -webkit-linear-gradient(#FF4B2B, #FF416C);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .fill-reds{
            fill: #FF4B2B;
        }

        .shadow-little{
            box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.2);
        }

        .img-gallery{

            min-width: 500x;
            width: 250px;
            height: 250px;
            border-radius: 15px;
        }


    </style>

@endsection

@section('content')


    <div class="position-relative">
        <!-- shape Hero -->
        <section class="section section-lg pb-250 view" id="intro">
            <div>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container py-lg-md d-flex">
                <div class="col px-0">
                  <div class="row mt-3 d-flex justify-content-center">
                    <div class="col-lg-10 text-center">
                      <img class="mx-auto" style="width: 100px;" src="{{ asset('/public/img/UNCLE-JO/logo1.png') }}">
                      <h1 class="display-3  text-white">A beautiful Design System<span>completed with examples</span></h1>
                      <p class="lead  text-white">The design system comes with four pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                      <div class="btn-wrapper">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
    </div>
    {{-- INI ILANG DULU --}}
    <section class="section section-lg pt-lg-0 mt--200 d-none">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="row row-grid">
                <?php $i = '3' ?>
                @foreach ($news as $key => $n)
                <?php
                if ($key === 0) {
                  $color = 'primary';
                }elseif($key == 1){
                  $color = 'success';
                }else{
                  $color = 'warning';
                }
                ?>

                <div class="col-lg-4">
                  <div class="card card-lift--hover shadow p-0 border-0" style="border-radius:30px">
                    <img src="{{asset('public/upload/news/'.$n->foto)}}" alt="" class="card-img-top img-fluid p-0" style="border-radius:30px">
                    <div class="card-body py-5">
                      <div class="icon icon-shape icon-shape-{{$color}} rounded-circle mb-4">
                        <i class="ni ni-check-bold"></i>
                      </div>
                      <h6 class="text-{{$color}} text-uppercase">
                        {{ $n->title }}
                      </h6>
                      <small>Seat : {{$n->seat}}</small>
                      <p class="description mt-3">
                          {!! $n->description !!}
                      </p>
                      <div>
                        <span class="badge badge-pill badge-{{$color}}">design</span>
                        <span class="badge badge-pill badge-{{$color}}">system</span>
                        <span class="badge badge-pill badge-{{$color}}">creative</span>
                      </div>
                      <a href="#" class="btn btn-{{$color}} mt-4">Learn more</a>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
    </section>
    {{-- SAMPE SINI --}}
    {{-- workshop --}}
    <section class="section" id="workshop">
        <div class="container">
          <div class="row row-grid align-items-center">

            <div class="col-md-6">
              <div class="pl-md-5">
                <div class="icon icon-lg icon-shape bg-gradient-black shadow rounded-circle mb-5">
                  <i class="ni ni-single-02 text-secondary"></i>
                </div>
                <h1 class="display-3 text-primary">Workshop Uncle Jo</h1>
                <p class="lead font-weight-light text-dark">Don't let your uses guess by attaching tooltips and popoves to any element. Just make sure you enable them first via JavaScript.</p>
                <p class="text-dark font-weight-light">The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                <p class="text-dark font-weight-light">The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                <a href="#" class="font-weight-bold text-primary mt-5">A beautiful UI Kit for impactful websites</a>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card bg-dark shadow border-0">
                <img src="{{asset('public/img/UNCLE-JO/coffe-1.jpg')}}" class="card-img-top" alt="image">
                <blockquote class="card-blockquote">
                  <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                    <polygon points="0,52 583,95 0,95" class="fill-dark" />
                    <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-dark" />
                  </svg>
                  <h4 class="display-3 font-weight-bold text-white">Coffe Time</h4>
                  <p class="lead text-italic text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens.</p>
                </blockquote>
              </div>
            </div>

          </div>
        </div>
    </section>
    {{-- end workshop --}}
    {{-- begin youtube --}}

    <section class="section bg-gradient-black" id="youtube">

        <div class="container" data-aos="fade-up">
            <div class="title-padding text-center">
                <div class="d-flex px-4">
                    <div>
                        <div class="icon icon-lg icon-shape bg-gradient-secondary shadow rounded-circle text-white">
                            <i class="ni ni-building text-dark"></i>
                        </div>
                    </div>
                    <div class="pl-4">
                        <h4 class="display-3 text-white">
                            Coffe Document
                        </h4>

                    </div>
                </div>
            </div>

            {{-- <div class="owl-carousel owl-theme owl-1">
                    <div class="item">
                        <div class="text-center">
                            <div class="card-title">
                                <iframe class="frame-yt" src="https://www.youtube.com/embed/N2Y2vQ-1m7M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="text-center">
                            <div class="card-title">
                                <iframe class="frame-yt" src="https://www.youtube.com/embed/mobbPE8_Npc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            </div>
                        </div>
                    <div class="item">
                    <div class="text-center">
                        <div class="card-title">
                            <iframe class="frame-yt" src="https://www.youtube.com/embed/0jA83apkSic" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </section>
    {{-- end youtube --}}
    {{-- begin news  --}}
    <div class="swiper-container">
      <div class="swiper-wrapper">
    @foreach ($news as $key => $n)
            <?php
            if($key === 0 ){
              $color = 'warning';
            }elseif($key == 1){
              $color = 'success';
            }else{
              $color = 'primary';
            }
            ?>
      <section class="section swiper-slide bg-white section-lg" id="news">
        <div class="container">
          <div class="row">
                  <div class="col-md-6 order-md-2">
                      <img src="{{asset('public/img/ui-images/team.png')}}" class="img-fluid floating" alt="image">
                    </div>
                    <div class="col-md-6 order-md-1">
                      <div class="pr-md-5">
                        <div class="icon icon-lg icon-shape icon-shape-{{$color}} shadow rounded-circle mb-5">
                          <i class="ni ni-settings-gear-65"></i>
                        </div>
                        <h3>
                            {{$n->title}}
                        </h3>
                        <p>
                            {!!$n->description!!}
                        </p>
                        <ul class="list-unstyled mt-5">
                          <li class="py-2">
                            <div class="d-flex align-items-center">
                              <div>
                                <div class="badge badge-circle badge-{{$color}} mr-3">
                                  <i class="ni ni-settings-gear-65"></i>
                                </div>
                              </div>
                              @php
                                  $tgl = date("Y-m-d", strtotime($n->tgl_mulai));
                                  $mulai = date("H:i", strtotime($n->tgl_mulai));
                                  $akhir = date("H:i", strtotime($n->tgl_akhir));
                                  $tanggal = Carbon\Carbon::parse($tgl)->formatLocalized('%d %B %Y')
                              @endphp
                              <div>
                                <h6 class="mb-0">
                                  {{ $tanggal }}
                                </h6>
                              </div>
                            </div>
                          </li>
                          <li class="py-2">
                            <div class="d-flex align-items-center">
                              <div>
                                <div class="badge badge-circle badge-{{$color}} mr-3">
                                  <i class="ni ni-html5"></i>
                                </div>
                              </div>
                              <div>
                                <h6 class="mb-0">
                                  {{ $mulai.' - '.$akhir }}
                                </h6>
                              </div>
                            </div>
                          </li>
                          <li class="py-2">
                            <div class="d-flex align-items-center">
                              <div>
                                <div class="badge badge-circle badge-{{$color}} mr-3">
                                  <i class="ni ni-satisfied"></i>
                                </div>
                              </div>
                              <div>
                                <h6 class="mb-0">
                                    {{ $n->seat }}
                                    Seat
                                </h6>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
              </div>
            </div>
          </section>
            @endforeach
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>

    {{-- end news  --}}

    {{-- begin gallery  --}}

    <section class="section bg-gradient-black" id="gallery" style="padding-bottom: 100px;">
        <div class="container">
          <div class="row row-grid align-items-center">
            <div class="col-lg-12 order-lg-1">
              <div class="d-flex px-3">
                <div>
                  <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                    <i class="ni ni-building text-primary"></i>
                  </div>
                </div>
                <div class="pl-4" style="padding-bottom: 70px;">
                  <h4 class="display-3 text-white">Caffee Gallery</h4>
                </div>
              </div>
                <div class="row mx-auto">
                    @foreach ($galleries as $g)
                    <div class="col-md-4 galleries-img pb-5">
                        <a href="{{asset('public/upload/galleries/'.$g->picture)}}" data-lightbox=" roadtrip">
                            <img class="img-gallery js-tilt shadow" data-tilt src="{{asset('public/upload/galleries/'.$g->picture)}}">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
          </div>
        </div>
        <div class="row"></div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew zindex-100">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>

    </section>
    {{-- end gallery  --}}
    {{-- begin participant get  --}}
    <section class="section section-lg" id="get">
        <div class="container">
          <div class="row justify-content-center text-center mb-lg">
            <div class="col-lg-8">
              <h2 class="display-3 text-dark">Apa kata peserta workshop</h2>
              <p class="lead font-weight-light text-black">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record maximum.</p>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            @foreach ($participants as $key => $p)
            <?php
            if($key === 0 ){
              $color = 'warning';
            }elseif($key == 1){
              $color = 'success';
            }else{
              $color = 'primary';
            }
            ?>
            <div class="col-lg-4">
              <div class="px-4">
                <img src="{{asset('public/upload/participants/'.$p->picture)}}" class="rounded-circle shadow-little bg-gradient-{{$color}} img-gallery p-4">
                <div class="pt-4 text-center">
                  <h5 class="title">
                    <span class="d-block mb-1">{{ucfirst($p->title)}}</span>
                    <small class="h6 text-muted">{!!ucfirst(strtolower($p->description))!!}</small>
                  </h5>
                  <div class="mt-3 mb-5">
                    <a href="#" class="btn btns-{{$color}} btn-icon-only rounded-circle">
                      <i class="fa fa-home text-secondary"></i>
                    </a>
                    <a href="#" class="btn btns-{{$color}} btn-icon-only rounded-circle">
                      <i class="fa fa-user text-secondary"></i>
                    </a>
                    <a href="#" class="btn btns-{{$color}} btn-icon-only rounded-circle">
                      <i class="fa fa-gear text-secondary"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    </section>
    {{-- end participants get  --}}
    {{-- begin profile  --}}
    <section class="section" id="profile">
        <div class="container">
          <div class="row row-grid align-items-center">
            <div class="col-md-6">
              <div class="card bg-dark shadow border-0">
                <img src="{{asset('public/img/UNCLE-JO/coffe-1.jpg')}}" class="card-img-top" alt="image">
                <blockquote class="card-blockquote">
                  <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                    <polygon points="0,52 583,95 0,95" class="fill-dark" />
                    <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-dark" />
                  </svg>
                  <h4 class="display-3 font-weight-bold text-white">Coffe Time</h4>
                  <p class="lead text-italic text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens.</p>
                </blockquote>
              </div>
            </div>
            <div class="col-md-6">
              <div class="pl-md-5">
                <div class="icon icon-lg icon-shape bg-gradient-red shadow rounded-circle mb-5">
                  <i class="ni ni-single-02 text-secondary"></i>
                </div>
                <h1 class="display-3 f-red">Profile Uncle Jo</h1>
                <p class="lead font-weight-light text-dark">Don't let your uses guess by attaching tooltips and popoves to any element. Just make sure you enable them first via JavaScript.</p>
                <p class="text-dark font-weight-light">The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                <p class="text-dark font-weight-light">The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                <a href="#" class="font-weight-bold f-red mt-5">A beautiful UI Kit for impactful websites</a>
              </div>
            </div>
          </div>
        </div>
    </section>
    {{-- end profile  --}}
    {{-- begin register  --}}
    <section class="section section-lg bg-gradient-black" id="register">
        <div class="container pt-lg pb-100">
        </div>
    </section>

    <section class="section section-lg pt-lg-0 bg-gradient-black">
        <div class="container">
          <div class="row mt--300">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-7 pr-0">
                        <form action="{{ route('register_workshop') }}" method="post" id="form-register">
                        @csrf
                        <div class="card bg-white" style="height: 110vh; border: none!important; border-radius: 5px 0px 0px 5px!important; padding-bottom: 100px; padding-top: 20px;">
                            <div class="card-body p-lg-5">
                              <div class="icon icon-lg icon-shape bg-gradient-red shadow rounded-circle mb-3">
                                <i class="ni ni-single-02 text-white"></i>
                              </div>
                              <h4 class="font-weight-bold f-black">Register to Workshop</h4>
                              <h4 class="mb-1 f-black">Interested in joining our workshop? </h4>
                              <div class="form-group mt-5">
                                  <label class="f-black">Your Name</label>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">
                                            <i class="fa fa-user f-black"></i>
                                        </span>
                                      </div>
                                    <input style="border: 1px solid #d2d3d6; padding-left: 10px;" type="text" placeholder="type your name..." name="nama"class="form-control" value="{{old('nama')}}">
                                  </div>

                              </div>
                              <div class="form-group">
                                  <label class="f-black">Your Email</label>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">
                                            <i class="fa fa-envelope f-black"></i>
                                        </span>
                                      </div>
                                    <input style="border: 1px solid #d2d3d6; padding-left: 10px;" type="email" name="email"class="form-control" value="{{old('email')}}" placeholder="type your email here ...">
                                  </div>

                              </div>

                              <div class="form-group pb-5">
                                  <label class="f-black">Your Phone Number</label>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">
                                            <i class="fa fa-phone f-black"></i>
                                        </span>
                                      </div>
                                      <input style="border: 1px solid #d2d3d6; padding-left: 10px;" type="text" name="nomor"class="form-control" placeholder="0898123456790" value="{{old('nomor')}}">
                              </div>
                              </div>
                              <div class="" style="margin-top:-7%">
                                  <button type="submit" class="btn btns-gradient-red btn-round text-white">Register Now</button>
                              </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="col-5 pl-0">
                        <div class="card bg-white" style="height: 110vh; border: none!important; border-radius: 0px 5px 5px 0px!important;">
                            <div class="container" style="padding-top: 125px; padding-bottom: 125px;">
                                <img style="height: auto;" src="{{asset('public/img/ui-images/daftar.png')}}" class="img-fluid p-3">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.423576425507!2d106.79017751419727!3d-6.594160466293701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b645cddd15%3A0xb95bfdfda7eb8dc!2sUncle%20Jo%20Coffee%20Shop!5e0!3m2!1sen!2sid!4v1568857639806!5m2!1sen!2sid" width="500" height="518" frameborder="0" style="border:0;" class="rounded" allowfullscreen=""></iframe>
            </div> --}}
          </div>
        </div>
    </section>
    {{-- end register  --}}

@endsection
@section('scripts')
      <script>
          $(document).ready(function(){

            var swiper = new Swiper('.swiper-container', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

            $('.js-tilt').tilt({
                scale: 1.1,
                glare: true,
                maxGlare: .5
            });

            $(".owl-1").owlCarousel({
                stagePadding: 0,
                loop:true,
                margin:10,
                items: 1,
                nav:true,
                responsive : {
                // breakpoint from 0 up
                0 : {

                    stagePadding : 0
                },
                480 : {
                    stagePadding : 0
                },
                // breakpoint from 480 up
                780 : {
                    stagePadding : 0
                },
                // breakpoint from 768 up
                1000 : {
                    stagePadding : 100
                },
                1100 : {
                    stagePadding : 200
                },
                1200 : {
                    stagePadding : 300
                },
                1300 : {
                    stagePadding : 300
                }
            }
            });

            $('#nav-workshop').on('click',function(e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#workshop').offset().top,
                },900,'linear');
            });

            $('#nav-yt').on('click',function(e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#youtube').offset().top,
                },900,'linear');
            });

            $('#nav-get').on('click',function(e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#get').offset().top,
                },900,'linear');
            });

            $('#nav-news').on('click',function(e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#news').offset().top,
                },900,'linear');
            });

            $('#nav-gallery').on('click',function(e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#gallery').offset().top,
                },900,'linear');
            });

            $('#nav-profile').on('click',function(e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#profile').offset().top,
                },900,'linear');
            });

            $('#nav-register').on('click',function(e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#register').offset().top,
                },900,'linear');
            });

          });
      </script>
      {!! JsValidator::formRequest('App\Http\Requests\RegisterWorkshopRequest', '#form-register') !!}
@endsection
