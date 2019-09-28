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
              <h3 class="m-subheader__title ">Workshop</h3>
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
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="m-alert m-alert--icon alert m-alert--square alert-danger m--margin-bottom-25" role="alert">
                    <div class="m-alert__icon">
                        <i class="la la-exclamation-triangle"></i>
                    </div>
                    <div class="m-alert__text">
                        {{$error}}
                    </div>
                    <div class="m-alert__close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                </div>
                @endforeach
            @endif
            @if (session('warning'))
            <div class="m-alert m-alert--icon alert m-alert--square alert-warning m--margin-bottom-25" role="alert">
                <div class="m-alert__icon">
                    <i class="la la-exclamation-triangle"></i>
                </div>
                <div class="m-alert__text">
                    {{session('warning')}}
                </div>
                <div class="m-alert__close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            </div>
            @endif
            @if (session('success'))
            <div class="m-alert m-alert--icon alert m-alert--square alert-success m--margin-bottom-25" role="alert">
                <div class="m-alert__icon">
                    <i class="la la-exclamation-triangle"></i>
                </div>
                <div class="m-alert__text">
                    {{session('success')}}
                </div>
                <div class="m-alert__close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            </div>
            @endif
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
                                                        Daftar Workshop
                                                    </h3>
                                                </div>
                                                
                                            </div>
                                            <div class="m-portlet__head-tools">
                                                <ul class="m-portlet__nav">
                                                    <li class="m-portlet__nav-item">
                                                        <a href="{{url('/admin/create/news')}}" class="btn m-btn btn-danger btn-sm m-btn--icon m-btn--pill m-btn--air">
                                                            <span>
                                                                <i class="la la-plus"></i>
                                                                <span>Tambah Artikel</span>
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
                                        @foreach ($data as $news)
                                            
                                        
                                        <div class="m-portlet__body no-pedding">
                                            
                                            <div class="list-section">
                                                <div class="list-section__item">
                                                    <div class="section__content">
                                                        <div class="section__widget">
                                                            {{-- <span class="date">02</span>
                                                            <span class="month">Apr</span>
                                                            <span class="year">2019</span>  --}}
                                                            <h5 class="">{{Carbon\Carbon::parse($news->tgl)->formatLocalized('%d %B %Y')}}</h5>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="section__desc">
                                                                    <h5 class="section__title"><a href="" class="m-link info__detail">{{ucfirst($news->title)}}</a></h5>
                                                                    
                                                                    <div class="section__info">
                                                                        
                                                                        <div class="section__info__item sm-text">
                                                                            <span class="info__label">Pembicara Workshop :</span>
                                                                            <span class="info__detail ">{{ucfirst($news->author)}}</span>
                                                                        </div>      
                                                                        <br>                       
                                                                        <div class="section__info__item sm-text">
                                                                            <span class="info__label"> Location :</span>
                                                                            <span class="info__detail ">{{ucfirst($news->location)}}</span>
                                                                        </div>                             
                                                                    </div>                     
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <h5>Foto : </h5>
                                                                <img src="{{asset('public/upload/news/'.$news->foto)}}" width="100px" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="section__action">
                                                        <div class="list__section__action">

                                                                    <a href="{{route('adminNews.edit',$news->id)}}" class="btn m-btn btn-success btn-sm m-btn--icon m-btn--air icon-only">
                                                                                <span>
                                                                                    <i class="la la-pencil"></i>
                                                                                    <span>Edit List</span>
                                                                                </span>
                                                                            </a>    
                                                                    <a href="{{route('adminNews.destroy',$news->id)}}" class="btn m-btn btn-outline-danger btn-sm  m-btn--icon m-btn--pill icon-only m_sweetalert_5 btn-delete">
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
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-portlet__body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- end:: Body -->
<<<<<<< HEAD


  </div>
  @endforeach
=======
    </div>
</div>
</div>

>>>>>>> 9aab8e122e168031277468ba9a3fbbf51cd2caa3
  <!-- end:: Page -->

  <!-- begin::Scroll Top -->
  <div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
  </div>

  <!-- end::Scroll Top -->
@endsection
<<<<<<< HEAD
@section('js')
    
    <script>
        $(document).ready(function(){

            $('.btn-delete').click(function(e){
            e.preventDefault();
            var link_news = $(this).attr('href');
            console.log(link_news)
            swal({
                title:'Are you sure?',
                type:'warning',
                showCancelButton:true,
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
            }).then((result)=>{
                if(result.value){
                    window.location.href = link_news;
                    console.log('Button delete clicked');
                }
            })
        });

        });
    </script>

@endsection
=======
>>>>>>> 9aab8e122e168031277468ba9a3fbbf51cd2caa3
