<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/app.css">

<title>@yield('title')</title>
</head>
<body>
	@include('includes.header')

	@if(Request::is('/'))
		<!-- <h1 style="padding-top: 100px;">Ты пидор</h1> -->
	@endif

	<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-8">
				@yield('content')
			</div>

			<div class="col-4">
				@include('includes.aside')
				</div>
			</div>
		</div>
	</div>
</body>
</html>