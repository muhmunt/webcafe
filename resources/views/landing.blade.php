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

        .f-bg-dark {
            padding: 0px 5px 0px 5px;
            background: #000;
            color: #fff;
        }

        .f-bg-white {
            padding: 0px 5px 0px 5px;
            background: #fff;
            color: #3b3b3b;
        }

        .pb-50{
          padding-bottom: 50px;
        }

        .mb-50{
          margin-bottom: 50px;
        }

        .mb-70{
          margin-bottom: 70px;
        }

        .fill-reds{
            fill: #FF4B2B;
        }

        .shadow-little{
            box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.2);
        }

        .img-gallery{

            width: 100px;
            height: 100px;
            /* padding: 15px; */
            border-radius: 15px;
        }

        .img-gallery-2{

            width: 250px;
            height: 250px;
            border-radius: 15px;
        }

        .swiper-container2 {
            width: 100%;
            height: 100%;
        }

        .meta-subtitle{
          color: #b3b3b3;
          font-size: 14px;
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
                        <h1 class="display-2 text-white">
                            Bisnis Kopi 2.0
                        </h1>
                        <span class="display-3 text-white font-weight-normal">
                            Cara Membangun Kedai Kopi Dengan Budget Minim
                        </span>
                        {{-- <p class="lead text-white">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus culpa ab dolores necessitati.
                        </p> --}}
                      <div class="btn-wrapper pt-3">
                        <a href="#register" id="btn-register" class="btn btns-gradient-red rounded text-white">Daftar Sekarang</a>
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
                <h1 class="display-3 text-dark">Workshop Bisnis Kopi</h1>
                <p class="lead font-weight-light text-dark">50 lebih kedai kopi sudah lahir dari workshop ini. Tidak ada yang perlu di ragukan lagi! kita harus mempersiapkan diri untuk menghadapi bonus demografi yang akan terjadi pada waktu mendatang. Oleh karena itu kita harus berinvestasi untuk keberlangsungan hidup. <br> Nah buat kamu yang bosen bekerja dikantoran, kamu yang memiliki waktu fleksible, kamu yang punya passion dalam berkarya khususnya didunia perkopian, kamu yang mau meraih mimpi memiliki kedai kopi impian, dan kamu yang mau merintis usaha mandiri. Segera daftar silahkan klik dibawah ini.</p>
                <a href="#register" id="link_r" class="font-weight-bold text-primary mt-5">Daftar Workshop Bisnis Kopi</a>
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
                  <h4 class="display-3 font-weight-bold text-white">Bisnis Kopi</h4>
                  <p class="lead text-italic text-white">Usaha kedai kopi ini cocok banget buat kamu yang mau keluar dari zona nyaman kamu! <br>Dan semua yang dibutuhkan untuk membangun sebuah kedai kopi yang profitable ada di depan mata, kalian ga jalan sendiri, ada partner, mitra karya, dan komunitas pengusaha kopi lainnya yang saling support dalam prosesnya.</p>
                </blockquote>
              </div>
            </div>

          </div>
        </div>
    </section>
    {{-- end workshop --}}
    {{-- begin participant get  --}}
    <section class="section section-lg" id="recent-workshop">
        <div class="container">
          <div class="row justify-content-center text-center mb-50">
            <div class="col-lg-8">
                <h1 class="text-dark" style="font-weight: 900;">
                    <span style="padding: 0px 5px 0px 5px; background: #000; color: #fff;">Recent</span> Workshop
                </h1>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            @foreach ($recentNews as $rn)
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
               <div class="card mb-3">
                <img src="{{asset('public/upload/news/'.$rn->foto)}}" class="card-img-top">
                <div class="card-body">
                    <h3 class="font-weight-bold">
                        {{ $rn->title }}
                    </h3>
                    @php
                        $tgl = date("Y-m-d", strtotime($rn->tgl_mulai));
                        $mulai = date("H:i", strtotime($rn->tgl_mulai));
                        $akhir = date("H:i", strtotime($rn->tgl_akhir));
                        $tanggal = Carbon\Carbon::parse($tgl)->formatLocalized('%d %B %Y')
                    @endphp
                    <div class="meta-subtitle mb-4">
                        {{ $rn->author }}
                        <span class="mx-2">-</span>
                        {{ $tanggal }}
                    </div>
                    <p class="card-text font-weight-bold">
                        Volume {{ $rn->volume }}
                    </p>

                    <div class="recent-desc">
                        {!!$rn->description!!}
                    </div>

                    <a href="javascript:;" class="card-text text-more">
                        <small class="badge badge-pill badge-primary more-show">Baca Selengkapnya</small>
                        <small class="badge badge-pill badge-warning less-show">Baca Lebih Sedikit</small>
                    </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    </section>
    {{-- end --}}
    {{-- begin youtube --}}
    <section class="section bg-gradient-black" id="youtube">

        <div class="container" data-aos="fade-up">
            <div class="title-padding text-center">
                <div class="row justify-content-center text-center mb-50">
                    <div class="col-lg-8">
                        <h1 class="text-white" style="font-weight: 900;">
                            <span style="padding: 0px 5px 0px 5px; background: #fff; color: #3b3b3b;">Dokumentasi</span> Workshop
                        </h1>
                    </div>
                </div>
            </div>

            {{-- <div class="owl-carousel owl-theme owl-1">
                    <div class="item">
                        <div class="text-center">
                            <div class="card-title">
                                <iframe class="frame-yt" src="https://www.youtube.com/embed/ydVDXhpXys0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="text-center">
                            <div class="card-title">
                                <iframe class="frame-yt" src="https://www.youtube.com/embed/PIQrt0HEn7Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            </div>
                        </div>
                    <div class="item">
                    <div class="text-center">
                        <div class="card-title">
                            <iframe class="frame-yt" src="https://www.youtube.com/embed/PYciG2kz468" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </section>
    {{-- end youtube --}}
    {{-- begin news  --}}
    <div class="swiper-container mb-70" style="margin-top: 50px;">
        <div class="title-padding text-center">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="text-dark" style="font-weight: 900;">
                        <span style="padding: 0px 8px 1px 8px; background: #000; color: #fff;">Jadwal</span> Workshop
                    </h1>
                </div>
            </div>
        </div>
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
        <section class="swiper-slide mt-5 bg-white" id="news">
            <div class="container">
                <div class="row">
                      <div class="col-md-6 order-md-2">
                          <iframe class="frame-yt2" src="https://www.youtube.com/embed/ydVDXhpXys0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-6 order-md-1">
                          <div class="pr-md-5">
                            {{-- <div class="icon icon-lg icon-shape icon-shape-{{$color}} shadow rounded-circle mb-5">
                              <i class="ni ni-settings-gear-65"></i>
                            </div> --}}
                            <h2 class="text-dark font-weight-bold">
                               <span class="f-bg-dark">Tema</span> Workshop:<br>
                               {{$n->title}}
                            </h2>
                            <h4 class="text-dark">
                                Volume {{$n->volume}}
                            </h4>
                            <p>
                                {!!$n->description!!}
                            </p>
                            <ul class="list-unstyled mt-5">
                              <li class="py-2">
                                <div class="d-flex align-items-center">
                                  <div>
                                    <div class="badge badge-circle badge-{{$color}} mr-3">
                                      <i class="far fa-clock"></i>
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
                                      <i style="font-size: 20px;" class="far fa-calendar-alt"></i>
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
              {{-- <div class="d-flex px-3 pb-5">
                <div>
                  <div class="icon icon-lg icon-shape shadow rounded-circle text-primary">
                    <img class="text-left" width="60" height="60" src="{{ asset('public/img/ui-images/icon-gallery3.png') }}">
                  </div>
                </div>
                <div class="pl-4 pt-2">
                  <h4 style="text-decoration:underline;text-decoration-color:#fff200" class="display-4 text-white">Galeri Workshop</h4>
                </div>
              </div> --}}
                <div class="row justify-content-center text-center mb-50">
                    <div class="col-lg-8">
                        <h1 class="text-white" style="font-weight: 900;">
                            <span style="padding: 0px 5px 0px 5px; background: #fff; color: #3b3b3b;">Galeri</span> Workshop
                        </h1>
                    </div>
                </div>
                <div class="row mx-auto">
                    @foreach ($galleries as $g)
                    <div class="col-md-4 galleries-img pb-5 text-center">
                        <a href="{{asset('public/upload/galleries/'.$g->picture)}}" data-lightbox=" roadtrip">
                            <img class="img-gallery-2 js-tilt shadow" data-tilt src="{{asset('public/upload/galleries/'.$g->picture)}}">
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
          <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 style="font-weight: 700;" class="text-dark">
                    Apa kata peserta workshop
                </h1>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="swiper-container2">
              <div class="swiper-wrapper">
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

                  <div class="swiper-slide text-center p-5">
                      <div class="justify-content-center">
                          <img src="{{asset('public/upload/participants/'.$p->picture)}}" class="rounded-circle shadow-little bg-gradient-{{$color}} img-gallery mx-auto ">
                      </div>
                      <h2 class="lead text-black text-center">{!!html_entity_decode($p->description) !!}</h2>
                      <h4 class="mt-3 f-black font-weight-bold">{{ucwords($p->title)}}</h4>
                  </div>
                @endforeach
              </div>
              <div style="margin-bottom: 100px;" class="swiper-pagination"></div>
            </div>
          </div>
        </div>
    </section>
    {{-- end --}}

    {{-- Begin Benefit --}}
    <section class="section bg-gradient-black" id="youtube">

        <div class="container" data-aos="fade-up">
            <div class="title-padding text-center">
                {{-- <div class="d-flex px-4">
                    <div>
                        <div class="icon icon-lg icon-shape shadow rounded-circle text-white"
                            <img class="text-left" width="60" height="60" src="{{ asset('public/img/ui-images/icon-benefit1.png') }}">
                        </div>
                    </div>
                    <div class="pl-4 pt-2">
                        <h4 class="display-4 text-white" style="text-decoration:underline;text-decoration-color:#fff200">
                            Keuntungan Mengikuti Workshop
                        </h4>
                    </div>
                </div> --}}
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1 class="text-white" style="font-weight: 800;">
                            <span style="padding: 0px 5px 0px 5px; background: #fff; color: #3b3b3b;">Keuntungan</span> Mengikuti Workshop
                        </h1>
                    </div>
                </div>
                </div>
                <div class="text-white">
                  <p style="font-size:20px;"><b>Setelah ratusan peserta</b> mulai dari JABODETABEK, Bandung, Sukabumi, Surabaya, Pekanbaru, Padang, Medan, Makassar, Samarinda, Lampung, NTT dan dari daerah - daerah lainnya berdatangan hadir u/ sama - sama belajar membuka <b>Kedai Kopi Low Budget</b>, kali ini <b>Giliran</b> kamu yang ikut, iya kamu yang mau meraih mimpi memiliki waktu yang lebih fleksible, kamu yang punya passion dalam berkarya khususnya didunia perkopian, coba cek informasi dibawah ini.</p>
                  <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-white" style="text-decoration:underline;text-decoration-color:#fff200;font-size:20px">Peserta akan belajar dalam 3 sesi:</h5>
                      <ol style="font-size:20px;">
                        <li><b>Konsep</b> Kedai Kopi</li>
                        <li><b>Peluang Bisnis Kedai Kopi</b> (Hulu - Hilir) dan,</li>
                        <li><b>Marketing Plan</b> (Strategi bersaing dengan brand besar)</li>
                      </ol>
                    </div>
                    <div class="col-md-6">
                      <h4 class="text-white" style="text-decoration:underline;text-decoration-color:#fff200;background-color:#cfc500">Dengan menguasai 3 Materi Dasar ini, 100% Predictable sudah cukup u/ kamu membuka kedai kopi impiannmu.</h4>
                    </div>
                  </div>
                  <h5 class="text-white" style="text-decoration:underline;text-decoration-color:#fff200">Selain Materi diatas peserta akan mendapatkan:</h5>
                  <ol style="font-size:20px;">
                      <li>Modul Materi</li>
                      <li>E-Book</li>
                      <li>Sertifikat</li>
                      <li>Coffe & Snack</li>
                      <li><b>Free Merchandise</b> #genkuncle</li>
                    </ol>
                </div>
        </div>
    </section>
    {{-- End Benefit --}}

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
                  <h5 class="display-6 font-weight-bold text-white" style="text-decoration:underline;text-decoration-color:#fff200">Objective</h5>
                  <p class="text-italic text-white">Influence people to become an enterpreneur.</p>
                  <h5 class="display-6 font-weight-bold text-white" style="text-decoration:underline;text-decoration-color:#fff200">Education</h5>
                  <p class="text-italic text-white">Gunadarma University.</p>
                  <h5 class="display-6 font-weight-bold text-white" style="text-decoration:underline;text-decoration-color:#fff200">Volunteer Experience</h5>
                  <p class="text-italic text-white"><span class="font-weight-bold">Mawar Sharon Church</span> <br> Bassis Player <br>Event Organizer</p>
                </blockquote>
              </div>
            </div>
            <div class="col-md-6">
              <div class="pl-md-5">
                <div class="icon icon-lg icon-shape bg-gradient-black shadow rounded-circle mb-5">
                  <i class="ni ni-single-02 text-secondary"></i>
                </div>
                <h1 class="font-weight-bold">Profile</h1>
                <h3 class="font-weight-light">YOHANES HANDOYO</h3>
                <h5 class="font-weight-bold text-dark" style="text-decoration:underline;text-decoration-color:#fff200">Work Experience</h5>
                <p style="font-size: 14px;" class="font-weight-bold text-dark">General Manager (2006-2008) at Kuntum Nurseries Bogor <br>Digital Content Optimizer (2010-Present) <br>Founders Raincity Fingerboard (2010-2012) <br>Founder Teras Hijau Landscape (2013-Present) <br>Founder Home IDEA Project (2014-Present) <br>CEO & Founder Uncle Jo Coffe Shop (2017-Present) <br><br>Digital Content Creator for PHO 24 INDONESIA (2018-Present) <br>Interior designer for OMAH KULINA BSD & KantinSOEKA Bintaro</p>
                <p style="font-size: 14px;" class="font-weight-bold text-dark">
                  Busines Consultant for SHARING BISNIS KOPI GROUP
                  <br>
                  <i style="font-size: 14px;" class="font-weight-light text-dark">Intern</i>
                </p>
                <p style="font-size: 14px;" class="font-weight-light text-dark">
                  200+ people in a group coach by me to have a goal, leadership, relation, enggagement in social media and build personal brandingm. And also doing a workshop Coffee Shop Low Budget every month in Bogor, Bandung and Bsd City
                </p>

                <h5 class="font-weight-bold text-dark" style="text-decoration:underline;text-decoration-color:#fff200">Contacts</h5>
                <p style="font-size: 14px;" class="font-weight-bold text-dark">
                  terashijauidea@gmail.com
                  <br>
                  +62811956985
                </p>
              </div>
            </div>
          </div>
        </div>
    </section>
    {{-- end profile  --}}
    {{-- begin register  --}}
    {{-- <section class="section section-lg bg-gradient-black" id="register">
        <div class="container pt-lg pb-100">
        </div>
    </section> --}}

    <section class="section bg-gradient-black" id="register">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="row bg-white rounded">
                    @if ($news->count() == '')
                    <div class="col-md-6">
                        <form action="{{ route('register_workshop') }}" method="post" id="form-register">
                        @csrf
                        <div class="card bg-white" style="height: 130vh; border: none!important; border-radius: 5px 0px 0px 5px!important; padding-top: 20px; width: auto;">
                            <div class="card-body p-lg-5">
                              <div class="icon icon-lg icon-shape bg-gradient-black shadow rounded-circle mb-3">
                                <i class="fa fa-exclamation-triangle text-danger " aria-hidden="true"></i>
                              </div>
                              <h4 class="font-weight-bold f-black">Maaf untuk sekarang belum ada Workshop.</h4>
                            </div>
                        </div>
                        </form>
                    </div>
                    @else
                    <div class="col-md-6">
                        <div class="container">

                            <form action="{{ route('register_workshop') }}" method="post" id="form-register">
                            @csrf
                            <div class="card bg-white" style="height: auto; border: none!important; border-radius: 5px 0px 0px 5px!important; padding-top: 20px; width: auto;">
                                <div class="card-body p-lg-5">
                                    <div class="icon icon-lg icon-shape bg-gradient-black shadow rounded-circle mb-3">
                                        <i class="ni ni-single-02 text-white"></i>
                                    </div>
                                    <h4 class="font-weight-bold f-black">Daftar Kedalam Workshop</h4>
                                    <h4 class="mb-1 f-black">
                                        Tertarik bergabung ke dalam workshop kita ?
                                    </h4>
                                  <div class="form-group mt-5">
                                      <label class="f-black">Nama</label>
                                      <div class="input-group">
                                          {{-- <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user f-black"></i>
                                            </span>
                                          </div> --}}
                                        <input style="padding-left: 10px;" type="text" placeholder="Nama Lengkap" name="nama" class="form-control" value="{{old('nama')}}">
                                      </div>

                                  </div>
                                  <div class="form-group">
                                      <label class="f-black">Email</label>
                                      <div class="input-group">

                                        <input style="padding-left: 10px;" type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Alamat Email">
                                      </div>

                                  </div>

                                  <div class="form-group">
                                      <label class="f-black">Nomer Telepon</label>
                                      <div class="input-group">

                                          <input style="padding-left: 10px;" type="text" name="nomor"class="form-control" placeholder="Nomer Telepon" value="{{old('nomor')}}">
                                      </div>
                                  </div>
                                  <div class="form-group pb-5">
                                      <label class="f-black">Ukuran Baju</label>
                                      <div class="input-group">

                                          <select name="size_chart" class="form-control">
                                            <option value="">-- Silahkan Pilih Ukuran Baju --</option>
                                            <option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                            <option value="xl">XL</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="" style="margin-top:-7%">
                                      <button type="submit" id="btn-id" class="btn btns-gradient-red btn-round text-white">Register Now</button>
                                  </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    @endif

                    <div class="col-md-6">
                        <div class="card bg-white" style="height: auto; border: none!important; border-radius: 0px 5px 5px 0px!important;">
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

            $('.recent-desc').hide();
            $('.less-show').hide();


            $('.text-more').mouseover(function(){
                $('.more-show',this).on('click', function(){
                    $('.more-show').hide();
                    $('.less-show').show()
                    $('.recent-desc').show();
                })

                $('.less-show', this).on('click', function(){
                    $('.more-show').show();
                    $('.less-show').hide()
                    $('.recent-desc').hide();
                })
            })

            var swiper = new Swiper('.swiper-container', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

            var swiper = new Swiper('.swiper-container2', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    dynamicBullets: true,
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

            $('#btn-register').on('click',function(e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#register').offset().top,
                },900,'linear');
            });
            $('#link_r').on('click',function(e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#register').offset().top,
                },900,'linear');
            });

          });
      </script>
      {!! JsValidator::formRequest('App\Http\Requests\RegisterWorkshopRequest', '#form-register') !!}
@endsection
