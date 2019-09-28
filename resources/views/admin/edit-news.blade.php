@extends('layouts.admin.app')
@section('title','Dashboard | Edit Artikel')

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
              <h3 class="m-subheader__title ">Edit Artikel</h3>
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
                                    <div class="m-portlet m-portlet--head-lg">
                                        <div class="m-portlet__head">
                                            <div class="m-portlet__head-caption">
                                                <div class="m-portlet__head-title">
                                                    <span class="m-portlet__head-icon">
                                                        <i class="la la-edit"></i>
                                                    </span>
                                                    <h3 class="m-portlet__head-text">
                                                        Edit Artikel Workshop
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
    
                                        <!--begin::Form-->
                                    <form class="m-form m-form--state m-form--label-align-left" action="{{ route('adminNews.update',$news->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="m-portlet__body">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="m-form__section">
                                                            <div class="form-group m-form__group row">
                                                                <div class="col-lg-6 m-form__group-sub">
                                                                    <label class="form-control-label">Judul Workshop</label>
                                                                    <input type="text" name="title" value="{{ucfirst($news->title)}}" class="form-control m-input" placeholder="Masukkan Judul">
                                                                    <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                                                                    <span class="m-form__help">Please enter your text</span>
                                                                </div>
                                                                <div class="col-lg-6 m-form__group-sub">
                                                                        <label class="form-control-label">Tanggal & waktu</label>
                                                                        <div class="m-input-icon pull-right">
                                                                            <input type="text" name="tgl" value="{{$news->tgl}}" class="form-control" id="m_datetimepicker_3" readonly placeholder="Pilih tanggal dan waktu" />
                                                                            <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-calendar-check-o"></i></span></span>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space"></div>
                                                            <div class="form-group m-form__group row">
                                                                
                                                                <div class="col-lg-6 m-form__group-sub">
                                                                    <label class="form-control-label">Pengisi Workshop</label>
                                                                    <input type="text" class="form-control" name="author" placeholder="Masukkan Nama" value="{{ucfirst($news->author)}}">
                                                                </div>
                                                                <div class="col-lg-6 m-form__group-sub">
                                                                    <label class="form-control-label">Lokasi Workshop</label>
                                                                    <input type="text" class="form-control" name="location" placeholder="Masukkan Lokasi"   value="{{$news->location}}">
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                    <div class="col-lg-6 m-form__group-sub">
                                                                            <label class="form-control-label">Upload gambar</label>
                                                                            <div class="input-group file-input">
                                                                                <input type="file" class="upload" multiple name="foto">
                                                                                <input type="hidden" name="fotoLama" value="{{$news->foto}}">
                                                                                <input class="form-control" placeholder="No File Selected" type="text">
                                                                                <span class="remove-file"><i class="la la-times-circle"></i></span>
                                                                                <div class="input-group-append">
                                                                                    <button type="button" class="btn btn-primary file-name"><i class="la la-file"></i></button>
                                                                                </div>		
                                                                            </div>
                                                                        </div>
                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                    <div class="col-sm-12">
                                                                        <label class="col-form-labe">Deskripsi (optional)</label>
                                                                    <textarea name="description" required id="m_summernote_1" class="summernote" cols="30" rows="10">{{$news->description}}</textarea>
                                                                    </div>
                                                                </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-portlet__foot m-portlet__foot--fit">
                                                <div class="m-form__actions m-form__actions--solid">
                                                    <div class="row">
                                                        <div class="col-xl-12 m--align-right">
                                                            <button type="submit" class="btn btn-danger btn-sm m-btn--pill m-btn--air m-btn--wide">Update</button>
                                                            <button type="reset" class="btn btn-secondary btn-sm m-btn--wide m-btn--pill m--margin-left-5">Cancel</button>	
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
    
                                        <!--end::Form-->
                                    </div>
    
                                    <!--End::Portlet-->
                                </div>
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