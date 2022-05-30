<!DOCTYPE html>
<html lang="en">

<head>
	<title>Cozastore</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="FE/images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="FE/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="FE/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="FE/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="FE/fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="FE/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="FE/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="FE/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="FE/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="FE/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="FE/vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="FE/vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="FE/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="FE/css/util.css">
	<link rel="stylesheet" type="text/css" href="FE/css/main.css">
	<link rel="stylesheet" type="text/css" href="FE/css/style.css">
	<!--===============================================================================================-->
	
</head>

<body >
	<div class="animsition" ng-app="myApp" ng-controller="myController">
		@include('home.partial.header')
		@yield('content')
		@include('home.partial.footer')
	</div>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!--===============================================================================================-->
	<script src="FE/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="FE/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="FE/vendor/bootstrap/js/popper.js"></script>
	<script src="FE/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
	<script src="FE/vendor/select2/select2.min.js"></script>

	<!--===============================================================================================-->
	<script src="FE/vendor/daterangepicker/moment.min.js"></script>
	<script src="FE/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="FE/vendor/slick/slick.min.js"></script>
	<script src="FE/js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script src="FE/vendor/parallax100/parallax100.js"></script>

	<!--===============================================================================================-->
	<script src="FE/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>

	<!--===============================================================================================-->
	<script src="FE/vendor/isotope/isotope.pkgd.min.js"></script>
	<!--===============================================================================================-->
	<script src="FE/vendor/sweetalert/sweetalert.min.js"></script>

	<!--===============================================================================================-->
	<script src="FE/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>

	<!--===============================================================================================-->
	<script src="/angular.min.js"></script>
	<script src="/admin/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="/admin/js/scripts.js"></script>
	<script src="FE/js/main.js"></script>
    @yield('scripts')
</body>

</html>