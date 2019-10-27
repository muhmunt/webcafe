@extends('layouts.admin.app')
@section('title','Dashboard | Workshop')

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


                    </ul>
                </div>
            </div>
        </div>

        <!-- END: Subheader -->
        <div class="m-content">
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
            @if (session('danger'))
            <div class="m-alert m-alert--icon alert m-alert--square alert-danger m--margin-bottom-25" role="alert">
                <div class="m-alert__icon">
                    <i class="la la-exclamation-triangle"></i>
                </div>
                <div class="m-alert__text">
                    {{session('danger')}}
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
                        <div class="m-portlet__body no-pedding">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon">
                                            <i class="la la-table"></i>
                                        </span>
                                        <h3 class="m-portlet__head-text">
                                            Table Workshop
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                <ul class="m-portlet__nav">
                                    <li class="m-portlet__nav-item">
                                        <a href="{{ route('news.create') }}" class="btn m-btn btn-brand btn-sm m-btn--icon m-btn--pill m-btn--air">
                                            <span>
                                                <i class="la la-plus"></i>
                                                <span>Add Workshop</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>

                        <div class="table-responsive" style="padding-top: 50px;">
                            <table class="table align-items-center table-flush" id="table-id">
                                <thead class="thead-light">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Desctription</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Waktu</th>
                                    <th class="text-center" scope="col">Seat</th>
                                    <th class="text-center" scope="col">Status</th>
                                    <th scope="col">Picture</th>
                                    <th class="text-center" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($news as $g)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <td>{{ $g->title }}</td>
                                        <td>{!! $g->description !!}</td>
                                        @php
                                            $tgl = date("Y-m-d", strtotime($g->tgl_mulai));
                                            $mulai = date("H:i", strtotime($g->tgl_mulai));
                                            $akhir = date("H:i", strtotime($g->tgl_akhir));
                                            $tanggal = Carbon\Carbon::parse($tgl)->formatLocalized('%d %B %Y')
                                        @endphp
                                        <td>
                                            {{ $tanggal }}
                                        </td>
                                        <td>
                                            {{ $mulai.' - '.$akhir }}
                                        </td>
                                        <td class="text-center">{{ $g->seat }}</td>
                                        @if ($g->delete_is == 1)
                                            <td class="text-center">
                                                <span class="m-badge m-badge--primary m-badge--wide">
                                                    Workshop Sudah
                                                </span>
                                            </td>
                                        @else
                                            <td class="text-center">
                                                 <span class="m-badge m-badge--success m-badge--wide">
                                                    Aktif
                                                </span>
                                            </td>
                                        @endif
                                        <td>
                                            <img src="{{asset('public/upload/news/'.$g->foto)}}" width="100px" alt="foto">
                                        </td>
                                        <td class="text-center">
                                            <div class="section__action">
                                                <div class="list__section__action"></div>
                                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--up" m-dropdown-toggle="click" aria-expanded="true">

                                                    @if ($g->delete_is == 1)
                                                    <a href="{{route('news.destroy',$g->id)}}" data-toggle="kt-tooltip" data-placement="bottom" title="Hapus" data-skin="brand" class="btn-delete btn m-btn btn-outline-danger btn-sm  m-btn--icon m-btn--pill icon-only">
                                                        <span>
                                                            <i class="la la-trash"></i>
                                                        <span>Delete</span>
                                                        </span>
                                                    </a>
                                                    @else
                                                    <a href="{{ route('news.edit', $g->id) }}" data-toggle="kt-tooltip" data-placement="bottom" data-skin="dark" title="Edit" class="btn m-btn btn-success btn-sm m-btn--icon m-btn--air icon-only">
                                                        <span>
                                                            <i class="la la-pencil"></i>
                                                        </span>
                                                    </a>
                                                    <a href="{{route('news.destroy',$g->id)}}" data-toggle="kt-tooltip" data-placement="bottom" title="Hapus" data-skin="brand" class="btn-delete btn m-btn btn-outline-danger btn-sm  m-btn--icon m-btn--pill icon-only">
                                                        <span>
                                                            <i class="la la-trash"></i>
                                                        <span>Delete</span>
                                                        </span>
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

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
    $(document).ready(function(){



        $(function () {
            $('[data-toggle="kt-tooltip"]').tooltip();
        })

        $('.btn-delete').click(function(e){
            e.preventDefault();
            var link_project = $(this).attr('href');
            swal({
                title: 'Are you sure?',
                type:'warning',
                showCancelButton:true,
                cancelButtonColor:'#d33',
                confirmButtonColoro:'#3085d6'
            }).then((result)=>{
                if(result.value){
                    window.location.href= link_project;
                    console.log('delete button clicked');
                }
            });
        });

    });

  </script>

@endsection


