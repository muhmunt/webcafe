<style>
    #text-logout:hover{
        color: #3b3b3b!important;
    }

    #text-dashboard:hover{
        color: #3b3b3b!important;
    }
</style>

<header class="header-global">
        <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
          <div class="container">
            <a class="navbar-brand mr-lg-5" href="../index.html">
              {{-- <img src="{{ asset('/public/img/UNCLE-JO/logo2.jpg') }}" alt="brand"> --}}
              <h3 class="text-white">Uncle Jo</h3>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
              <div class="navbar-collapse-header">
                <div class="row">
                  <div class="col-6 collapse-brand">
                    <a href="javascript:;">
                      <img src="{{asset('public/argon/assets/img/brand/blue.png')}}" alt="brand">
                    </a>
                  </div>
                  <div class="col-6 collapse-close">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                      <span></span>
                      <span></span>
                    </button>
                  </div>
                </div>
              </div>
              <ul class="navbar-nav navbar-nav-hover align-items-lg-center">

                <li class="nav-item">
                  <a class="nav-link nav-link-icon" id="nav-workshop" href="#workshop">
                    Workshop
                    {{-- <span class="nav-link-inner--text d-lg-none">Workshop</span> --}}
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-icon" id="nav-yt" href="#youtube">
                    Channel
                    {{-- <span class="nav-link-inner--text d-lg-none">Channel</span> --}}
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-icon" id="nav-news" href="#news">
                    News
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-icon" id="nav-gallery" href="#gallery">
                    Gallery
                    {{-- <span class="nav-link-inner--text d-lg-none">Gallery</span> --}}
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-icon" id="nav-get" href="#get">
                    Participant Get
                    {{-- <span class="nav-link-inner--text d-lg-none">Participant Get</span> --}}
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-icon" id="nav-profile" href="#profile">
                    Profile
                    {{-- <span class="nav-link-inner--text d-lg-none">Profile</span> --}}
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-icon" id="nav-register" href="#register">
                    Daftar
                  </a>
                </li>
                @php
                    $user = Auth::user();
                    //dd($user);

                @endphp
                @if ($user == null)

                @else

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" id="nav-admin" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="{{ asset('public/img/ui-images/man.png') }}" width="40">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right border-white bg-transparent" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-white text-center" id="text-logout" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <a class="dropdown-item text-white text-center" id="text-dashboard" href="{{ route('admin') }}">
                            {{ __('Dashboard') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

                @endif

              </ul>

            </div>
          </div>
        </nav>
      </header>
