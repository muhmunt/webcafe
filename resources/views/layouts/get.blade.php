@extends('layouts.app')

@section('content')

    <style>
        .owl-carousel .owl-item img{
            width: auto;
        }
    </style>

    <section class="bg-black-2 section-padding" id="section-participant-get" >
        <div class="container" id="participant-get" data-aos="fade-up">
            <div class="title-padding text-center">
                <h2>
                    <span class="text-red">Participants</span> Get
                </h2>
                <div class="underline"></div>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="text-center">
                        <div class="profile-img">
                            <img src="{{ asset('public/img/content/o-3.png') }}" class="circle-img">
                        </div>
                        <h4>Contoh</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="text-center">
                        <div class="profile-img">
                            <img src="{{ asset('public/img/content/o-4.png') }}" class="circle-img">
                        </div>
                        <h4>Contoh</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="text-center">
                        <div class="profile-img">
                            <img src="{{ asset('public/img/content/o-5.png') }}" class="circle-img">
                        </div>
                        <h4>Contoh</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){

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
                        stagePadding : 350
                    }
                }
            });

        })
    </script>
@endsection
