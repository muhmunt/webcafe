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
