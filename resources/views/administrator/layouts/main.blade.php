<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>@yield('title')</title>

	{{-- feather icon --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js">

	{{-- bootstrap icons --}}
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	{{-- jquery --}}
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		
        @include('administrator.layouts.sidebar')

		<div class="main">
			@include('administrator.layouts.topbar')

			<main class="content">
				<div class="container p-0">

					<h1 class="h3 mb-3">@yield('title-page')</h1>

					<div class="row">
						<div class="col-12">
							<div class="card rounded shadow">
									@yield('container')
							</div>
						</div>
					</div>

				</div>
			</main>

			@include('administrator.layouts.footer')
		</div>
	</div>
	

	<script src="{{ asset('js/app.js') }}"></script>
	<script>
		 feather.replace();
	</script>

</body>

</html>