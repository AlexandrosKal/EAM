<!doctype html>
<html lang="el">
	<head>
		<title>Υπηρεσίες για ΑμΕΑ</title>
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
		<link rel="stylesheet" type="text/css" href="css/well.css">
		<link rel="stylesheet" type="text/css" href="css/backToTopButton.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="scripts/backToTopButton.js"></script>
	</head>

	<body class="background-color">
		<!--- include to navbar-->
		<?php		require 'views/navbar.php' ;?>
		<!-- include to koubi gia epistrofi stin korufi-->
		<?php require 'views/backToTopButton.php' ;?>
		<!--- set to path-->
		<h5> <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b> </a> > <a href="services.php"> <b> Υπηρεσίες </b> </a> > <a href="amea.php"> <b>  ΑμΕΑ </b> </a></h5>

		<div class="well text">
			<h2 class="header page-header text-center"> ΑμΕΑ </h2>

			<p class="st">
				Aναπηρία είναι ο περιορισμός της κοινής δραστηριότητας λόγου, έργου ή άμεσης αντίληψης λόγω σωματικής ή πνευματικής βλάβης ενός ανθρώπου. Διακρίνουμε τους σωματικά ανάπηρους και τους διανοητικά ανάπηρους. Η αναπηρία γενικά διακρίνεται σε ολική και μερική καθώς και σε σωματική και διανοητική.
			</p>

		</div>

		<div class="container-fluid well text-center" >
			<h2 class="text-center page-header header">Χρήσιμοι Σύνδεσμοι</h2>

			<div class="col-md-12 ">
				<a href="request.php?type=disabled" class="btn btn-primary button_style col" role="button">Αίτηση Αξιολόγησης <br> Αναπηρίας</a>
			</div>

		</div>

  </body>
</html>
