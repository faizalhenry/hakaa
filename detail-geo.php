<?php 
include './login/config.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title> HAKAASTON </title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<meta name="keywords" content="Shipping Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script> 
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Rubik:400,500,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

</head>

<body>
	<!-- header -->
	<section class="w3layouts-header py-2">
		<div class="container">
			<!-- header -->
			<header>
				<nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">

					<h1>
						<a class="navbar-brand" href="index.html">
							<img src="images\hka.jpg">
						</a>
					</h1>
					<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>


				<ul class="navbar-nav ml-lg-auto text-center">
					<li class="nav-item mr-3">
						<a class="nav-link" href="index.html">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item mr-3">
						<a class="nav-link" href="about.html"> About</a>
						<li class="nav-item mr-3">
							<a class="nav-link" href="bisnis.html">Bisnis</a>
						</li>
						<li class="nav-item mr-3">
							<a class="nav-link" href="proyek.html">Proyek</a>
						</li>
						<li class="nav-item mr-3">
							<a class="nav-link" href="csr.html">CSR</a>
						</li>
						<li class="nav-item mr-3">
							<a class="nav-link" href="gcg.html">GCG</a>
						</li>
						<li class="nav-item mr-3">
							<a class="nav-link" href="karir.html">Karir</a>
						</li>
						<li class="nav-item mr-3">
							<a class="nav-link" href="news.php">News</a>
						</li>
					</ul>
				</div>

			</nav>
		</header>
		<!-- //header -->

	</div>
</section>
<!-- //header -->
<section class="banner-1">
</section>
<!-- team -->
<?php //select berita
if (array_key_exists('id', $_GET)){
	$id = $_GET['id'];
}else{
	$id = '0';
}

function echo_body($title, $date, $content){
	echo '<section class="team py-md-5">
			<div class="container py-4 mt-2">
				<h3 class="tittle-w3ls text-center mb-3"> 
					'.$title.' 
				</h3>
				<p class="tit text-center mx-auto"> 
					'.$date.'
				</p>
				<div class="row inner-sec-w3layouts-agileinfo pt-4 mt-md-4">
					<div class="w3-example">
						<h3> 
							'.$title.'
						</h3>
						<div class="w3-code notranslate htmlHigh">
							<span style="color:brown">
								<span style="color:mediumblue">
									'.$content.'
								</span>
							</span>
						</div>
					</div>
				</div>
			</div>
		</section>';
}

$sql = "SELECT title, content, date  FROM news WHERE news_id = " . $id; //query cek data ke DB
$result = $conn->query($sql);
if ($result->num_rows > 0) { //cek apakah ada data atau tidak
	while($row = $result->fetch_assoc()) { // jika ada, maka kita tampilkan semua data
		echo_body($row['title'], $row['date'], $row['content']);
	}
} else {
	echo_body("Data not Found!", "", "The data you were looking for is not found!");
}
?>


<!-- //team -->

<!-- distance -->
<section class="distance-w3 py-md-5">
	<div class="container py-4 mt-2">
		<div class="row">
			<div class="col-md-8 distance-agile-left">
				<h4 class="mt-2">#BuildTheFutureWithUs</h4>
			</div>
		</div>
	</div>
</section>
<!-- //distance -->
<!-- footer -->
<footer>
	<section class="footer py-md-5">
		<div class="container py-4 mt-2">
			<div class="row footer_inner_info_w3ls_agileits">
				<div class="col-md-3 footer-left">
					<h2><a href="index.html"> HAKAASTON </a></h2>
					<p class="mb-3 mt-3"> Asphalt & Concrete Manufacture </p>
					<ul class="social-nav footer-social social two">
						<li>
							<a href="#">
								<i class="fab fa-facebook-f" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-pinterest" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>

				<div class="col-md-2 sign-gd">
					<h4>Useful Links</h4>
					<ul>
						<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="bisnis.html">Bisnis</a></li>
							<li><a href="proyek.html">Proyek</a></li>
							<li><a href="csr.html">CSR</a></li>
							<li><a href="gcg.html">GCG</a></li>
							<li><a href="karir.html">Karir</a></li>
							<li><a href="news.php">Berita</a></li>
					</ul>
				</div>
				<div class="col-md-3 sign-gd-two">
					<h4>Contact Information</h4>
					<div class="address">
						<div class="address-grid">
							<div class="address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="address-right">
								<h6>Phone Number</h6>
								<p>021 - 84995068 </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="address-grid">
							<div class="address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="address-right">
								<h6>Email Address</h6>
								<p>Email :<a href="mailto:example@email.com"> info@hakaaston.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="address-grid">
							<div class="address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="address-right">
								<h6>Location</h6>
								<p>Plaza De'Minimalis Kav.10
									Jl.Caman Raya - Jatibening Bekasi Barat 17412

								</p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<p class="copy-right py-3"> HAKAASTON 2018 All rights reserved | Design by HAKAASTON<a href="http://w3layouts.com/">W3layouts</a></p>
	<!-- //footer -->
</footer>
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js-->
<!-- start-smooth-scrolling -->
<script  src="js/move-top.js"></script>
<script  src="js/easing.js"></script>
<script> 
	jQuery(document).ready(function ($) {
		$(".scroll").click(function (event) {
			event.preventDefault();

			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		});
	});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script> 
	$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
</script>
<script  src="js/SmoothScroll.min.js"></script>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>