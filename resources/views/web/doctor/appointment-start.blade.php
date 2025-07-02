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
												<a href="patient-profile.html.htm">
													<img src="{{asset('assets/img/doctors-dashboard/profile-02.jpg')}}" alt="User Image">
												</a>
												<div class="patient-info">
													<p>#Apt0001</p>
													<h6><a href="patient-profile.html.htm">Kelly Joseph </a></h6>
													<div class="mail-info-patient">
														<ul>
															<li><i class="fa-solid fa-envelope"></i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="48232d242431082d30292538242d662b2725">[email&#160;protected]</a></li>
															<li><i class="fa-solid fa-phone"></i>+1 504 368 6874</li>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li class="appointment-info">
											<div class="person-info">
												<p>Person with patient</p>
												<ul class="d-flex apponitment-types">
													<li>Andrew (45)</li>
												</ul>
											</div>
											<div class="person-info">
												<p>Type of Appointment</p>
												<ul class="d-flex apponitment-types">
													<li><i class="fa-solid fa-hospital text-green"></i>Direct Visit</li>
												</ul>
											</div>
										</li>
										<li class="appointment-action">
											<div class="detail-badge-info">
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
												<a href="#" class="btn btn-secondary">Inprogress</a>
											</div>
										</li>
									</ul>
								</div>
								<!-- /Appointment Detail Card -->

								<div class="create-appointment-details">
									<div class="session-end-head">
										<h6><span>Session Ends in</span>08M:00S</h6>
									</div>
									<h5 class="head-text">Create Appointment Details</h5>
									<div class="create-details-card">
										<div class="create-details-card-head">
											<div class="card-title-text">
												<h5>Patient Information</h5>
											</div>
											<div class="patient-info-box">
												<div class="row">
													<div class="col-xl-3 col-md-6">
														<ul class="info-list">
															<li>Age / Gender</li>
															<li><h6>28 Years / Female</h6></li>
														</ul>
													</div>
													<div class="col-xl-3 col-md-6">
														<ul class="info-list">
															<li>Address</li>
															<li><h6>Newyork, United States</h6></li>
														</ul>
													</div>
													<div class="col-xl-3 col-md-6">
														<ul class="info-list">
															<li>Blood Group</li>
															<li><h6>O+ve</h6></li>
														</ul>
													</div>
													<div class="col-xl-3 col-md-6">
														<ul class="info-list">
															<li>No of Visit</li>
															<li><h6>0</h6></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="create-details-card-body">
											<form action="doctor-appointment-start.html">
												<div class="start-appointment-set">
													<div class="form-bg-title">
														<h5>Vitals</h5>
													</div>
													<div class="row">
														<div class="col-xl-3 col-md-6">
															<div class="input-block input-block-new">
																<label class="form-label">Temprature</label>
																<div class="input-text-field">
																	<input type="text" class="form-control" placeholder="Eg : 97.8">
																	<span class="input-group-text">F</span>
																</div>									
															</div>
														</div>
														<div class="col-xl-3 col-md-6">
															<div class="input-block input-block-new">
																<label class="form-label">Pulse</label>
																<div class="input-text-field">
																	<input type="text" class="form-control" placeholder="454">
																	<span class="input-group-text">mmHg</span>
																</div>									
															</div>
														</div>
														<div class="col-xl-3 col-md-6">
															<div class="input-block input-block-new">
																<label class="form-label">Respiratory Rate</label>
																<div class="input-text-field">
																	<input type="text" class="form-control" placeholder="Eg : 97.8">
																	<span class="input-group-text">rpm</span>
																</div>									
															</div>
														</div>
														<div class="col-xl-3 col-md-6">
															<div class="input-block input-block-new">
																<label class="form-label">SPO2</label>
																<div class="input-text-field">
																	<input type="text" class="form-control" placeholder="Eg : 98">
																	<span class="input-group-text">%</span>
																</div>									
															</div>
														</div>
														<div class="col-xl-3 col-md-6">
															<div class="input-block input-block-new">
																<label class="form-label">Height</label>
																<div class="input-text-field">
																	<input type="text" class="form-control" placeholder="Eg : 97.8">
																	<span class="input-group-text">cm</span>
																</div>									
															</div>
														</div>
														<div class="col-xl-3 col-md-6">
															<div class="input-block input-block-new">
																<label class="form-label">Weight</label>
																<div class="input-text-field">
																	<input type="text" class="form-control" placeholder="Eg : 97.8">
																	<span class="input-group-text">Kg</span>
																</div>									
															</div>
														</div>
														<div class="col-xl-3 col-md-6">
															<div class="input-block input-block-new">
																<label class="form-label">Waist</label>
																<div class="input-text-field">
																	<input type="text" class="form-control" placeholder="Eg : 97.8">
																	<span class="input-group-text">cm</span>
																</div>									
															</div>
														</div>
														<div class="col-xl-3 col-md-6">
															<div class="input-block input-block-new">
																<label class="form-label">BSA</label>
																<div class="input-text-field">
																	<input type="text" class="form-control" placeholder="Eg : 54">
																	<span class="input-group-text">M</span>
																</div>									
															</div>
														</div>
														<div class="col-xl-3 col-md-6">
															<div class="input-block input-block-new">
																<label class="form-label">BMI</label>
																<div class="input-text-field">
																	<input type="text" class="form-control" placeholder="Eg : 454">
																	<span class="input-group-text">kg/cm</span>
																</div>									
															</div>
														</div>
													</div>
												</div>
												<div class="start-appointment-set">
													<div class="form-bg-title">
														<h5>Previous Medical History</h5>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="input-block input-block-new">
																<textarea class="form-control" rows="3"></textarea>
															</div>
														</div>
													</div>
												</div>
												<div class="start-appointment-set">
													<div class="form-bg-title">
														<h5>Clinical Notes</h5>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="input-block input-block-new">
																<textarea class="form-control" rows="3"></textarea>
															</div>												
														</div>
													</div>
												</div>
												<div class="start-appointment-set">
													<div class="form-bg-title">
														<h5>Clinical Notes</h5>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="input-block input-block-new">
																<input class="input-tags form-control" id="inputBox" type="text" data-role="tagsinput" placeholder="Type New" name="Label" value="Skin Allergy">
																<a href="#" class="input-text save-btn">Save</a>
															</div>												
														</div>
													</div>
												</div>
												<div class="start-appointment-set">
													<div class="form-bg-title">
														<h5>Laboratory Tests</h5>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="input-block input-block-new">
																<input class="input-tags form-control" id="inputBox2" type="text" data-role="tagsinput" placeholder="Type New" name="Label" value="Hemoglobin A1c (HbA1c),Liver Function Tests (LFTs)">
																<a href="#" class="input-text save-btn">Save</a>
															</div>												
														</div>
													</div>
												</div>
												<div class="start-appointment-set">
													<div class="form-bg-title">
														<h5>Complaints</h5>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="input-block input-block-new">
																<input class="input-tags form-control" id="inputBox3" type="text" data-role="tagsinput" placeholder="Type New" name="Label" value="Fever,Headache,Stomach Pain">
																<a href="#" class="input-text save-btn">Save</a>
															</div>												
														</div>
													</div>
												</div>
												<div class="start-appointment-set">
													<div class="form-bg-title">
														<h5>Diagonosis</h5>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="input-block input-block-new">
																<div class="input-field-set">
																	<label class="form-label">Fever</label>
																	<input type="text" class="form-control" placeholder="Diagnosis">
																</div>										
															</div>										
														</div>
														<div class="col-md-12">
															<div class="input-block input-block-new">
																<div class="input-field-set">
																	<label class="form-label">Headache</label>
																	<input type="text" class="form-control" placeholder="Diagnosis">
																</div>										
															</div>										
														</div>
														<div class="col-md-12">
															<div class="input-block input-block-new">
																<div class="input-field-set">
																	<label class="form-label">Stomach Pain</label>
																	<input type="text" class="form-control" placeholder="Diagnosis">
																</div>										
															</div>										
														</div>
													</div>
												</div>
												<div class="start-appointment-set">
													<div class="form-bg-title">
														<h5>Medications</h5>
													</div>
													<div class="row meditation-row">
														<div class="col-md-12">
															<div class="d-flex flex-wrap medication-wrap align-items-center">
																<div class="input-block input-block-new">
																	<label class="form-label">Name</label>
																	<input type="text" class="form-control">
																</div>	
																<div class="input-block input-block-new">
																	<label class="form-label">Type</label>
																	<select class="select form-control">
																		<option>Select</option>
																		<option>Direct Visit</option>
																		<option>Video Call</option>
																	</select>
																</div>	
																<div class="input-block input-block-new">
																	<label class="form-label">Dosage</label>
																	<input type="text" class="form-control">
																</div>	
																<div class="input-block input-block-new">
																	<label class="form-label">Duration</label>
																	<input type="text" class="form-control" placeholder="1-0-0">
																</div>	
																<div class="input-block input-block-new">
																	<label class="form-label">Duration</label>
																	<select class="select form-control">
																		<option>Select</option>
																		<option>Not Available</option>
																	</select>
																</div>	
																<div class="input-block input-block-new">
																	<label class="form-label">Instruction</label>
																	<input type="text" class="form-control">
																</div>	
																<div class="delete-row">
																	<a href="#" class="delete-btn delete-medication trash text-danger"><i class="fa-solid fa-trash-can"></i></a>
																</div>
															</div>
															<div class="add-new-med text-end mb-4">
																<a href="#" class="add-medical more-item mb-0">Add New</a>
															</div>											
														</div>
													</div>
												</div>
												<div class="start-appointment-set">
													<div class="form-bg-title">
														<h5>Advice</h5>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="input-block input-block-new">
																<textarea class="form-control" rows="3"></textarea>
															</div>
														</div>
													</div>
												</div>
												<div class="start-appointment-set">
													<div class="form-bg-title">
														<h5>Follow Up</h5>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="input-block input-block-new">
																<textarea class="form-control" rows="3"></textarea>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-set-button">
														<button class="btn btn-light" type="button">Cancel</button>
														<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#end_session">Save & End Appointment</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->

		   
		</div>
		<!-- /Main Wrapper -->
		
		<!-- Appointment End Modal -->
		<div class="modal fade info-modal" id="end_session">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="success-wrap">
							<div class="success-info">
								<div class="text-center">
									<span class="icon-success bg-blue"><i class="fa-solid fa-calendar-check"></i></span>
									<h3>Session Ended</h3>
									<p>Your Appointment has been Ended</p>
								</div>
							</div>
						</div>

						<div class="modal-btn text-center">
							<a href="#" class="btn btn-gray" data-bs-toggle="modal" data-bs-dismiss="modal">Go to  Appointments</a>
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_prescription" class="btn btn-primary prime-btn">View Details</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Appointment End Modal -->

		<!--View Prescription -->
		<div class="modal fade custom-modals" id="view_prescription">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">View Details</h3>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="fa-solid fa-xmark"></i>
						</button>
					</div>				
					<div class="modal-body pb-0">
						<div class="prescribe-download">
							<h5>21 Mar  2024</h5>
							<ul>
								<li><a href="javascript:void(0);" class="print-link"><i class="fa-solid fa-print"></i></a></li>
								<li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
							</ul>							
						</div>
						<div class="view-prescribe-details">
							<div class="hospital-addr">
								<div class="invoice-logo">
									<img src="{{asset('assets/img/logo.png')}}" alt="logo">
								</div>
								<h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
								<p>Monday to Sunday - 09:30am  to 12:00pm</p>
							</div>
							
							<!-- Invoice Item -->
							<div class="invoice-item">
								<div class="row">
									<div class="col-md-6">
										<div class="invoice-info">
											<h6 class="customer-text">Dr Edalin Hendry</h6>
											<p>BDS, MDS - Oral & Maxillofacial Surgery</p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="invoice-info2">
											<p><span>Date : </span>25 Jan 2024, 07:00</p>
											<p><span>Appointment Type :  </span>Video</p>
										</div>
									</div>
									<div class="col-md-12">
										<div class="patient-id">
											<h6>Patient Details</h6>
											<div class="patient-det">
												<h6>Kelly Joseph</h6>
												<ul>
													<li>28Y /  Male</li>
													<li>Blood : O+ve</li>
													<li>Patient / Consult ID : OP1245654 / C243546566 </li>
													<li>Type : Outpatient</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Invoice Item -->

							<div class="appointment-notes">
								<h3>Appointment Note</h3>								
							</div>
							<div class="appoint-wrap">
								<h5>Vitals</h5>
								<ul>
									<li><span>Pulse : </span> 64 Bpm</li>
									<li><span>Systolic BP : </span>100mmHg</li>
									<li><span>Diastolic : </span>60mmHg</li>
									<li><span>Spo2 : </span>100%</li>
									<li><span>BSA : </span>1.68</li>
										<li><span>Height :  </span>159 cm</li>
									<li><span>Weight : </span>64 Kg</li>
									<li><span>Patient Direct from : </span>Walk in / OPD</li>
									<li><span>Body Mass Index : </span>25.16 BMI</li>
									<li><span>Allergies : </span>Pain near left chest, Pelvic salinity</li>
								</ul>
							</div>
							<div class="appoint-wrap">
								<h5>Previous Medical History</h5>
								<p>The patient  has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled on metformin. Additionally, the patient underwent appendectomy in 2020 without postoperative complications.</p>
							</div>
							<div class="appoint-wrap">
								<h5>Clinical Notes</h5>
								<p>The patient presents with a 3-day history of worsening cough and fever, peaking at 38.5°C, noted for decreased appetite. Physical examination reveals bilateral wheezing and crackles on lung auscultation, suggestive of a respiratory infection.</p>
							</div>
							<div class="appoint-wrap">
								<h5>Complaint</h5>
								<p>An account of the present illness, which includes the circumstances surrounding the onset of recent health changes and the chronology of subsequent events that have led the patient to seek medi</p>
							</div>
							<div class="appoint-wrap">
								<h5>Medications</h5>
								<p>The patient  has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled on metformin. Additionally, the patient underwent appendectomy in 2020 without postoperative complications.</p>
							</div>
							<div class="appoint-wrap">
								<h5>Advice</h5>
								<p>An account of the present illness, which includes the circumstances surrounding the onset of recent health changes and the chronology of subsequent events that have led the patient to seek medicine</p>
							</div>
							<div class="appoint-wrap">
								<h5>Lab Tests</h5>
								<p class="mb-0">1. Liver Function Tests (LFTs)</p>
								<p>2. Hemoglobin A1c (HbA1c)</p>
							</div>
							<div class="appoint-wrap">
								<h5>Follow Up</h5>
								<p class="mb-0">After 3 Months in empty Stomach</p>
								<p>Lab test for Glucose Level</p>
							</div>

							
							<!-- Invoice Item -->
							<div class="invoice-item invoice-table-wrap">
								<div class="row">
									<div class="col-md-12">
										<div class="table-responsive inv-table">
											<table class="invoice-table table table-bordered">
												<thead>
													<tr>
														<th>SNO</th>
														<th>Medecine Name</th>
														<th>Dosage</th>
														<th>Frequency</th>
														<th>Duration</th>
														<th>Timings</th>
														<th>Instruction</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Ecosprin 75MG [Asprin 75 MG Oral Tab]</td>
														<td>75 mg <span>Oral Tab</span></td>
														<td>1-0-0-1</td>
														<td>1 month</td>
														<td>Before Meal</td>
														<td>Take in alternate das, with hot water</td>
													</tr>
													<tr>
														<td>2</td>
														<td>Alexer 90MG Tab</td>
														<td>90 mg <span>Oral Tab</span></td>
														<td>1-0-0-1</td>
														<td>1 month</td>
														<td>Before Meal</td>
														<td>Take in alternate das, with hot water</td>
													</tr>
													<tr>
														<td>3</td>
														<td>Ramistar XL2.5</td>
														<td>60 mg <span>Oral Tab</span></td>
														<td>1-0-0-0</td>
														<td>1 month</td>
														<td>After Meal</td>
														<td>Take in alternate das, with hot water</td>
													</tr>
													<tr>
														<td>4</td>
														<td>Metscore</td>
														<td>90 mg <span>Oral Tab</span></td>
														<td>1-0-0-1</td>
														<td>1 month</td>
														<td>After Meal</td>
														<td>Take in alternate das, with hot water</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<!-- /Invoice Item -->

							<div class="row align-items-center">
								<div class="col-md-6">
									<div class="scan-wrap">
										<h6>Scan to download report</h6>
										<img src="{{asset('assets/img/scan.png')}}" alt="scan">
									</div>
								</div>
								<div class="col-md-6">
									<div class="prescriber-info">
										<h6>Dr. Edalin Hendry</h6>
										<p>Dept of Cardiology</p>
									</div>
								</div>
							</div>

							<ul class="nav inv-paginate justify-content-center">
								<li>Page 01 of 02</li>
							</ul>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<!-- /View Prescription -->
@endsection