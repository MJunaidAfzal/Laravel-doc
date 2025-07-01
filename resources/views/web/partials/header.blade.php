<style>
	/* Show dropdown on hover */
.nav-item.dropdown:hover .dropdown-menu {
    display: block;
}

</style>

{{-- <div class="header-topbar">
				<div class="container">
					<div class="topbar-info">
						<div class="d-flex align-items-center gap-3 header-info">
							<p><i class="isax isax-message-text5 me-1"></i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="355c5b535a75504d54584559501b565a58">[email&#160;protected]</a></p>
							<p><i class="isax isax-call5 me-1"></i>+1 66589 14556</p>
						</div>
						<ul>
							<li class="header-theme">
								<a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle">
									<i class="isax isax-sun-1"></i>
								</a>
								<a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle activate">
									<i class="isax isax-moon"></i>
								</a>
							</li>
							<li class="d-inline-flex align-items-center drop-header">
								<div class="dropdown dropdown-country me-3">
									<a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
										<img src="assets/img/flags/us-flag.svg" class="me-2" alt="flag">
									</a>
									<ul class="dropdown-menu p-2 mt-2">
										<li>
											<a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
												<img src="assets/img/flags/us-flag.svg" class="me-2" alt="flag">ENG
											</a>
										</li>
										<li>
											<a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
												<img src="assets/img/flags/arab-flag.svg" class="me-2" alt="flag">ARA
											</a>
										</li>
										<li>
											<a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
												<img src="assets/img/flags/france-flag.svg" class="me-2" alt="flag">FRA
											</a>
										</li>
									</ul>
								</div>
								<div class="dropdown dropdown-amt">
									<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
										USD
									</a>
									<ul class="dropdown-menu p-2 mt-2">
										<li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
										<li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
										<li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
									</ul>
								</div>
							</li>
							<li class="social-header">
								<div class="social-icon">
									<a href="javascript:void(0);"><i class="fa-brands fa-facebook"></i></a>
									<a href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a>
									<a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
									<a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
									<a href="javascript:void(0);"><i class="fa-brands fa-pinterest"></i></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div> --}}

<!-- Header -->
			<header class="header header-custom header-fixed inner-header relative">
				<div class="container">
					<nav class="navbar navbar-expand-lg header-nav">
						<div class="navbar-header">
							<a id="mobile_btn" href="javascript:void(0);">
								<span class="bar-icon">
									<span></span>
									<span></span>
									<span></span>
								</span>
							</a>
							<a href="{{ route('web.index') }}" class="navbar-brand logo">
								<img src="{{ asset('assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
							</a>
						</div>
						<div class="header-menu">
							<div class="main-menu-wrapper">
								<div class="menu-header">
									<a href="{{ route('web.index') }}" class="menu-logo">
										<img src="{{ asset('assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
									</a>
									<a id="menu_close" class="menu-close" href="javascript:void(0);">
										<i class="fas fa-times"></i>
									</a>
								</div>
								<ul class="main-nav">
									<li class="has-submenu megamenu active">
										<a href="{{ route('web.index') }}">Home</a>
									</li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Doctors <i class="fas fa-chevron-down"></i></a>
										<ul class="submenu">
											<li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
											<li><a href="appointments.html">Appointments</a></li>
											<li><a href="available-timings.html">Available Timing</a></li>
											<li><a href="my-patients.html">Patients List</a></li>
											<li><a href="patient-profile.html">Patients Profile</a></li>
											<li><a href="chat-doctor.html">Chat</a></li>
											<li><a href="invoices.html">Invoices</a></li>
											<li><a href="doctor-profile-settings.html">Profile Settings</a></li>
											<li><a href="reviews.html">Reviews</a></li>
											<li><a href="doctor-register.html">Doctor Register</a></li>
											<li class="has-submenu">
												<a href="doctor-blog.html">Blog</a>
												<ul class="submenu">
													<li><a href="doctor-blog.html">Blog</a></li>
													<li><a href="blog-details.html">Blog view</a></li>
													<li><a href="doctor-add-blog.html">Add Blog</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Patients <i class="fas fa-chevron-down"></i></a>
										<ul class="submenu">
											<li><a href="patient-dashboard.html">Patient Dashboard</a></li>
											<li class="has-submenu">
												<a href="javascript:void(0);">Doctors</a>
												<ul class="submenu inner-submenu">
													<li><a href="map-grid.html">Map Grid</a></li>
													<li><a href="map-list.html">Map List</a></li>
													<li><a href="map-list-availability.html">Map with Availability</a></li>
												</ul>
											</li>
											<li class="has-submenu">
												<a href="javascript:void(0);">Search Doctor</a>
												<ul class="submenu inner-submenu">
													<li><a href="search.html">Search Doctor 1</a></li>
													<li><a href="search-2.html">Search Doctor 2</a></li>
												</ul>
											</li>
											<li class="has-submenu">
												<a href="javascript:void(0);">Doctor Profile</a>
												<ul class="submenu inner-submenu">
													<li><a href="doctor-profile.html">Doctor Profile 1</a></li>
													<li><a href="doctor-profile-2.html">Doctor Profile 2</a></li>
												</ul>
											</li>
											<li class="has-submenu">
												<a href="javascript:void(0);">Booking</a>
												<ul class="submenu inner-submenu">
													<li><a href="booking.html">Booking</a></li>
													<li><a href="booking-1.html">Booking 1</a></li>
													<li><a href="booking-2.html">Booking 2</a></li>
													<li><a href="booking-popup.html">Booking Popup</a></li>
												</ul>
											</li>
											<li><a href="checkout.html">Checkout</a></li>
											<li><a href="booking-success.html">Booking Success</a></li>
											<li><a href="favourites.html">Favourites</a></li>
											<li><a href="chat.html">Chat</a></li>
											<li><a href="profile-settings.html">Profile Settings</a></li>
											<li><a href="change-password.html">Change Password</a></li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Pharmacy <i class="fas fa-chevron-down"></i></a>
										<ul class="submenu">
											<li><a href="pharmacy-index.html">Pharmacy</a></li>
											<li><a href="pharmacy-details.html">Pharmacy Details</a></li>
											<li><a href="pharmacy-search.html">Pharmacy Search</a></li>
											<li><a href="product-all.html">Product</a></li>
											<li><a href="product-description.html">Product Description</a></li>
											<li><a href="cart.html">Cart</a></li>
											<li><a href="product-checkout.html">Product Checkout</a></li>
											<li><a href="payment-success.html">Payment Success</a></li>
											<li><a href="pharmacy-register.html">Pharmacy Register</a></li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Pages <i class="fas fa-chevron-down"></i></a>
										<ul class="submenu">
											<li><a href="{{ route('about-us') }}">About Us</a></li>
											<li><a href="{{ route('contact-us') }}">Contact Us</a></li>
											<li class="has-submenu">
												<a href="javascript:void(0);">Other Pages</a>
												<ul class="submenu inner-submenu">
													<li><a href="{{ route('pricing') }}">Pricing Plan</a></li>
													<li><a href="{{ route('faq') }}">FAQ</a></li>
													<li><a href="{{ route('terms-and-conditions') }}">Terms & Condition</a></li>
													<li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
												</ul>
											</li>
											<li class="has-submenu">
												<a href="javascript:void(0);">Authentication</a>
												<ul class="submenu inner-submenu">
													<li><a href="login-email.html">Login Email</a></li>
													<li><a href="login-phone.html">Login Phone</a></li>
													<li><a href="doctor-signup.html">Doctor Signup</a></li>
													<li><a href="patient-signup.html">Patient Signup</a></li>
													<li><a href="forgot-password.html">Forgot Password 1</a></li>
													<li><a href="forgot-password2.html">Forgot Password 2</a></li>
													<li><a href="login-email-otp.html">Email OTP</a></li>
													<li><a href="login-phone-otp.html">Phone OTP</a></li>
												</ul>
											</li>
											<li class="has-submenu">
												<a href="javascript:void(0);">Error Pages</a>
												<ul class="submenu inner-submenu">
													<li><a href="error-404.html">404 Error</a></li>
													<li><a href="error-500.html">500 Error</a></li>
												</ul>
											</li>
											<li><a href="hospitals.html">Hospitals</a></li>
											<li><a href="speciality.html">Speciality</a></li>
											<li><a href="clinic.html">Clinic</a></li>
											<li class="has-submenu">
												<a href="javascript:void(0);">Call</a>
												<ul class="submenu inner-submenu">
													<li><a href="voice-call.html">Voice Call</a></li>
													<li><a href="video-call.html">Video Call</a></li>
												</ul>
											</li>
											<li class="has-submenu">
												<a href="javascript:void(0);">Invoices</a>
												<ul class="submenu inner-submenu">
													<li><a href="invoices.html">Invoices</a></li>
													<li><a href="invoice-view.html">Invoice View</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="#">Blog <i class="fas fa-chevron-down"></i></a>
										<ul class="submenu">
											<li><a href="blog-list.html">Blog List</a></li>
											<li><a href="blog-grid.html">Blog Grid</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="#">Admin <i class="fas fa-chevron-down"></i></a>
										<ul class="submenu">
											<li><a href="admin/index.html" target="_blank">Admin</a></li>
											<li><a href="pharmacy/index.html" target="_blank">Pharmacy Admin</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<ul class="nav header-navbar-rht">
								<li class="searchbar">
									<a href="javascript:void(0);"><i class="feather-search"></i></a>
									<div class="togglesearch">
										<form action="search.html">
											<div class="input-group">
												<input type="text" class="form-control">
												<button type="submit" class="btn">Search</button>
											</div>
										</form>
									</div>
								</li>
								<li>
									<a href="{{ route('login') }}" class="btn btn-md btn-primary-gradient d-inline-flex align-items-center rounded-pill"><i class="isax isax-lock-1 me-1"></i>Login</a>
								</li>
																		<!-- Make sure Bootstrap CSS is loaded in your layout -->
										<li class="nav-item dropdown">
											<a class="btn btn-md btn-dark d-inline-flex align-items-center rounded-pill dropdown-toggle"
											href="#"
											id="registerDropdown"
											role="button"
											data-bs-toggle="dropdown"
											aria-expanded="false">
												<i class="isax isax-user-tick me-1"></i> Register
											</a>
											
											
											<ul class="dropdown-menu" >
													<ul class="submenu" aria-labelledby="registerDropdown">
													<li><a href="{{ route('patient-register') }}">Patient Register</a></li><br>
													<li style="margin-top: 10px"><a href="{{ route('doctor-register') }}">Doctor Register</a></li>
												</ul>
												
											</ul>
										</li>

							
							</ul>
						</div>
					</nav>
				</div>
			</header>
			<!-- /Header -->
