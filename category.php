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
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<style>
		.lien-noir {
    		color: black; /* Définit la couleur du texte du lien comme noir */
    		text-decoration: none; /* Supprime la décoration par défaut (soulignement) du lien */
		}

		/* Styles supplémentaires si nécessaire */
		.lien-noir:hover {
    		text-decoration: underline; /* Ajoute un soulignement au survol du lien si nécessaire */
		}
	</style>
</head>

<body id="category">

<!-- Start Header -->
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
<!-- End Header -->

	<!-- Start Banner  -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Shop</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.php">Tout</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner  -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Categories</div>
						<?php
							// Connexion à la base de données (à remplacer avec vos propres informations de connexion)
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "bdd_php";

							// Création de la connexion
							$conn = new mysqli($servername, $username, $password, $dbname);

							// Vérification de la connexion
							if ($conn->connect_error) {
							    die("Connection failed: " . $conn->connect_error);
							}

							// Requête pour récupérer tous les produits de la base de données
							$sql = "SELECT * FROM product";
							$result = $conn->query($sql);
							$nb = $result->num_rows;

							$sqlpokemon = "SELECT * FROM product WHERE Category = 'Pokemon'";
							$resultpokemon = $conn->query($sqlpokemon);
							$nbpokemon = $resultpokemon->num_rows;

							$sqlyugioh = "SELECT * FROM product WHERE Category = 'Yu-Gi-Oh'";
							$resultyugioh = $conn->query($sqlyugioh);
							$nbyugioh = $resultyugioh->num_rows;

							$sqlmagic = "SELECT * FROM product WHERE Category = 'Magic'";
							$resultmagic = $conn->query($sqlmagic);
							$nbmagic = $resultmagic->num_rows;

							echo '<ul class="main-categories">';
							echo '<li class="main-nav-list"><a data-toggle="collapse" href="#healthProduct" aria-expanded="false" aria-controls="healthProduct"><span
								class="lnr lnr-arrow-right"></span>Card<span class="number">('.$nb.')</span></a>';
							echo '<ul class="collapse" id="healthProduct" data-toggle="collapse" aria-expanded="false" aria-controls="healthProduct">';
							echo '<li class="main-nav-list child"><a href="category.php">Tout<span class="number">('.$nb.')</span></a></li>';
							echo '<li class="main-nav-list child"><a href="pokemon.php">Pokemon<span class="number">('.$nbpokemon.')</span></a></li>';
							echo '<li class="main-nav-list child"><a href="yugioh.php">Yu-Gi-Oh<span class="number">('.$nbyugioh.')</span></a></li>';
							echo '<li class="main-nav-list child"><a href="magic.php">Magic<span class="number">('.$nbmagic.')</span></a></li>';
							echo '</ul>';
							echo '</li>';
							echo '</ul>';
						?>
					</div>
				<div class="sidebar-filter mt-50">
					<div class="common-filter">
						<div class="head">Price</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">Price:</div>
								<span>$</span>
								<div id="lower-value"></div>
								<div class="to">to</div>
								<span>$</span>
								<div id="upper-value"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting">
                    <select>
                        <option value="1">Tout</option>
                    </select>
                </div>
                <div class="sorting mr-auto">
                </div>
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Filter -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						
						<!-- single product -->
						<?php
						// Connexion à la base de données (à remplacer avec vos propres informations de connexion)
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "bdd_php";

						// Création de la connexion
						$conn = new mysqli($servername, $username, $password, $dbname);

						// Vérification de la connexion
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						}

						// Requête pour récupérer tous les produits de la base de données
						$sql = "SELECT * FROM product";
						$result = $conn->query($sql);

						// Vérification si des produits ont été trouvés
						if ($result->num_rows > 0) {
						    // Affichage des produits
						    while($row = $result->fetch_assoc()) {
						        // Modèle HTML pour chaque produit
						        echo '<div class="col-lg-4 col-md-6">';
						        echo '<div class="single-product">';
						        echo '<img class="img-fluide" src="' . $row['Image'] . '" alt="' . $row['Name'] . '">';
						        echo '<div class="product-details">';
						        echo '<h6>' . $row['Name'] . '</h6></href>';
						        echo '<div class="price">';
						        echo '<h6>' . $row['Price'] . '€</h6>';
						        echo '</div>';
						        echo '<div class="prd-bottom">';
								if(isset($_SESSION['username'])) {
						        	echo '<a href="addcart.php?pid='.$row['ID'].'&pq=1" class="social-info">';
								} else {
									echo '<a href="" class="social-info">';
								}
								echo '<span class="ti-bag"></span>';
						        echo '<p class="hover-text">add to bag </p>';
						        echo '</a>';
						        echo '<a href="" class="social-info">';
						        echo '<span class="lnr lnr-heart"></span>';
						        echo '<p class="hover-text">Wishlist</p>';
						        echo '</a>';
						        echo '<a href="" class="social-info">';
						        echo '<span class="lnr lnr-sync"></span>';
						        echo '<p class="hover-text">compare</p>';
						        echo '</a>';
						        echo '<a href="product.php?id='. $row['ID'].'" class="social-info">';
						        echo '<span class="lnr lnr-move"></span>';
						        echo '<p class="hover-text">view more</p>';
						        echo '</a>';
						        echo '</div>';
						        echo '</div>';
						        echo '</div>';
						        echo '</div>';
						    }
						} else {
						    echo "0 résultats";
						}
											
						// Fermeture de la connexion à la base de données
						$conn->close();
						?>
					</div>
				</section>
				<!-- End Best Seller -->
			</div>
		</div>
	</div>

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
<!-- End footer  -->



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
