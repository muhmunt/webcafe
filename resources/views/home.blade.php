@extends('layouts.app')

@section('content')
@if (Session::has('auth'))
        <div class="alert alert-danger">
            {{Session::get('auth')}}
        </div>
    @endif
<header>
    <div id="intro" class="view" style="height:100vh; width:100%;">
        <div class="container-fluid full-bg-img d-flex align-items-center justify-content-center mx-auto" style="padding-top:230px">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 text-center">
                {{-- LOGO --}}
                <h1 class="text-center rounded-circle"> <i class="fas fa-coffee fa-2x"></i> </h1>
                {{-- HEADING --}}
                <h2 class="display-3 font-weight-bold text-white mb-2" align="center">Uncle Jo</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia a doloremque </p>
                {{-- BUTTON --}}
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
        <section id="#detail-workshop" class="mt-5" data-aos="fade-up">
                <div class="card mb-3 border-0" style="background:#000000">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card-body" style="border-left: 3px solid #007bff;">
                          <h2 class="card-title">Workshop <small><i class="fas fa-coffee text-primary"></i></small></h2>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer aku makannya apa? tempe siapa juru masaknya. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, temporibus. </p>
                          <p class="card-text">Dolore eligendi, inventore aliquid a quaerat culpa, laborum explicabo suscipit, amet distinctio possimus cumque. Voluptates itaque quas doloribus nulla incidunt. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam id, consectetur aperiam delectus hic et molestiae quis eum dicta sed optio obcaecati consequatur modi, rerum aliquid nemo esse, ipsam cum?</p>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                          <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer aku makannya apa? tempe siapa juru masaknya. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, temporibus. </p>
                                <p class="card-text">Dolore eligendi, inventore aliquid a quaerat culpa, laborum explicabo suscipit, amet distinctio possimus cumque. Voluptates itaque quas doloribus nulla incidunt. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam id, consectetur aperiam delectus hic et molestiae quis eum dicta sed optio obcaecati consequatur modi, rerum aliquid nemo esse, ipsam cum?</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                      </div>
                    </div>
                  </div>
            </section>
</div>

<style>
    .owl-next{
        font-size: 50px;
    }
    </style>

<main>
<div class="container">
        <section id="youtube" class="mt-5" data-aos="fade-up">
            <h2>Youtube Channel : Uncle Jo <i class="fas fa-coffee text-primary"></i></h2><br>
            <div class="owl-carousel owl-theme">
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
    </section>
</div>
</main>

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){

            $(".owl-carousel").owlCarousel({
                stagePadding: 100,
                loop:true,
                margin:10,
                items: 1,
                nav:true,
                responsive : {
                // breakpoint from 0 up
                0 : {

                    stagePadding : 10
                },
                480 : {
                    stagePadding : 30
                },
                // breakpoint from 480 up
                780 : {
                    stagePadding : 200
                },
                // breakpoint from 768 up
                1000 : {
                    stagePadding : 200
                },
                1100 : {
                    stagePadding : 250
                },
                1200 : {
                    stagePadding : 300
                },
                1300 : {
                    stagePadding : 400
                }
            }
            });

            $('#nav-btn').on('click', function(){
                var cek = $('#navbar-custom').hasClass('bg-white');
                if(cek){
                    //console.log(cek)
                    $('#navbar-custom').removeClass('bg-white');
                    $('#nav-admin').addClass('text-white');
                    $('#text-admin').addClass('text-white');
                    $('#text-test').addClass('text-white');
                }else{
                    $('#navbar-custom').addClass('bg-white');
                    $('#text-test').removeClass('text-white');
                    $('#nav-admin').removeClass('text-white');
                    $('#text-admin').removeClass('text-white');
                }
            })

        })
    </script>
@endsection
