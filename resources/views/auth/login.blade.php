@extends('layouts.element.login_main')
@section('title','Dashboard | Login')
@section('content')
    <!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-grid--hor-tablet-and-mobile m-login m-login--6 m-login--signin" id="m_login">
				<div class="m-grid__item m-grid__item--order-tablet-and-mobile-2  m-grid m-grid--hor m-login__aside " style="background-image: url(public/img/ui-images/login6-bdp.png);">
					<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver">
						<div class="m-grid__item m-grid__item--middle m--align-center">

						</div>
					</div>
					<div class="m-grid__item">
						<div class="m-login__info">
							<div class="m-login__section">
								<span>
									Devloped by
								</span>
								<a href="#" class="m-link">Santuy</a>
							</div>
						</div>
					</div>
				</div>
				<div class="m-grid__item m-grid__item--fluid  m-grid__item--order-tablet-and-mobile-1  m-login__wrapper">

					<!--begin::Body-->
					<div class="m-login__body signin-padding-top">

						<!--begin::Signin-->
						<!--<div class="m-login__logo">
							<img src="assets/app/media/img/logos/logo-4vm.svg">
						</div>-->
						<div class="m-login__signin" id="form-login">
							<div class="m-login__title">
								<h2>Uncle Jo</h2>
								<h3>Sign In To Admin</h3>
							</div>

                            <!--begin::Form-->
                            <form method="POST" action="{{ route('login') }}">
								@csrf

								<div class="form-group m-form__group">
									<div class="input-group file-input">
										<div class="input-group-append">
											<span class="input-group-text"><i class="la la-user"></i></span>
										</div>
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail Address">
										@error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
								</div>

								<div class="form-group m-form__group">
										<div class="input-group file-input">
											<div class="input-group-append">
												<span class="input-group-text"><i class="la la-unlock"></i></span>
											</div>
											<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

											@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>

									</div>

									<div class="form-group row">
											<div class="col-md-6">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

													<label class="form-check-label" for="remember">
														{{ __('Remember Me') }}
													</label>
												</div>
											</div>
										</div>

											<div class="form-group row mb-0">
												<div class="col-md-8 offset-md-4">
													<button type="submit" class="btn btn-danger m-btn--pill">
														{{ __('Sign in  ') }}
													</button>
												</div>
											</div>
                            </form>

							{{-- <form class="m-form m-form--state" action="">
								<div class="form-group m-form__group">
									<div class="input-group file-input">
										<input class="form-control m-input" type="text" placeholder="Username" name="username" autocomplete="off">
										<div class="input-group-append">
											<span class="input-group-text"><i class="la la-user"></i></span>
										</div>
									</div>
								</div>
								<div class="form-group m-form__group">
									<div class="input-group file-input">
										<input class="form-control m-input" type="password" placeholder="Password" name="password">
										<div class="input-group-append">
											<span class="input-group-text"><i class="la la-unlock"></i></span>
										</div>
									</div>
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--solid m-checkbox--primary">
											<input type="checkbox" name="remember"> Remember me
											<span></span>
										</label>
									</div>
									<div class="col m--align-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
									</div>
								</div>
								<div class="m-login__action justify-content-center">
									<button id="m_login_signin_submit" class="btn btn-danger m-btn m-btn--pill m-btn--custom m-btn--air">Sign In</button>
								</div>

							</form> --}}

							<!--end::Form-->

						</div>
						<div class="m-login__signin" id="form-forgot-password">
							<div class="m-login__title">
								<h3>Forgotten Password ?</h3>
								<div class="m-login__desc">Enter your email to reset your password:</div>
							</div>

							<!--begin::Form-->
							<form class="m-form m-form--state" action="">
								<div class="form-group m-form__group">
									<div class="input-group file-input">
										<input class="form-control m-input" type="email" placeholder="Email" name="email">
										<div class="input-group-append">
											<span class="input-group-text"><i class="la la-envelope"></i></span>
										</div>
									</div>
								</div>
								<div class="m-login__action justify-content-center">
									<button id="m_login_forget_password_submit" class="btn btn-danger m-btn m-btn--pill m-btn--custom m-btn--air">Request</button>
									<button id="m_login_forget_password_cancel" class="btn btn-outline-danger m-btn m-btn--pill m-btn--custom">Cancel</button>
								</div>

							</form>

							<!--end::Form-->

							<!--begin::Action-->

							<!--end::Action-->



						</div>

						<div class="m-login__account">
							<span>© 2019</span>
							<a href="#" class="m-link m--font-primary">WebClient</a>
						</div>

						<!--end::Signin-->
					</div>

					<!--end::Body-->
				</div>
			</div>
		</div>

		<!-- end:: Page -->
@endsection
