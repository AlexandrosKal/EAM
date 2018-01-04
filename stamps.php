<!doctype html>
<html lang="el">
	<head>
		<title>Παρουσίαση Ενσήμων</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- NavBar css -->
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/profile.css">
		<link rel="stylesheet" type="text/css" href="css/error_text.css">
		<link rel="stylesheet" type="text/css" href="css/backToTopButton.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="scripts/backToTopButton.js"></script>
		<script src="scripts/validateStamps.js"></script>
	</head>

	<body class="background-color">
		<!--- include to navbar-->
		<?php		require 'navbar.php' ;?>
		<!-- include to koubi gia epistrofi stin korufi-->
		<?php require 'backToTopButton.php' ;?>
		<!--- set to path-->
		<h5>
      <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b> </a>
      >
      <a href="services.php"> <b> Υπηρεσίες </b> </a>
      >
      <a href="insuranced.php"> <b> Ασφαλισμένοι </b> </a>
      >
      <a href="stamps.php"> <b> Ένσημα </b> </a>
    </h5>

		<?php
		if ( isset( $_SESSION[ 'userid' ] ) )
		{ ?>
	    <div class="well">
	      <h2 class="header text-center"> Παρουσίαση Ενσήμων </h2>

	      <div class="panel-group">

	        <div class="panel panel-info">
	          <div class="panel-heading">Συνολικά Ένσημα</div>

	          <div class="panel-body">
	            <span class="col-md-2 attribute">420</span>
	          </div>
	        </div>

	        <div class="panel panel-info">
	          <div class="panel-heading">Ένσημα προηγούμενου μήνα</div>

	          <div class="panel-body">
	            <span class="col-md-2 attribute">4.20</span>
	          </div>

	        </div>
	      </div>

	    </div>
		<?php
		}
		else
		{ ?>
			<div class="well well-sm">
				<h1 class="text-center header">Παρουσίαση ενσήμων </h1>
				<div class="well well-sm">
					<form class="form-horizontal" method="post" name="stampsForm" onsubmit="return validateStamps();">
						<fieldset>

							<p class="text-center footnote"> Παρακαλώ συπληρώστε όλα τα πεδία της φόρμας με ελληνικούς ή λατινικούς χαρακτήρες. Μπορείτε να παραλείψετε τους τόνους.
								Αναγκαία η χρήση διαλυτικών όπου χρειάζεται.
							</p>

							<div class="form-group">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-8">
									<div class="input-group">
									 <div class="input-group-addon">
										 <span class="glyphicon glyphicon-user"></span>
									 </div>
									 <input id="fname" name="fname" type="text" placeholder="Όνομα" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-8">
									<div class="input-group">
									 <div class="input-group-addon">
										 <span class="glyphicon glyphicon-user"></span>
									 </div>
									 <input id="lname" name="lname" type="text" placeholder="Επίθετο" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-8">
									<div class="input-group">
									 <div class="input-group-addon">
										 <span class="glyphicon glyphicon-th-list"></span>
									 </div>
									 <input id="amka" name="amka" type="text" placeholder="Αριθμός Μητρώου Κοινωνικής Ασφάλισης" class="form-control" maxlength="11" onkeydown="return onlyNumbers(event);">
									</div>
								</div>
							</div>

							<div class="form-group">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-8">
									<div class="input-group">
									 <div class="input-group-addon">
										 <span class="glyphicon glyphicon-th-list"></span>
									 </div>
									 <input id="adt" name="adt" type="text" placeholder="Αριθμός Δελτίου Ταυτότητας" class="form-control" maxlength="8" >
									</div>
								</div>
							</div>

							<div class="form-group">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-8">
									<div class="input-group">
									 <div class="input-group-addon">
										 <span class="glyphicon glyphicon-calendar"></span>
									 </div>
									 <input id="bday" name="bday" type="text" placeholder="Ημερομηνία Γέννησης - HH/MM/EEEE" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<span class="col-md-2 col-md-offset-2 text-center"></span>
								<div class="col-md-6">
									<button type="submit" class="btn btn-primary btn-md margin-buttons"><span class="glyphicon glyphicon-log-in"></span> Εγγραφή </button>
									<button type="reset" class="btn btn-danger btn-md margin-buttons"><span class="glyphicon glyphicon-remove"></span> Εκκαθάριση Πεδίων </button>
								</div>
							</div>
						</fieldset>
					</form>

						<div id="displayOnError"> </div>

				</div>
			</div>
			<?php
		}
		?>
  </body>
</html>
