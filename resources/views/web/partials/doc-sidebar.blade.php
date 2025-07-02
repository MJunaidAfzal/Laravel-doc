							<!-- Profile Sidebar -->
							<div class="profile-sidebar doctor-sidebar profile-sidebar-new">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="doctor-profile.html.htm" class="booking-doc-img">
											<img src="{{asset('assets/img/doctors-dashboard/doctor-profile-img.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="doctor-profile.html.htm">Dr Edalin Hendry</a></h3>
											<div class="patient-details">
												<h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
											</div>
											<span class="badge doctor-role-badge"><i class="fa-solid fa-circle"></i>Dentist</span>
										</div>
									</div>
								</div>
								<div class="doctor-available-head">
									<div class="input-block input-block-new">
										<label class="form-label">Availability <span class="text-danger">*</span></label>
										<select class="select form-control">
											<option>I am Available Now</option>
											<option>Not Available</option>
										</select>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="{{ route('doctor.dashboard') }}">
													<i class="isax isax-category-2"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="{{ route('doctor.requests') }}">
													<i class="isax isax-clipboard-tick"></i>
													<span>Requests</span>
													<small class="unread-msg">2</small>
												</a>
											</li>
											<li>
												<a href="{{ route('doctor.appointments') }}">
													<i class="isax isax-calendar-1"></i>
													<span>Appointments</span>
												</a>
											</li>
											<li>
												<a href="my-patients.html.htm">
													<i class="fa-solid fa-user-injured"></i>
													<span>My Patients</span>
												</a>
											</li>
											<li>
												<a href="doctor-specialities.html.htm">
													<i class="isax isax-clock"></i>
													<span>Specialties & Services</span>
												</a>
											</li>
											<li>
												<a href="reviews.html.htm">
													<i class="isax isax-star-1"></i>
													<span>Reviews</span>
												</a>
											</li>
											<li>
												<a href="accounts.html.htm">
													<i class="isax isax-profile-tick"></i>
													<span>Accounts</span>
												</a>
											</li>
											<li>
												<a href="invoices.html.htm">
													<i class="isax isax-document-text"></i>
													<span>Invoices</span>
												</a>
											</li>
											<li>
												<a href="doctor-payment.html.htm">
													<i class="fa-solid fa-money-bill-1"></i>
													<span>Payout Settings</span>
												</a>
											</li>																																				
											<li>
												<a href="chat-doctor.html.htm">
													<i class="isax isax-messages-1"></i>
													<span>Message</span>
													<small class="unread-msg">7</small>
												</a>
											</li>
											<li>
												<a href="{{ route('doctor.profile-setting') }}">
													<i class="isax isax-setting-2"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="social-media.html.htm">
													<i class="fa-solid fa-shield-halved"></i>
													<span>Social Media</span>
												</a>
											</li>
											<li>
												<a href="doctor-change-password.html.htm">
													<i class="isax isax-key"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
                                                	<form method="POST" action="{{ route('logout') }}">
											@csrf
											<button style="padding: 10px;color: black;" type="submit" class="dropdown-item"> <i style="margin-right: 10px;" class="isax isax-logout"></i> Logout</button>
										</form>
											
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<!-- /Profile Sidebar -->	