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

        </div>
    </div>
</header>

<main>

<div class="container">








    {{-- maneh ngoding kebawah jer dari sini --}}
    {{-- rojer start --}}

    <section class="section-youtube my-5">
        <div class="row">
            <div class="col-md-12 text-center title-youtube ">
                <h1>Testimoni</h1>
            </div>
            <div class="col-md-4 text-center card-padding">
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="card-title">
                            <iframe class="frame-yt" src="https://www.youtube.com/embed/zIyCZVF1kI4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center card-padding">
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="card-title">
                            <iframe class="frame-yt" src="https://www.youtube.com/embed/GUKOkXNuunc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center card-padding">
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="card-title">
                            <iframe class="frame-yt" src="https://www.youtube.com/embed/NlQai9_q2Ng" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center card-padding">
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="card-title">
                            <iframe class="frame-yt" src="https://www.youtube.com/embed/zIyCZVF1kI4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center card-padding">
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="card-title">
                            <iframe class="frame-yt" src="https://www.youtube.com/embed/GUKOkXNuunc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center card-padding">
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="card-title">
                            <iframe class="frame-yt" src="https://www.youtube.com/embed/NlQai9_q2Ng" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- end --}}


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
