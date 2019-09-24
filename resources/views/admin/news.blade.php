@extends('layouts.admin.app')
@section('title','Dashboard | Artikel')

@include('layouts.admin.header.index')
@include('layouts.admin.header.left')
@section('content')    

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
              <h3 class="m-subheader__title ">Artikel</h3>
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

            <!--Begin::Section-->
						<div class="row">
                                <div class="col-xl-12">
                                    <!--Begin::Portlet-->
                                    <div class="m-portlet m-portlet--head-lg">
                                        <div class="m-portlet__head">
                                            <div class="m-portlet__head-caption">
                                                <div class="m-portlet__head-title">
                                                    <span class="m-portlet__head-icon">
                                                        <i class="la la-list"></i>
                                                    </span>
                                                    <h3 class="m-portlet__head-text">
                                                        Page List Taking this
                                                    </h3>
                                                </div>
                                                
                                            </div>
                                            <div class="m-portlet__head-tools">
                                                <ul class="m-portlet__nav">
                                                    <li class="m-portlet__nav-item">
                                                        <a href="form.html" class="btn m-btn btn-danger btn-sm m-btn--icon m-btn--pill m-btn--air">
                                                            <span>
                                                                <i class="la la-plus"></i>
                                                                <span>Add Category</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-portlet__nav-item">
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
                                                            <a href="#" class="m-portlet__nav-link btn btn-outline-metal m-btn--icon btn-sm m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                                                <i class="la la-ellipsis-h"></i>
                                                            </a>
                                                            <div class="m-dropdown__wrapper">
                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                <div class="m-dropdown__inner">
                                                                    <div class="m-dropdown__body">
                                                                        <div class="m-dropdown__content">
                                                                            <ul class="m-nav">
                                                                                <li class="m-nav__section m-nav__section--first">
                                                                                    <span class="m-nav__section-text">Quick Actions</span>
                                                                                </li>
                                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flat la la-pencil-square"></i>
                                                                                        <span class="m-nav__link-text">Add Category</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon la la-gear"></i>
                                                                                        <span class="m-nav__link-text">Manage Page</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon la la-sort"></i>
                                                                                        <span class="m-nav__link-text">Set Position</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__section">
                                                                                    <span class="m-nav__section-text">Useful Links</span>
                                                                                </li>
                                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon la la-question-circle"></i>
                                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon la la-life-bouy"></i>
                                                                                        <span class="m-nav__link-text">Support</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__separator m-nav__separator--fit m--hide">
                                                                                </li>
                                                                                <li class="m-nav__item m--hide">
                                                                                    <a href="#" class="btn m-btn btn-outline-danger m-btn--pill m-btn--wide btn-sm">Submit</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="m-portlet__body no-pedding">
                                            
                                            <div class="list-section">
                                                <div class="list-section__item">
                                                    <div class="section__content">
                                                        <div class="section__widget">
                                                            <span class="date">02</span>
                                                            <span class="month">Apr</span>
                                                            <span class="year">2019</span> 
                                                        </div>
                                                        <div class="section__desc">
                                                            <h5 class="section__title">Make Metronic Great Again. Lorem Ipsum Amet</h5>
                                                            <div class="section__info">
                                                                
                                                                <div class="section__info__item sm-text">
                                                                    <span class="info__label">Posted By :</span>
                                                                    <a href="" class="info__detail m-link">Administrator</a>
                                                                </div>
                                                                <div class="section__info__item sm-text">
                                                                    <span class="info__label">Language :</span>
                                                                    <span class="info__detail">Indonesia</span>
                                                                </div>
                                                            </div>
                                                            <div class="section__status">
                                                                <span class="m-badge m-badge--danger m-badge--wide">Not Published yet</span>
                                                                <span class="m-badge m-badge--brand m-badge--wide">Draft</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="section__action">
                                                        <div class="list__section__action">
                                                            <a href="#" class="btn m-btn btn-primary btn-sm  m-btn--icon m-btn--square m-btn--air icon-only">
                                                                <span>
                                                                    <i class="la la-list"></i>
                                                                    <span>View List</span>
                                                                </span>
                                                            </a>
                                                            <a href="#" class="btn m-btn btn-success btn-sm m-btn--icon m-btn--air icon-only">
                                                                <span>
                                                                    <i class="la la-pencil"></i>
                                                                    <span>View List</span>
                                                                </span>
                                                            </a>
                                                            <a href="#" class="btn m-btn btn-primary btn-sm m-btn--icon m-btn--pill m-btn--air icon-only">
                                                                <span>
                                                                    <i class="la la-eye"></i>
                                                                    <span>View Page</span>
                                                                </span>
                                                            </a>
                                                            <a href="#" class="btn m-btn btn-outline-danger btn-sm  m-btn--icon m-btn--pill icon-only m_sweetalert_5">
                                                                <span>
                                                                    <i class="la la-trash"></i>
                                                                    <span>Delete</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--up m--hide-desktop" m-dropdown-toggle="click" aria-expanded="true">
                                                            <a href="#" class="btn m-btn btn-outline-metal m-btn--icon btn-sm m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                                                <i class="la la-ellipsis-h"></i>
                                                            </a>
                                                            <div class="m-dropdown__wrapper" style="z-index: 101;">
                                                                <div class="m-dropdown__inner">
                                                                    <div class="m-dropdown__body">
                                                                        <div class="m-dropdown__content">
                                                                            <!--Move Here-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                   
                                    <!--End::Portlet-->
                                </div>
    
                            <!--End::Section-->
          

    <!-- end:: Body -->


  </div>

  <!-- end:: Page -->

  <!-- begin::Scroll Top -->
  <div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
  </div>

  <!-- end::Scroll Top -->
@endsection