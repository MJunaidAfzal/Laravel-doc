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

						<!-- Invoices -->
						<div class="col-lg-8 col-xl-9">

							<div class="dashboard-header">
								<h3>Invoices</h3>
							</div>

							<div class="search-header">
									<div class="search-field">
										<input type="text" class="form-control" placeholder="Search">
										<span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
									</div>
								</div>

								<div class="custom-table">
									<div class="table-responsive">
										<table class="table table-center mb-0">
											<thead>
												<tr>
													<th>ID</th>
													<th>Patient</th>
													<th>Appointment Date</th>
													<th>Booked on</th>
													<th>Amount</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="javascript:void(0);" class="text-blue-600" data-bs-toggle="modal" data-bs-target="#invoice_view">#Inv-2021</a></td>
													<td>
														<h2 class="table-avatar">
															<a href="doctor-profile.html.htm" class="avatar avatar-sm me-2">
																<img class="avatar-img rounded-3" src="{{asset('assets/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image">
															</a>
															<a href="doctor-profile.html.htm">Edalin Hendry</a>
														</h2>
													</td>
													<td>24 Mar 2024</td>
													<td>21 Mar 2024</td>
													<td>$300</td>
													<td>
														<div class="action-item">
															<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#invoice_view">
																<i class="isax isax-link-2"></i>
															</a>
															<a href="javascript:void(0);">
																<i class="isax isax-printer5"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="javascript:void(0);" class="text-blue-600" data-bs-toggle="modal" data-bs-target="#invoice_view">#Inv-2021</a></td>
													<td>
														<h2 class="table-avatar">
															<a href="doctor-profile.html.htm" class="avatar avatar-sm me-2">
																<img class="avatar-img rounded-3" src="{{asset('assets/img/doctors/doctor-thumb-05.jpg')}}" alt="User Image">
															</a>
															<a href="doctor-profile.html.htm">John Homes</a>
														</h2>
													</td>
													<td>17 Mar 2024</td>
													<td>14 Mar 2024</td>
													<td>$450</td>
													<td>
														<div class="action-item">
															<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#invoice_view">
																<i class="isax isax-link-2"></i>
															</a>
															<a href="javascript:void(0);">
																<i class="isax isax-printer5"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="javascript:void(0);" class="text-blue-600" data-bs-toggle="modal" data-bs-target="#invoice_view">#Inv-2021</a></td>
													<td>
														<h2 class="table-avatar">
															<a href="doctor-profile.html.htm" class="avatar avatar-sm me-2">
																<img class="avatar-img rounded-3" src="{{asset('assets/img/doctors/doctor-thumb-03.jpg')}}" alt="User Image">
															</a>
															<a href="doctor-profile.html.htm">Shanta Neill</a>
														</h2>
													</td>
													<td>11 Mar 2024</td>
													<td>07 Mar 2024</td>
													<td>$250</td>
													<td>
														<div class="action-item">
															<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#invoice_view">
																<i class="isax isax-link-2"></i>
															</a>
															<a href="javascript:void(0);">
																<i class="isax isax-printer5"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="javascript:void(0);" class="text-blue-600" data-bs-toggle="modal" data-bs-target="#invoice_view">#Inv-2021</a></td>
													<td>
														<h2 class="table-avatar">
															<a href="doctor-profile.html.htm" class="avatar avatar-sm me-2">
																<img class="avatar-img rounded-3" src="{{asset('assets/img/doctors/doctor-thumb-08.jpg')}}" alt="User Image">
															</a>
															<a href="doctor-profile.html.htm">Anthony Tran</a>
														</h2>
													</td>
													<td>26 Feb 2024</td>
													<td>23 Feb 2024</td>
													<td>$320</td>
													<td>
														<div class="action-item">
															<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#invoice_view">
																<i class="isax isax-link-2"></i>
															</a>
															<a href="javascript:void(0);">
																<i class="isax isax-printer5"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="javascript:void(0);" class="text-blue-600" data-bs-toggle="modal" data-bs-target="#invoice_view">#Inv-2021</a></td>
													<td>
														<h2 class="table-avatar">
															<a href="doctor-profile.html.htm" class="avatar avatar-sm me-2">
																<img class="avatar-img rounded-3" src="{{asset('assets/img/doctors/doctor-thumb-01.jpg')}}" alt="User Image">
															</a>
															<a href="doctor-profile.html.htm">Susan Lingo</a>
														</h2>
													</td>
													<td>18 Feb 2024</td>
													<td>15 Feb 2024</td>
													<td>$480</td>
													<td>
														<div class="action-item">
															<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#invoice_view">
																<i class="isax isax-link-2"></i>
															</a>
															<a href="javascript:void(0);">
																<i class="isax isax-printer5"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="javascript:void(0);" class="text-blue-600" data-bs-toggle="modal" data-bs-target="#invoice_view">#IApt123</a></td>
													<td>
														<h2 class="table-avatar">
															<a href="doctor-profile.html.htm" class="avatar avatar-sm me-2">
																<img class="avatar-img rounded-3" src="{{asset('assets/img/doctors/doctor-thumb-09.jpg')}}" alt="User Image">
															</a>
															<a href="doctor-profile.html.htm">Joseph Boyd</a>
														</h2>
													</td>
													<td>10 Feb 2024</td>
													<td>07 Feb 2024</td>
													<td>$260</td>
													<td>
														<div class="action-item">
															<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#invoice_view">
																<i class="isax isax-link-2"></i>
															</a>
															<a href="javascript:void(0);">
																<i class="isax isax-printer5"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="javascript:void(0);" class="text-blue-600" data-bs-toggle="modal" data-bs-target="#invoice_view">#Inv-2021</a></td>
													<td>
														<h2 class="table-avatar">
															<a href="doctor-profile.html.htm" class="avatar avatar-sm me-2">
																<img class="avatar-img rounded-3" src="{{asset('assets/img/doctors/doctor-thumb-07.jpg')}}" alt="User Image">
															</a>
															<a href="doctor-profile.html.htm">Juliet Gabriel</a>
														</h2>
													</td>
													<td>28 Jan 2024</td>
													<td>25 Jan 2024</td>
													<td>$350</td>
													<td>
														<div class="action-item">
															<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#invoice_view">
																<i class="isax isax-link-2"></i>
															</a>
															<a href="javascript:void(0);">
																<i class="isax isax-printer5"></i>
															</a>
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
						<!-- /Invoices -->

					</div>
				</div>
			</div>		
			<!-- /Page Content -->


		<!--View Invoice -->
		<div class="modal fade custom-modals" id="invoice_view">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">View Invoice</h3>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="fa-solid fa-xmark"></i>
						</button>
					</div>				
					<div class="modal-body pb-0">
						<div class="prescribe-download">
							<h5>21 Mar  2024</h5>
							<ul>
								<li><a href="javascript:void(0);" class="print-link"><i class="isax isax-printer5"></i></a></li>
								<li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
							</ul>							
						</div>
						<div class="view-prescribe invoice-content">
							<div class="invoice-item">
								<div class="row">
									<div class="col-md-6">
										<div class="invoice-logo">
											<img src="{{asset('assets/img/logo.png')}}" alt="logo">
										</div>
									</div>
									<div class="col-md-6">
										<p class="invoice-details">
											<strong>Invoice No : </strong> #INV005<br>
											<strong>Issued:</strong> 21 Mar 2024
										</p>
									</div>
								</div>
							</div>
							
							<!-- Invoice Item -->
							<div class="invoice-item">
								<div class="row">
									<div class="col-md-4">
										<div class="invoice-info">
											<h6 class="customer-text">Billing From</h6>
											<p class="invoice-details invoice-details-two">
												Edalin Hendry <br>
												806 Twin Willow Lane, <br>
												Newyork, USA <br>
											</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="invoice-info">
											<h6 class="customer-text">Billing To</h6>
											<p class="invoice-details invoice-details-two">
												Richard Wilson <br>
												299 Star Trek Drive<br>
												Florida, 32405, USA<br>
											</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="invoice-info invoice-info2">
											<h6 class="customer-text">Payment Method</h6>
											<p class="invoice-details">
												Debit Card <br>
												XXXXXXXXXXXX-2541<br>
												HDFC Bank<br>
											</p>
										</div>
									</div>
								</div>
							</div>
							<!-- /Invoice Item -->
							
							<!-- Invoice Item -->
							<div class="invoice-item invoice-table-wrap">
								<div class="row">
									<div class="col-md-12">
										<h6>Invoice Details</h6>
										<div class="table-responsive">
											<table class="invoice-table table table-bordered">
												<thead>
													<tr>
														<th>Description</th>
														<th>Quatity</th>
														<th>VAT</th>
														<th>Total</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>General Consultation</td>
														<td>1</td>
														<td>$0</td>
														<td>$150</td>
													</tr>
													<tr>
														<td>Video Call</td>
														<td>1</td>
														<td>$0</td>
														<td>$100</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="col-md-6 col-xl-4 ms-auto">
										<div class="table-responsive">
											<table class="invoice-table-two table">
												<tbody>
												<tr>
													<th>Subtotal:</th>
													<td><span>$350</span></td>
												</tr>
												<tr>
													<th>Discount:</th>
													<td><span>-10%</span></td>
												</tr>
												<tr>
													<th>Total Amount:</th>
													<td><span>$315</span></td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<!-- /Invoice Item -->
							
							<!-- Invoice Information -->
							<div class="other-info mb-0">
								<h4>Other information</h4>
								<p class="mb-0">An account of the present illness, which includes the circumstances surrounding the onset of recent health changes and the chronology of subsequent events that have led the patient to seek medicine</p>
							</div>
							<!-- /Invoice Information -->
							
						</div>	
					</div>
				</div>
			</div>
		</div>
		<!-- /View Invoice -->
@endsection