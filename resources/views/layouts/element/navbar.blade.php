<!-- BEGIN: Header -->
<header
id="m_header"
class="m-grid__item    m-header "
m-minimize-offset="200"
m-minimize-mobile-offset="200"
>
<div class="m-container m-container--fluid m-container--full-height">
  <div class="m-stack m-stack--ver m-stack--desktop">
    <!-- BEGIN: Brand -->
    <div class="m-stack__item m-brand  m-brand--skin-light ">
      <div class="m-stack m-stack--ver m-stack--general">
        <div class="m-stack__item m-stack__item--middle m-brand__logo">
          <a href="index.html" class="m-brand__logo-wrapper">
            <img src="{{ asset('public/assets/demo/default/media/img/logo/logo.svg') }}" />
          </a>
        </div>
        <div class="m-stack__item m-stack__item--middle m-brand__tools">
          <!-- BEGIN: Left Aside Minimize Toggle -->

          <a
            href="javascript:;"
            id="m_aside_left_minimize_toggle"
            class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  "
          >
            <span></span>
          </a>

          <!-- END -->

          <!-- BEGIN: Responsive Aside Left Menu Toggler -->
          <a
            href="javascript:;"
            id="m_aside_left_offcanvas_toggle"
            class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block"
          >
            <span></span>
          </a>

          <!-- END -->

          <!-- BEGIN: Responsive Header Menu Toggler -->
          <!--<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>-->

          <!-- END -->

          <!-- BEGIN: Topbar Toggler -->
          <a
            id="m_aside_header_topbar_mobile_toggle"
            href="javascript:;"
            class="m-brand__icon m--visible-tablet-and-mobile-inline-block"
          >
            <i class="la la-ellipsis-v "></i>
          </a>

          <!-- BEGIN: Topbar Toggler -->
        </div>
      </div>
    </div>

    <!-- END: Brand -->
    <div
      class="m-stack__item m-stack__item--fluid m-header-head"
      id="m_header_nav"
    >
      <!-- BEGIN: Topbar -->
      <div
        id="m_header_topbar"
        class="m-topbar m-stack m-stack--ver m-stack--general m-stack--fluid"
      >
        <div class="m-stack__item m-topbar__nav-wrapper">
          <ul class="m-topbar__nav m-nav m-nav--inline flex">

            <li
              id="avatar"
              class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
              m-dropdown-toggle="click"
            >
              <a href="#" class="m-nav__link m-dropdown__toggle">
                <span class="m-topbar__username">
                    {{ $user->name }}
                </span>
                <span class="m-topbar__userpic">
                  <img src="{{ asset('public/img/ui-images/manp.png') }}" class="m--img-rounded m--marginless" />
                </span>
              </a>
              <div class="m-dropdown__wrapper">
                <span
                  class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                ></span>
                <div class="m-dropdown__inner">
                  <div
                    class="m-dropdown__header m--align-center"
                    style="background: url(public/assets/app/media/img/bg/bg-9.jpg); background-size: cover;"
                  >
                    <div class="m-card-user m-card-user--skin-light">
                      <div class="m-card-user__pic">
                        <img src="{{ asset('public/img/ui-images/man.png') }}" class="m--img-rounded m--marginless" />
                      </div>
                      <div class="m-card-user__details">
                        <span class="m-card-user__name m--font-weight-500">
                            {{ $user->name }}
                        </span>
                        <a href="javascript:;" class="m--font-info" style="text-decoration:none;">
                            {{ $user->email }}
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="m-dropdown__body">
                    <div class="m-dropdown__content">
                      <ul class="m-nav m-nav--skin-light">
                        <li class="m-nav__section m--hide">
                          <span class="m-nav__section-text"
                            >Section</span
                          >
                        </li>
                        <li class="m-nav__item">
                          <a href="javascript:;" class="m-nav__link">
                            <i class="m-nav__link-icon la la-user"></i>
                            <span class="m-nav__link-text"
                              >Coming soon</span
                            >
                          </a>
                        </li>

                        <li class="m-nav__item">
                          <a href="{{route('landing')}}" class="m-nav__link">
                            <i
                              class="m-nav__link-icon la la-globe"
                            ></i>
                            <span class="m-nav__link-text">
                                Front End
                            </span>
                          </a>
                        </li>


                        <li
                          class="m-nav__separator m-nav__separator--fit"
                        ></li>
                        <li class="m-nav__item">
                          <a class="dropdown-item text-center" id="text-admin" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- END: Topbar -->
    </div>
  </div>
</div>
</header>

<!-- END: Header -->
