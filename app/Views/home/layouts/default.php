<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha - Slider Version</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?= base_url() ?>/assets/fruitkha/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/fruitkha/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/fruitkha/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/fruitkha/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/fruitkha/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/fruitkha/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/fruitkha/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/fruitkha/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/fruitkha/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
        <?= $this->include('home/layouts/header') ?>
	</div>
	<!-- end header -->

	<!-- content-->
    <?= $this->renderSection('content') ?>
	<!-- end content-->

	<!-- footer -->
	<div class="footer-area">
        <?= $this->include('home/layouts/footer') ?>
	</div>
	<!-- end footer -->
	
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	
	<!-- jquery -->
	<script src="<?= base_url() ?>/assets/fruitkha/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="<?= base_url() ?>/assets/fruitkha/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="<?= base_url() ?>/assets/fruitkha/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="<?= base_url() ?>/assets/fruitkha/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="<?= base_url() ?>/assets/fruitkha/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="<?= base_url() ?>/assets/fruitkha/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="<?= base_url() ?>/assets/fruitkha/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="<?= base_url() ?>/assets/fruitkha/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="<?= base_url() ?>/assets/fruitkha/js/sticker.js"></script>
	<!-- main js -->
	<script src="<?= base_url() ?>/assets/fruitkha/js/main.js"></script>

</body>
</html>