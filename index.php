<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
	<title>BDM Commercial</title>

    <link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

		<!-- Start Header  -->
		<header class="header_area sticky-header">
			<div class="main_menu">
				<nav class="navbar navbar-expand-lg navbar-light main_box">
					<div class="container">
						
						<a class="navbar-brand logo_h" href="index.php"><img src="img/fav.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
									 aria-expanded="false">Shop</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="category.php">Catégories</a></li>
                                        <li class="nav-item"><a class="nav-link" href="cart.php">Panier</a></li>
										<li class="nav-item"><a class="nav-link" href="checkout.php">Paiement</a></li>
									</ul>
								</li>
								</li>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
									 aria-expanded="false">Compte</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
										<li class="nav-item"><a class="nav-link" href="tracking.php">Tracking</a></li>
										<?php
                                            // Démarrer la session
                                            session_start();

                                            // Vérifier si l'utilisateur est connecté
                                            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                                                echo '<li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>';
                                                echo '<li class="nav-item"><a class="nav-link" href="logout.php">Déconnexion</a></li>';
                                            }
                                        ?>
									</ul>
								</li>
								<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span></a></li>
								<li class="nav-item">
									<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between">
						<input type="text" class="form-control" id="search_input" placeholder="Search Here">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div>
		</header>
		<!-- End Header -->
<!-- start banner -->
<section class="banner-area">
	<div class="container">
		<div class="row fullscreen align-items-center justify-content-start">
			<div class="col-lg-12">
				<div class="active-banner-slider owl-carousel">
					
					<div class="row single-slide align-items-center d-flex">
						<div class="col-lg-5 col-md-6">
							<div class="banner-content">
								<h1>Pokemon<br>New Collection!</h1>
								<p>Découvrez le booster PlasmaBlast !</p>
								<div class="add-bag d-flex align-items-center">
									<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
									<span class="add-text text-uppercase">Add to Bag</span>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img class="img-fluid" src="img/Pokemon/Black&white/black&white_PB_display.png" alt="">
							</div>
						</div>
					</div>
					
					<div class="row single-slide align-items-center d-flex">
						<div class="col-lg-5 col-md-6">
							<div class="banner-content">
								<h1>Magic<br>New Collection!</h1>
								<p>Découvrez le nouveau booster Magic</p>
								<div class="add-bag d-flex align-items-center">
									<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
									<span class="add-text text-uppercase">Add to Bag</span>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img class="img-fluid" src="img/Magic/HourOfDevastation_display.png" alt="">
							</div>
						</div>
					</div>

					<div class="row single-slide">
						<div class="col-lg-5">
							<div class="banner-content">
								<h1>Yu-Gi-Oh <br>Collection</h1>
								<p>Le booster Vanguard en stock</p>
								<div class="add-bag d-flex align-items-center">
									<a class="add-btn" href="admin.php"><span class="lnr lnr-cross"></span></a>
									<span class="add-text text-uppercase">Add to Bag</span>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img class="img-fluid" src="img/Yu-Gi-Oh/Vanguard_display.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End banner  -->
<!-- start features  -->
<section class="features-area section_gap">
	<div class="container">
		<div class="row features-inner">
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon1.png" alt="">
					</div>
					<h6>Free Delivery</h6>
					<p>Free Shipping on all order</p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon2.png" alt="">
					</div>
					<h6>Return Policy</h6>
					<p>Free Shipping on all order</p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon3.png" alt="">
					</div>
					<h6>24/7 Support</h6>
					<p>Free Shipping on all order</p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon4.png" alt="">
					</div>
					<h6>Secure Payment</h6>
					<p>Free Shipping on all order</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end features  -->
<!-- Start exclusive deal  -->
<section class="exclusive-deal-area">
	<div class="container-fluid">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-6 no-padding exclusive-left">
				<div class="row clock_sec clockdiv" id="clockdiv">
					<div class="col-lg-12">
						<h1>Exclusive Hot Deal Ends Soon!</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
					<div class="col-lg-12">
						<div class="row clock-wrap">
							<div class="col clockinner1 clockinner">
								<h1 class="days">150</h1>
								<span class="smalltext">Days</span>
							</div>
							<div class="col clockinner clockinner1">
								<h1 class="hours">23</h1>
								<span class="smalltext">Hours</span>
							</div>
							<div class="col clockinner clockinner1">
								<h1 class="minutes">47</h1>
								<span class="smalltext">Mins</span>
							</div>
							<div class="col clockinner clockinner1">
								<h1 class="seconds">59</h1>
								<span class="smalltext">Secs</span>
							</div>
						</div>
					</div>
				</div>
				<a href="" class="primary-btn">Shop Now</a>
			</div>
			<div class="col-lg-6 no-padding exclusive-right">
				<div class="active-exclusive-product-slider">
					<!-- single exclusive carousel -->
					<div class="single-exclusive-slider">
						<img class="img-fluid" src="img/Pokemon/Sun&Moon/sun&moon_BS_booster.png" alt="">
						<div class="product-details">
							<div class="price">
								<h6>30.00€</h6>
								<h6 class="l-through">50.00€</h6>
							</div>
							<h4>Booster Sun&Moon</h4>
							<div class="add-bag d-flex align-items-center justify-content-center">
								<a class="add-btn" href=""><span class="ti-bag"></span></a>
								<span class="add-text text-uppercase">Add to Bag</span>
							</div>
						</div>
					</div>
					<!-- single exclusive carousel -->
					<div class="single-exclusive-slider">
						<img class="img-fluid" src="img/Yu-Gi-Oh/secretyOfEternity_booster.png" alt="">
						<div class="product-details">
							<div class="price">
								<h6>20.00€</h6>
								<h6 class="l-through">40.00€</h6>
							</div>
							<h4>Booster Secrety Of Eternity</h4>
							<div class="add-bag d-flex align-items-center justify-content-center">
								<a class="add-btn" href=""><span class="ti-bag"></span></a>
								<span class="add-text text-uppercase">Add to Bag</span>
							</div>
						</div>
					</div>

					<div class="single-exclusive-slider">
						<img class="img-fluid" src="img/Magic/hourOfDevastation_booster.png" alt="">
						<div class="product-details">
							<div class="price">
								<h6>20.00€</h6>
								<h6 class="l-through">40.00€</h6>
							</div>
							<h4>Booster Hour Of Devastation</h4>
							<div class="add-bag d-flex align-items-center justify-content-center">
								<a class="add-btn" href=""><span class="ti-bag"></span></a>
								<span class="add-text text-uppercase">Add to Bag</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End exclusive deal  -->

<!-- start footer -->
<footer class="footer-area section_gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-3  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>About Us</h6>
					<p>
						Projet PHP - B2 info - Paris Ynov Campus
					</p>
				</div>
			</div>
			<div class="col-lg-4  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>Newsletter</h6>
					<p>Abonne-toi à la Newsletter</p>
					<div class="" id="mc_embed_signup">

							<div class="d-flex flex-row">

								<input class="form-control" name="EMAIL" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
								 required="" type="email">


								<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
								</div>
							</div>
							<div class="info"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>Follow Us</h6>
					<p>Nos différents réseaux sociaux</p>
					<div class="footer-social d-flex align-items-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
			<p class="footer-text m-0">
&copy; Baptiste Djebril Mathis
</p>
		</div>
	</div>
</footer>
<!-- End footer-->

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
		 crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/countdown.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<!--gmaps Js-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
		<script src="js/gmaps.min.js"></script>
		<script src="js/main.js"></script>