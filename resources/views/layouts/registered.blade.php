@extends('layouts.element.login_main')
@section('title','Dashboard | Registered')
@section('content')

    <style>
        .alert-dark{
            color: #ffffff;
            background-color: #636e72;
            border-color: #636e72;
        }
    </style>

    <div class="container">
    <div class="m-alert m-alert--icon alert m-alert--square alert-{{ $skinMessage }} m--margin-bottom-25" role="alert">
        <div class="m-alert__icon">
            <i class="la {{ $icon }}"></i>
        </div>
        <div class="m-alert__text">
            <strong> {{ $message }} </strong>
        </div>
        <div class="m-alert__close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid" style="background: url({{ asset($bg) }}); background-size:cover; height: 100vh; background-position: center;">
        <div class="container">
            <h1 class="display-4">
                WorkShop Bisnis Kopi 2.0
            </h1>

            <p class="lead">
                Cara Membangun Kedai Kopi Dengan Buget Minim
            </p>

            @if ($skinMessage == 'dark')
                <h1 class="display-5" style="text-shadow: 1px 1px #ffffff;">
                    Kamu Sekarang Telah Terdaftar Dalam Workshop Kami, Silahkan Bayar
                    <span>Untuk Info Lebih Lanjut Cek Email Anda</span>
                </h1>
                <a href="{{ route('landing') }}" class="btn btn-brand btn-sm m-btn--pill m-btn--air m-btn--wide">
                    <i class="la la-angle-left"></i>
                        Back
                </a>
            @else
                <h1 class="display-5">
                    Mohon maaf seat untuk work shop saat ini sudah penuh silakan mohon tunggu untuk Workshop selanjutnya
                </h1>
                <a href="{{ route('landing') }}" class="btn btn-brand btn-sm m-btn--pill m-btn--air m-btn--wide">
                    <i class="la la-angle-left"></i>
                    Back
                </a>
            @endif
        </div>
    </div>


</div>


@endsection
