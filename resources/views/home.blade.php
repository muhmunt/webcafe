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

<main>

<div class="container">

    <section id="#detail-workshop" class="mt-5">
        <div class="card mb-3 border-0" style="background:#000000">
            <div class="row no-gutters">
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
    {{-- maneh ngoding kebawah jer dari sini --}}
    {{-- rojer start --}}

    

    {{-- end --}}



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
