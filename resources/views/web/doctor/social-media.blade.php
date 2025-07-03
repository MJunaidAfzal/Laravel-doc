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
		<div class="content doctor">
			<div class="container">

				<div class="row">
					<div class="col-lg-4 col-xl-3 theiaStickySidebar">
						
                            @include('web.partials.doc-sidebar')

						
					</div>
					
					<div class="col-lg-8 col-xl-9">
						<div class="dashboard-header">
							<h3>Social Media</h3>
						</div>
						<div class="add-btn text-end mb-4">
							<a href="#" class="btn btn-primary prime-btn add-social-media">Add New Social Media</a>
						</div>
						<form action="social-media.html" class="social-media-form">
							<div class="social-media-links d-flex align-items-center">
								<div class="input-block input-block-new select-social-link">
									<select class="select">
										<option selected="">Facebook</option>
										<option>Linkedin</option>
										<option>Twitter</option>
										<option>Instagram</option>
									</select>
								</div>	
								<div class="input-block input-block-new flex-fill">
									<input type="password" class="form-control" placeholder="Add Url">									
								</div>
							</div>
							<div class="social-media-links d-flex align-items-center">
								<div class="input-block input-block-new select-social-link">
									<select class="select">
										<option>Facebook</option>
										<option>Linkedin</option>
										<option selected="">Twitter</option>
										<option>Instagram</option>
									</select>
								</div>	
								<div class="input-block input-block-new flex-fill">
									<input type="password" class="form-control" placeholder="Add Url">									
								</div>
							</div>
							<div class="social-media-links d-flex align-items-center">
								<div class="input-block input-block-new select-social-link">
									<select class="select">
										<option>Facebook</option>
										<option selected="">Linkedin</option>
										<option>Twitter</option>
										<option>Instagram</option>
									</select>
								</div>	
								<div class="input-block input-block-new flex-fill">
									<input type="password" class="form-control" placeholder="Add Url">									
								</div>
							</div>
							<div class="social-media-links d-flex align-items-center">
								<div class="input-block input-block-new select-social-link">
									<select class="select">
										<option>Facebook</option>
										<option>Linkedin</option>
										<option>Twitter</option>
										<option selected="">Instagram</option>
									</select>
								</div>	
								<div class="input-block input-block-new flex-fill">
									<input type="password" class="form-control" placeholder="Add Url">									
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>

		</div>		
		<!-- /Page Content -->

		   	@push('scripts')
		<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="d0e4584a56f0750f838d2d4d-text/javascript"></script>
        <script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}" type="d0e4584a56f0750f838d2d4d-text/javascript"></script>
        <script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}" type="d0e4584a56f0750f838d2d4d-text/javascript"></script>
@endpush	
@endsection