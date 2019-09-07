@extends('layouts.app')

@section('content')
@if (Session::has('auth'))
        <div class="alert alert-danger">
            {{Session::get('auth')}}
        </div>
    @endif
<header>
    <div id="intro" class="view" style="height:100vh; width:100%;">
        <div class="full-bg-img">
            {{-- LOGO --}}

            {{-- HEADING --}}
            <h2 class="display-3 font-weight-bold text-white mb-2" align="center" >Uncle Jo</h2>

            {{-- BUTTON --}}
        </div>
    </div>
</header>

<style>
    .owl-next{
        font-size: 50px;
    }
</style>

<main>



</main>

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){

            $(".owl-carousel").owlCarousel({
                stagePadding: 400,
                loop:true,
                margin:30,
                items: 1,
                nav:true,
                responsive : {
                // breakpoint from 0 up
                0 : {
                    stagePadding : 20
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
