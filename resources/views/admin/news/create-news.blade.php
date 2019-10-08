@extends('layouts.admin.app')
@section('title','Dashboard | Tambah Workshop')

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
              <h3 class="m-subheader__title ">Tambah Workshop</h3>
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
            {{-- @if ($errors->any())
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
            @endif --}}
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
                                                        Tambah Artikel Workshop
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>

                                        <!--begin::Form-->
                                    <form id="form-request" class="m-form m-form--state m-form--label-align-left" action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="m-portlet__body">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="m-form__section">
                                                            <div class="form-group m-form__group row">
                                                                @if ($errors->any())
                                                                <div class="col-lg-6 m-form__group-sub has-danger">
                                                                    <label class="form-control-label">Judul Workshop</label>
                                                                    <input type="text" name="title" class="form-control m-input" placeholder="Masukkan Judul">
                                                                    <div class="form-control-feedback">
                                                                        {{$errors->first('title')}}
                                                                    </div>
                                                                </div>
                                                                @else
                                                                <div class="col-lg-6 m-form__group-sub">
                                                                    <label class="form-control-label">Judul Workshop</label>
                                                                    <input type="text" name="title" class="form-control m-input" placeholder="Masukkan Judul">

                                                                </div>
                                                                @endif

                                                                @if ($errors->any())
                                                                <div class="col-lg-6 m-form__group-sub has-danger">
                                                                    <label class="form-control-label">Pengisi Workshop</label>
                                                                    <input type="text" class="form-control" name="author" placeholder="Masukkan Nama">
                                                                    <div class="form-control-feedback">
                                                                        {{$errors->first('author')}}
                                                                    </div>
                                                                </div>
                                                                @else
                                                                <div class="col-lg-6 m-form__group-sub">
                                                                    <label class="form-control-label">Pengisi Workshop</label>
                                                                    <input type="text" class="form-control" name="author" placeholder="Masukkan Nama">
                                                                </div>
                                                                @endif
                                                            </div>

                                                            <div class="form-group m-form__group row">
                                                                    @if ($errors->any())
                                                                    <div class="col-lg-6 m-form__group-sub has-danger">
                                                                        <label class="form-control-label">Lokasi</label>
                                                                        <input type="text" class="form-control" name="location" placeholder="Masukkan Lokasi">
                                                                        <div class="form-control-feedback">
                                                                            {{$errors->first('location')}}
                                                                        </div>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-lg-6 m-form__group-sub">
                                                                        <label class="form-control-label">Location</label>
                                                                        <input type="text" class="form-control" name="location" placeholder="Masukkan Lokasi">
                                                                    </div>
                                                                    @endif

                                                                    @if ($errors->any())
                                                                    <div class="col-lg-6 m-form__group-sub has-danger">
                                                                        <label class="form-control-label">Seat</label>
                                                                        <input type="text" class="form-control" name="seat" placeholder="Masukkan jumlah seat">
                                                                        <div class="form-control-feedback">
                                                                            {{$errors->first('seat')}}
                                                                        </div>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-lg-6 m-form__group-sub">
                                                                        <label class="form-control-label">Seat</label>
                                                                        <input type="text" class="form-control" name="seat" placeholder="Masukkan jumlah seat">
                                                                    </div>
                                                                    @endif
                                                            </div>

                                                            <div class="form-group m-form__group row">
                                                                    @if ($errors->any())
                                                                    <div class="col-lg-6 m-form__group-sub has-danger">
                                                                            <label class="form-control-label">Waktu Mulai</label>
                                                                            <div class="m-input-icon pull-right">
                                                                                <input type="text" name="tgl_mulai" class="form-control" id="m_datetimepicker_3" readonly placeholder="Pilih tanggal dan waktu" />
                                                                                <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-calendar-check-o"></i></span></span>
                                                                            </div>
                                                                            <div class="form-control-feedback">
                                                                                    {{$errors->first('tgl_mulai')}}
                                                                                </div>
                                                                        </div>
                                                                    @else
                                                                    <div class="col-lg-6 m-form__group-sub">
                                                                            <label class="form-control-label">Waktu Mulai</label>
                                                                            <div class="m-input-icon pull-right">
                                                                                <input type="text" name="tgl_mulai" class="form-control" id="m_datetimepicker_3" readonly placeholder="Pilih tanggal dan waktu" />
                                                                                <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-calendar-check-o"></i></span></span>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($errors->any())
                                                                    <div class="col-lg-6 m-form__group-sub has-danger">
                                                                            <label class="form-control-label">Waktu Akhir</label>
                                                                            <div class="m-input-icon pull-right">
                                                                                <input type="text" name="tgl_akhir" class="form-control" id="m_datetimepicker_3" readonly placeholder="Pilih tanggal dan waktu" />
                                                                                <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-calendar-check-o"></i></span></span>
                                                                            </div>
                                                                            <div class="form-control-feedback">
                                                                                    {{$errors->first('tgl_akhir')}}
                                                                                </div>
                                                                        </div>
                                                                    @else
                                                                    <div class="col-lg-6 m-form__group-sub">
                                                                            <label class="form-control-label">Waktu Akhir</label>
                                                                            <div class="m-input-icon pull-right">
                                                                                <input type="text" name="tgl_akhir" class="form-control" id="m_datetimepicker_3" readonly placeholder="Pilih tanggal dan waktu" />
                                                                                <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-calendar-check-o"></i></span></span>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                            </div>
                                                            <div class="form-group m-form__group row">


                                                                    @if ($errors->any())
                                                                    <div class="col-lg-6 m-form__group-sub has-danger">
                                                                            <label class="form-control-label">Upload gambar</label>
                                                                            <div class="input-group file-input">
                                                                                <input type="file" class="upload" multiple name="foto">
                                                                                <input class="form-control" placeholder="No File Selected" type="text">
                                                                                <span class="remove-file"><i class="la la-times-circle"></i></span>
                                                                                <div class="input-group-append">
                                                                                    <button type="button" class="btn btn-primary file-name"><i class="la la-file"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-control-feedback">
                                                                                    {{$errors->first('foto')}}
                                                                                </div>
                                                                        </div>
                                                                        @else
                                                                    <div class="col-lg-6 m-form__group-sub">
                                                                            <label class="form-control-label">Upload gambar</label>
                                                                            <div class="input-group file-input">
                                                                                <input type="file" class="upload" multiple name="foto">
                                                                                <input class="form-control" placeholder="No File Selected" type="text">
                                                                                <span class="remove-file"><i class="la la-times-circle"></i></span>
                                                                                <div class="input-group-append">
                                                                                    <button type="button" class="btn btn-primary file-name"><i class="la la-file"></i></button>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    @endif

                                                            </div>
                                                            <div class="form-group m-form__group row">
                                                                    @if ($errors->any())
                                                                    <div class="col-sm-12 has-danger">
                                                                            <label class="form-control-label">Deskripsi (optional)</label>
                                                                            <textarea name="description" id="m_summernote_1" class="summernote" cols="30" rows="10"></textarea>
                                                                            <div class="form-control-feedback">
                                                                                {{$errors->first('description')}}
                                                                            </div>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-sm-12">
                                                                        <label class="form-control-label">Deskripsi (optional)</label>
                                                                        <textarea name="description" id="m_summernote_1" class="summernote" cols="30" rows="10"></textarea>
                                                                    </div>
                                                                    @endif

                                                                </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-portlet__foot m-portlet__foot--fit">
                                                <div class="m-form__actions m-form__actions--solid">
                                                    <div class="row">
                                                        <div class="col-xl-12 m--align-right">
                                                            <button type="submit" class="btn btn-primary btn-sm m-btn--pill m-btn--air m-btn--wide">Submit</button>
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

@section('admin-js')
{!! JsValidator::formRequest('App\Http\Requests\WorkshopRequest', '#form-request') !!}
@endsection
