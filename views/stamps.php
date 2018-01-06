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
		<link rel="stylesheet" type="text/css" href="css/form.css">
		<link rel="stylesheet" type="text/css" href="css/error_js.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="scripts/backToTopButton.js"></script>
		<script src="scripts/validateStamps.js"></script>
		<script src="scripts/onlyNumbers.js"></script>

		<script src="scripts/validateFName.js"></script>
		<script src="scripts/validateLName.js"></script>
		<script src="scripts/validateNumber.js"></script>
		<script src="scripts/validateAdt.js"></script>
		<script src="scripts/validateBday.js"></script>
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
		if ( isset( $_SESSION['uid'] ) )
		{ ?>
	    <div class="well">
	      <h2 class="header text-center"> Παρουσίαση Ενσήμων </h2>

	      <div class="panel-group">

	        <div class="panel panel-info">
	          <div class="panel-heading">Συνολικά Ένσημα</div>

	          <div class="panel-body">
	            <span class="col-md-2 attribute"><?php echo $user['stamps']; ?></span>
	          </div>
	        </div>

	        <div class="panel panel-info">
	          <div class="panel-heading">Ένσημα προηγούμενου μήνα</div>

	          <div class="panel-body">
	            <span class="col-md-2 attribute"><?php echo user['stamps_this_month']; ?></span>
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

							<p class="text-left footnote"> Παρακαλώ συπληρώστε όλα τα πεδία της φόρμας με ελληνικούς ή λατινικούς χαρακτήρες. Μπορείτε να παραλείψετε τους τόνους.
								Αναγκαία η χρήση διαλυτικών όπου χρειάζεται.
							</p>

							<div class="form-group" id="fnameForm">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-8">
									<label class="form-label" for="fname">Όνομα</label>
									<div class="input-group">
									 <div class="input-group-addon">
										 <span class="glyphicon glyphicon-user"></span>
									 </div>
									 <input id="fname" name="fname" type="text" placeholder="πχ Αλέξανδρος, Χρήστος Χαράλαμπος, Marios" class="form-control" onblur="validateFName('fnameForm', 'fname', 'displayOnErrorFname')">
									</div>

									<div id="displayOnErrorFname"> </div>

								</div>
							</div>

							<div class="form-group" id="lnameForm">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-8">
									<label class="form-label" for="lname">Επίθετο</label>
									<div class="input-group">
									 <div class="input-group-addon">
										 <span class="glyphicon glyphicon-user"></span>
									 </div>
									 <input id="lname" name="lname" type="text" placeholder="πχ Λοΐζος, Douglas" class="form-control" onblur="validateLName('lnameForm', 'lname', 'displayOnErrorLname')">
									</div>

									<div id="displayOnErrorLname"> </div>

								</div>
							</div>

							<div class="form-group" id="amkaForm">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-8">
									<label class="form-label" for="amka">Αριθμός Μητρώου Κοινωνικής Ασφάλισης</label>
									<div class="input-group">
									 <div class="input-group-addon">
										 <span class="glyphicon glyphicon-th-list"></span>
									 </div>
									 <input id="amka" name="amka" type="text" placeholder="πχ 19129612345" class="form-control" maxlength="11" onkeydown="return onlyNumbers(event);" onblur="validateNumber('amkaForm', 'amka', 'displayOnErrorAmka', 11)">
									</div>

									<div id="displayOnErrorAmka"> </div>

								</div>
							</div>

							<div class="form-group" id="adtForm">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-8">
									<label class="form-label" for="adt">Αριθμός Δελτίου Ταυτότητας</label>
									<div class="input-group">
									 <div class="input-group-addon">
										 <span class="glyphicon glyphicon-th-list"></span>
									 </div>
									 <input id="adt" name="adt" type="text" placeholder="πχ AH542412" class="form-control" maxlength="8" onblur="validateAdt('adtForm', 'adt', 'displayOnErrorAdt')">
									</div>

									<div id="displayOnErrorAdt"> </div>

								</div>
							</div>

							<div class="form-group" id="bdayForm">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-8">
									<label class="form-label" for="bday">Ημερομηνία Γέννησης</label>
									<div class="input-group">
									 <div class="input-group-addon">
										 <span class="glyphicon glyphicon-calendar"></span>
									 </div>
									 <input id="bday" name="bday" type="text" placeholder="πχ 19/12/96" maxlength="10 "class="form-control" onblur="validateBday('bdayForm', 'bday', 'displayOnErrorBday')">
									</div>

									<div id="displayOnErrorBday"> </div>

								</div>
							</div>

							<div class="form-group">
								<span class="col-md-2 col-md-offset-2 text-center"></span>
								<div class="col-md-6">
									<button type="submit" class="btn btn-primary btn-md margin-buttons"><span class="glyphicon glyphicon-log-in"></span> Υποβολή </button>
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
