@extends('layouts.admin.app')
@section('title','Dashboard | Edit Workshop')

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
                    <h3 class="m-subheader__title m-subheader__title--separator">Workshop</h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="{{ route('admin') }}" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="{{ route('news.index') }}" class="m-nav__link ">
                                <span class="m-nav__link-text">Workshop</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="{{ route('news.edit', $news->id) }}" class="m-nav__link ">
                                <span class="m-nav__link-text">Edit</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="javascript:;" class="m-nav__link ">
                                <span class="m-nav__link-text">
                                    {{$news->id }}
                                </span>
                            </a>
                        </li>
                    </ul>
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
                                                        Edit Workshop
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>

                                        <!--begin::Form-->
                                    <form class="m-form m-form--state m-form--label-align-left" action="{{ route('news.update',$news->id) }}" method="POST" enctype="multipart/form-data">
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
                                                                    <label class="form-control-label">Pengisi Workshop</label>
                                                                    <input type="text" class="form-control" name="author" placeholder="Masukkan Nama" value="{{ucfirst($news->author)}}">
                                                                </div>

                                                            </div>

                                                            <div class="form-group m-form__group row">

                                                                <div class="col-lg-6 m-form__group-sub">
                                                                    <label class="form-control-label">Waktu Mulai</label>
                                                                    <div class="m-input-icon pull-right">
                                                                        <input type="text" name="tgl_mulai" value="{{$news->tgl_mulai}}" class="form-control" id="m_datetimepicker_3" readonly placeholder="Pilih tanggal dan waktu" />
                                                                        <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-calendar-check-o"></i></span></span>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 m-form__group-sub">
                                                                    <label class="form-control-label">Waktu Akhir</label>
                                                                    <div class="m-input-icon pull-right">
                                                                        <input type="text" name="tgl_akhir" value="{{$news->tgl_akhir}}" class="form-control" id="m_datetimepicker_3" readonly placeholder="Pilih tanggal dan waktu" />
                                                                        <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-calendar-check-o"></i></span></span>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div class="form-group m-form__group row">

                                                                <div class="col-lg-6 m-form__group-sub">
                                                                    <label class="form-control-label">Jumlah Seat</label>
                                                                    <input type="text" class="form-control" name="seat" value="{{$news->seat}}">
                                                                </div>

                                                                <div class="col-lg-6 m-form__group-sub">
                                                                    <label class="form-control-label">Lokasi Workshop</label>
                                                                    <input type="text" class="form-control" name="location" value="{{$news->location}}">
                                                                </div>
                                                                <div class="col-lg-6 m-form__group-sub">
                                                                    <label class="form-control-label">Seat</label>
                                                                    <input type="text" class="form-control" name="seat" placeholder="Masukkan Lokasi"   value="{{$news->seat}}">
                                                                </div>
                                                                <div class="col-lg-6 m-form__group-sub">
                                                                    <label class="form-control-label">Volume</label>
                                                                    <input type="text" class="form-control" name="seat" value="{{$news->volume}}">
                                                                </div>
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
                                                            <button type="submit" class="btn btn-primary btn-sm m-btn--pill m-btn--air m-btn--wide">Update</button>
                                                            <a href="{{route('news.index')}}" class="btn btn-secondary btn-sm m-btn--wide m-btn--pill m--margin-left-5">Cancel</a>
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
