@extends('layouts.admin.app')
@section('title','Dashboard | Home')

@section('content')

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
        <!-- BEGIN: Header -->


        <!-- begin::Body -->
        <div
          class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"
        >

          <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
              <div class="d-flex align-items-center">
                <div class="mr-auto">
                  <h3 class="m-subheader__title ">Dashboard</h3>
                </div>
                <div>
                  <span
                    class="m-subheader__daterange"
                    id="m_dashboard_daterangepicker"
                  >
                    <span class="m-subheader__daterange-label">
                      <span class="m-subheader__daterange-title"></span>
                      <span
                        class="m-subheader__daterange-date m--font-brand"
                      ></span>
                    </span>
                    <a
                      href="#"
                      class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill"
                    >
                      <i class="la la-angle-down"></i>
                    </a>
                  </span>
                </div>
              </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">

              <div class="jumbotron">
                <h1 class="display-3">Uncle Jo</h1>
                <p class="lead">Welcome To Workshop Uncle Jo</p>
                <hr class="my-2">
                <p>More info</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                </p>
              </div>


            <!-- end:: Body -->


            </div>
      </div>
      </div>
      </div>

      <!-- end:: Page -->

      <!-- begin::Scroll Top -->
      <div id="m_scroll_top" class="m-scroll-top">
        <i class="la la-arrow-up"></i>
      </div>

      <!-- end::Scroll Top -->

@endsection

{{-- @include('layouts.admin.footer.index') --}}
