<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Situs Resmi JDIH Kota Kendari</title>

	<!-- Google font | Open Sans -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
		rel="stylesheet">

	<!-- Chart.js -->
	<script src="{{ asset('assets/frontend/js/chart.js') }}"></script>

	<!-- Aos js -->
	<link href="{{ asset('assets/frontend/css/aos.css') }}" rel="stylesheet">

	<!-- Fontawesome -->
	<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
		crossorigin="anonymous" />


	@vite('resources/css/app.css')
</head>

<body class="font-opensans antialiased overflow-x-hidden">
	@include('frontend.partials.header')

	{{ $slot }}

	@include('frontend.partials.footer')


	<!-- Aos js -->
	<script src="{{ asset('assets/frontend/js/aos.js') }}"></script>

	<script>
		AOS.init({
			startEvent: 'load', // ⬅️ WAJIB
			once: true,
			offset: 120,
			delay: 0,
			duration: 700,
			easing: 'ease-out-cubic',
		});
	</script>

</body>

</html>
