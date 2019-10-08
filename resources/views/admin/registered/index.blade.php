@extends('layouts.admin.app')
@section('title','Dashboard | Registered Workshop')

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
                    <h3 class="m-subheader__title m-subheader__title--separator">Register Workshop</h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="{{ route('admin') }}" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="{{ route('registered.index') }}" class="m-nav__link ">
                                <span class="m-nav__link-text">Register Workshop</span>
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
            @if (session('message'))
            <div class="m-alert m-alert--icon alert m-alert--square alert-success m--margin-bottom-25" role="alert">
                <div class="m-alert__icon">
                    <i class="la la-check-circle-o"></i>
                </div>
                <div class="m-alert__text">
                    {{session('message')}}
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
                                            Table Register Workshop
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">

                            </div>
                            </div>
                        </div>

                        <div class="m-portlet__body">
                            <table class="table table-bordered" id="table-id">
                                <thead>
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Workshop</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No Telp</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data as $g)
                                    <tr>
                                        <th>{{$no++}}</th>
                                        <td>{{ $g->nama }}</td>
                                        <td>{{ ucfirst($g->news->title) }}</td>
                                        <td>{{ $g->email }}</td>
                                        <td>{{ $g->number_telp }}</td>
                                        <td><div class="section__status">
                                        @if ( $g->status == '0')
                                            <span class="m-badge m-badge--warning text-white m-badge--wide">Belum bayar</span>
                                        @else
                                            <span class="m-badge m-badge--success m-badge--wide">Bayar</span>
                                        @endif
                                        </div></td>
                                        <td>
                                            <div class="section__action">
												<div class="list__section__action">
                                                </div>
                                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--up" m-dropdown-toggle="click" aria-expanded="true">
														<a href="#" data-toggle="kt-tooltip" data-placement="bottom" title="Action" data-skin="brand" class="btn m-btn btn-outline-metal m-btn--icon btn-sm m-btn--icon-only m-btn--square  m-dropdown__toggle">
															<i class="la la-ellipsis-h"></i>
														</a>
														<div class="m-dropdown__wrapper" style="z-index: 101;">
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">Quick Actions</span>
																		</li>
																		<li class="m-nav__separator m-nav__separator--fit"></li>
																		<li class="m-nav__item">
                                                                            <form action="{{route('registered.pay',$g->id)}}" method="POST">
                                                                            @csrf
                                                                            @method('put')
																			@if ($g->status == '1')
                                                                            <h5>Sudah dibayar</h5>
                                                                                @else
                                                                                <button type="submit" class="btn m-btn btn-outline-danger btn-sm" >
                                                                                        <i class="m-nav__link-icon flat la la-pencil-square"></i>
                                                                                        <span class="m-nav__link-text">Bayar</span>
                                                                                    </button>

                                                                            @endif
                                                                            </form>
																		</li>
																	</ul>
																	<!--Move Here-->
																</div>
															</div>
														</div>
														<span class="m-dropdown__arrow m-dropdown__arrow--right"></span>
													</div>
                                                    </div>
                                                    <a href="{{route('registered.destroy',$g->id)}}" data-toggle="kt-tooltip" data-placement="bottom" title="Hapus" data-skin="brand" class="btn-delete btn m-btn btn-outline-danger btn-sm  m-btn--icon m-btn--pill icon-only">
                                                            <span>
                                                                <i class="la la-trash"></i>
                                                            <span>Delete</span>
                                                            </span>
                                                        </a>
                                            </div>


                                        </td>
                                    </tr>
                                    @endforeach
                                    {{ $data->render() }}
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


