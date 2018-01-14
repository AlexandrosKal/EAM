<!doctype html>
<html lang="el">
	<head>
		<title>Υπηρεσίες Συνταξιούχων</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- NavBar css -->
		<link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/paragraph.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/button.css">
		<link rel="stylesheet" type="text/css" href="css/backToTopButton.css">
		<link rel="stylesheet" type="text/css" href="css/well.css">

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
		<h5> <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b> </a> > <a href="seniors.php"> <b>  Συνταξιούχοι </b> </a></h5>
		<div class="well text">
    	<h2 class="header page-header text-center"> Συνταξιούχοι </h2>

			<p class="st">
				Η χορήγηση Σύνταξης αποτελεί τον πυρήνα της κοινωνικοασφαλιστικής προστασίας που παρέχεται από το ΙΚΑ-ΕΤΑΜ στην πλειονότητα των μισθωτών της χώρας. Για το λόγο αυτό, η βελτίωση της ποιότητας των παρεχόμενων υπηρεσιών συντάξεων, συμπεριλήφθηκε στους στρατηγικούς στόχους της Διοίκησης. Τα προβλήματα και οι δυσλειτουργίες των υπηρεσιών συντάξεων, εντοπίζονται κυρίως στην καθυστέρηση έκδοσης των συνταξιοδοτικών αποφάσεων.
			</p>
		</div>

		<div class="container-fluid well text-center" >
			<h2 class="text-center page-header header">Χρήσιμοι Σύνδεσμοι</h2>

			<div class="col-md-4 col-lg-4 col-sm-4 col-sm-4">
				<a href="compute_pension.php" class="btn btn-primary button_style col" role="button">Υπολογισμός Σύνταξης</a>
			</div>

			<div class="col-md-4 col-lg-4 col-sm-4 col-sm-4">
				<a href="request.php?type=pension" class="btn btn-primary button_style" role="button"> Αίτηση Σύνταξης <br> Γήρατος</a>
			</div>

			<div class="col-md-4 col-lg-4 col-sm-4 col-sm-4">
				<a href="certificate.php?type=pension" class="btn btn-primary button_style" role="button">Πιστοποιητικό Συνταξιοδοτικής <br> Κατάστασης</a>
			</div>

		</div>

  </body>
</html>
