<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Profile | User Profile</title>

	<!-- Google font -->

	<!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">k
    <link rel="stylesheet" href="{{ asset('style/student/style.css')}}">
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/style.css') }}" />


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div class="banner-area banner-3">
        <div class="overlay dark-overlay"></div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
						@yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
@include('sweetalert::alert')
</html>