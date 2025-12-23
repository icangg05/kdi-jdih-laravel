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
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	@vite('resources/css/app.css')
</head>

<body class="font-opensans antialiased">
	@include('frontend.partials.header')

	{{ $slot }}


	<!-- SCRIPT -->
	<script>
		document.getElementById('mobileBtn').addEventListener('click', () => {
			document.getElementById('mobileMenu').classList.toggle('hidden')
		})
	</script>


</body>

</html>
