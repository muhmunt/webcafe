@extends('layouts.admin.app')
@section('title','Dashboard | Galleries')
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
                    <h3 class="m-subheader__title m-subheader__title--separator">Page</h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Page</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Add Picture</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- END: Subheader -->
        <div class="m-content">
			<div class="row">
                <div class="col-xl-12">
                    <!--Begin::Portlet-->
                    <div class="m-portlet m-portlet--head-lg">
                        <div class="m-portlet__body no-pedding">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon">
                                            <i class="la la-table"></i>
                                        </span>
                                        <h3 class="m-portlet__head-text">
                                            Tambah Galeri
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form action="{{ route('galleries.store') }}" id="form-request" method="post" enctype="multipart/form-data" class="m-form m-form--state m-form--label-align-left">
                            @csrf
                            <div class="m-portlet__body">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="m-form__section">
                                            <div class="form-group m-form__group row">
                                                @if ($errors->any())
                                                <div class="col-lg-6 m-form__group-sub has-danger">
                                                        <label class="form-control-label">
                                                            Title
                                                        </label>
                                                        <input type="text" name="title" class="form-control m-input" placeholder="Enter text">
                                                        <div class="form-control-feedback">
                                                           {{$errors->first('title')}}
                                                        </div>
                                                    </div>
                                                @else
                                                <div class="col-lg-6 m-form__group-sub">
                                                        <label class="form-control-label">
                                                            Title
                                                        </label>
                                                        <input type="text" name="title" class="form-control m-input" placeholder="Enter text">
                                                        <span class="m-form__help">
                                                            Please enter your text
                                                        </span>
                                                    </div>
                                                @endif
                                                @if ($errors->any())
                                                <div class="col-lg-6 m-form__group-sub has-danger">
                                                    <label class="form-control-label">Gambar</label>
                                                    <div class="input-group file-input">
                                                        <input type="file" name="file" class="upload" multiple>
                                                        <input class="form-control"  name="picture" placeholder="No File Selected" type="text">
                                                            <span class="remove-file"><i class="la la-times-circle"></i></span>
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-primary file-name"><i class="la la-file"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="form-control-feedback">
                                                        {{$errors->first('picture')}}
                                                    </div>
                                                </div>
                                                @else
                                                <div class="col-lg-6 m-form__group-sub">
                                                    <label class="form-control-label">Gambar</label>
                                                    <div class="input-group file-input">
                                                        <input type="file" name="file" class="upload" multiple>
                                                        <input class="form-control"  name="picture" placeholder="No File Selected" type="text">
                                                            <span class="remove-file"><i class="la la-times-circle"></i></span>
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-primary file-name"><i class="la la-file"></i></button>
                                                        </div>
                                                    </div>
                                                    <span class="m-form__help">
                                                        Please enter your text
                                                    </span>
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
                                            <button type="submit" class="btn btn-danger btn-sm m-btn--pill m-btn--air m-btn--wide">
                                                Submit
                                            </button>
                                            <a href="{{route('galleries.index')}}" class="btn btn-secondary btn-sm m-btn--wide m-btn--pill m--margin-left-5">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{-- <form action="{{route('galleries.store')}}" enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}
                            <input type="text" name="text">
                            <button type="submit">send</button>
                        </form> --}}
                    </div>
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
<script>
        $(document).ready(function() {

            $('.summernote').summernote({
                 height: 100,setInterval(() => {

                 }, interval);
            });

        } );
  </script>
    {!! JsValidator::formRequest('App\Http\Requests\GalleryRequest', '#form-request') !!}
@endsection


