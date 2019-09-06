@extends('layouts.app')

@section('content')

<header>
    <div id="intro" class="view" style="height:100vh; width:100%;">
        <div class="full-bg-img">

        </div>
    </div>
</header>

<main>

<div class="container">
    @if (Session::has('auth'))
        <div class="alert alert-danger">
            {{Session::get('auth')}}
        </div>
    @endif

    <div class="row justify-content-center">

    </div>
</div>

</main>

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){

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
