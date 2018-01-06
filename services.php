<!doctype html>
<html lang="el">
	<head>
		<title>Υπηρεσίες βάση κατηγοριών</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- NavBar css -->
		<link rel="stylesheet" type="text/css" href="css/navbar.css">
		<link rel="stylesheet" type="text/css" href="css/services.css">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/full_width.css">
		<link rel="stylesheet" type="text/css" href="css/backToTopButton.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="scripts/backToTopButton.js"></script>
	</head>

	<body class="background-color">
		<!--- include to navbar-->
		<?php	require 'views/navbar.php' ;?>
		<!-- include to koubi gia epistrofi stin korufi-->
		<?php require 'views/backToTopButton.php' ;?>
		<!--- set to path-->
		<h5> <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b> </a> > <a href="services.php"> <b> Υπηρεσίες </b> </a> </h5>
    <h2 class="page-header"> Υπηρεσίες </h2>
    <div class="container well">
	      <div class="row">

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="container_im">
							<a href="insuranced.php">
								<img src="images/asfalismenoi.png" alt="asfalismenoi" class="img-responsive image thumbnail full-width">
								<div class="middle">
									<h1 class="text-center text">Ασφαλισμένοι</h1>
								</div>
							</a>
						</div>
					</div>


					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="container_im">
							<a href="seniors.php">
								<img src="images/suntaksiouxoi.jpg" alt="suntaksiouxoi" class="img-responsive image thumbnail full-width">
								<div class="middle">
									<h1 class="text-center text">Συνταξιούχοι</h1>
								</div>
							</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="container_im">
							<a href="amea.php">
								<img src="images/amea.png" alt="amea" class="img-responsive image thumbnail full-width">
								<div class="middle">
									<h1 class="text-center text">ΑμΕΑ</h1>
								</div>
							</a>
						</div>
					</div>

	      </div>

	      <div class="row">
	        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="container_im">
	            <a href="employers.php">
								<img src="images/ergodotes.png" alt="ergodotes" class="img-responsive image thumbnail full-width">
								<div class="middle">
									<h1 class="text-center text">Εργοδότες</h1>
								</div>
	            </a>
	          </div>
	        </div>

	        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="container_im">
	            <a href="debtors.php">
								<img src="images/ofeiletes.png" alt="ofeiletes" class="img-responsive image thumbnail full-width">
								<div class="middle">
									<h1 class="text-center text">Οφειλέτες</h1>
								</div>
	            </a>
	          </div>
	        </div>
			</div>
		</div>

  </body>
</html>
