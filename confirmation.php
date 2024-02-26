<?php
	// Démarrer la session
	session_start();
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>BDM Commercial</title>

	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
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
									<?php
											if(isset($_SESSION['username'])) {
												echo '<li class="nav-item"><a class="nav-link" href="cart.php">Panier</a></li>';
											} else {
												echo '<li class="nav-item"><a class="nav-link" href="login.php">Panier</a></li>';
											}
										?>
										<?php
											if(isset($_SESSION['username'])) {
												echo '<li class="nav-item"><a class="nav-link" href="checkout.php">Paiement</a></li>';
											} else {
												echo '<li class="nav-item"><a class="nav-link" href="login.php">Paiement</a></li>';
											}
										?>
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
						<?php
									if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
										echo '<li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span></a></li>';
									} else {
										echo '<li class="nav-item"><a href="login.php" class="cart"><span class="ti-bag"></span></a></li>';
									}
								?>
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
	<!-- End Header  -->

	<!-- Start Banner -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Confirmation</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.php">Confirmation</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner  -->

	<!--================Order Details =================-->
	<section class="order_details section_gap">
		<div class="container">
			<h3 class="title_confirmation">Merci. Votre commande à bien été reçu.</h3>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Information de la commande</h4>
						<ul class="list">
							<li><a href="#"><span>Numéro de commande</span> : 60235</a></li>
							<li><a href="#"><span>Date</span> : 26/01/2024</a></li>
							<li><a href="#"><span>Total</span> : 100€</a></li>
							<li><a href="#"><span>Methode de paiement</span> : Paypal</P></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Adresse</h4>
						<ul class="list">
							<li><a href="#"><span>Rue</span> : 12 allée de la grive</a></li>
							<li><a href="#"><span>Ville</span> : Le Coudray-Montceaux</a></li>
							<li><a href="#"><span>Pays</span> : France</a></li>
							<li><a href="#"><span>Code Postal </span> : 91830</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Adresse de livraison</h4>
						<ul class="list">
							<li><a href="#"><span>Rue</span> : 12 allée de la grive</a></li>
							<li><a href="#"><span>Ville</span> : Le Coudray-Montceaux</a></li>
							<li><a href="#"><span>Pays</span> : France</a></li>
							<li><a href="#"><span>Code postal </span> : 91830</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Détails de la commande</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Produit</th>
								<th scope="col">Quantité</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>Booster pokemon</p>
								</td>
								<td>
									<h5>x 03</h5>
								</td>
								<td>
									<p>30€</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>90.00€</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Frais de livraison</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>10.00€</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>100.00€</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details =================-->

	<!-- start footer  -->
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
<!-- End footer -->




	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>