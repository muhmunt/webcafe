@extends('layouts.admin.app')
@section('title','Dashboard | Participant')

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
                    <h3 class="m-subheader__title m-subheader__title--separator">Participants</h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="{{ route('admin') }}" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="{{ route('participants.index') }}" class="m-nav__link ">
                                <span class="m-nav__link-text">Participants</span>
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
                                            Table Participants
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                <ul class="m-portlet__nav">
                                    <li class="m-portlet__nav-item">
                                        <a href="{{ route('participants.create') }}" class="btn m-btn btn-brand btn-sm m-btn--icon m-btn--pill m-btn--air">
                                            <span>
                                                <i class="la la-plus"></i>
                                                <span>Add Item</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>

                        <div class="m-portlet__body">
                            <table class="table table-bordered" id="table-id">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Desctription</th>
                                    <th scope="col">Picture</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($participants as $g)
                                    <tr>
                                        <th>{{ $g->id }}</th>
                                        <td>{{ $g->title }}</td>
                                        <td>{{ $g->description }}</td>
                                        <td>
                                            <img src="{{asset('public/upload/participants/'.$g->picture)}}" width="100px" alt="foto">
                                        </td>
                                        <td>
                                            <div class="section__action">
												<div class="list__section__action">

													<a href="{{ route('participants.edit', $g->id) }}" data-toggle="kt-tooltip" data-placement="bottom" data-skin="dark" title="Edit" class="btn m-btn btn-success btn-sm m-btn--icon m-btn--air icon-only">
														<span>
															<i class="la la-pencil"></i>
														</span>
													</a>
													<a href="#" data-toggle="kt-tooltip" data-placement="bottom" data-skin="dark" title="Delete" data-id="{{ route('participants.destroy', $g->id) }}" class="btn m-btn btn-danger btn-sm  m-btn--icon m-btn--pill icon-only m_sweetalert_5">
                                                        <span>
															<i class="la la-trash"></i>
														</span>
													</a>
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
        $(document).ready(function() {

            $(function () {
                $('[data-toggle="kt-tooltip"]').tooltip();
            })

            $('.btn-danger').on('click', function() {


            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: 'red',
            cancelButtonColor: 'blue',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel'
            }).then((result) => {
                if (result.value) {

                    var data = $(this).data('id')
                    console.log(data)
                    window.location = data;

                }else{
                    Swal.fire(
                    'Cancelled!',
                    'Your file has been cancel.',
                    'error'
                    )
                }

            })
        })

        } );
  </script>
@endsection


