<!doctype html>
<html lang="el">
	<head>
		<title>Προφιλ Χρήστη</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- NavBar css -->
		<link rel="stylesheet" type="text/css" href="css/navbar.css">
    		<link rel="stylesheet" type="text/css" href="css/paragraph.css">
    		<link rel="stylesheet" type="text/css" href="css/header.css">
    		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/well.css">
    		<link rel="stylesheet" type="text/css" href="css/button.css">
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
		<h5> <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b> </a> > <a href="insuranced.php"> <b> Ασφαλισμένοι </b> </a></h5>

		<div class="well text">
			<h2 class="header page-header text-center">Ασφαλισμένοι </h2>
				<p class="st">
			      Οι ασφαλισμένοι αποτελόυν την κύρια κατηγορία του Ιδρύματος Κοινωνικής Ασφάλισης. Η κατηγορία αυτή στελεχώνεται, κυρίως από εργαζόμενους.
			      Εδω βρίσκονται κάποιες βασικές υπηρεσίες που προσφέρονται διαδικτυακά στον ιστότοπό μας.
			  </p>
		</div>


		<div class="container-fluid well text-center" >
			<div class="page-header">
			 <h2 class="text-center header">Χρήσιμοι Σύνδεσμοι</h2>
			</div>

			<div class="col-md-4 ">
				<a href="#" class="btn btn-primary button_style col" role="button">Προσωπική Ασφαλιστική<br> Κατάσταση</a>
			</div>

			<div class="col-md-4 ">
				<a href="#" class="btn btn-primary button_style col" role="button">Βεβαίωση <abbr title="Αιρθμός Μητρώου Κοινωνικής Ασφάλισης">ΑΜΚΑ</abbr></a>
			</div>

			<div class="col-md-4 ">
				<a href="compute_stamps.php" class="btn btn-primary button_style col" role="button">Παρουσίαση Ενσήμων</a>
			</div>

		</div>

  </body>
</html>
