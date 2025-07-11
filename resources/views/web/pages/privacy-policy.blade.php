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

				<!-- Terms -->
				<div class="terms-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="terms-text">
									<h6>Introduction</h6>
									<p>Welcome to Doccure, a platform that allows you to book appointments with healthcare professionals. By using our services, you agree to these Terms & Conditions. Please read them carefully before proceeding.</p>
								</div>
								<div class="terms-text terms-list">
									<h6>Introduction</h6>
									<ul>
										<li>You must be at least 18 years old to use this website or have parental/guardian consent.</li>
										<li>Ensure that all information provided is accurate and up-to-date.</li>
										<li>You are responsible for maintaining the confidentiality of your account and password.</li>
									</ul>
								</div>
								<div class="terms-text terms-list">
									<h6>Booking Appointments</h6>
									<ul>
										<li>Appointments are booked in real-time, subject to availability.</li>
										<li>Users are responsible for attending the scheduled appointments or canceling in a timely manner.</li>
										<li>Cancellations should be made before the appointment to avoid any penalties.</li>
									</ul>
								</div>
								<div class="terms-text terms-list">
									<h6>Medical Disclaimer</h6>
									<ul>
										<li>Doccure provides a platform for scheduling appointments and is not responsible for the medical services provided.</li>
										<li>Healthcare providers listed on the platform are independent practitioners, and [Website Name] does not guarantee the quality or accuracy of medical advice provided.</li>
									</ul>
								</div>
								<div class="terms-text terms-list">
									<h6>Payment & Fees</h6>
									<ul>
										<li>Payment for appointments may be made through [Payment Method] and is subject to [Insert Payment Terms].</li>
										<li>Any additional fees, such as cancellation or no-show fees, will be disclosed at the time of booking.</li>
									</ul>
								</div>
								<div class="terms-text terms-list">
									<h6>Changes to Privacy Policy</h6>
									<p>Doccure may update these Privacy Policy periodically. Any changes will be communicated through the website or via email.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Terms -->



			<!-- Cursor -->
			<div class="mouse-cursor cursor-outer"></div>
			<div class="mouse-cursor cursor-inner"></div>
			<!-- /Cursor -->
@endsection
