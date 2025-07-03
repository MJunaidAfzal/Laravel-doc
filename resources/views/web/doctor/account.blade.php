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
						<div class="accunts-sec">
							<div class="dashboard-header">
								<div class="header-back">									
									<h3>Accounts</h3>
								</div>
							</div>
							<div class="account-details-box">
								<div class="row">
									<div class="col-xxl-6 col-lg-7">
										<div class="account-payment-info">
											<h4>Statistics</h4>
											<div class="row">
												<div class="col-lg-4 col-md-6">
													<div class="payment-amount">
														<h6><i class="fa-solid fa-file-invoice-dollar text-success"></i>Total Balance</h6>
														<span>$900</span>
													</div>
												</div>
												<div class="col-lg-4 col-md-6">
													<div class="payment-amount">
														<h6><i class="fa-solid fa-money-bill-1 text-orange"></i>Earned</h6>
														<span>$906</span>
													</div>
												</div>
												<div class="col-lg-4 col-md-6">
													<div class="payment-amount">
														<h6><i class="fa-solid fa-circle-question text-pink"></i>Requested</h6>
														<span>$50</span>
													</div>
												</div>
											</div>
											<div class="payment-request">
												<span>Last Payment request : 24 Mar 2023</span>
												<a href="#payment_request" class="btn btn-primary prime-btn" data-bs-toggle="modal">Request Payment</a>
											</div>
										</div>
									</div>
									<div class="col-xxl-1 d-lg-none d-xxl-block"></div>
									<div class="col-lg-5">
										<div class="bank-details-info">
											<h3>Bank Details</h3>
											<ul>
												<li>
													<h6>Bank Name</h6>
													<h5>Citi Bank Inc</h5>
												</li>
												<li>
													<h6>Account Number</h6>
													<h5>5396 5250 1908 XXXX</h5>
												</li>
												<li>
													<h6>Branch Name</h6>
													<h5>London</h5>
												</li>
												<li>
													<h6>Account Name</h6>
													<h5>Darren</h5>
												</li>
											</ul>
											<div class="edit-detail-link">
												<a href="#account_details" data-bs-toggle="modal">Edit Details</a>
												<a href="#other_accounts" data-bs-toggle="modal">Other Accounts</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="account-detail-table">
										<!-- Tab Menu -->
										<nav class="accounts-tab">
										<ul class="nav nav-tabs-bottom">
											<li class="nav-item">
												<a class="nav-link active" href="#pat_accounts" data-bs-toggle="tab">Accounts</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#pat_refundrequest" data-bs-toggle="tab">Refund Request</a>
											</li>
										</ul>
									</nav>
									<!-- /Tab Menu -->
									
									<!-- Tab Content -->
									<div class="tab-content pt-0">
										
										<!-- Accounts Tab -->
										<div id="pat_accounts" class="tab-pane fade show active">
											<ul class="header-list-btns d-inline-block mb-4">
												<li>
													<div class="input-block dash-search-input">
														<input type="text" class="form-control" placeholder="Search">
														<span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
													</div>
												</li>
											</ul>
											<div class="custom-new-table">
												<div class="table-responsive">
													<table class="table table-hover table-center mb-0">
														<thead>
															<tr>
																<th>ID</th>
																<th>Requested Date</th>
																<th>Account No</th>
																<th>Credited On</th>
																<th>Amount</th>
																<th>Status</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<a href="#"><span class="text-blue">#AC-1234</span></a>
																</td>
																<td>24 Mar 2024</td>
																<td>5396 5250 1908 XXXX</td>
																<td>26 Mar 2024</td>
																<td>$300</td>
																<td>
																	<span class="badge badge-success-bg">Completed</span>
																</td>
																<td>
																	<a href="#request_details_modal" class="account-action" data-bs-toggle="modal"><i class="isax isax-link-2"></i></a>
																</td>
															</tr>
															<tr>
																<td>
																	<a href="#"><span class="text-blue">#AC-1235</span></a>
																</td>
																<td>28 Mar 2024</td>
																<td>8833 8942 9013 XXXX</td>
																<td>30 Mar 2024</td>
																<td>$400</td>
																<td>
																	<span class="badge badge-success-bg">Completed</span>
																</td>
																<td>
																	<a href="#request_details_modal" class="account-action" data-bs-toggle="modal"><i class="isax isax-link-2"></i></a>
																</td>
															</tr>
															<tr>
																<td>
																	<a href="#"><span class="text-blue">#AC-1236</span></a>
																</td>
																<td>02 Apr 2024</td>
																<td>8920 4041 4725 XXXX</td>
																<td>04 Apr 2024</td>
																<td>$350</td>
																<td>
																	<span class="badge badge-danger-bg">Cancelled</span>
																</td>
																<td>
																	<a href="#request_cancel_modal" class="account-action" data-bs-toggle="modal"><i class="isax isax-link-2"></i></a>
																</td>
															</tr>
															<tr>
																<td>
																	<a href="#"><span class="text-blue">#AC-1237</span></a>
																</td>
																<td>10 Apr 2024</td>
																<td>5730 4892 0492 XXXX</td>
																<td>12 Apr 2024</td>
																<td>$220</td>
																<td>
																	<span class="badge badge-warning-bg">Pending</span>
																</td>
																<td>
																	<a href="#" class="account-action"><i class="isax isax-link-2"></i></a>
																</td>
															</tr>
															<tr>
																<td>
																	<a href="#"><span class="text-blue">#AC-1238</span></a>
																</td>
																<td>16 Apr 2024</td>
																<td>7922 9024 5824 XXXX</td>
																<td>18 Apr 2024</td>
																<td>$470</td>
																<td>
																	<span class="badge badge-success-bg">Completed</span>
																</td>
																<td>
																	<a href="#request_details_modal" class="account-action" data-bs-toggle="modal"><i class="isax isax-link-2"></i></a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>

											<!-- Pagination -->
											<div class="pagination dashboard-pagination">
												<ul>
													<li>
														<a href="#" class="page-link"><i class="fa-solid fa-chevron-left"></i></a>
													</li>
													<li>
														<a href="#" class="page-link">1</a>
													</li>
													<li>
														<a href="#" class="page-link active">2</a>
													</li>
													<li>
														<a href="#" class="page-link">3</a>
													</li>
													<li>
														<a href="#" class="page-link">4</a>
													</li>
													<li>
														<a href="#" class="page-link">...</a>
													</li>
													<li>
														<a href="#" class="page-link"><i class="fa-solid fa-chevron-right"></i></a>
													</li>
												</ul>
											</div>
											<!-- /Pagination -->
										</div>
										<!-- /Accounts Tab -->
										
										<!-- Refund Request Tab -->
										<div class="tab-pane fade" id="pat_refundrequest">
											<ul class="header-list-btns d-inline-block mb-4">
												<li>
													<div class="input-block dash-search-input">
														<input type="text" class="form-control" placeholder="Search">
														<span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
													</div>
												</li>
											</ul>
											<div class="custom-new-table">
												<div class="table-responsive">
													<table class="table table-hover table-center mb-0">
														<thead>
															<tr>
																<th>ID</th>
																<th>Patient</th>
																<th>Appointment Date</th>
																<th>Payment</th>
																<th>Status</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<a href="#"><span class="text-blue">#AC-1234</span></a>
																</td>
																<td>
																	<div class="table-avtatar">
																		<a href="patient-profile.html.htm"><img src="{{asset('assets/img/doctors-dashboard/doctor-profile-img.jpg')}}" alt="Img">Edalin Hendry</a>
																	</div>
																</td>
																<td>24 Mar 2024 - 10:30 AM</td>
																<td>$300</td>
																<td>
																	<span class="badge badge-success-bg">Paid</span>
																</td>
																<td>
																	<div class="d-flex align-items-center">
																		<a href="#" class="account-action me-2"><i class="isax isax-link-2"></i></a>
																		<a href="#" class="account-action text-success me-2"><i class="fa-solid fa-check"></i></a>
																		<a href="#" class="account-action text-danger me-2"><i class="fa-solid fa-x"></i></a>
																	</div>
																	
																</td>
															</tr>
															<tr>
																<td>
																	<a href="#"><span class="text-blue">#AC-1235</span></a>
																</td>
																<td>
																	<div class="table-avtatar">
																		<a href="patient-profile.html.htm"><img src="{{asset('assets/img/doctors/doctor-thumb-01.jpg')}}" alt="Img">Shanta Neill</a>
																	</div>
																</td>
																<td>28 Mar 2024 - 11:15 AM</td>
																<td>$250</td>
																<td>
																	<span class="badge badge-success-bg">Paid</span>
																</td>
																<td>
																	<div class="d-flex align-items-center">
																		<a href="#" class="account-action me-2"><i class="isax isax-link-2"></i></a>
																		<a href="#" class="account-action text-success me-2"><i class="fa-solid fa-check"></i></a>
																		<a href="#" class="account-action text-danger me-2"><i class="fa-solid fa-x"></i></a>
																	</div>
																	
																</td>
															</tr>
															<tr>
																<td>
																	<a href="#"><span class="text-blue">#AC-1236</span></a>
																</td>
																<td>
																	<div class="table-avtatar">
																		<a href="patient-profile.html.htm"><img src="{{asset('assets/img/doctors/doctor-thumb-02.jpg')}}" alt="Img">Anthony Tran</a>
																	</div>
																</td>
																<td>02 Apr 2024 -  04:15 PM</td>
																<td>$380</td>
																<td>
																	<span class="badge badge-success-bg">Paid</span>
																</td>
																<td>
																	<div class="d-flex align-items-center">
																		<a href="#" class="account-action me-2"><i class="isax isax-link-2"></i></a>
																		<a href="#" class="account-action text-success me-2"><i class="fa-solid fa-check"></i></a>
																		<a href="#" class="account-action text-danger me-2"><i class="fa-solid fa-x"></i></a>
																	</div>
																	
																</td>
															</tr>
															<tr>
																<td>
																	<a href="#"><span class="text-blue">#AC-1237</span></a>
																</td>
																<td>
																	<div class="table-avtatar">
																		<a href="patient-profile.html.htm"><img src="{{asset('assets/img/doctors/doctor-thumb-03.jpg')}}" alt="Img">Susan Lingo</a>
																	</div>
																</td>
																<td>13 Apr 2024 -  05:30 PM</td>
																<td>$400</td>
																<td>
																	<span class="badge badge-warning-bg">Pending</span>
																</td>
																<td>
																	<div class="d-flex align-items-center">
																		<a href="#" class="account-action me-2"><i class="isax isax-link-2"></i></a>
																		<a href="#" class="account-action text-success me-2"><i class="fa-solid fa-check"></i></a>
																		<a href="#" class="account-action text-danger me-2"><i class="fa-solid fa-x"></i></a>
																	</div>
																	
																</td>
															</tr>
															<tr>
																<td>
																	<a href="#"><span class="text-blue">#AC-1238</span></a>
																</td>
																<td>
																	<div class="table-avtatar">
																		<a href="patient-profile.html.htm"><img src="{{asset('assets/img/doctors/doctor-thumb-08.jpg')}}" alt="Img">Joseph Boyd</a>
																	</div>
																</td>
																<td>21 Apr 2024 -  12:30 PM</td>
																<td>$320</td>
																<td>
																	<span class="badge badge-success-bg">Paid</span>
																</td>
																<td>
																	<div class="d-flex align-items-center">
																		<a href="#" class="account-action me-2"><i class="isax isax-link-2"></i></a>
																		<a href="#" class="account-action text-success me-2"><i class="fa-solid fa-check"></i></a>
																		<a href="#" class="account-action text-danger me-2"><i class="fa-solid fa-x"></i></a>
																	</div>
																	
																</td>
															</tr>
															<tr>
																<td>
																	<a href="#"><span class="text-blue">#AC-1239</span></a>
																</td>
																<td>
																	<div class="table-avtatar">
																		<a href="patient-profile.html.htm"><img src="{{asset('assets/img/doctors/doctor-thumb-06.jpg')}}" alt="Img">Juliet Grabriel</a>
																	</div>
																</td>
																<td>17 May 2024 - 09:20 AM</td>
																<td>$280</td>
																<td>
																	<span class="badge badge-success-bg">Paid</span>
																</td>
																<td>
																	<div class="d-flex align-items-center">
																		<a href="#" class="account-action me-2"><i class="isax isax-link-2"></i></a>
																		<a href="#" class="account-action text-success me-2"><i class="fa-solid fa-check"></i></a>
																		<a href="#" class="account-action text-danger me-2"><i class="fa-solid fa-x"></i></a>
																	</div>
																	
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>

											<!-- Pagination -->
											<div class="pagination dashboard-pagination">
												<ul>
													<li>
														<a href="#" class="page-link"><i class="fa-solid fa-chevron-left"></i></a>
													</li>
													<li>
														<a href="#" class="page-link">1</a>
													</li>
													<li>
														<a href="#" class="page-link active">2</a>
													</li>
													<li>
														<a href="#" class="page-link">3</a>
													</li>
													<li>
														<a href="#" class="page-link">4</a>
													</li>
													<li>
														<a href="#" class="page-link">...</a>
													</li>
													<li>
														<a href="#" class="page-link"><i class="fa-solid fa-chevron-right"></i></a>
													</li>
												</ul>
											</div>
											<!-- /Pagination -->
										</div>
										<!-- /Refund Request Tab -->
											
									</div>
									<!-- Tab Content -->
								</div>
							</div>
						</div>
							
					</div>
				</div>

			</div>

		</div>		
		<!-- /Page Content -->
            


		
		<!-- Payment Request Moodal -->
		<div class="modal fade custom-modal custom-modal-two modal-lg" id="payment_request">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Payment Request <span class="text-danger request-id">Request ID : #RQ-1323</span></h5>
						<button type="button" data-bs-dismiss="modal" aria-label="Close">
							<span><i class="fa-solid fa-x"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<form action="accounts.html">
							<div class="input-block input-block-new">
								<label class="form-label">Request Amount</label>
								<input type="text" class="form-control">
							</div>	
							<div class="input-block input-block-new">
								<label class="form-label">Description</label>
								<textarea rows="3" class="form-control"></textarea>
							</div>	
							<div class="form-set-button">
								<button class="btn btn-light" type="button">Cancel</button>
								<button class="btn btn-primary" type="submit">Submit</button>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
        <!-- /Payment Request Moodal -->

        <!-- Account Details Modal-->
        <div class="modal fade custom-modal custom-modal-two modal-lg" id="account_details">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Account Details</h5>
						<button type="button" data-bs-dismiss="modal" aria-label="Close">
							<span><i class="fa-solid fa-x"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<form action="accounts.htm;">
							<div class="input-block input-block-new">
								<label class="form-label">Bank Name</label>
								<input type="text" class="form-control">
							</div>	
							<div class="input-block input-block-new">
								<label class="form-label">Branch Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="input-block input-block-new">
								<label class="form-label">Account Number</label>
								<input type="text" class="form-control">
							</div>
							<div class="input-block input-block-new">
								<label class="form-label">Account Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-set-button">
								<button class="btn btn-light" type="button">Cancel</button>
								<button class="btn btn-primary" type="submit">Save Changes</button>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
        <!-- /Account Details Modal-->

		<!-- Other Accounts Modal-->
        <div class="modal fade custom-modal custom-modal-two modal-lg" id="other_accounts">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Other Accounts</h5>
						<button type="button" data-bs-dismiss="modal" aria-label="Close">
							<span><i class="fa-solid fa-x"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<div class="other-accounts-info">
							<ul>
								<li>
									<ul class="other-bank-info">
										<li>
											<h6>Name</h6>
											<span>Citi Bank Inc</span>
										</li>
										<li>
											<h6>Account No</h6>
											<span>5396 5250 1908 XXXX</span>
										</li>
										<li>
											<h6>Branch</h6>
											<span>London</span>
										</li>
										<li>
											<h6>Name on Bank Account</h6>
											<span>Edalin Hendry</span>
										</li>
										<li>
											<a href="#">Current</a>
										</li>
									</ul>
								</li>
								<li>
									<ul class="other-bank-info">
										<li>
											<h6>Name</h6>
											<span>HDFC Bank Inc</span>
										</li>
										<li>
											<h6>Account No</h6>
											<span>7382 4924 4924 XXXX</span>
										</li>
										<li>
											<h6>Branch</h6>
											<span>New York</span>
										</li>
										<li>
											<h6>Name on Bank Account</h6>
											<span>Edalin Hendry</span>
										</li>
										<li>
											<a href="#">Change to default</a>
										</li>
									</ul>
								</li>
								<li>
									<ul class="other-bank-info">
										<li>
											<h6>Name</h6>
											<span>Union Bank Inc</span>
										</li>
										<li>
											<h6>Account No</h6>
											<span>8934 4902 9024 XXXX</span>
										</li>
										<li>
											<h6>Branch</h6>
											<span>Chicago</span>
										</li>
										<li>
											<h6>Name on Bank Account</h6>
											<span>Edalin Hendry</span>
										</li>
										<li>
											<a href="#">Change to default</a>
										</li>
									</ul>
								</li>
								<li>
									<ul class="other-bank-info">
										<li>
											<h6>Name</h6>
											<span>KVB Bank Inc</span>
										</li>
										<li>
											<h6>Account No</h6>
											<span>5892 4920 4829 XXXX</span>
										</li>
										<li>
											<h6>Branch</h6>
											<span>Austin</span>
										</li>
										<li>
											<h6>Name on Bank Account</h6>
											<span>Edalin Hendry</span>
										</li>
										<li>
											<a href="#">Change to default</a>
										</li>
									</ul>
								</li>
							</ul>
							<a href="#" class="btn btn-primary prime-btn w-100 mt-2" data-bs-dismiss="modal">Close</a>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- /Other Accounts Modal-->

		<!-- Request Completed Modal-->
        <div class="modal fade custom-modal custom-modal-two" id="request_details_modal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Request Details <span class="badge badge-success-bg">Completed</span></h5>
						<button type="button" data-bs-dismiss="modal" aria-label="Close">
							<span><i class="fa-solid fa-x"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<div class="completed-request">
							<ul>
								<li>
									<h6>ID</h6>
									<span>#AC-1234</span>
								</li>
								<li>
									<h6>Requested on</h6>
									<span>24 Mar 2024</span>
								</li>
								<li>
									<h6>Credited Date</h6>
									<span>24 Mar 2024</span>
								</li>
								<li>
									<h6>Amount</h6>
									<span class="text-blue">$300</span>
								</li>
							</ul>
							<div class="bank-detail">
								<h4>Bank Details</h4>
								<div class="accont-information">
									<h6>Name</h6>
									<span>Citi Bank Inc</span>
								</div>
								<div class="accont-information">
									<h6>Account No</h6>
									<span>5396 5250 1908 XXXX</span>
								</div>
								<div class="accont-information">
									<h6>Branch</h6>
									<span>London</span>
								</div>
							</div>
							<div class="request-des">
								<h4>Reqeust Description</h4>
								<p>I recently completed a series of dental treatments with Dr.Edalin Hendry, 
									and I couldn't be more pleased with the results. From my very first appointment.
								</p>
							</div>
							<a href="#" class="btn btn-primary prime-btn w-100" data-bs-dismiss="modal">Close</a>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- /Request Completed Modal-->

		<!-- Request Cancel Modal-->
        <div class="modal fade custom-modal custom-modal-two" id="request_cancel_modal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Request Details <span class="badge badge-danger-bg">Cancelled</span></h5>
						<button type="button" data-bs-dismiss="modal" aria-label="Close">
							<span><i class="fa-solid fa-x"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<div class="cancelled-request">
							<div class="canceled-user-info d-flex align-items-center">
								<div class="patinet-information">
									<a href="doctor-upcoming-appointment.html.htm">
										<img src="{{asset('assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
									</a>
									<div class="patient-info">
										<p>#Apt0001</p>
										<h6><a href="doctor-upcoming-appointment.html.htm">Adrian</a></h6>
									</div>
								</div>
								<div class="email-info">
									<ul>
										<li><i class="fa-solid fa-envelope"></i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ddbcb9afbcb39db8a5bcb0adb1b8f3beb2b0">[email&#160;protected]</a></li>
										<li><i class="fa-solid fa-phone"></i>+1 504 368 6874</li>
									</ul>
								</div>
							</div>
							<div class="cancellation-fees">
								<h6>Consultation Fees : $200</h6>
								<div class="cancellation-info">
									<div class="appointment-type">
										<p class="md-text">Type of Appointment</p>
										<p><i class="fa-solid fa-building text-green"></i>Direct Visit</p>
									</div>
									<div class="appointment-type">
										<p class="md-text">Clinic Location</p>
										<p>Adrian’s Dentistry</p>
									</div>
								</div>
							</div>
							<div class="cancel-reason">
								<h5>Reason</h5>
								<p>I have an urgent surgery, while our Appointment so i am rejecting appointment </p>
								<span class="text-danger">Cancelled By You on 23 Mar 2024</span>
							</div>
							<span class="text-blue refund">Status : Refund Accepted</span>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- /Request Cancel Modal-->
@endsection
