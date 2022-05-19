<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/bonganet_icon.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Bonganet Solutions</title>
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- ================== added additive==================== -->

	<!-- Vendor CSS Files -->
	<link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="css/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="css/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="css/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="css/vendor/aos/aos.css" rel="stylesheet">

	<!-- Template header and carousel CSS File -->
	<link href="css/style.css" rel="stylesheet">

	<style>
		

		.category {
			text-transform: capitalize;
			/* font-weight: 700; */
			color: #9A9A9A;
		}

		body {
			/* color: #2c2c2c;
			font-size: 14px; */

			overflow-x: hidden;
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
		}

		.nav-item .nav-link,
		.nav-tabs .nav-link {
			-webkit-transition: all 300ms ease 0s;
			-moz-transition: all 300ms ease 0s;
			-o-transition: all 300ms ease 0s;
			-ms-transition: all 300ms ease 0s;
			transition: all 300ms ease 0s;
		}

		.card a {
			-webkit-transition: all 150ms ease 0s;
			-moz-transition: all 150ms ease 0s;
			-o-transition: all 150ms ease 0s;
			-ms-transition: all 150ms ease 0s;
			transition: all 150ms ease 0s;
		}

		[data-toggle="collapse"][data-parent="#accordion"] i {
			-webkit-transition: transform 150ms ease 0s;
			-moz-transition: transform 150ms ease 0s;
			-o-transition: transform 150ms ease 0s;
			-ms-transition: all 150ms ease 0s;
			transition: transform 150ms ease 0s;
		}

		[data-toggle="collapse"][data-parent="#accordion"][aria-expanded="true"] i {
			filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
			-webkit-transform: rotate(180deg);
			-ms-transform: rotate(180deg);
			transform: rotate(180deg);
		}


		/* .fa {
			display: inline-block;
			font: normal normal normal 14px/1 'Nucleo Outline';
			font-size: inherit;
			speak: none;
			text-transform: none;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		} */

		@-webkit-keyframes fa {
			0% {
				-webkit-transform: rotate(0deg);
			}

			100% {
				-webkit-transform: rotate(360deg);
			}
		}

		@-moz-keyframes fa {
			0% {
				-moz-transform: rotate(0deg);
			}

			100% {
				-moz-transform: rotate(360deg);
			}
		}

		@keyframes fa {
			0% {
				-webkit-transform: rotate(0deg);
				-moz-transform: rotate(0deg);
				-ms-transform: rotate(0deg);
				-o-transform: rotate(0deg);
				transform: rotate(0deg);
			}

			100% {
				-webkit-transform: rotate(360deg);
				-moz-transform: rotate(360deg);
				-ms-transform: rotate(360deg);
				-o-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}



		.nav-tabs {
			border: 0;
			padding: 15px 0.7rem;
		}

		/* .nav-tabs:not(.nav-tabs-neutral)>.nav-item>.nav-link.active {
			box-shadow: 0px 5px 35px 0px rgba(0, 0, 0, 0.3); 
		} */

		.card .nav-tabs {
			border-top-right-radius: 0.1875rem;
			border-top-left-radius: 0.1875rem;
		}

		.nav-tabs>.nav-item>.nav-link {
			/* color: #77b14a; */
			color: #000;
			margin: 0;
			margin-right: 5px;
			/* background-color: #FFFFFF; */
			background-color: #fff;
			border: 1px solid #000;
			border-radius: 15px;
			font-size: 20px;
			padding: 5px 30px;
			line-height: 1.5;
			transition: transform .2s;
			/* Animation */
		}

		.nav-tabs>.nav-item>.nav-link:hover {
			background-color: #FFFFFF;
			border: 1px solid #000;
			color: #000;
			transform: scale(1.05);
		}
		

		.nav-tabs>.nav-item>.nav-link.active {
			background-color: #000;
			border-radius: 15px;
			color: #FFFFFF;
		}

		.nav-tabs>.nav-item>.nav-link i.fa {
			font-size: 28px;
			position: relative;
			top: 1px;
			margin-right: 3px;



		}


		.nav-tabs.nav-tabs-neutral>.nav-item>.nav-link {
			color: #FFFFFF;
		}

		.nav-tabs.nav-tabs-neutral>.nav-item>.nav-link.active {
			background-color: rgba(255, 255, 255, 0.2);
			color: #FFFFFF;
		}

		.card {
			border: 0;
			border-radius: 0.1875rem;
			display: inline-block;
			position: relative;
			width: 100%;
			margin-bottom: 30px;
			/* box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2); */
		}

		.card .card-header {
			background-color: transparent;
			border-bottom: 0;
			background-color: transparent;
			border-radius: 0;
			padding: 0;
		}

		/* .fa {
			color: #77b14a;
		}

		.fa:active {
			color: #FFF;
		} */




		@media screen and (max-width: 768px) {

			.nav-tabs {
				display: inline-block;
				width: 100%;
				padding-left: 100px;
				padding-right: 100px;
				text-align: center;
			}

			.nav-tabs .nav-item>.nav-link {
				margin-bottom: 5px;
			}

		}

		.bronze {
			background-color: #af8c7d;
		}

		.diamond {
			background-color: #b8d8e7;
		}

		.silver {
			background-color: #8f8f8f;
		}

		.gold {
			background-color: #e5bf4f;
		}
	</style>

<body>

	<!-- header	 -->
	<?php include('views/headers.php'); ?>
	<!-- #header -->
	<!-- header	 -->
	<!-- < ?php include('views/breadcrumb.php'); ?> -->
	<!-- #header -->


	<div class="container  section-gap">

		<div class="row">
			<div class="col-md-6 ml-auto col-xl-12 mr-auto text-center ">
				<p class="category">
				<h2 class="text-main fw-500">Our Internet Pricing</h2>
				</p>
				<!-- Nav tabs -->
				<div class="card" style="width: 100%;">
					<div class="card-header">
						<ul class="nav nav-tabs justify-content-center" role="tablist">
							<li class="nav-item mr-3">
								<a class="nav-link active" data-toggle="tab" href="#home" role="tab">
									<i class="fa fa-home  fa-1x"></i> Home Package
								</a>
							</li>
							<li class="nav-item ml-3">
								<a class="nav-link" data-toggle="tab" href="#profile" role="tab">
									<i class=" fa fa-globe fa-1x""></i> Business Package
								</a>
							</li>
							
						</ul>
					</div>
					<div class=" card-body">
										<!-- Tab panes -->
										<div class="tab-content text-center">
											<div class="tab-pane active" id="home" role="tabpanel">
												<?php include("views/home-pricing.php"); ?>
											</div>
											<div class="tab-pane" id="profile" role="tabpanel">

												<?php include("views/business-pricing.php"); ?>
											</div>

										</div>
					</div>
				</div>
			</div>
		</div>
	</div>







	<!-- Start home-about Area -->
	<!-- < ?php include('views/about_sect.php'); ?> -->
	<!-- End home-about Area -->

	<!-- Start service Area -->
	<!-- < ?php include('views/services.php'); ?> -->
	<!-- End service Area -->

	<!-- < ?php include('views/services.php'); ?> -->

	<!-- Start review Area -->

	<!-- End review Area -->

	<!-- Start faq Area -->
	<!-- < ?php include('views/faq.php'); ?> -->
	<!-- End faq Area -->
	<!-- start footer Area -->
	<?php require_once('views/footer.php'); ?>
	<!-- End footer Area -->

	<!-- botton top arrow -->
	<?php include('views/back-to-top.php'); ?>
	<!-- botton top arrow -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>

	<!-- Vendor JS Files -->
	<script src="css/vendor/jquery/jquery.min.js"></script>
	<script src="css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="css/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="css/vendor/php-email-form/validate.js"></script>
	<script src="css/vendor/jquery-sticky/jquery.sticky.js"></script>
	<script src="css/vendor/venobox/venobox.min.js"></script>
	<script src="css/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="css/vendor/counterup/counterup.min.js"></script>
	<script src="css/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="css/vendor/aos/aos.js"></script>

	<!-- Template Main JS File -->
	<script src="css/js/main.js"></script>
</body>

</html>