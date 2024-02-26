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
	<title>BDM Clothing</title>

	<!--CSS=============================================-->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
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

	<!-- Start Banner  -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.php">Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner  -->

	<div class="billing_details">
		<div class="container">
			<div class="col-lg-8">
				<h3>Informations</h3>
				<form class="row contact_form" action="#" method="post" novalidate="novalidate">
					<div class="col-md-6 form-group p_star">
					<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
					</div>
					<div class="col-md-6 form-group p_star">
					<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
					</div>
					<div class="col-md-6 form-group p_star">
					<input type="text" class="form-control" id="tel" name="tel" placeholder="Téléphone">
					</div>
					<div class="col-md-6 form-group p_star">
					<input type="text" class="form-control" id="email" name="email" placeholder="Email">
					</div>
					<div class="col-md-12 form-group p_star">
					<input type="text" class="form-control" id="pays" name="pays" placeholder="Pays">
					</div>
					<div class="col-md-12 form-group p_star">
					<input type="text" class="form-control" id="add" name="add" placeholder="Adresse">
					</div>
					<div class="col-md-12 form-group p_star">
						<input type="text" class="form-control" id="ville" name="ville" placeholder="Ville">
					</div>
					<div class="col-md-12 form-group">
						<input type="text" class="form-control" id="zip" name="zip" placeholder="Code Postal">
					</div>
					<div class="col-md-12 form-group">
						<input type="text" class="form-control" id="PP" name="PP" placeholder="Profile picture">
					</div>
					<div class="col-md-12 form-group">
						<input type="text" class="form-control" id="PW" name="PW" placeholder="Password">
					</div>
					<div class="col-md-12 form-group">
						<div class="creat_account">
							<input type="checkbox" id="f-option2" name="selector">
							<label for="f-option2">Reste connecté</label>
						</div>
					</div>
					<div class="col-md-12 form-group">
						<button type="submit" value="submit" class="primary-btn">S'inscrire</button>
					</div>
				</form>

				<?php
					// Vérifie si le formulaire a été soumis
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
					    // Récupération des données du formulaire
					    $prenom = $_POST['first'];
					    $nom = $_POST['last'];
					    $email = $_POST['email'];
						$photo_profil = $_POST['PP'];
					    $mot_de_passe = $_POST['PW'];
						$telephone = $_POST['number'];
					    $pays = $_POST['add1'];
					    $adresse = $_POST['add2'];
						$code_postal = $_POST['zip'];
					    $ville = $_POST['city'];
					    $rester_connecte = isset($_POST['selector']) ? 'Oui' : 'Non';

						$mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

					    // Validation des données (vous pouvez ajouter des vérifications supplémentaires selon vos besoins)

					    // Connexion à la base de données (à remplacer avec vos propres informations de connexion)
					    $servername = "localhost";
					    $username = "root";
					    $password = "";
					    $dbname = "bdd_php";

					    // Création de la connexion
					    $conn = new mysqli($servername, $username, $password, $dbname);
						// Vérifier si l'email existe déjà dans la base de données
    					$sql = "SELECT ID FROM profil WHERE Email = '$email'";
    					$result = $conn->query($sql);

    					if ($result->num_rows > 0) {
        					echo "Cet email est déjà utilisé.";
    					} else {
    						echo "L'adresse e-mail est valide.\n";
					    	// Préparation de la requête SQL pour insérer les données dans la table appropriée
					    	$sql = "INSERT INTO profil (First_name, Last_name, Email, PP, Pw, Phone, Country, Adress, Postal_code, City) 
								VALUES ('$prenom', '$nom', '$email', '$photo_profil', '$mot_de_passe_hash', '$telephone', '$pays', '$adresse', '$code_postal', '$ville')";

					    	// Exécution de la requête
					    	if ($conn->query($sql) === TRUE) {
					        	echo "Inscription réussie";
					    	} else {
					       		echo "Inscription Non réussie";
					    	}
						}

					    // Fermeture de la connexion
    					$conn->close();
					}
				?>
			</div>
		</div>
	</div>
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