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
                    <h3 class="m-subheader__title m-subheader__title--separator">Galleries</h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="{{ route('admin') }}" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="{{ route('galleries.index') }}" class="m-nav__link ">
                                <span class="m-nav__link-text">Galleries</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="{{ route('galleries.edit', $gallery->id) }}" class="m-nav__link ">
                                <span class="m-nav__link-text">Edit</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="javascript:;" class="m-nav__link ">
                                <span class="m-nav__link-text">
                                    {{$gallery->id }}
                                </span>
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
                                            Galleries Edit
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data" class="m-form m-form--state m-form--label-align-left">
                            @csrf
                            @method('put')
                            <div class="m-portlet__body">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="m-form__section">
                                            <div class="form-group m-form__group row">

												<div class="col-lg-6 m-form__group-sub">
													<label class="form-control-label">
                                                        Title
                                                    </label>
													<input type="text" name="title" class="form-control m-input" value="{{ $gallery->title }}">
													<div class="form-control-feedback">
                                                        Sorry, that username's taken. Try another?
                                                    </div>
													<span class="m-form__help">
                                                        Please enter your text
                                                    </span>
                                                </div>
                                                <div class="col-lg-6 m-form__group-sub">
                                                    <label class="form-control-label">Gambar</label>
													<div class="input-group file-input">
														<input type="file" name="file" class="upload" multiple>
														<input class="form-control"  name="picture" type="text" value="{{ $gallery->picture }}">
														<span class="remove-file"><i class="la la-times-circle"></i></span>
														<div class="input-group-append">
															<button type="button" class="btn btn-primary file-name"><i class="la la-file"></i></button>
														</div>
													</div>
                                                </div>

                                            </div>
                                            <div class="form-group m-form__group row">
                                                <div class="col-lg-12 m-form__group-sub">
                                                    <label class="col-form-labe">
                                                        Description
                                                    </label>
                                                    <textarea class="summernote" name="description" id="m_summernote_1">{{ $gallery->description }}</textarea>
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
                                            <button type="submit" class="btn btn-danger btn-sm m-btn--pill m-btn--air m-btn--wide">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary btn-sm m-btn--wide m-btn--pill m--margin-left-5">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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


        } );
  </script>
@endsection


