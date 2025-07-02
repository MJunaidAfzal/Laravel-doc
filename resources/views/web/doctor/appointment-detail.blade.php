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
			<div class="content">
				<div class="container">

					<div class="row">
						<div class="col-lg-4 col-xl-3 theiaStickySidebar">
							
				                            @include('web.partials.doc-sidebar')

							
						</div>
						
						<div class="col-lg-8 col-xl-9">
							<div class="dashboard-header">
								<div class="header-back">
									<a href="appointments.html.htm" class="back-arrow"><i class="fa-solid fa-arrow-left"></i></a>
									<h3>Appointment Details</h3>
								</div>
							</div>
							<div class="appointment-details-wrap">
								
								<!-- Appointment Detail Card -->
								<div class="appointment-wrap appointment-detail-card">
									<ul>
										<li>
											<div class="patinet-information">
												<a href="#">
													<img src="{{asset('assets/img/doctors-dashboard/profile-02.jpg')}}" alt="User Image">
												</a>
												<div class="patient-info">
													<p>#Apt0001</p>
													<h6><a href="#">Kelly Joseph </a></h6>
													<div class="mail-info-patient">
														<ul>
															<li><i class="fa-solid fa-envelope"></i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7b101e1717023b1e031a160b171e55181416">[email&#160;protected]</a></li>
															<li><i class="fa-solid fa-phone"></i>+1 504 368 6874</li>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li class="appointment-info">
											<div class="person-info">
												<p>Type of Appointment</p>
												<ul class="d-flex apponitment-types">
													<li><i class="fa-solid fa-hospital text-green"></i>Direct Visit</li>
												</ul>
											</div>
										</li>
										<li class="appointment-action">
											<div class="detail-badge-info">
												<span class="badge bg-grey me-2">New Patient</span>
												<span class="badge bg-yellow">Upcoming</span>
											</div>
											<div class="consult-fees">
												<h6>Consultation Fees : $200</h6>
											</div>
											<ul>
												<li>
													<a href="#"><i class="fa-solid fa-comments"></i></a>
												</li>
												<li>
													<a href="#"><i class="fa-solid fa-xmark"></i></a>
												</li>
											</ul>
										</li>
									</ul>
									<ul class="detail-card-bottom-info">
										<li>
											<h6>Appointment Date & Time</h6>
											<span>22 Jul 2023 - 12:00 pm</span>
										</li>
										<li>
											<h6>Clinic Location</h6>
											<span>Adrian’s Dentistry</span>
										</li>
										<li>
											<h6>Location</h6>
											<span>Newyork, United States</span>
										</li>
										<li>
											<h6>Visit Type</h6>
											<span>General</span>
										</li>
										<li>
											<div class="start-btn">
												<a href="doctor-appointment-start.html.htm" class="btn btn-secondary">Start Session</a>
											</div>
										</li>
									</ul>
								</div>
								<!-- /Appointment Detail Card -->

								<div class="recent-appointments">
									<h5 class="head-text">Recent Appointments</h5>
									<!-- Appointment List -->
									<div class="appointment-wrap">
										<ul>
											<li>
												<div class="patinet-information">
													<a href="#">
														<img src="{{asset('assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
													</a>
													<div class="patient-info">
														<p>#Apt0001</p>
														<h6><a href="#">Adrian</a></h6>
													</div>
												</div>
											</li>
											<li class="appointment-info">
												<p><i class="fa-solid fa-clock"></i>11 Nov 2024 10.45 AM</p>
												<ul class="d-flex apponitment-types">
													<li>General Visit</li>
													<li>Chat</li>
												</ul>
												
											</li>
											<li class="mail-info-patient">
												<ul>
													<li><i class="fa-solid fa-envelope"></i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9cfdf8eefdf2dcf9e4fdf1ecf0f9b2fff3f1">[email&#160;protected]</a></li>
													<li><i class="fa-solid fa-phone"></i>+1 504 368 6874</li>
												</ul>
											</li>
											<li class="appointment-action">
												<ul>
													<li>
														<a href="#"><i class="fa-solid fa-eye"></i></a>
													</li>
												</ul>
											</li>
										</ul>
									</div>
									<!-- /Appointment List -->
									<!-- Appointment List -->
									<div class="appointment-wrap">
										<ul>
											<li>
												<div class="patinet-information">
													<a href="#">
														<img src="{{asset('assets/img/doctors-dashboard/profile-03.jpg')}}" alt="User Image">
													</a>
													<div class="patient-info">
														<p>#Apt0003</p>
														<h6><a href="#">Samuel</a></h6>
													</div>
												</div>
											</li>
											<li class="appointment-info">
												<p><i class="fa-solid fa-clock"></i>27 Oct 2024 09.30 AM</p>
												<ul class="d-flex apponitment-types">
													<li>General Visit</li>
													<li>Video Call</li>
												</ul>
												
											</li>
											<li class="mail-info-patient">
												<ul>
													<li><i class="fa-solid fa-envelope"></i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f784969a82929bb7928f969a879b92d994989a">[email&#160;protected]</a></li>
													<li><i class="fa-solid fa-phone"></i> +1 749 104 6291</li>
												</ul>
											</li>
											<li class="appointment-action">
												<ul>
													<li>
														<a href="#"><i class="fa-solid fa-eye"></i></a>
													</li>
												</ul>
											</li>
										</ul>
									</div>
									<!-- /Appointment List -->
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   

		
		<!-- Appointment Details Modal -->
		<div class="modal fade custom-modal custom-modal-two" id="reject_reason">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Reject Reason</h5>
						<button type="button" data-bs-dismiss="modal" aria-label="Close">
							<span><i class="fa-solid fa-x"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<div class="reason-of-rejection">
							<p>I have an urgent surgery, while our Appointment so i am rejecting appointment, you can book an reschedule by next week.</p>
							<span class="text-danger">Cancelled By You on 23 March 2023</span>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- /Appointment Details Modal -->
	  
@endsection