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
        <a href="index.html" class="m-menu__link ">
            <i class="m-menu__link-icon la la-dashboard"></i>
            <span class="m-menu__link-title">
                <span class="m-menu__link-wrap">
                    <span class="m-menu__link-text">Dashboard</span>
                </span>
            </span>
        </a
      >
    </li>
    <li class="m-menu__section">
      <h4 class="m-menu__section-text">Module</h4>
      <i class="m-menu__section-icon flaticon-more-v2"></i>
    </li>
    <li class="m-menu__item" aria-haspopup="true">
        <a href="{{route('news.index')}}" class="m-menu__link m-menu__toggle"
          ><i class="m-menu__link-icon la la-tags"></i
          ><span class="m-menu__link-text">News</span></a
        >
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
    <li class="m-menu__section ">
      <h4 class="m-menu__section-text">Template</h4>
      <i class="m-menu__section-icon flaticon-more-v2"></i>
    </li>
    <li class="m-menu__item" aria-haspopup="true">
      <a href="javascript:;" class="m-menu__link m-menu__toggle"
        ><i class="m-menu__link-icon la la-language"></i
        ><span class="m-menu__link-text">Language File</span></a
      >
    </li>
    <li class="m-menu__item" aria-haspopup="true">
      <a href="javascript:;" class="m-menu__link m-menu__toggle"
        ><i class="m-menu__link-icon la la-gears"></i
        ><span class="m-menu__link-text">Widget</span></a
      >
    </li>
    <li class="m-menu__item" aria-haspopup="true">
      <a href="javascript:;" class="m-menu__link m-menu__toggle"
        ><i class="m-menu__link-icon la la-flag-o"></i
        ><span class="m-menu__link-text">Template Preference</span></a
      >
    </li>
    <li class="m-menu__section ">
      <h4 class="m-menu__section-text">Settings</h4>
      <i class="m-menu__section-icon flaticon-more-v2"></i>
    </li>
    <li class="m-menu__item" aria-haspopup="true">
      <a href="javascript:;" class="m-menu__link m-menu__toggle"
        ><i class="m-menu__link-icon la la-sliders"></i
        ><span class="m-menu__link-text">System Preference</span></a
      >
    </li>
    <li class="m-menu__item" aria-haspopup="true">
      <a href="javascript:;" class="m-menu__link m-menu__toggle"
        ><i class="m-menu__link-icon la la-folder-open"></i
        ><span class="m-menu__link-text">File Manager</span></a
      >
    </li>
    <li class="m-menu__item" aria-haspopup="true">
      <a href="javascript:;" class="m-menu__link m-menu__toggle"
        ><i class="m-menu__link-icon la la-users"></i
        ><span class="m-menu__link-text">User Manager</span></a
      >
    </li>
    <li class="m-menu__section ">
      <h4 class="m-menu__section-text">Optional</h4>
      <i class="m-menu__section-icon flaticon-more-v2"></i>
    </li>
    <li
      class="m-menu__item  m-menu__item--submenu"
      aria-haspopup="true"
      m-menu-submenu-toggle="hover"
    >
      <a href="javascript:;" class="m-menu__link m-menu__toggle"
        ><i class="m-menu__link-icon la la-list"></i
        ><span class="m-menu__link-text">Dropdown Menu</span
        ><i class="m-menu__ver-arrow la la-angle-right"></i
      ></a>
      <div class="m-menu__submenu ">
        <span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">
          <li
            class="m-menu__item  m-menu__item--parent"
            aria-haspopup="true"
          >
            <span class="m-menu__link"
              ><span class="m-menu__link-text"
                >Custom Pages</span
              ></span
            >
          </li>
          <li
            class="m-menu__item  m-menu__item--submenu"
            aria-haspopup="true"
            m-menu-submenu-toggle="hover"
          >
            <a href="javascript:;" class="m-menu__link m-menu__toggle"
              ><i class="m-menu__link-bullet m-menu__link-bullet--dot"
                ><span></span></i
              ><span class="m-menu__link-text">Dropdown</span
              ><i class="m-menu__ver-arrow la la-angle-right"></i
            ></a>
            <div class="m-menu__submenu ">
              <span class="m-menu__arrow"></span>
              <ul class="m-menu__subnav">
                <li class="m-menu__item " aria-haspopup="true">
                  <a
                    target="_blank"
                    href="javascript:;"
                    class="m-menu__link "
                    ><i
                      class="m-menu__link-bullet m-menu__link-bullet--dot"
                      ><span></span></i
                    ><span class="m-menu__link-text"
                      >Sub Dropdown - 1</span
                    ></a
                  >
                </li>
                <li class="m-menu__item " aria-haspopup="true">
                  <a
                    target="_blank"
                    href="javascript:;"
                    class="m-menu__link "
                    ><i
                      class="m-menu__link-bullet m-menu__link-bullet--dot"
                      ><span></span></i
                    ><span class="m-menu__link-text"
                      >Sub Dropdown - 2</span
                    ></a
                  >
                </li>
                <li class="m-menu__item " aria-haspopup="true">
                  <a
                    target="_blank"
                    href="javascript:;"
                    class="m-menu__link "
                    ><i
                      class="m-menu__link-bullet m-menu__link-bullet--dot"
                      ><span></span></i
                    ><span class="m-menu__link-text"
                      >Sub Dropdown - 3</span
                    ></a
                  >
                </li>
                <li class="m-menu__item " aria-haspopup="true">
                  <a
                    target="_blank"
                    href="javascript:;"
                    class="m-menu__link "
                    ><i
                      class="m-menu__link-bullet m-menu__link-bullet--dot"
                      ><span></span></i
                    ><span class="m-menu__link-text"
                      >Sub Dropdown - 4</span
                    ></a
                  >
                </li>
                <li class="m-menu__item " aria-haspopup="true">
                  <a
                    target="_blank"
                    href="javascript:;"
                    class="m-menu__link "
                    ><i
                      class="m-menu__link-bullet m-menu__link-bullet--dot"
                      ><span></span></i
                    ><span class="m-menu__link-text"
                      >Sub Dropdown - 5</span
                    ></a
                  >
                </li>
                <li class="m-menu__item " aria-haspopup="true">
                  <a
                    target="_blank"
                    href="javascript:;"
                    class="m-menu__link "
                    ><i
                      class="m-menu__link-bullet m-menu__link-bullet--dot"
                      ><span></span></i
                    ><span class="m-menu__link-text"
                      >Sub Dropdown - 6</span
                    ></a
                  >
                </li>
              </ul>
            </div>
          </li>
          <li
            class="m-menu__item  m-menu__item--submenu"
            aria-haspopup="true"
            m-menu-submenu-toggle="hover"
          >
            <a href="javascript:;" class="m-menu__link m-menu__toggle"
              ><i class="m-menu__link-bullet m-menu__link-bullet--dot"
                ><span></span></i
              ><span class="m-menu__link-text">Dropdown</span
              ><i class="m-menu__ver-arrow la la-angle-right"></i
            ></a>
            <div class="m-menu__submenu ">
              <span class="m-menu__arrow"></span>
              <ul class="m-menu__subnav">
                <li class="m-menu__item " aria-haspopup="true">
                  <a
                    target="_blank"
                    href="javascript:;"
                    class="m-menu__link "
                    ><i
                      class="m-menu__link-bullet m-menu__link-bullet--dot"
                      ><span></span></i
                    ><span class="m-menu__link-text"
                      >Sub Dropdown - 1</span
                    ></a
                  >
                </li>
                <li class="m-menu__item " aria-haspopup="true">
                  <a
                    target="_blank"
                    href="javascript:;"
                    class="m-menu__link "
                    ><i
                      class="m-menu__link-bullet m-menu__link-bullet--dot"
                      ><span></span></i
                    ><span class="m-menu__link-text"
                      >Sub Dropdown - 2</span
                    ></a
                  >
                </li>
                <li class="m-menu__item " aria-haspopup="true">
                  <a
                    target="_blank"
                    href="javascript:;"
                    class="m-menu__link "
                    ><i
                      class="m-menu__link-bullet m-menu__link-bullet--dot"
                      ><span></span></i
                    ><span class="m-menu__link-text"
                      >Sub Dropdown - 3</span
                    ></a
                  >
                </li>
                <li class="m-menu__item " aria-haspopup="true">
                  <a
                    target="_blank"
                    href="javascript:;"
                    class="m-menu__link "
                    ><i
                      class="m-menu__link-bullet m-menu__link-bullet--dot"
                      ><span></span></i
                    ><span class="m-menu__link-text"
                      >Sub Dropdown - 4</span
                    ></a
                  >
                </li>
                <li class="m-menu__item " aria-haspopup="true">
                  <a
                    target="_blank"
                    href="javascript:;"
                    class="m-menu__link "
                    ><i
                      class="m-menu__link-bullet m-menu__link-bullet--dot"
                      ><span></span></i
                    ><span class="m-menu__link-text"
                      >Sub Dropdown - 5</span
                    ></a
                  >
                </li>
                <li class="m-menu__item " aria-haspopup="true">
                  <a
                    target="_blank"
                    href="javascript:;"
                    class="m-menu__link "
                    ><i
                      class="m-menu__link-bullet m-menu__link-bullet--dot"
                      ><span></span></i
                    ><span class="m-menu__link-text"
                      >Sub Dropdown - 6</span
                    ></a
                  >
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</div>

<!-- END: Aside Menu -->
</div>

<!-- END: Left Aside -->
