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
			<div class="content doctor-content">
				<div class="container">

					<div class="row">
						<div class="col-lg-4 col-xl-3 theiaStickySidebar">
						
                            @include('web.partials.doc-sidebar')

							
						</div>
						
						<div class="col-lg-8 col-xl-9">

							<div class="dashboard-header">
								<h3>Requests</h3>
								<ul>
									<li>
										<div class="dropdown header-dropdown">
											<a class="dropdown-toggle nav-tog" data-bs-toggle="dropdown" href="javascript:void(0);">
												Last 7 Days
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:void(0);" class="dropdown-item">
													Today
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													This Month
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Last 7 Days
												</a>
											</div>
										</div>
									</li>
								</ul>
							</div>
							
							<!-- Request List -->
							<div class="appointment-wrap">
								<ul>
									<li>
										<div class="patinet-information">
											<a href="patient-profile.html.htm">
												<img src="{{asset('assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
											</a>
											<div class="patient-info">
												<p>#Apt0001</p>
												<h6><a href="patient-profile.html.htm">Adrian</a><span class="badge new-tag">New</span></h6>
											</div>
										</div>
									</li>
									<li class="appointment-info">
										<p><i class="isax isax-clock5"></i>11 Nov 2024 10.45 AM</p>
										<p class="md-text">General Visit</p>
									</li>
									<li class="appointment-type">
										<p class="md-text">Type of Appointment</p>
										<p><i class="isax isax-video5 text-blue"></i>Video Call</p>
									</li>
									<li>
										<ul class="request-action">
											<li>
												<a href="#" class="accept-link" data-bs-toggle="modal" data-bs-target="#accept_appointment"><i class="fa-solid fa-check"></i>Accept</a>
											</li>
											<li>
												<a href="#" class="reject-link" data-bs-toggle="modal" data-bs-target="#cancel_appointment"><i class="fa-solid fa-xmark"></i>Reject</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- /Request List -->

							<!-- Request List -->
							<div class="appointment-wrap">
								<ul>
									<li>
										<div class="patinet-information">
											<a href="patient-profile.html.htm">
												<img src="{{asset('assets/img/doctors-dashboard/profile-02.jpg')}}" alt="User Image">
											</a>
											<div class="patient-info">
												<p>#Apt0002</p>
												<h6><a href="patient-profile.html.htm">Kelly</a></h6>
											</div>
										</div>
									</li>
									<li class="appointment-info">
										<p><i class="isax isax-clock5"></i>10 Nov 2024 02.00 PM</p>
										<p class="md-text">General Visit</p>
									</li>
									<li class="appointment-type">
										<p class="md-text">Type of Appointment</p>
										<p><i class="isax isax-building5 text-green"></i>Direct Visit <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" title="Clinic Location Sofia’s Clinic"></i></p>
									</li>
									<li>
										<ul class="request-action">
											<li>
												<a href="#" class="accept-link" data-bs-toggle="modal" data-bs-target="#accept_appointment"><i class="fa-solid fa-check"></i>Accept</a>
											</li>
											<li>
												<a href="#" class="reject-link" data-bs-toggle="modal" data-bs-target="#cancel_appointment"><i class="fa-solid fa-xmark"></i>Reject</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- /Request List -->


							<!-- Request List -->
							<div class="appointment-wrap">
								<ul>
									<li>
										<div class="patinet-information">
											<a href="patient-profile.html.htm">
												<img src="{{asset('assets/img/doctors-dashboard/profile-03.jpg')}}" alt="User Image">
											</a>
											<div class="patient-info">
												<p>#Apt0003</p>
												<h6><a href="patient-profile.html.htm">Samuel</a></h6>
											</div>
										</div>
									</li>
									<li class="appointment-info">
										<p><i class="isax isax-clock5"></i>08 Nov 2024 08.30 AM</p>
										<p class="md-text">Consultation for Cardio</p>
									</li>
									<li class="appointment-type">
										<p class="md-text">Type of Appointment</p>
										<p><i class="isax isax-call5 text-indigo"></i>Audio Call</p>
									</li>
									<li>
										<ul class="request-action">
											<li>
												<a href="#" class="accept-link" data-bs-toggle="modal" data-bs-target="#accept_appointment"><i class="fa-solid fa-check"></i>Accept</a>
											</li>
											<li>
												<a href="#" class="reject-link" data-bs-toggle="modal" data-bs-target="#cancel_appointment"><i class="fa-solid fa-xmark"></i>Reject</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- /Request List -->

							<!-- Request List -->
							<div class="appointment-wrap">
								<ul>
									<li>
										<div class="patinet-information">
											<a href="patient-profile.html.htm">
												<img src="{{asset('assets/img/doctors-dashboard/profile-06.jpg')}}" alt="User Image">
											</a>
											<div class="patient-info">
												<p>#Apt0004</p>
												<h6><a href="patient-profile.html.htm">Anderea</a></h6>
											</div>
										</div>
									</li>
									<li class="appointment-info">
										<p><i class="isax isax-clock5"></i>05 Nov 2024 11.00 AM</p>
										<p class="md-text">Consultation for Dental</p>
									</li>
									<li class="appointment-type">
										<p class="md-text">Type of Appointment</p>
										<p><i class="isax isax-call5 text-indigo"></i>Audio Call</p>
									</li>
									<li>
										<ul class="request-action">
											<li>
												<a href="#" class="accept-link" data-bs-toggle="modal" data-bs-target="#accept_appointment"><i class="fa-solid fa-check"></i>Accept</a>
											</li>
											<li>
												<a href="#" class="reject-link" data-bs-toggle="modal" data-bs-target="#cancel_appointment"><i class="fa-solid fa-xmark"></i>Reject</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- /Request List -->

							<!-- Request List -->
							<div class="appointment-wrap">
								<ul>
									<li>
										<div class="patinet-information">
											<a href="patient-profile.html.htm">
												<img src="{{asset('assets/img/doctors-dashboard/profile-05.jpg')}}" alt="User Image">
											</a>
											<div class="patient-info">
												<p>#Apt0005</p>
												<h6><a href="patient-profile.html.htm">Robert</a></h6>
											</div>
										</div>
									</li>
									<li class="appointment-info">
										<p><i class="isax isax-clock5"></i>07 Nov 2024 11.00 AM</p>
										<p class="md-text">General Visit</p>
									</li>
									<li class="appointment-type">
										<p class="md-text">Type of Appointment</p>
										<p><i class="isax isax-call5 text-indigo"></i>Audio Call</p>
									</li>
									<li>
										<ul class="request-action">
											<li>
												<a href="#" class="accept-link" data-bs-toggle="modal" data-bs-target="#accept_appointment"><i class="fa-solid fa-check"></i>Accept</a>
											</li>
											<li>
												<a href="#" class="reject-link" data-bs-toggle="modal" data-bs-target="#cancel_appointment"><i class="fa-solid fa-xmark"></i>Reject</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- /Request List -->

							<div class="row">
								<div class="col-md-12">
									<div class="loader-item text-center">
										<a href="javascript:void(0);" class="btn btn-load">Load More</a>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->

		   


		<!-- Appointment Accepted Modal -->
		<div class="modal fade info-modal" id="accept_appointment">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="success-wrap text-center">
							<span class="icon-success"><i class="fa-solid fa-calendar-check"></i></span>
							<h3>Appointment Accepted</h3>
							<p>Your Appointment has been scheduled on 23 Mar 2023</p>
							<a href="appointments.html.htm" class="btn btn-primary prime-btn">Go to  Appointments</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- /Appointment Accepted Modal -->

		<!-- Appointment Cancel Modal -->
		<div class="modal fade info-modal" id="cancel_appointment">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="success-wrap">
							<div class="success-info">
								<div class="text-center">
									<span class="icon-success bg-red"><i class="fa-solid fa-xmark"></i></span>
									<h3>Are you Sure</h3>
									<p>Do you want to Cancel Appointment</p>
								</div>
								<div class="form-wrap">
									<label class="col-form-label">Cancel Reason <span class="text-danger">*</span></label>
									<textarea class="form-control" rows="4"></textarea>
								</div>
								<div class="form-wrap">
									<div class="custom-control form-check custom-control-inline">
										<input type="radio" id="reshedule" name="rating_option" class="form-check-input" value="price_free" checked="">
										<label class="form-check-label" for="reshedule">Cancel with Reschedule</label>
									</div>
								</div>
								<div class="form-wrap">
									<div class="custom-control form-check custom-control-inline">
										<input type="radio" id="refund" name="rating_option" class="form-check-input" value="price_free" checked="">
										<label class="form-check-label" for="refund">Cancel with Request Refund</label>
									</div>
								</div>
							</div>
							<div class="modal-button">
								<div class="row gx-3">
									<div class="col-sm-6">
										<a href="#" class="btn btn-gray w-100" data-bs-toggle="modal" data-bs-dismiss="modal">No, I change my mind</a>
									</div>
									<div class="col-sm-6">
										<a href="appointments.html.htm" class="btn btn-primary prime-btn w-100">Go to  Appointments</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection