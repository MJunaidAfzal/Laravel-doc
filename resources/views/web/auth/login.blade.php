@extends('web.layouts.scaffold')
@section('content')

			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid" style="margin-top: 50px">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="{{asset('assets/img/login-banner.png')}}" class="img-fluid" alt="Doccure Login">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login <span>Doccure</span></h3>
										</div>

										<form method="POST" action="{{ route('auth-login') }}">
											    @csrf
													<div class="mb-3">
														<label class="form-label">E-mail</label>
														<input 
															type="email"
															name="email"
															class="form-control @error('email') is-invalid @enderror"
															value="{{ old('email') }}"
															required
															autofocus
														>
														@error('email')
															<span class="invalid-feedback d-block">{{ $message }}</span>
														@enderror
													</div>

													<div class="mb-3">
														<label class="form-label">Password</label>
														<div class="pass-group">
														<input 
															type="password"
															name="password"
															class="form-control @error('password') is-invalid @enderror"
															required
														>
														@error('password')
															<span class="invalid-feedback d-block">{{ $message }}</span>
														@enderror
															<span class="feather-eye-off toggle-password"></span>
														</div>
													</div>
											<div class="mb-3 form-check-box">
												<div class="form-group-flex">
													<div class="form-check mb-0">
														<input class="form-check-input" type="checkbox" id="remember" checked="">
														<label class="form-check-label" for="remember">
															Remember Me  
														</label>
													</div>												
													<div class="form-check mb-0">
														<input class="form-check-input" type="checkbox" id="remember1">
														<label class="form-check-label" for="remember1">
															Login with OTP  
														</label>
													</div>
												</div>
											</div>
											<div class="mb-3">
												<button class="btn btn-primary-gradient w-100" type="submit">Sign in</button>
											</div>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="social-login-btn">
												<a href="javascript:void(0);" class="btn w-100">
													<img src="{{asset('assets/img/icons/google-icon.svg')}}" alt="google-icon">Sign in With Google
												</a>
												<a href="javascript:void(0);" class="btn w-100">
													<img src="{{asset('assets/img/icons/facebook-icon.svg')}}" alt="fb-icon">Sign in With Facebook
												</a>
											</div>
											<div class="account-signup">
												<p>Don't have an account ? <a href="{{ route('patient-register') }}">Sign up</a></p>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   @endsection
	