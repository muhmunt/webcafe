@extends('layouts.app')

@section('content')
@if (Session::has('auth'))
        <div class="alert alert-danger">
            {{Session::get('auth')}}
        </div>
    @endif
<header>

    <div id="intro" class="view" style="height:120vh; width:100%;">
        <div class="container-fluid full-bg-img d-flex align-items-center justify-content-center mx-auto" style="padding-top:230px">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 text-center">
                {{-- LOGO --}}
                {{-- <h1 class="text-center text-white rounded-circle"><i class="fas fa-coffee fa-2x"></i> </h1> --}}
                <img style="width: 100px;" src="{{ asset('/public/img/UNCLE-JO/logo1.png') }}">
                {{-- HEADING --}}
                <h2 class="display-3 font-weight-bold text-white mb-2" align="center">Uncle Jo</h2>
                <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia a doloremque </p>
                <button class="btn btn-primary rounded-pill bg-gradient" type="button" id="start">Start here.</button>
                {{-- BUTTON --}}
                </div>
            </div>
        </div>
    </div>
</header>

<main>

    <section class="section-padding bg-white-1" id="workshop" >
        <div class="container" data-aos="fade-up">
            <div class="title-padding text-center">
                <h2>
                    <span class="">Coffe</span> Work<span style="color:#f44336">shop</span>
                </h2>
                <div class="underline"></div>
            </div>
            <div class="card mb-3 border-0 bg-transparent">
                <div class="row">
                <div class="col-md-6">
                    <div class="card-body" style="border-left: 3px solid #da2b2b;">
                        <h2 class="card-title text-red">Workshop <small><i class="fas fa-coffee text-white"></i></small></h2>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer aku makannya apa? tempe siapa juru masaknya. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, temporibus. </p>
                        <p class="card-text">Dolore eligendi, inventore aliquid a quaerat culpa, laborum explicabo suscipit, amet distinctio possimus cumque. Voluptates itaque quas doloribus nulla incidunt. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam id, consectetur aperiam delectus hic et molestiae quis eum dicta sed optio obcaecati consequatur modi, rerum aliquid nemo esse, ipsam cum?</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <img class="img-responsive img-workshop" src="{{ asset('/public/img/ui-images/coffe-work-ui.png') }}">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    {{-- line --}}
    {{-- <hr style="width:70%;text-align:center"> --}}

    <section class="section-padding bg-youtube" id="youtube" >
        <div class="container" id="youtube" data-aos="fade-up">
            <div class="title-padding text-center">
                <h2 class="text-white">
                    Nonton dulu biar makin<span style="color:#f44336">Yakin!</span>  <i class="fas fa-coffee text-white"></i>
                </h2>
                <div class="underline"></div>
            </div>

            <div class="owl-carousel owl-theme owl-1">
                    <div class="item">
                        <div class="text-center">
                            <div class="card-title">
                                <iframe class="frame-yt" src="https://www.youtube.com/embed/KE3AUr1AIgs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            </div>
        </div>
    </section>

    <section class="section-padding bg-white-2" id="news">
        <div class="container" id="schedule" data-aos="fade-up">
            <div class="title-padding text-center">
                <h2>
                    Our<span style="color:#f44336"> News</span>
                </h2>
                <div class="underline"></div>
            </div>
            <?php $a = 2 ?>
            @foreach ($news as $new)            
            @if ($a % 2 == '1')
            <div class="row schedule-row-1 row-padding">
                <div class="col-md-4">
                    <div class="schedule-img">
                        <img src="{{ asset('public/upload/news/'.$new->foto) }}" class="img-custom">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="schedule-col">
                        <ul class="content-ul schedule-ul">
                            <li>
                                <span class="icon-schedule">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                            </li>

                            <li>
                                <p>
                                    {{Carbon\Carbon::parse($new->tgl)->formatLocalized('%d %B %Y')}}
                                </p>
                            </li>
                        </ul>
                        <ul class="content-ul schedule-ul">
                            <li>
                                <span class="icon-schedule">
                                    <i class="fas fa-location"></i>
                                </span>
                            </li>

                            <li>
                                <p>
                                    {{$new->location}}
                                </p>
                            </li>
                        </ul>
                        <div class="sub-title-schedule">
                            <h4>
                                {{ucfirst($new->title)}}
                            </h4>
                        </div>
                        <div class="main-schedule">
                            <p>
                                {!! $new->description !!}
                            </p>
                        </div>
                        <div class="content-top-space">
                            <a href="#" class="readmore">
                                Read More
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @elseif($a % 2 == '0')
            <div class="row schedule-row-2 row-padding">
                <div class="col-md-8">
                    <div class="schedule-col">
                        <ul class="content-ul schedule-ul">
                            <li>
                                <span class="icon-schedule">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                            </li>
                            <li>
                                <p>
                                    {{Carbon\Carbon::parse($new->tgl)->formatLocalized('%d %B %Y')}}
                                </p>
                            </li>
                        </ul>
                        <div class="sub-title-schedule">
                            <h4>
                                {{ucfirst($new->title)}}
                            </h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {!! html_entity_decode($new->description)!!}
                            </div>
                        </div>
                        <div class="content-top-space">
                            <a href="#" class="readmore">
                                Read More
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="schedule-img">
                        <img src="{{ asset('public/upload/news/'.$new->foto) }}" class="img-custom">
                    </div>
                </div>
            </div>

            @endif
            <?php $a++; ?>
            @endforeach

            {{-- <div class="row">
                    <div class="col-md-10 mx-auto">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                  <div class="col-md-4">
                                    <img src="{{asset('public/img/content/client2.jpg')}}" class="card-img" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div> --}}

        </div>
    </section>

    <section class="section-quotes section-padding bg-qoutes" id="quotes">
        <div class="container pt-5 pb-5">
            <div class="title-padding text-center">
                <h1 class="text-white text-qoutes-title bt-qoutes">
                    Rain Dont Know Where Will Fall
                </h1>
                <h1 class="text-white text-qoutes-title bb-qoutes">
                    But Tears Know For Whom Will Fall
                </h1>
                {{-- <div class="underline"></div> --}}
            </div>
            <div class="text-center test">
                <img class="icon-coffee" src="{{ asset('/public/img/ui-images/coffee-2.png') }}">
            </div>
            {{-- <div class="main-text text-center">
                <p class="text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae repellat numquam, ut et vitae hic? Alias, tenetur! Veniam suscipit doloremque quos facilis! Suscipit nostrum porro pariatur culpa quas velit eius!
                </p>
            </div> --}}
        </div>
    </section>

    <section class="section-padding bg-white-2" id="gallery">
        <div class="container">
            <div class="title-padding text-center">
                <h2>
                    Our<span style="color:#f44336"> Gallery</span>
                </h2>
                <div class="underline"></div>
                <br>
                <div class="container">
                    <div class="row mx-auto">
                      <div class="col-md-4 p-1">
                          <a href="{{asset('public/img/content/about.jpg')}}" data-lightbox="roadtrip"><img class="img-fluid" src="{{asset('public/img/content/about.jpg')}}" alt=""></a>
                      </div>
                      <div class="col-md-4 p-1">
                          <a href="{{asset('public/img/content/about.jpg')}}" data-lightbox="roadtrip"><img class="img-fluid" src="{{asset('public/img/content/about.jpg')}}" alt=""></a>
                      </div>

                      <div class="col-md-4 p-1">
                          <a href="{{asset('public/img/content/about.jpg')}}" data-lightbox="roadtrip"><img class="img-fluid" src="{{asset('public/img/content/about.jpg')}}" alt=""></a>
                      </div>
                      <div class="col-md-4 p-1">
                          <a href="{{asset('public/img/content/about.jpg')}}" data-lightbox="roadtrip"><img class="img-fluid" src="{{asset('public/img/content/about.jpg')}}" alt=""></a>
                      </div>
                      <div class="col-md-4 p-1">
                          <a href="{{asset('public/img/content/about.jpg')}}" data-lightbox="roadtrip"><img class="img-fluid" src="{{asset('public/img/content/about.jpg')}}" alt=""></a>
                      </div>

                      <div class="col-md-4 p-1">
                          <a href="{{asset('public/img/content/about.jpg')}}" data-lightbox="roadtrip"><img class="img-fluid" src="{{asset('public/img/content/about.jpg')}}" alt=""></a>
                      </div>
                    </div>
            </div>
        </div>
    </section>
</main>

    <style>
        .owl-carousel .owl-item img{
            width: auto;
        }
    </style>
    {{-- <hr style="width:70%;text-align:center"> --}}
    <section class="section-padding bg-flat" id="get">
        <div class="container" id="participant-get" data-aos="fade-up">
            <div class="title-padding text-center">
                <h2 class="text-white">
                    Participants<span style="color:#f44336"> Get</span>
                </h2>
                <div class="underline"></div>
            </div>

            <div class="row">
                <div class="col-md-3 cerita-text text-white">
                    <h3>Cerita <span style="color:#f44336">Sukses</span></h3>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit provident labore officia veritatis perspiciatis. Reprehenderit quaerat aperiam ut magnam deleniti ipsa harum pariatur. Praesentium commodi ab doloremque porro ratione modi.</p>
                    <button class="btn btn-primary rounded-pill">Button</button>
                </div>
                <div class="col-md-9 p-1">
                        <div class="owl-carousel owl-theme">
                                <div class="card border-0 mt-1 mb-2 shadow p-3">
                                        <div class="item pt-2">
                                                <div class="text-center">
                                                    <div class="">
                                                        <img src="{{ asset('public/img/content/profile.png') }}" class="mx-auto rounded-circle" style="height:50%;width:50%">
                                                    </div>
                                                    <p class="card-text p-1 pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam odio possimus nam nostrum dolorum qui eius. Quod, voluptatibus voluptatem doloribus ea tempore voluptates veritatis mollitia totam laboriosam quo nisi necessitatibus!</p>
                                                </div>
                                            </div>
                                </div>                
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-white-1" id="profile">
        <div class="container" id="#detail-profile" data-aos="fade-up">
            <div class="title-padding text-center">
                <h2>
                    <span class="">Our</span> Profile
                </h2>
                <div class="underline"></div>
            </div>
            <div class="card mb-3 border-0 bg-transparent">
                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <img class="img-responsive img-workshop" src="{{ asset('/public/img/ui-images/profile2.png') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body text-left" style="border-right: 3px solid #da2b2b;">
                            <div class="text-center">
                                <img style="width: 100px;" src="{{ asset('/public/img/UNCLE-JO/logo1.png') }}">
                            </div>
                            <br>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer aku makannya apa? tempe siapa juru masaknya. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, temporibus. </p>
                            <p class="card-text">Dolore eligendi, inventore aliquid a quaerat culpa, laborum explicabo suscipit, amet distinctio possimus cumque. Voluptates itaque quas doloribus nulla incidunt. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam id, consectetur aperiam delectus hic et molestiae quis eum dicta sed optio obcaecati consequatur modi, rerum aliquid nemo esse, ipsam cum?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- section form --}}
    <section class="section-padding bg-white-2" id="section-form">
        <div class="container">
            <h2 class="text-center mb-5">
                Segera <span style="color:#f44336">Daftarkan</span> diri anda
            </h2>
            <div class="row pt-3 pb-5">
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Nama anda:</label>
                      <input type="text" name="nama" id="" class="form-control" placeholder="Masukkan Nama" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Required <span style="color:#f44336">*</span></small>
                    </div>
                    <div class="form-group">
                      <label for="">Email anda:</label>
                      <input type="text" name="email" id="" class="form-control" placeholder="Masukkan Email" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Required <span style="color:#f44336">*</span></small>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nomor Telp anda:</label>
                                <input type="number" name="nomor" id="" class="form-control" placeholder="Masukkan Nama" aria-describedby="helpId">
                                <small id="helpId" class="text-muted">Required <span style="color:#f44336">*</span></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Harga:</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Rp.450.000,00</option>
                                </select>
                                <small id="helpId" class="text-muted">Required <span style="color:#f44336">*</span></small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for=""></label>
                      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Help text</small>
                    </div>
                </div>
                <div class="col-md-6 map-row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.423576425507!2d106.79017751419727!3d-6.594160466293701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b645cddd15%3A0xb95bfdfda7eb8dc!2sUncle%20Jo%20Coffee%20Shop!5e0!3m2!1sen!2sid!4v1568857639806!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){


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
                    stagePadding : 350
                }
            }
            });

            $('.owl-2').owlCarousel({
              loop : true,
              margin : 10,
              dots : true,
              autoplay : true,
              autoplayTimeout : 6000,
              autoplayHoverPause:true,
              responsive:{
                0:{
                  items:1
                },
                600:{
                  items: 1
                },
                1000:{
                  items:5
                }
              }
            });

            $(".owl-carousel").owlCarousel({
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
                        stagePadding : 300,
                        margin: 40
                    }
                }
            });

            $(window).scroll(function(){


                var scroll = $(this).scrollTop();

                if(scroll > 650){
                    $('#navbar-custom').removeClass('bg-transparent');
                    $('#navbar-custom').addClass('bg-white');
                    $('#text-nav').addClass('text-dark');
                    $('#nav-workshop').addClass('text-dark');
                    $('#nav-yt').addClass('text-dark');
                    $('#nav-news').addClass('text-dark');
                    $('#nav-gallery').addClass('text-dark');
                    $('#nav-get').addClass('text-dark');
                    $('#nav-profile').addClass('text-dark');
                }else{
                    $('#nav-workshop').removeClass('text-dark');
                    $('#navbar-custom').addClass('bg-transparent');
                    $('#text-nav').removeClass('text-dark');
                    $('#nav-workshop').removeClass('text-dark');
                    $('#nav-yt').removeClass('text-dark');
                    $('#nav-news').removeClass('text-dark');
                    $('#nav-gallery').removeClass('text-dark');
                    $('#nav-get').removeClass('text-dark');
                    $('#nav-profile').removeClass('text-dark');
                }
            });

            $('#text-nav').on('click',function(e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#intro').offset().top,
                },900,'linear');
            });

            $('#start').on('click',function(e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#workshop').offset().top,
                },900,'linear');
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

            $('#nav-get').on('click',function(e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#get').offset().top,
                },900,'linear');
            });

            $('#nav-profile').on('click',function(e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#profile').offset().top,
                },900,'linear');
            });

            $('#nav-btn').on('click', function(){
                var cek = $('#navbar-custom').hasClass('bg-white');
                if(cek){
                    //console.log(cek)
                    $('#navbar-custom').removeClass('bg-white');
                    $('#nav-admin').addClass('text-white');
                    $('#text-admin').addClass('text-white');
                    $('#nav-workshop').addClass('text-white');
                    $('#nav-yt').addClass('text-white');
                    $('#nav-news').addClass('text-white');
                    $('#nav-gallery').addClass('text-white');
                    $('#nav-get').addClass('text-white');
                    $('#nav-profile').addClass('text-white');
                }else{
                    $('#navbar-custom').addClass('bg-white');
                    $('#text-admin').removeClass('text-white');
                    $('#nav-workshop').removeClass('text-white');
                    $('#nav-admin').removeClass('text-white');
                    $('#nav-yt').removeClass('text-white');
                    $('#nav-news').removeClass('text-white');
                    $('#nav-gallery').removeClass('text-white');
                    $('#nav-get').removeClass('text-white');
                    $('#nav-profile').removeClass('text-white');
                }
            })

        })
    </script>
@endsection
