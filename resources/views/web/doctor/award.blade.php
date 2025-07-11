@extends('web.layouts.scaffold')
@section('content')


		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row align-items-center inner-banner">
					<div class="col-md-12 col-12 text-center">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('web.index') }}"><i class="isax isax-home-15"></i></a></li>
								<li class="breadcrumb-item active">{{ $title }}</li>
							</ol>
							<h2 class="breadcrumb-title">{{ $title }}</h2>
						</nav>
					</div>
				</div>
			</div>
				<div class="breadcrumb-bg">
				<img src="{{asset('assets/img/bg/breadcrumb-bg-01.png')}}" alt="img" class="breadcrumb-bg-01">
				<img src="{{asset('assets/img/bg/breadcrumb-bg-02.png')}}" alt="img" class="breadcrumb-bg-02">
				<img src="{{asset('assets/img/bg/breadcrumb-icon.png')}}" alt="img" class="breadcrumb-bg-03">
				<img src="{{asset('assets/img/bg/breadcrumb-icon.png')}}" alt="img" class="breadcrumb-bg-04">
			</div>
		</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content  doctor-content">
				<div class="container">

					<div class="row">
						<div class="col-lg-4 col-xl-3 theiaStickySidebar">
							
				                            @include('web.partials.doc-sidebar')
 					
							
						</div>
						<div class="col-lg-8 col-xl-9">
						
							<!-- Profile Settings -->
							<div class="dashboard-header">
								<h3>Profile Settings</h3>
							</div>

							<!-- Settings List -->
								<div class="setting-tab">
								<div class="appointment-tabs">
									<ul class="nav">
										<li class="nav-item">
											<a class="nav-link" href="{{ route('doctor.profile-setting') }}">Basic Details</a>
										</li>
										<li class="nav-item">
											<a class="nav-link " href="{{ route('doctor.experience') }}">Experience</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{ route('doctor.education') }}">Education</a>
										</li>
										<li class="nav-item">
											<a class="nav-link active" href="{{ route('doctor.award') }}">Awards</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{ route('doctor.insurance') }}">Insurances</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{ route('doctor.clinic') }}">Clinics</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{ route('doctor.hours') }}">Business Hours</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Settings List -->

							<div class="dashboard-header border-0 mb-0">
								<h3>Awards</h3>
								<ul>
									<li>
										<a href="#" class="btn btn-primary prime-btn add-awrads">Add New Award</a>
									</li>
								</ul>
							</div>

							<form action="doctor-awards-settings.html">

								<div class="accordions awrad-infos" id="list-accord">

									<!-- Awards Item -->
									<div class="user-accordion-item">
										<a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#award1">Awards<span>Delete</span></a>
										<div class="accordion-collapse collapse show" id="award1" data-bs-parent="#list-accord">
											<div class="content-collapse">
												<div class="add-service-info">
													<div class="add-info">
														<div class="row align-items-center">
															<div class="col-md-6">
																<div class="form-wrap">
																	<label class="col-form-label">Award Name</label>
																	<input type="text" class="form-control">
																</div>													
															</div>
															<div class="col-md-6">
																<div class="form-wrap">
																	<label class="col-form-label">Year <span class="text-danger">*</span></label>
																	<div class="form-icon">
																		<input type="text" class="form-control datetimepicker">
																		<span class="icon"><i class="fa-regular fa-calendar-days"></i></span>
																	</div>
																</div>													
															</div>
															<div class="col-lg-12">
																<div class="form-wrap">
																	<label class="col-form-label">Description <span class="text-danger">*</span></label>
																	<textarea class="form-control" rows="3"></textarea>
																</div>													
															</div>
														</div>
													</div>
													<div class="text-end">
														<a href="#" class="reset more-item">Reset</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Awards Item -->

									<!-- Awards Item -->
									<div class="user-accordion-item">
										<a href="#" class="collapsed accordion-wrap" data-bs-toggle="collapse" data-bs-target="#award2">Best Surgeon<span>Delete</span></a>
										<div class="accordion-collapse collapse" id="award2" data-bs-parent="#list-accord">
											<div class="content-collapse">
												<div class="add-service-info">
													<div class="add-info">
														<div class="row align-items-center">
															<div class="col-md-6">
																<div class="form-wrap">
																	<label class="col-form-label">Award Name</label>
																	<input type="text" class="form-control">
																</div>													
															</div>
															<div class="col-md-6">
																<div class="form-wrap">
																	<label class="col-form-label">Year <span class="text-danger">*</span></label>
																	<div class="form-icon">
																		<input type="text" class="form-control datetimepicker">
																		<span class="icon"><i class="fa-regular fa-calendar-days"></i></span>
																	</div>
																</div>													
															</div>
															<div class="col-lg-12">
																<div class="form-wrap">
																	<label class="col-form-label">Description <span class="text-danger">*</span></label>
																	<textarea class="form-control" rows="3"></textarea>
																</div>													
															</div>
														</div>
													</div>
													<div class="text-end">
														<a href="#" class="reset more-item">Reset</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Awards Item -->

								</div>
								
								<div class="modal-btn text-end">
									<a href="#" class="btn btn-gray">Cancel</a>
									<button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
								</div>

							</form>
							<!-- /Profile Settings -->
							
						</div>
					</div>
				</div>
			</div>		
			<!-- /Page Content -->

		               	@push('scripts')
		<!-- Select2 JS -->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}" type="34fd53ea844e2bcda809d5be-text/javascript"></script>
		
		<!-- Datepicker JS -->
   		<script src="{{asset('assets/js/moment.min.js')}}" type="34fd53ea844e2bcda809d5be-text/javascript"></script>
 		<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}" type="34fd53ea844e2bcda809d5be-text/javascript"></script>
		
		<!-- Profile Settings JS -->
		<script src="{{asset('assets/js/profile-settings.js')}}" type="34fd53ea844e2bcda809d5be-text/javascript"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('assets/js/script.js')}}" type="34fd53ea844e2bcda809d5be-text/javascript"></script>
		
	<script src="{{asset('assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="34fd53ea844e2bcda809d5be-|49" defer=""></script>
@endpush	
@endsection