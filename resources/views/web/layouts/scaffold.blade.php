<!DOCTYPE html>
<html lang="en">
<head>
 	    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
		<meta name="keywords" content="practo clone, doccure, doctor appointment, Practo clone html template, doctor booking template">
		<meta name="author" content="Practo Clone HTML Template - Doctor Booking Template">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Doctors Appointment HTML Website Templates | Doccure">
		<meta property="og:description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
		<meta property="og:image" content="{{ asset('assets/img/preview-banner.jpg')}}">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Doctors Appointment HTML Website Templates | Doccure">
		<meta name="twitter:description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
		<meta name="twitter:image" content="{{ asset('assets/img/preview-banner.jpg')}}">
	    <title>Doccure | {{ $title }}</title>
         <!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('assets/img/favicon.png')}}" type="image/x-icon">
		<!-- Apple Touch Icon -->
		<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png')}}">

        @include('web.partials.style')
        @stack('styles')
</head>
<body>

	<div class="main-wrapper">
        @include('web.partials.header')

        @yield('content')

        @include('web.partials.footer')
    </div>


      @include('web.partials.script')
      @stack('scripts')
</body>
</html>
