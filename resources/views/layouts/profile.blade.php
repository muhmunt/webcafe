@extends('layouts.app')

@section('content')

    <section class="bg-black-1 section-padding" id="section-profile" >
        <div class="container" id="profile" data-aos="fade-up">
            <div class="title-padding text-center">
                <h2>
                    <span class="text-red">Our</span> Profile
                </h2>
                <div class="underline"></div>
            </div>
            <div class="row">
                <div class="col-md-4" style="padding-left:75px;">
                    <div class="profile-img">
                        <img src="{{ asset('public/img/content/o-3.png') }}" class="circle-img">
                    </div>
                    <div class="describe-img text-left">
                        <h3>Coffe Jo</h3>
                        <p>Bla bla bla blaa</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content-profile">
                        <h3>Bisimillah</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque cumque excepturi fugit? Corrupti natus, doloribus vero ullam nulla neque atque! Quo expedita dolorem adipisci fuga ipsam, voluptatem ex sed laudantium.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque cumque excepturi fugit? Corrupti natus, doloribus vero ullam nulla neque atque! Quo expedita dolorem adipisci fuga ipsam, voluptatem ex sed laudantium.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque cumque excepturi fugit? Corrupti natus, doloribus vero ullam nulla neque atque! Quo expedita dolorem adipisci fuga ipsam, voluptatem ex sed laudantium.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
