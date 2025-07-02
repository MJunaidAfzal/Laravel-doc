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
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content doctor-content">
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
											<a class="nav-link " href="{{ route('doctor.award') }}">Awards</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{ route('doctor.insurance') }}">Insurances</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{ route('doctor.clinic') }}">Clinics</a>
										</li>
										<li class="nav-item">
											<a class="nav-link active" href="{{ route('doctor.hours') }}">Business Hours</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Settings List -->

							<div class="dashboard-header border-0 mb-0">
								<h3>Business Hours</h3>
							</div>

							<form action="doctor-business-settings.html">
								<div class="business-wrap">
									<h4>Select Business days</h4>
									<ul class="business-nav">
										<li>
											<a class="tab-link active" data-tab="day-monday">Monday</a>
										</li>
										<li>
											<a class="tab-link active" data-tab="day-tuesday">Tuesday</a>
										</li>
										<li>
											<a class="tab-link active" data-tab="day-wednesday">Wednesday</a>
										</li>
										<li>
											<a class="tab-link active" data-tab="day-thursday">Thursday</a>
										</li>
										<li>
											<a class="tab-link active" data-tab="day-friday">Friday</a>
										</li>
										<li>
											<a class="tab-link" data-tab="day-saturday">Saturday</a>
										</li>
										<li>
											<a class="tab-link" data-tab="day-sunday">Sunday</a>
										</li>
									</ul>
								</div>

								<div class="accordions business-info" id="list-accord">

									<!-- Business Hours -->
									<div class="user-accordion-item tab-items active" id="day-monday">
										<a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#monday">Monday<span class="edit">Edit</span></a>
										<div class="accordion-collapse collapse show" id="monday" data-bs-parent="#list-accord">
											<div class="content-collapse pb-0">
												<div class="row align-items-center">
													<div class="col-md-6">
														<div class="form-wrap">
															<label class="col-form-label">From <span class="text-danger">*</span></label>
															<div class="form-icon">
																<input type="text" class="form-control timepicker1">
																<span class="icon"><i class="fa-solid fa-clock"></i></span>
															</div>
														</div>													
													</div>
													<div class="col-md-6">
														<div class="form-wrap">
															<label class="col-form-label">To <span class="text-danger">*</span></label>
															<div class="form-icon">
																<input type="text" class="form-control timepicker1">
																<span class="icon"><i class="fa-solid fa-clock"></i></span>
															</div>
														</div>													
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Business Hours -->

									<!-- Business Hours -->
									<div class="user-accordion-item tab-items active" id="day-tuesday">
										<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#tuesday">Tuesday<span class="edit">Edit</span></a>
										<div class="accordion-collapse collapse" id="tuesday" data-bs-parent="#list-accord">
											<div class="content-collapse pb-0">
												<div class="row align-items-center">
													<div class="col-md-6">
														<div class="form-wrap">
															<label class="col-form-label">From <span class="text-danger">*</span></label>
															<div class="form-icon">
																<input type="text" class="form-control timepicker1">
																<span class="icon"><i class="fa-solid fa-clock"></i></span>
															</div>
														</div>													
													</div>
													<div class="col-md-6">
														<div class="form-wrap">
															<label class="col-form-label">To <span class="text-danger">*</span></label>
															<div class="form-icon">
																<input type="text" class="form-control timepicker1">
																<span class="icon"><i class="fa-solid fa-clock"></i></span>
															</div>
														</div>													
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Business Hours -->

									<!-- Business Hours -->
									<div class="user-accordion-item tab-items active" id="day-wednesday">
										<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#wednesday">Wednesday<span class="edit">Edit</span></a>
										<div class="accordion-collapse collapse" id="wednesday" data-bs-parent="#list-accord">
											<div class="content-collapse pb-0">
												<div class="row align-items-center">
													<div class="col-md-6">
														<div class="form-wrap">
															<label class="col-form-label">From <span class="text-danger">*</span></label>
															<div class="form-icon">
																<input type="text" class="form-control timepicker1">
																<span class="icon"><i class="fa-solid fa-clock"></i></span>
															</div>
														</div>													
													</div>
													<div class="col-md-6">
														<div class="form-wrap">
															<label class="col-form-label">To <span class="text-danger">*</span></label>
															<div class="form-icon">
																<input type="text" class="form-control timepicker1">
																<span class="icon"><i class="fa-solid fa-clock"></i></span>
															</div>
														</div>													
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Business Hours -->

									<!-- Business Hours -->
									<div class="user-accordion-item tab-items active" id="day-thursday">
										<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#thursday">Thursday<span class="edit">Edit</span></a>
										<div class="accordion-collapse collapse" id="thursday" data-bs-parent="#list-accord">
											<div class="content-collapse pb-0">
												<div class="row align-items-center">
													<div class="col-md-6">
														<div class="form-wrap">
															<label class="col-form-label">From <span class="text-danger">*</span></label>
															<div class="form-icon">
																<input type="text" class="form-control timepicker1">
																<span class="icon"><i class="fa-solid fa-clock"></i></span>
															</div>
														</div>													
													</div>
													<div class="col-md-6">
														<div class="form-wrap">
															<label class="col-form-label">To <span class="text-danger">*</span></label>
															<div class="form-icon">
																<input type="text" class="form-control timepicker1">
																<span class="icon"><i class="fa-solid fa-clock"></i></span>
															</div>
														</div>													
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Business Hours -->

									<!-- Business Hours -->
									<div class="user-accordion-item tab-items active" id="day-friday">
										<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#friday">Friday<span class="edit">Edit</span></a>
										<div class="accordion-collapse collapse" id="friday" data-bs-parent="#list-accord">
											<div class="content-collapse pb-0">
												<div class="row align-items-center">
													<div class="col-md-6">
														<div class="form-wrap">
															<label class="col-form-label">From <span class="text-danger">*</span></label>
															<div class="form-icon">
																<input type="text" class="form-control timepicker1">
																<span class="icon"><i class="fa-solid fa-clock"></i></span>
															</div>
														</div>													
													</div>
													<div class="col-md-6">
														<div class="form-wrap">
															<label class="col-form-label">To <span class="text-danger">*</span></label>
															<div class="form-icon">
																<input type="text" class="form-control timepicker1">
																<span class="icon"><i class="fa-solid fa-clock"></i></span>
															</div>
														</div>													
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Business Hours -->

									<!-- Business Hours -->
									<div class="user-accordion-item tab-items" id="day-saturday">
										<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#saturday">Saturday<span class="edit">Edit</span></a>
										<div class="accordion-collapse collapse" id="saturday" data-bs-parent="#list-accord">
											<div class="content-collapse pb-0">
												<div class="row align-items-center">
													<div class="col-md-6">
														<div class="form-wrap">
															<label class="col-form-label">From <span class="text-danger">*</span></label>
															<div class="form-icon">
																<input type="text" class="form-control timepicker1">
																<span class="icon"><i class="fa-solid fa-clock"></i></span>
															</div>
														</div>													
													</div>
													<div class="col-md-6">
														<div class="form-wrap">
															<label class="col-form-label">To <span class="text-danger">*</span></label>
															<div class="form-icon">
																<input type="text" class="form-control timepicker1">
																<span class="icon"><i class="fa-solid fa-clock"></i></span>
															</div>
														</div>													
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Business Hours -->

									<!-- Business Hours -->
									<div class="user-accordion-item tab-items" id="day-sunday">
										<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#sunday">Sunday<span class="edit">Edit</span></a>
										<div class="accordion-collapse collapse" id="sunday" data-bs-parent="#list-accord">
											<div class="content-collapse pb-0">
												<div class="row align-items-center">
													<div class="col-md-6">
														<div class="form-wrap">
															<label class="col-form-label">From <span class="text-danger">*</span></label>
															<div class="form-icon">
																<input type="text" class="form-control timepicker1">
																<span class="icon"><i class="fa-solid fa-clock"></i></span>
															</div>
														</div>													
													</div>
													<div class="col-md-6">
														<div class="form-wrap">
															<label class="col-form-label">To <span class="text-danger">*</span></label>
															<div class="form-icon">
																<input type="text" class="form-control timepicker1">
																<span class="icon"><i class="fa-solid fa-clock"></i></span>
															</div>
														</div>													
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Business Hours -->

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