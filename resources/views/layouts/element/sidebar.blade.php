<!-- BEGIN: Left Aside -->
<button
class="m-aside-left-close  m-aside-left-close--skin-light "
id="m_aside_left_close_btn"
>
<i class="la la-close"></i>
</button>
<div
id="m_aside_left"
class="m-grid__item	m-aside-left  m-aside-left--skin-light "
>
<!-- BEGIN: Aside Menu -->
<div
  id="m_ver_menu"
  class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light"
  m-menu-vertical="1"
  m-menu-scrollable="1"
  m-menu-dropdown-timeout="500"
  style="position: relative;"
>
  <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
    <li class="m-menu__item" aria-haspopup="true">
        <a href="{{url('/home')}}" class="m-menu__link ">
            <i class="m-menu__link-icon la la-dashboard"></i>
            <span class="m-menu__link-title">
                <span class="m-menu__link-wrap">
                    <span class="m-menu__link-text">Front End</span>
                </span>
            </span>
        </a
      >
    </li>
    <li class="m-menu__section">
      <h4 class="m-menu__section-text">Manage</h4>
      <i class="m-menu__section-icon flaticon-more-v2"></i>
    </li>
    {{-- <li class="m-menu__item" aria-haspopup="true">
        <a href="{{route('news.index')}}" class="m-menu__link m-menu__toggle"
          ><i class="m-menu__link-icon la la-tags"></i
          ><span class="m-menu__link-text">Workshop</span></a
        >
    </li> --}}
    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
            <a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon la la-tags"></i><span class="m-menu__link-text">Workshop</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"></li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
                        <a href="{{route('news.index')}}" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">Workshop Active</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
                        <a href="{{route('news.recent')}}" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">Workshop Recent</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    <li class="m-menu__item" aria-haspopup="true">
        <a href="{{ route('galleries.index') }}" class="m-menu__link m-menu__toggle"
          ><i class="m-menu__link-icon la la-image "></i
          ><span class="m-menu__link-text">Gallery</span></a
        >
      </li>
      <li class="m-menu__item" aria-haspopup="true">
        <a href="{{ route('participants.index') }}" class="m-menu__link m-menu__toggle"
          ><i class="m-menu__link-icon la la-archive"></i
          ><span class="m-menu__link-text">Particpant Get</span></a
        >
      </li>
      <li class="m-menu__item" aria-haspopup="true">
        <a href="{{ route('adminAccount.index') }}" class="m-menu__link m-menu__toggle"
          ><i class="m-menu__link-icon la la-user"></i
          ><span class="m-menu__link-text">Add Admin Account</span></a>
      </li>
      <li class="m-menu__item" aria-haspopup="true">
        <a href="{{ route('registered.index') }}" class="m-menu__link m-menu__toggle"
          ><i class="m-menu__link-icon la la-registered"></i
          ><span class="m-menu__link-text">Registered</span></a
        >
      </li>

  </ul>
</div>

<!-- END: Aside Menu -->
</div>

<!-- END: Left Aside -->
