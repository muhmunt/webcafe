<header
        id="m_header"
        class="m-grid__item    m-header "
        m-minimize-offset="200"
        m-minimize-mobile-offset="200"
      >
        <div class="m-container m-container--fluid m-container--full-height bg-white">
          <div class="m-stack m-stack--ver m-stack--desktop">
            <!-- BEGIN: Brand -->
            <div class="m-stack__item m-brand  m-brand--skin-light ">
              <div class="m-stack m-stack--ver m-stack--general">
                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                  <a href="index.html" class="m-brand__logo-wrapper">
                    <img
                      alt=""
                      src="{{asset('public/assets/demo/default/media/img/logo/logo.svg')}}"
                    />
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
                class="m-topbar m-stack m-stack--ver m-stack--general m-stack--fluid bg-white"
              >
                <div class="m-stack__item m-topbar__nav-wrapper">
                  <ul class="m-topbar__nav m-nav m-nav--inline flex">
                    <li id="view-frontend" class="m-nav__item">
                      <a href="#" class="m-menu__link">
                        <span class=" m-menu__link-text">View Frontend</span>
                        <i class="m-menu__link-icon la la-external-link"></i>
                      </a>
                    </li>
                    <li
                      id="avatar"
                      class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                      m-dropdown-toggle="click"
                    >
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-topbar__username">Administrator</span>
                        <span class="m-topbar__userpic">
                          <img
                            src="{{asset('public/assets/app/media/img/users/user4.jpg')}}"
                            class="m--img-rounded m--marginless"
                            alt=""
                          />
                        </span>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span
                          class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                        ></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__header m--align-center" style="background: url({{ asset('public/assets/app/media/img/bg/bg-9.jpg') }}); background-size: cover;"
                          >
                            <div class="m-card-user m-card-user--skin-light">
                              <div class="m-card-user__pic">
                                <img
                                  src="{{asset('public/assets/app/media/img/users/user4.jpg')}}"
                                  class="m--img-rounded m--marginless"
                                  alt=""
                                />
                              </div>
                              <div class="m-card-user__details">
                                <span
                                  class="m-card-user__name m--font-weight-500"
                                  >Administrator</span
                                >
                                <a href="" class="m-card-user__email m-link"
                                  >admin@4visionmedia.com</a
                                >
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
                                  <a href="#!" class="m-nav__link">
                                    <i class="m-nav__link-icon la la-user"></i>
                                    <span class="m-nav__link-text"
                                      >My Profile</span
                                    >
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#!" class="m-nav__link">
                                    <i
                                      class="m-nav__link-icon la la-share-alt"
                                    ></i>
                                    <span class="m-nav__link-title">
                                      <span class="m-nav__link-wrap">
                                        <span class="m-nav__link-text"
                                          >Activity</span
                                        >
                                        <span class="m-nav__link-badge"
                                          ><span
                                            class="m-badge m-badge--success"
                                            >2</span
                                          ></span
                                        >
                                      </span>
                                    </span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#!" class="m-nav__link">
                                    <i
                                      class="m-nav__link-icon la la-comments"
                                    ></i>
                                    <span class="m-nav__link-text"
                                      >Messages</span
                                    >
                                  </a>
                                </li>
                                <li
                                  class="m-nav__separator m-nav__separator--fit"
                                ></li>
                                <li class="m-nav__item">
                                  <a href="#!" class="m-nav__link">
                                    <i
                                      class="m-nav__link-icon la la-question-circle"
                                    ></i>
                                    <span class="m-nav__link-text">FAQ</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#!" class="m-nav__link">
                                    <i
                                      class="m-nav__link-icon la la-life-bouy"
                                    ></i>
                                    <span class="m-nav__link-text"
                                      >Support</span
                                    >
                                  </a>
                                </li>
                                <li
                                  class="m-nav__separator m-nav__separator--fit"
                                ></li>
                                <li class="m-nav__item">
                                  <a href="{{ route('logout') }}" class="m-nav__link" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                    <i
                                    class="m-nav__link-icon la la-sign-out"
                                    ></i>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <span class="m-nav__link-text">Logout</span>
                                  </a>
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
