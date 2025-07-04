@extends('web.layouts.scaffold')
@section('content')


			<!-- Home Banner -->
			<section class="banner-section banner-sec-one">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7">
							<div class="banner-content aos" data-aos="fade-up">
								<div class="rating-appointment d-inline-flex align-items-center gap-2">
									<div class="avatar-list-stacked avatar-group-lg">
										<span class="avatar avatar-rounded">
											<img class="border border-white" src="assets/img/doctors/doctor-thumb-22.jpg" alt="img">
										</span>
										<span class="avatar avatar-rounded">
											<img class="border border-white" src="assets/img/doctors/doctor-thumb-23.jpg" alt="img">
										</span>
										<span class="avatar avatar-rounded">
											<img src="assets/img/doctors/doctor-thumb-24.jpg" alt="img">
										</span>
									</div>
									<div class="me-2">
										<h6 class="mb-1">5K+ Appointments</h6>
										<div class="d-flex align-items-center">
											<div class="d-flex align-items-center">
												<i class="fa-solid fa-star text-orange me-1"></i>
												<i class="fa-solid fa-star text-orange me-1"></i>
												<i class="fa-solid fa-star text-orange me-1"></i>
												<i class="fa-solid fa-star text-orange me-1"></i>
												<i class="fa-solid fa-star text-orange me-1"></i>
											</div>
											<p>5.0 Ratings</p>
										</div>
									</div>
								</div>
								<h1 class="display-5">Discover Health: Find Your Trusted <span class="banner-icon"><img src="assets/img/icons/video.svg" alt="img"></span> <span class="text-gradient">Doctors</span> Today</h1>
								<div class="search-box-one aos" data-aos="fade-up">
									<form action="search-2.html">
										<div class="search-input search-line">
											<i class="isax isax-hospital5 bficon"></i>
											<div class=" mb-0">
												<input type="text" class="form-control" placeholder="Search doctors, clinics, hospitals, etc">
											</div>
										</div>
										<div class="search-input search-map-line">
											<i class="isax isax-location5"></i>
											<div class=" mb-0">
												<input type="text" class="form-control" placeholder="Location">
											</div>
										</div>
										<div class="search-input search-calendar-line">
											<i class="isax isax-calendar-tick5"></i>
											<div class=" mb-0">
												<input type="text" class="form-control datetimepicker" placeholder="Date">
											</div>
										</div>
										<div class="form-search-btn">
											<button class="btn btn-primary" type="submit"><i class="isax isax-search-normal5 me-2"></i>Search</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="banner-img aos" data-aos="fade-up">
								<img src="assets/img/banner/banner-doctor.svg" class="img-fluid" alt="patient-image">
								<div class="banner-appointment">
									<h6>1K</h6>
									<p>Appointments <span class="d-block">Completed</span></p>
								</div>
								<div class="banner-patient">
									<div class="avatar-list-stacked avatar-group-sm">
										<span class="avatar avatar-rounded">
											<img src="assets/img/patients/patient19.jpg" alt="img">
										</span>
										<span class="avatar avatar-rounded">
											<img src="assets/img/patients/patient16.jpg" alt="img">
										</span>
										<span class="avatar avatar-rounded">
											<img src="assets/img/patients/patient18.jpg" alt="img">
										</span>
									</div>
									<p>15K+</p>
									<p>Satisfied Patients</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="banner-bg">
					<img src="assets/img/bg/banner-bg-02.png" alt="img" class="banner-bg-01">
					<img src="assets/img/bg/banner-bg-03.png" alt="img" class="banner-bg-02">
					<img src="assets/img/bg/banner-bg-04.png" alt="img" class="banner-bg-03">
					<img src="assets/img/bg/banner-bg-05.png" alt="img" class="banner-bg-04">
					<img src="assets/img/bg/banner-icon-01.svg" alt="img" class="banner-bg-05">
					<img src="assets/img/bg/banner-icon-01.svg" alt="img" class="banner-bg-06">
				</div>
			</section>
			<!-- /Home Banner -->

			<!-- List -->
			<div class="list-section">
				<div class="container">
					<div class="list-card card mb-0">
						<div class="card-body">
							<div class="d-flex align-items-center justify-content-center justify-content-xl-between flex-wrap gap-4 list-wraps">
								<a href="booking.html" class="list-item aos" data-aos="fade-up">
									<div class="list-icon bg-secondary">
										<img src="assets/img/icons/list-icon-01.svg" alt="img">
									</div>
									<h6>Book Appointment</h6>
								</a>
								<a href="doctor-grid.html" class="list-item aos" data-aos="fade-up">
									<div class="list-icon bg-primary">
										<img src="assets/img/icons/list-icon-02.svg" alt="img">
									</div>
									<h6>Talk to Doctors</h6>
								</a>
								<a href="hospitals.html" class="list-item aos" data-aos="fade-up">
									<div class="list-icon bg-pink">
										<img src="assets/img/icons/list-icon-03.svg" alt="img">
									</div>
									<h6>Hospitals & Clinics</h6>
								</a>
								<a href="index-3.html" class="list-item aos" data-aos="fade-up">
									<div class="list-icon bg-cyan">
										<img src="assets/img/icons/list-icon-04.svg" alt="img">
									</div>
									<h6>Healthcare</h6>
								</a>
								<a href="index-13.html" class="list-item aos" data-aos="fade-up">
									<div class="list-icon bg-purple">
										<img src="assets/img/icons/list-icon-05.svg" alt="img">
									</div>
									<h6>Medicine & Supplies</h6>
								</a>
								<a href="index-12.html" class="list-item aos" data-aos="fade-up">
									<div class="list-icon bg-orange">
										<img src="assets/img/icons/list-icon-06.svg" alt="img">
									</div>
									<h6>Lab Testing</h6>
								</a>
								<a href="index-13.html" class="list-item aos" data-aos="fade-up">
									<div class="list-icon bg-teal">
										<img src="assets/img/icons/list-icon-07.svg" alt="img">
									</div>
									<h6>Home Care</h6>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /List -->

			<!-- Speciality Section -->
			<section class="speciality-section">
				<div class="container">
					<div class="section-header sec-header-one text-center aos" data-aos="fade-up">
						<span class="badge badge-primary">Top Specialties</span>
						<h2>Highlighting the Care & Support</h2>
					</div>
					<div class="owl-carousel spciality-slider aos" data-aos="fade-up">
						@forelse ($specialities as $item)
						<div class="spaciality-item">
							<div class="spaciality-img">
								<img style="height: 160px" src="{{ asset('storage/'.$item->banner) }}" alt="img">
								<span class="spaciality-icon">
									<img src="{{ asset('storage/'.$item->image) }}" alt="img">
								</span>
							</div>
							<h6><a href="doctor-grid.html">{{ $item->name }}</a></h6>
							<p class="mb-0">254 Doctors</p>
						</div>
						@empty
						NO SPECIALITY FOUND!
						@endforelse
				

					</div>
					<div class="spciality-nav nav-bottom owl-nav"></div>
				</div>
			</section>
			<!-- /Speciality Section -->

			<!-- Doctor Section -->
			<section class="doctor-section">
				<div class="container">
					<div class="section-header sec-header-one text-center aos" data-aos="fade-up">
						<span class="badge badge-primary">Featured Doctors</span>
						<h2>Our Highlighted Doctors</h2>
					</div>

					<div class="doctors-slider owl-carousel aos" data-aos="fade-up">
						<div class="card">
							<div class="card-img card-img-hover">
								<a href="doctor-profile.html"><img src="assets/img/doctor-grid/doctor-grid-01.jpg" alt=""></a>
								<div class="grid-overlay-item d-flex align-items-center justify-content-between">
									<span class="badge bg-orange"><i class="fa-solid fa-star me-1"></i>5.0</span>
									<a href="javascript:void(0)" class="fav-icon">
										<i class="fa fa-heart"></i>
									</a>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="d-flex active-bar align-items-center justify-content-between p-3">
									<a href="#" class="text-indigo fw-medium fs-14">Psychologist</a>
									<span class="badge bg-success-light d-inline-flex align-items-center">
										<i class="fa-solid fa-circle fs-5 me-1"></i>
										Available
									</span>
								</div>
								<div class="p-3 pt-0">
									<div class="doctor-info-detail mb-3 pb-3">
										<h3 class="mb-1"><a href="doctor-profile.html">Dr. Michael Brown</a></h3>
										<div class="d-flex align-items-center">
											<p class="d-flex align-items-center mb-0 fs-14"><i class="isax isax-location me-2"></i>Minneapolis, MN</p>
											<i class="fa-solid fa-circle fs-5 text-primary mx-2 me-1"></i>
											<span class="fs-14 fw-medium">30 Min</span>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<p class="mb-1">Consultation Fees</p>
											<h3 class="text-orange">$650</h3>
										</div>
										<a href="booking.html" class="btn btn-md btn-dark d-inline-flex align-items-center rounded-pill">
											<i class="isax isax-calendar-1 me-2"></i>
											Book Now
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-img card-img-hover">
								<a href="doctor-profile.html"><img src="assets/img/doctor-grid/doctor-grid-02.jpg" alt=""></a>
								<div class="grid-overlay-item d-flex align-items-center justify-content-between">
									<span class="badge bg-orange"><i class="fa-solid fa-star me-1"></i>4.6</span>
									<a href="javascript:void(0)" class="fav-icon">
										<i class="fa fa-heart"></i>
									</a>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="d-flex active-bar active-bar-pink align-items-center justify-content-between p-3">
									<a href="booking-1.html" class="text-pink fw-medium fs-14">Pediatrician</a>
									<span class="badge bg-success-light d-inline-flex align-items-center">
										<i class="fa-solid fa-circle fs-5 me-1"></i>
										Available
									</span>
								</div>
								<div class="p-3 pt-0">
									<div class="doctor-info-detail mb-3 pb-3">
										<h3 class="mb-1"><a href="doctor-profile.html">Dr. Nicholas Tello</a></h3>
										<div class="d-flex align-items-center">
											<p class="d-flex align-items-center mb-0 fs-14"><i class="isax isax-location me-2"></i>Ogden, IA</p>
											<i class="fa-solid fa-circle fs-5 text-primary mx-2 me-1"></i>
											<span class="fs-14 fw-medium">60 Min</span>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<p class="mb-1">Consultation Fees</p>
											<h3 class="text-orange">$400</h3>
										</div>
										<a href="booking.html" class="btn btn-md btn-dark d-inline-flex align-items-center rounded-pill">
											<i class="isax isax-calendar-1 me-2"></i>
											Book Now
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-img card-img-hover">
								<a href="doctor-profile.html"><img src="assets/img/doctor-grid/doctor-grid-03.jpg" alt=""></a>
								<div class="grid-overlay-item d-flex align-items-center justify-content-between">
									<span class="badge bg-orange"><i class="fa-solid fa-star me-1"></i>4.8</span>
									<a href="javascript:void(0)" class="fav-icon">
										<i class="fa fa-heart"></i>
									</a>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="d-flex active-bar active-bar-teal align-items-center justify-content-between p-3">
									<a href="#" class="text-teal fw-medium fs-14">Neurologist</a>
									<span class="badge bg-success-light d-inline-flex align-items-center">
										<i class="fa-solid fa-circle fs-5 me-1"></i>
										Available
									</span>
								</div>
								<div class="p-3 pt-0">
									<div class="doctor-info-detail mb-3 pb-3">
										<h3 class="mb-1"><a href="doctor-profile.html">Dr. Harold Bryant</a></h3>
										<div class="d-flex align-items-center">
											<p class="d-flex align-items-center mb-0 fs-14"><i class="isax isax-location me-2"></i>Winona, MS</p>
											<i class="fa-solid fa-circle fs-5 text-primary mx-2 me-1"></i>
											<span class="fs-14 fw-medium">30 Min</span>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<p class="mb-1">Consultation Fees</p>
											<h3 class="text-orange">$500</h3>
										</div>
										<a href="booking.html" class="btn btn-md btn-dark d-inline-flex align-items-center rounded-pill">
											<i class="isax isax-calendar-1 me-2"></i>
											Book Now
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-img card-img-hover">
								<a href="doctor-profile.html"><img src="assets/img/doctor-grid/doctor-grid-04.jpg" alt=""></a>
								<div class="grid-overlay-item d-flex align-items-center justify-content-between">
									<span class="badge bg-orange"><i class="fa-solid fa-star me-1"></i>4.8</span>
									<a href="javascript:void(0)" class="fav-icon">
										<i class="fa fa-heart"></i>
									</a>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="d-flex active-bar active-bar-info align-items-center justify-content-between p-3">
									<a href="#" class="text-info fw-medium fs-14">Cardiologist</a>
									<span class="badge bg-success-light d-inline-flex align-items-center">
										<i class="fa-solid fa-circle fs-5 me-1"></i>
										Available
									</span>
								</div>
								<div class="p-3 pt-0">
									<div class="doctor-info-detail mb-3 pb-3">
										<h3 class="mb-1"><a href="doctor-profile.html">Dr. Sandra Jones</a></h3>
										<div class="d-flex align-items-center">
											<p class="d-flex align-items-center mb-0 fs-14"><i class="isax isax-location me-2"></i>Beckley, WV</p>
											<i class="fa-solid fa-circle fs-5 text-primary mx-2 me-1"></i>
											<span class="fs-14 fw-medium">30 Min</span>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<p class="mb-1">Consultation Fees</p>
											<h3 class="text-orange">$550</h3>
										</div>
										<a href="booking.html" class="btn btn-md btn-dark d-inline-flex align-items-center rounded-pill">
											<i class="isax isax-calendar-1 me-2"></i>
											Book Now
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-img card-img-hover">
								<a href="doctor-profile.html"><img src="assets/img/doctor-grid/doctor-grid-05.jpg" alt=""></a>
								<div class="grid-overlay-item d-flex align-items-center justify-content-between">
									<span class="badge bg-orange"><i class="fa-solid fa-star me-1"></i>4.2</span>
									<a href="javascript:void(0)" class="fav-icon">
										<i class="fa fa-heart"></i>
									</a>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="d-flex active-bar active-bar-teal align-items-center justify-content-between p-3">
									<a href="#" class="text-teal fw-medium fs-14">Neurologist</a>
									<span class="badge bg-success-light d-inline-flex align-items-center">
										<i class="fa-solid fa-circle fs-5 me-1"></i>
										Available
									</span>
								</div>
								<div class="p-3 pt-0">
									<div class="doctor-info-detail mb-3 pb-3">
										<h3 class="mb-1"><a href="doctor-profile.html">Dr. Charles Scott</a></h3>
										<div class="d-flex align-items-center">
											<p class="d-flex align-items-center mb-0 fs-14"><i class="isax isax-location me-2"></i>Hamshire, TX</p>
											<i class="fa-solid fa-circle fs-5 text-primary mx-2 me-1"></i>
											<span class="fs-14 fw-medium">30 Min</span>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<p class="mb-1">Consultation Fees</p>
											<h3 class="text-orange">$600</h3>
										</div>
										<a href="booking.html" class="btn btn-md btn-dark d-inline-flex align-items-center rounded-pill">
											<i class="isax isax-calendar-1 me-2"></i>
											Book Now
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="doctor-nav nav-bottom owl-nav"></div>
				</div>
			</section>
			<!-- /Doctor Section -->

			<!-- Services Section -->
			<section class="services-section aos" data-aos="fade-up">
				<div class="horizontal-slide d-flex" data-direction="right" data-speed="slow">
					<div class="slide-list d-flex gap-4">
						<div class="services-slide">
							<h6><a href="javascript:void(0);">Multi Speciality Treatments & Doctors</a></h6>
						</div>
						<div class="services-slide">
							<h6><a href="javascript:void(0);">Lab Testing Services</a></h6>
						</div>
						<div class="services-slide">
							<h6><a href="javascript:void(0);">Medecines & Supplies</a></h6>
						</div>
						<div class="services-slide">
							<h6><a href="javascript:void(0);">Hospitals & Clinics</a></h6>
						</div>
						<div class="services-slide">
							<h6><a href="javascript:void(0);">Health Care Services</a></h6>
						</div>
						<div class="services-slide">
							<h6><a href="javascript:void(0);">Talk to Doctors</a></h6>
						</div>
						<div class="services-slide">
							<h6><a href="javascript:void(0);">Home Care Services</a></h6>
						</div>
					</div>
				</div>
			</section>
			<!-- /Services Section -->

			<!-- Reasons Section -->
			<section class="reason-section">
				<div class="container">
					<div class="section-header sec-header-one text-center aos" data-aos="fade-up">
						<span class="badge badge-primary">Why Book With Us</span>
						<h2>Compelling Reasons to Choose</h2>
					</div>
					<div class="row row-gap-4 justify-content-center">
						<div class="col-lg-4 col-md-6">
							<div class="reason-item aos" data-aos="fade-up">
								<h6 class="mb-2"><i class="isax isax-tag-user5 text-orange me-2"></i>Follow-Up Care</h6>
								<p class="fs-14 mb-0">We ensure continuity of care through regular follow-ups and communication, helping you stay on track with health goals.</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="reason-item aos" data-aos="fade-up">
								<h6 class="mb-2"><i class="isax isax-voice-cricle text-purple me-2"></i>Patient-Centered Approach</h6>
								<p class="fs-14 mb-0">We prioritize your comfort and preferences, tailoring our services to meet your individual needs and Care from Our Experts</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="reason-item aos" data-aos="fade-up">
								<h6 class="mb-2"><i class="isax isax-wallet-add-15 text-cyan me-2"></i>Convenient Access</h6>
								<p class="fs-14 mb-0">Easily book appointments online or through our dedicated customer service team, with flexible hours to fit your schedule.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Reasons Section -->

			<!-- Bookus Section -->
			<section class="bookus-section bg-dark">
				<div class="container">
					<div class="row align-items-center row-gap-4">
						<div class="col-lg-6">
							<div class="bookus-img">
								<div class="row g-3">
									<div class="col-md-12 aos" data-aos="fade-up">
										<img src="assets/img/book-01.jpg" alt="img" class="img-fluid">
									</div>
									<div class="col-sm-6 aos" data-aos="fade-up">
										<img src="assets/img/book-02.jpg" alt="img" class="img-fluid">
									</div>
									<div class="col-sm-6 aos" data-aos="fade-up">
										<img src="assets/img/book-03.jpg" alt="img" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="section-header sec-header-one mb-2 aos" data-aos="fade-up">
								<span class="badge badge-primary">Why Book With Us</span>
								<h2 class="text-white mb-3">We are committed to understanding your <span class="text-primary-gradient">unique needs and delivering care.</span></h2>
							</div>
							<p class="text-light mb-4">As a trusted healthAs a trusted healthcare provider in our community, we are passionate about promoting health and wellness beyond the clinic. We actively engage in community outreach programs, health fairs, and educational workshop.</p>
							<div class="faq-info aos" data-aos="fade-up">
								<div class="accordion" id="faq-details">

									<!-- FAQ Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingOne">
											<a href="javascript:void(0);" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												01 . Our Vision
											</a>
										</h2>
										<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq-details">
											<div class="accordion-body">
												<div class="accordion-content">
													<p>We envision a community where everyone has access to high-quality healthcare and the resources they need to lead healthy, fulfilling lives.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /FAQ Item -->

									<!-- FAQ Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingTwo">
											<a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
												02 . Our Mission
											</a>
										</h2>
										<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq-details">
											<div class="accordion-body">
												<div class="accordion-content">
													<p>We envision a community where everyone has access to high-quality healthcare and the resources they need to lead healthy, fulfilling lives.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /FAQ Item -->
								</div>
							</div>
						</div>
					</div>
					<div class="bookus-sec">
						<div class="row g-4">
							<div class="col-lg-3">
								<div class="book-item">
									<div class="book-icon bg-primary">
										<i class="isax isax-search-normal5"></i>
									</div>
									<div class="book-info">
										<h6 class="text-white mb-2">Search For Doctors</h6>
										<p class="fs-14 text-light">Search for a doctor based on specialization, location, or availability for your Treatements</p>
									</div>
									<div class="way-icon">
										<img src="assets/img/icons/way-icon.svg" alt="img">
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="book-item">
									<div class="book-icon bg-orange">
										<i class="isax isax-security-user5"></i>
									</div>
									<div class="book-info">
										<h6 class="text-white mb-2">Check Doctor Profile</h6>
										<p class="fs-14 text-light">Explore detailed doctor profiles on our platform to make informed healthcare decisions.</p>
									</div>
									<div class="way-icon">
										<img src="assets/img/icons/way-icon.svg" alt="img">
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="book-item">
									<div class="book-icon bg-cyan">
										<i class="isax isax-calendar5"></i>
									</div>
									<div class="book-info">
										<h6 class="text-white mb-2">Schedule Appointment</h6>
										<p class="fs-14 text-light">After choose your preferred doctor, select a convenient time slot, & confirm your appointment.</p>
									</div>
									<div class="way-icon">
										<img src="assets/img/icons/way-icon.svg" alt="img">
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="book-item">
									<div class="book-icon bg-indigo">
										<i class="isax isax-blend5"></i>
									</div>
									<div class="book-info">
										<h6 class="text-white mb-2">Get Your Solution</h6>
										<p class="fs-14 text-light">Discuss your health concerns with the doctor and receive the personalized advice & with solution.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Bookus Section -->

			<!-- Testimonial Section -->
			<section class="testimonial-section-one">
				<div class="container">
					<div class="section-header sec-header-one text-center aos" data-aos="fade-up">
						<span class="badge badge-primary">Testimonials</span>
						<h2>15k Users Trust Doccure Worldwide</h2>
					</div>

					<!-- Testimonial Slider -->
					<div class="owl-carousel testimonials-slider aos" data-aos="fade-up">
						<div class="card shadow-none mb-0">
							<div class="card-body">
								<div class="d-flex align-items-center mb-4">
									<div class="rating d-flex">
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled"></i>
									</div>
									<span>
										<img src="assets/img/icons/quote-icon.svg" alt="img">
									</span>
								</div>
								<h6 class="fs-16 fw-medium mb-2">Nice Treatment</h6>
								<p>I had a wonderful experience the staff was friendly and attentive, and Dr. Smith took the time to explain everything clearly.</p>
								<div class="d-flex align-items-center">
									<a href="javascript:void(0);" class="avatar avatar-lg">
										<img src="assets/img/patients/patient22.jpg" class="rounded-circle" alt="img">
									</a>
									<div class="ms-2">
										<h6 class="mb-1"><a href="javascript:void(0);">Deny Hendrawan</a></h6>
										<p class="fs-14 mb-0">United States</p>
									</div>
								</div>
							</div>
						</div>
						<div class="card shadow-none mb-0">
							<div class="card-body">
								<div class="d-flex align-items-center mb-4">
									<div class="rating d-flex">
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled"></i>
									</div>
									<span>
										<img src="assets/img/icons/quote-icon.svg" alt="img">
									</span>
								</div>
								<h6 class="fs-16 fw-medium mb-2">Good Hospitability</h6>
								<p>Genuinely cares about his patients. He helped me understand my condition and worked with me to create a plan.</p>
								<div class="d-flex align-items-center">
									<a href="javascript:void(0);" class="avatar avatar-lg">
										<img src="assets/img/patients/patient21.jpg" class="rounded-circle" alt="img">
									</a>
									<div class="ms-2">
										<h6 class="mb-1"><a href="javascript:void(0);">Johnson DWayne</a></h6>
										<p class="fs-14 mb-0">United States</p>
									</div>
								</div>
							</div>
						</div>
						<div class="card shadow-none mb-0">
							<div class="card-body">
								<div class="d-flex align-items-center mb-4">
									<div class="rating d-flex">
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled"></i>
									</div>
									<span>
										<img src="assets/img/icons/quote-icon.svg" alt="img">
									</span>
								</div>
								<h6 class="fs-16 fw-medium mb-2">Nice Treatment</h6>
								<p>I had a great experience with Dr. Chen. She was not only professional but also made me feel comfortable discussing.</p>
								<div class="d-flex align-items-center">
									<a href="javascript:void(0);" class="avatar avatar-lg">
										<img src="assets/img/patients/patient.jpg" class="rounded-circle" alt="img">
									</a>
									<div class="ms-2">
										<h6 class="mb-1"><a href="javascript:void(0);">Rayan Smith</a></h6>
										<p class="fs-14 mb-0">United States</p>
									</div>
								</div>
							</div>
						</div>
						<div class="card shadow-none mb-0">
							<div class="card-body">
								<div class="d-flex align-items-center mb-4">
									<div class="rating d-flex">
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled me-1"></i>
										<i class="fa-solid fa-star filled"></i>
									</div>
									<span>
										<img src="assets/img/icons/quote-icon.svg" alt="img">
									</span>
								</div>
								<h6 class="fs-16 fw-medium mb-2">Excellent Service</h6>
								<p>I had a wonderful experience the staff was friendly and attentive, and Dr. Smith took the time to explain everything clearly.</p>
								<div class="d-flex align-items-center">
									<a href="javascript:void(0);" class="avatar avatar-lg">
										<img src="assets/img/patients/patient23.jpg" class="rounded-circle" alt="img">
									</a>
									<div class="ms-2">
										<h6 class="mb-1"><a href="javascript:void(0);">Sofia Doe</a></h6>
										<p class="fs-14 mb-0">United States</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Testimonial Slider -->

					<!-- Counter -->
					<div class="testimonial-counter">
						<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 row-gap-4">
							<div class="counter-item text-center aos" data-aos="fade-up">
								<h6 class="display-6"><span class="count-digit">500</span>+</h6>
								<p>Doctors Available</p>
							</div>
							<div class="counter-item text-center aos" data-aos="fade-up">
								<h6 class="display-6 secondary-count"><span class="count-digit">18</span>+</h6>
								<p>Specialities</p>
							</div>
							<div class="counter-item text-center aos" data-aos="fade-up">
								<h6 class="display-6 purple-count"><span class="count-digit">30</span>K</h6>
								<p>Bookings Done</p>
							</div>
							<div class="counter-item text-center aos" data-aos="fade-up">
								<h6 class="display-6 pink-count"><span class="count-digit">97</span>+</h6>
								<p>Hospitals & Clinic</p>
							</div>
							<div class="counter-item text-center  aos" data-aos="fade-up">
								<h6 class="display-6 warning-count"><span class="count-digit">317</span>+</h6>
								<p>Lab Tests Available</p>
							</div>
						</div>
					</div>
					<!-- /Counter -->

				</div>
			</section>
			<!-- /Testimonial Section -->

			<section class="company-section bg-dark aos" data-aos="fade-up">
				<div class="container">
					<div class="section-header sec-header-one text-center">
						<h6 class="text-light">Trusted by 5+ million people at companies like</h6>
					</div>
					<div class="owl-carousel company-slider">
						<div>
							<img src="assets/img/company/company-01.svg" alt="img">
						</div>
						<div>
							<img src="assets/img/company/company-02.svg" alt="img">
						</div>
						<div>
							<img src="assets/img/company/company-03.svg" alt="img">
						</div>
						<div>
							<img src="assets/img/company/company-04.svg" alt="img">
						</div>
						<div>
							<img src="assets/img/company/company-05.svg" alt="img">
						</div>
						<div>
							<img src="assets/img/company/company-06.svg" alt="img">
						</div>
						<div>
							<img src="assets/img/company/company-07.svg" alt="img">
						</div>
						<div>
							<img src="assets/img/company/company-08.svg" alt="img">
						</div>
					</div>
				</div>
			</section>

			<section class="faq-section-one">
				<div class="container">
					<div class="section-header sec-header-one text-center aos" data-aos="fade-up">
						<span class="badge badge-primary">FAQ’S</span>
						<h2>Your Questions are Answered</h2>
					</div>
					<div class="row">
						<div class="col-md-10 mx-auto">
							<div class="faq-info aos" data-aos="fade-up">
								<div class="accordion" id="faq-details">

									<!-- FAQ Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingOne">
											<a href="javascript:void(0);" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												How do I book an appointment with a doctor?
											</a>
										</h2>
										<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq-details">
											<div class="accordion-body">
												<div class="accordion-content">
													<p>Yes, simply visit our website and log in or create an account. Search for a doctor based on specialization, location, or availability & confirm your booking.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /FAQ Item -->

									<!-- FAQ Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingTwo">
											<a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Can I request a specific doctor when booking my appointment?
											</a>
										</h2>
										<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq-details">
											<div class="accordion-body">
												<div class="accordion-content">
													<p>Yes, you can usually request a specific doctor when booking your appointment, though availability may vary based on their schedule.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /FAQ Item -->

									<!-- FAQ Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingThree">
											<a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												What should I do if I need to cancel or reschedule my appointment?
											</a>
										</h2>
										<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-details">
											<div class="accordion-body">
												<div class="accordion-content">
													<p>If you need to cancel or reschedule your appointment, contact the doctor as soon as possible to inform them and to reschedule for another available time slot.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /FAQ Item -->

									<!-- FAQ Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingFour">
											<a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												What if I'm running late for my appointment?
											</a>
										</h2>
										<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq-details">
											<div class="accordion-body">
												<div class="accordion-content">
													<p>If you know you will be late, it's courteous to call the doctor's office and inform them. Depending on their policy and schedule, they may be able to accommodate you or reschedule your appointment.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /FAQ Item -->

									<!-- FAQ Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingFive">
											<a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
												Can I book appointments for family members or dependents?
											</a>
										</h2>
										<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-details">
											<div class="accordion-body">
												<div class="accordion-content">
													<p>Yes, in many cases, you can book appointments for family members or dependents. However, you may need to provide their personal information and consent to do so.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /FAQ Item -->

								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

			<!-- App Section -->
			<section class="app-section app-sec-one p-0">
				<div class="container">
					<div class="app-bg">
						<div class="row">
							<div class="col-lg-6 col-md-12 d-flex">
								<div class="app-content d-flex flex-column justify-content-center">
									<div class="app-header aos" data-aos="fade-up">
										<h3 class="display-6 text-white">Download the Doccure App today!</h3>
										<p class="text-light">To download an app related to a doctor or medical services, you can typically visit the app store on your device.</p>
									</div>
									<div class="google-imgs aos" data-aos="fade-up">
										<a href="javascript:void(0);"><img src="assets/img/icons/app-store-01.svg" alt="img"></a>
										<a href="javascript:void(0);"><img src="assets/img/icons/google-play-01.svg" alt="img"></a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 aos" data-aos="fade-up">
								<div class="mobile-img">
									<img src="assets/img/mobile-img.png" class="img-fluid" alt="img">
								</div>
							</div>
						</div>
						<div class="app-bgs">
							<img src="assets/img/bg/app-bg-02.png" alt="img" class="app-bg-01">
							<img src="assets/img/bg/app-bg-03.png" alt="img" class="app-bg-02">
							<img src="assets/img/bg/app-bg-04.png" alt="img" class="app-bg-03">
						</div>
					</div>
				</div>
				<div class="download-bg">
					<img src="assets/img/bg/download-bg.png" alt="img">
				</div>
			</section>
			<!-- /App Section -->

			<!-- Article Section -->
			<section class="article-section">
				<div class="container">
					<div class="section-header sec-header-one text-center aos" data-aos="fade-up">
						<span class="badge badge-primary">Recent Blogs</span>
						<h2>Stay Updated With Our Latest Articles</h2>
					</div>
					<div class="row g-4">
						<div class="col-lg-6">
							<div class="article-item aos" data-aos="fade-up">
								<div class="article-img">
									<a href="blog-details.html">
										<img src="assets/img/blog/article-01.jpg" class="img-fluid" alt="img">
									</a>
									<div class="date-icon">
										<span>15</span>May
									</div>
								</div>
								<div class="article-info">
									<span class="badge badge-cyan mb-2">Treatments</span>
									<h6 class="mb-2"><a href="blog-details.html">Understanding and Preventing Glaucoma: A Detailed Guide</a></h6>
									<p>Glaucoma is a leading cause of blind worldwide, yet many....</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="article-item aos" data-aos="fade-up">
								<div class="article-img">
									<a href="blog-details.html">
										<img src="assets/img/blog/article-02.jpg" class="img-fluid" alt="img">
									</a>
									<div class="date-icon">
										<span>18</span>May
									</div>
								</div>
								<div class="article-info">
									<span class="badge badge-cyan mb-2">Neurology</span>
									<h6 class="mb-2"><a href="blog-details.html">Understanding and Preventing Glaucoma: A Detailed Guide</a></h6>
									<p>Discover the intersection of technology and neurology, transforming....</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="article-item aos" data-aos="fade-up">
								<div class="article-img">
									<a href="blog-details.html">
										<img src="assets/img/blog/article-03.jpg" class="img-fluid" alt="img">
									</a>
									<div class="date-icon">
										<span>21</span>Apr
									</div>
								</div>
								<div class="article-info">
									<span class="badge badge-cyan mb-2">Dental</span>
									<h6 class="mb-2"><a href="blog-details.html">5 Essential Tips for Maintaining Optimal Oral Health</a></h6>
									<p>Learn the top five daily practices to keep your teeth....</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="article-item aos" data-aos="fade-up">
								<div class="article-img">
									<a href="blog-details.html">
										<img src="assets/img/blog/article-04.jpg" class="img-fluid" alt="img">
									</a>
									<div class="date-icon">
										<span>22</span>Jan
									</div>
								</div>
								<div class="article-info">
									<span class="badge badge-cyan mb-2">Care & Treatment</span>
									<h6 class="mb-2"><a href="blog-details.html">Beating Strong: The Digital Revol in Cardiac Care</a></h6>
									<p>Discover how digital advancements are transforming cardiac care...</p>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center load-item aos" data-aos="fade-up">
						<a href="blog-grid.html" class="btn btn-dark">View All Articles<i class="isax isax-arrow-right-3 ms-2"></i></a>
					</div>
				</div>
			</section>
			<!-- /Article Section -->

			<!-- Info Section -->
			<section class="info-section">
				<div class="container">
					<div class="contact-info">
						<div class="d-lg-flex align-items-center justify-content-between w-100 gap-4">
							<div class="mb-4 mb-lg-0 aos" data-aos="fade-up">
								<h6 class="display-6 text-white">Working for Your Better Health.</h6>
							</div>
							<div class="d-sm-flex align-items-center justify-content-lg-end gap-4 aos" data-aos="fade-up">
								<div class="con-info d-flex align-items-center mb-3 mb-sm-0">
									<span class="con-icon">
										<i class="isax isax-headphone"></i>
									</span>
									<div class="ms-2">
										<p class="text-white mb-1">Customer Support</p>
										<p class="text-white fw-medium mb-0">+1 56589 54598</p>
									</div>
								</div>
								<div class="con-info d-flex align-items-center">
									<span class="con-icon">
										<i class="isax isax-message-2"></i>
									</span>
									<div class="ms-2">
										<p class="text-white mb-1">Drop Us an Email</p>
										<p class="text-white fw-medium mb-0"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2940474f46181b1c1f694c51484459454c074a4644">[email&#160;protected]</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Info Section -->



			<!-- Cursor -->
			<div class="mouse-cursor cursor-outer"></div>
			<div class="mouse-cursor cursor-inner"></div>
			<!-- /Cursor -->


            @endsection
