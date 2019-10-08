@extends('layouts.landing')
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
        <!-- 1st Hero Variation -->
      </div>
      <section class="section section-lg pt-lg-0 mt--200">
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
      <section class="section section-lg">
        <div class="container">
          <div class="row row-grid align-items-center">
            <div class="col-md-6 order-md-2">
              <img src="{{asset('public/img/ui-images/team.png')}}" class="img-fluid floating" alt="image">
            </div>
            <div class="col-md-6 order-md-1">
              <div class="pr-md-5">
                <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5">
                  <i class="ni ni-settings-gear-65"></i>
                </div>
                <h3>Coffe Workshop Uncle Jo</h3>
                <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                <ul class="list-unstyled mt-5">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="ni ni-settings-gear-65"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Carefully crafted components</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="ni ni-html5"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Amazing page examples</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="ni ni-satisfied"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Super friendly support team</h6>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section bg-secondary">
        <div class="container">
          <div class="row row-grid align-items-center">
            <div class="col-md-6">
              <div class="card bg-default shadow border-0">
                <img src="{{asset('public/img/UNCLE-JO/coffe-1.jpg')}}" class="card-img-top" alt="image">
                <blockquote class="card-blockquote">
                  <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                    <polygon points="0,52 583,95 0,95" class="fill-default" />
                    <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                  </svg>
                  <h4 class="display-3 font-weight-bold text-white">Coffe Time</h4>
                  <p class="lead text-italic text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens.</p>
                </blockquote>
              </div>
            </div>
            <div class="col-md-6">
              <div class="pl-md-5">
                <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle mb-5">
                  <i class="ni ni-settings"></i>
                </div>
                <h3>Our customers</h3>
                <p class="lead">Don't let your uses guess by attaching tooltips and popoves to any element. Just make sure you enable them first via JavaScript.</p>
                <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                <a href="#" class="font-weight-bold text-warning mt-5">A beautiful UI Kit for impactful websites</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section bg-gradient-warning" style="padding-bottom: 100px;">
        <div class="container">
          <div class="row row-grid align-items-center">
            <div class="col-lg-12 order-lg-1">
              <div class="d-flex px-3">
                <div>
                  <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                    <i class="ni ni-building text-primary"></i>
                  </div>
                </div>
                <div class="pl-4">
                  <h4 class="display-3 text-white">Modern Interface</h4>                  
                </div>
              </div>
              <div class="row mx-auto">
                    @foreach ($galleries as $g)
                    <div class="col-md-4 galleries-img" style="padding: 10px;">
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
      <style>
            .galleries-img:hover{
                /* border: 1px #fdcb6e solid; */
                /* background: rgba(33, 33, 33, 0.9); */
    
            }
    
            .img-gallery{
    
                width: 100%;
                height: 250px;
                border-radius: 30px;
            }
        </style>
      <section class="section section-lg">
        <div class="container">
          <div class="row justify-content-center text-center mb-lg">
            <div class="col-lg-8">
              <h2 class="display-3">Apa kata peserta workshop</h2>
              <p class="lead text-muted">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record maximum.</p>
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
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
              <div class="px-4">
                <img src="{{asset('public/upload/participants/'.$p->picture)}}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;" alt="image">
                <div class="pt-4 text-center">
                  <h5 class="title">
                    <span class="d-block mb-1">{{ucfirst($p->title)}}</span>
                    <small class="h6 text-muted">{!!ucfirst(strtolower($p->description))!!}</small>
                  </h5>
                  <div class="mt-3">
                    <a href="#" class="btn btn-{{$color}} btn-icon-only rounded-circle">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-{{$color}} btn-icon-only rounded-circle">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-{{$color}} btn-icon-only rounded-circle">
                      <i class="fa fa-dribbble"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      <section class="section section-lg pt-0">
        <div class="container">
          <div class="card bg-gradient-warning shadow-lg border-0">
            <div class="p-5">
              <div class="row align-items-center">
                <div class="col-lg-8">
                  <h3 class="text-white">We made website building easier for you.</h3>
                  <p class="lead text-white mt-3">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture.</p>
                </div>
                <div class="col-lg-3 ml-lg-auto">
                  <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-lg btn-block btn-white">Download HTML</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gradient-default">
        <div class="container pt-lg pb-300">
          <div class="row text-center justify-content-center">
            <div class="col-lg-10">
              <h2 class="display-3 text-white">Build something</h2>
              <p class="lead text-white">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record low maximum sea ice extent tihs year down to low ice.</p>
            </div>
          </div>
          <div class="row row-grid mt-5">
            <div class="col-lg-4">
              <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                <i class="ni ni-settings text-primary"></i>
              </div>
              <h5 class="text-white mt-3">Building tools</h5>
              <p class="text-white mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-lg-4">
              <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                <i class="ni ni-ruler-pencil text-primary"></i>
              </div>
              <h5 class="text-white mt-3">Grow your market</h5>
              <p class="text-white mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-lg-4">
              <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                <i class="ni ni-atom text-primary"></i>
              </div>
              <h5 class="text-white mt-3">Launch time</h5>
              <p class="text-white mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew zindex-100">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </section>
      <section class="section section-lg pt-lg-0 section-contact-us">
        <div class="container">
          <div class="row mt--300">
            <div class="col-lg-6">
              <form action="{{ route('register_workshop') }}" method="post" id="form-register">
              @csrf
              <div class="card bg-gradient-secondary shadow">
                <div class="card-body p-lg-5">
                  <h4 class="mb-1">Want to work with us?</h4>
                  <p class="mt-0">Your project is very important to us.</p>                  
                  <div class="form-group mt-5">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-user-run"></i></span>
                      </div>
                      <input type="text" name="nama" id="" class="form-control" value="{{old('nama')}}"placeholder="Masukkan Nama" aria-describedby="helpId">
                    </div>
                    <small id="helpId" class="text-muted">Required <span style="color:#f44336">*</span></small>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input type="text" name="email" id="" class="form-control" placeholder="Masukkan Email" aria-describedby="helpId" value="{{old('email')}}">
                    </div>                    
                    <small id="helpId" class="text-muted">Required <span style="color:#f44336">*</span></small>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-tablet-button"></i></span>
                      </div>
                      <input type="number" name="nomor" id="" class="form-control" placeholder="Masukkan No Telp " aria-describedby="helpId" value="{{old('nomor')}}">
                    </div>
                    <small id="helpId" class="text-muted">Required <span style="color:#f44336">*</span></small>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-default btn-round btn-block btn-lg">Register to Workshop</button>
                  </div>                  
                </div>
              </div>
              </form>
            </div>
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.423576425507!2d106.79017751419727!3d-6.594160466293701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b645cddd15%3A0xb95bfdfda7eb8dc!2sUncle%20Jo%20Coffee%20Shop!5e0!3m2!1sen!2sid!4v1568857639806!5m2!1sen!2sid" width="500" height="518" frameborder="0" style="border:0;" class="rounded" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg">
        <div class="container">
          <div class="row row-grid justify-content-center">
            <div class="col-lg-8 text-center">
              <h2 class="display-3">Do you love this awesome <span class="text-success">Design System for Bootstrap 4?</span></h2>
              <p class="lead">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim where you can find the Design System in HTML. Start a new project or give an old Bootstrap project a new look!</p>
              <div class="btn-wrapper">
                <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-primary mb-3 mb-sm-0">Download HTML</a>
                <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-default">Download PSD/Sketch</a>
              </div>
              <div class="text-center">
                <h4 class="display-4 mb-5 mt-5">Available on these technologies</h4>
                <div class="row justify-content-center">
                  <div class="col-lg-2 col-4">
                    <a href="https://www.creative-tim.com/product/argon-design-system" target="_blank" data-toggle="tooltip" data-original-title="Bootstrap 4 - Most popular front-end component library">
                      <img alt="image" src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/bootstrap.jpg" class="img-fluid">
                    </a>
                  </div>
                  <div class="col-lg-2 col-4">
                    <a href=" https://www.creative-tim.com/product/vue-argon-design-system" target="_blank" data-toggle="tooltip" data-original-title="Vue.js - The progressive javascript framework">
                      <img alt="image" src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg" class="img-fluid">
                    </a>
                  </div>
                  <div class="col-lg-2 col-4">
                    <a href=" https://www.sketchapp.com/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Sketch - Digital design toolkit">
                      <img alt="image" src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg" class="img-fluid opacity-3">
                    </a>
                  </div>
                  <div class="col-lg-2 col-4">
                    <a href=" https://www.adobe.com/products/photoshop.html" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Adobe Photoshop - Software for digital images manipulation">
                      <img alt="image" src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/ps.jpg" class="img-fluid opacity-3">
                    </a>
                  </div>
                  <div class="col-lg-2 col-4">
                    <a href=" https://angularjs.org/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Angular - One framework. Mobile &amp; desktop">
                      <img alt="image" src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg" class="img-fluid opacity-3">
                    </a>
                  </div>
                  <div class="col-lg-2 col-4">
                    <a href=" https://angularjs.org/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] React - A JavaScript library for building user interfaces">
                      <img alt="image" src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg" class="img-fluid opacity-3">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection
@section('scripts')
      <script>
          $(document).ready(function(){

            $('.js-tilt').tilt({
                scale: 1.1,
                glare: true,
                maxGlare: .5
            });
          });
      </script>
      {!! JsValidator::formRequest('App\Http\Requests\RegisterWorkshopRequest', '#form-register') !!}
@endsection