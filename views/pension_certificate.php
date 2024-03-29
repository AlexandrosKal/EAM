<!doctype html>
<html lang="el">
	<head>
		<title>Βεβαίωση ΑΜΚΑ</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- NavBar css -->
		<link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/backToTopButton.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/certificates.css">
		<link rel="stylesheet" type="text/css" href="css/printButton.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="scripts/backToTopButton.js"></script>
		<script src="scripts/printButton.js"></script>
	</head>

	<body class="background-color">
    <!--include to navbar-->
    <?php		require 'navbar.php' ;?>
		<!-- include to koubi gia epistrofi stin korufi-->
		<?php require 'backToTopButton.php' ;?>
    <!-- set to path-->
    <h5> <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b> </a> > <a href="certificates.php"> <b> Έκδοση Δικαιολογητικών/Πιστοποιητικών </b> </a> > <a href="AMKA_certificate.php"> <b> Πιστοποιητικό Συνταξιοδοτικής Κατάστασης </b> </a></h5>
    <h2 class="main-page-header page-header"> <b> Έκδοση Πιστοποιητικού Συνταξιοδοτικής Κατάστασης </b> </h2>

    <div class="well container">
      <p class="padding paragraph">
        Το Ίδρυμα Κοινωνικής Ασφάλισης πιστοποιεί ότι ο κάτοχος του <abbr title="Αριθμός Μητρώου Κοινωνικής Ασφάλισης">ΑΜΚΑ</abbr> <?php echo $user['amka']; ?> που αντιστοιχεί στο άτομο με στοιχεία:
      </p>

        <div class="row">
	        <span class="col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute info">Όνομα:</span>
					<span class="col-md-offset-4"> </span>
	        <span class="col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute_value"><?php echo $user['first_name']; ?></span>
        </div>

				<div class="row">
	        <span class="col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute info">Επίθετο:</span>
					<span class="col-md-offset-4"> </span>
	        <span class="col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute_value"><?php echo $user['last_name']; ?></span>
  			</div>

				<div class="row">
	        <span class="col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute info">Διεύθυνση:</span>
					<span class="col-md-offset-4"> </span>
	        <span class="col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute_value"><?php echo $user['street'].' '.$user['street_num'].', '.$user['area']; ?></span>
  			</div>

				<div class="row">
        	<span class="col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute info">Ταχυδρομικός Κώδικας:</span>
					<span class="col-md-offset-4"> </span>
        	<span class="col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute_value"><?php echo $user['postal']; ?></span>
        </div>

				<div class="row">
	        <span class="col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute info"> <abbr title="Αριθμός Φορολογικού Μητρώου"> ΑΦΜ:</span>
					<span class="col-md-offset-4"> </span>
	        <span class="col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute_value"><?php echo $user['afm']; ?></span>
        </div>

				<div class="row">
	        <span class="col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute info"> <abbr title="Αριθμός Δελτίου Ταυτότητας"> ΑΔΤ:</span>
					<span class="col-md-offset-4"> </span>
	        <span class="col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute_value"><?php echo $user['id_num']; ?></span>
  			</div>

				<p>
					είναι συνταξιούχος.
				</p>
				<!-- include to koubi gia ektupwsi-->
				<?php require 'printButton.php' ;?>

    </div>

  </body>
</html>
