@extends('layouts.admin.app')
@section('title','Dashboard | Create Admin Account')
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
                                <span class="m-nav__link-text">Add Admin Account</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- END: Subheader -->
        <div class="m-content">

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
                        <div class="m-portlet__body no-pedding">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon">
                                            <i class="la la-table"></i>
                                        </span>
                                        <h3 class="m-portlet__head-text">
                                            Add Admin Account
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form action="{{ route('adminAccount.store') }}" id="form-request" method="POST" class="m-form m-form--state m-form--label-align-left">
                            @csrf
                            <div class="m-portlet__body">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="m-form__section">
                                            <div class="form-group m-form__group row">

                                                @if ($errors->any())
                                                <div class="col-lg-6 m-form__group-sub has-danger">
                                                        <label class="form-control-label">
                                                            Nama
                                                        </label>
                                                        <input type="text" name="name" class="form-control m-input" >
                                                        <div class="form-control-feedback">
                                                           {{$errors->first('name')}}
                                                        </div>
                                                    </div>
                                                @else
                                                <div class="col-lg-6 m-form__group-sub has-success">
                                                        <label class="form-control-label">
                                                            Nama
                                                        </label>
                                                        <input type="text" name="name" class="form-control m-input" >
                                                        <span class="m-form__help">
                                                            Harap Masukan Nama
                                                        </span>
                                                    </div>
                                                @endif

                                                @if ($errors->any())
                                                <div class="col-lg-6 m-form__group-sub has-danger">
                                                        <label class="form-control-label">
                                                            Email
                                                        </label>
                                                        <input type="email" name="email" class="form-control m-input">
                                                        <div class="form-control-feedback">
                                                           {{$errors->first('email')}}
                                                        </div>
                                                    </div>
                                                @else
                                                <div class="col-lg-6 m-form__group-sub has-success">
                                                        <label class="form-control-label">
                                                            Email
                                                        </label>
                                                        <input type="email" name="email" class="form-control m-input" >
                                                        <span class="m-form__help">
                                                            Harap Masukan Email
                                                        </span>
                                                    </div>
                                                @endif


                                            </div>

                                            <div class="form-group m-form__group row">

                                                @if ($errors->any())
                                                <div class="col-lg-6 m-form__group-sub has-danger">
                                                        <label class="form-control-label">
                                                            Password
                                                        </label>
                                                        <input type="password" name="password" class="form-control m-input" >
                                                        <div class="form-control-feedback">
                                                           {{$errors->first('password')}}
                                                        </div>
                                                    </div>
                                                @else
                                                <div class="col-lg-6 m-form__group-sub has-success">
                                                        <label class="form-control-label">
                                                            Password
                                                        </label>
                                                        <input type="password" name="password" class="form-control m-input" >
                                                        <span class="m-form__help">
                                                            Harap Masukan password
                                                        </span>
                                                    </div>
                                                @endif

                                                @if ($errors->any())
                                                <div class="col-lg-6 m-form__group-sub has-danger">
                                                        <label class="form-control-label">
                                                            Confirm Password
                                                        </label>
                                                        <input type="password" name="password_confirmation" class="form-control m-input">
                                                        <div class="form-control-feedback">
                                                           {{$errors->first('password_confirmation')}}
                                                        </div>
                                                    </div>
                                                @else
                                                <div class="col-lg-6 m-form__group-sub has-success">
                                                        <label class="form-control-label">
                                                            Confirm Password
                                                        </label>
                                                        <input type="password" name="password_confirmation" class="form-control m-input" >
                                                        <span class="m-form__help">
                                                            Harap Masukan Password Yang Sama
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="form-group m-form__group row">

                                                @if ($errors->any())
                                                <div class="col-lg-6 m-form__group-sub has-danger">
                                                    <label class="form-control-label">
                                                        Hak Akses
                                                    </label>
                                                    <select name="role" class="form-control">
                                                        <option value="">Pilih Hak Akses</option>
                                                        <option value="1">Admin</option>
                                                        <option value="2">Super Admin</option>
                                                    </select>
                                                    <div class="form-control-feedback">
                                                       {{$errors->first('password')}}
                                                    </div>
                                                </div>
                                                @else
                                                <div class="col-lg-6 m-form__group-sub has-success">
                                                    <label class="form-control-label">
                                                         Hak Akses
                                                    </label>
                                                    <select name="role" required class="form-control">
                                                        <option value="">Pilih Hak Akses</option>
                                                        <option value="1">Admin</option>
                                                        <option value="2">Super Admin</option>
                                                    </select>
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
                                            <a href="{{route('adminAccount.index')}}" class="btn btn-secondary btn-sm m-btn--wide m-btn--pill m--margin-left-5">Cancel</a>
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
{!! JsValidator::formRequest('App\Http\Requests\AccountRequest', '#form-request') !!}
  <script>
        $(document).ready(function() {

            $('.summernote').summernote({
                 height: 100,
            });

        } );
  </script>
@endsection


