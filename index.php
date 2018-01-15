<!doctype html>
<html lang="el">
	<head>
		<title>Καλώς ορίσατε</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- NavBar css -->
		<link rel="stylesheet" type="text/css" href="css/navbar.css">
		<link rel="stylesheet" type="text/css" href="css/paragraph.css">
		<link rel="stylesheet" type="text/css" href="css/services.css">
		<link rel="stylesheet" type="text/css" href="css/button.css">
		<link rel="stylesheet" type="text/css" href="css/container.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/backToTopButton.css">
		<link rel="stylesheet" type="text/css" href="css/well.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="scripts/backToTopButton.js"></script>
	</head>

	<body class="background-color">
		<!--- include to navbar-->
		<?php require 'views/navbar.php' ;?>
		<!-- include to koubi gia epistrofi stin korufi-->
		<?php require 'views/backToTopButton.php' ;?>
		<!--- set to path-->
		<h5> <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b> </a> </h5>

			<div class="well">
				<h1 class="text-center page-header header"> Υπηρεσίες</h1>
	     	<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<div class="container_im">
							<a href="insuranced.php">
								<img src="images/asfalismenoi.png" alt="asfalismenoi" class="img-responsive image thumbnail full-width">
								<div class="middle">
									<h3 class="text-center text">Ασφαλισμένοι</h3>
								</div>
							</a>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<div class="container_im">
							<a href="seniors.php">
								<img src="images/suntaksiouxoi.jpg" alt="suntaksiouxoi" class="img-responsive image thumbnail full-width">
								<div class="middle">
									<h3 class="text-center text">Συνταξιούχοι</h3>
								</div>
							</a>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<div class="container_im">
		   					 <a href="employers.php">
								<img src="images/ergodotes.png" alt="ergodotes" class="img-responsive image thumbnail full-width">
								<div class="middle">
									<h3 class="text-center text">Εργοδότες</h3>
								</div>
		   					 </a>
		 				 </div>
   				 </div>

					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<div class="container_im">
		  					  <a href="amea.php">
								<img src="images/amea.png" alt="amea" class="img-responsive image thumbnail full-width">
								<div class="middle">
									<h3 class="text-center text">ΑμΕΑ</h3>
								</div>
		   					 </a>
		 				 </div>
					</div>

				</div>
			</div>

		<div class="container-fluid well text-center" >
			 <h1 class="text-center page-header header">Χρήσιμοι Σύνδεσμοι</h1>

			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
				<a href="compute_pension.php" class="btn btn-primary button_style col" role="button">Υπολογισμός Σύνταξης</a>
			</div>

			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
				<a href="#" class="btn btn-primary button_style" role="button">Ανανέωση Βιβλιαρίου Online</a>
			</div>

			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
				<a href="certificate.php" class="btn btn-primary button_style" role="button">Πιστοποιητικά/Δικαιολογητικά</a>
			</div>
		</div>

		</body>

</html>
