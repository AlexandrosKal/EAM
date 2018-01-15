<!doctype html>
<html lang="el">
	<head>
		<title>Δικαιολογητικά/Πιστοποιητικά</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- NavBar css -->
		<link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/backToTopButton.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/well.css">
    <link rel="stylesheet" type="text/css" href="css/certificates.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="scripts/backToTopButton.js"></script>
	</head>

	<body class="background-color">
    <!--include to navbar-->
    <?php		require 'navbar.php' ;?>
		<!-- include to koubi gia epistrofi stin korufi-->
		<?php require 'backToTopButton.php' ;?>
    <!-- set to path-->
    <h5> <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b> </a> > <a href="certificates.php"> <b> Έκδοση Δικαιολογητικών/Πιστοποιητικών </b> </a></h5>
    <h2 class="main-page-header page-header"> <b> Έκδοση Δικαιολογητικών/Πιστοποιητικών </b> </h2>

    <div class="container-fluid well">
    <h2 class="header">Επιλέξτε δικαιολογητικά/πιστοποιητικά</h2>

    <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle button_style mybtn" type="button" data-toggle="dropdown">Επιλογή Δικαιολογητικών/Πιστοποιητικών
        <span class="caret"></span>
      </button>

      <ul class="dropdown-menu">
        <li class="dropdown-header">Ασφαλισμένοι</li>
        <li><a href="#">Βεβαίωση <abbr title="Αριθμός Μητρώου Κοινωνικής Ασφάλισης"> ΑΜΚΑ </abbr></a></li>

        <li class="divider"></li>

        <li class="dropdown-header">Συνταξιούχοι</li>
        <li><a href="certificate.php?type=pension">Πιστοποιητικό Συνταξιοδοτικής Κατάστασης</a></li>

        <li class="divider"></li>

        <li class="dropdown-header">ΑμΕΑ</li>
        <li><a href="certificate.php?type=disabled">Πιστοποιητικό Αναπηρίας</a></li>

        <li class="divider"></li>

        <li class="dropdown-header">Εργοδότες</li>
        <li><a href="#">Πιστοποιητικό Ασφαλιστικής Ενημερότητας</a></li>

      </ul>
    </div>
    </div>


  </body>
</html>
