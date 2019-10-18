{{-- Progress --}}
<div class="progress">
        <div class="progress-bar"
        role="progressbar"
        style="width:0%"
        aria-valuenow="0"
        aria-valuemin="0"
        aria-valuemax="100"></div>
</div>
{{-- Nav - app --}}
<nav class="navbar navbar-expand-md navbar-light shadow-sm fixed-top" id="navbar-custom">
    <div class="container" id="nav-con">
        <a class="navbar-brand text-white" id="text-nav" href="#intro">
            Uncle
        </a>
        <button class="navbar-toggler bg-white" id="nav-btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest

                    {{-- <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}

                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav-workshop" href="#workshop">{{ __('Workshop') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav-yt" href="#youtube">{{ __('Channel') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav-news" href="#news">{{ __('News') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav-gallery" href="#gallery">{{ __('Gallery') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav-get" href="#get">{{ __('What You Get') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav-profile" href="#profile">{{ __('Profile') }}</a>
                    </li>

                @else
                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav-workshop" href="#workshop">{{ __('Workshop') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav-yt" href="#youtube">{{ __('Channel') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav-news" href="#news">{{ __('News') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav-gallery" href="#gallery">{{ __('Gallery') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav-get" href="#get">{{ __('What You Get') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav-profile" href="#profile">{{ __('Profile') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" id="nav-admin" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{ asset('public/img/ui-images/man.png') }}" width="40">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right border-white bg-transparent" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white text-center" id="text-admin" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            @if (Auth::user()->role == '1')
                            <a class="dropdown-item text-white text-center" id="text-admin" href="{{ route('admin') }}">
                                {{ __('Dashboard') }}
                            </a>
                            @endif

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
