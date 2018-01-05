<!doctype html>
<html lang="el">
	<head>
		<title>Υπηρεσίες Ασφαλισμένων</title>
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

		<script src="scripts/validateChangePass.js"></script>
		<script src="scripts/validateChangeEmail.js"></script>
		<script src="scripts/backToTopButton.js"></script>
		<script src="scripts/backToTopButton.js"></script>
	</head>

	<body class="background-color">
    <!--include to navbar-->
    <?php		require 'navbar.php' ;?>
		<!-- include to koubi gia epistrofi stin korufi-->
		<?php require 'backToTopButton.php' ;?>
    <!-- set to path-->
    <h5> <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b> </a> > <a href="profile.php"> <b> Προφιλ </b> </a></h5>
    <h2 class="page-header"> <b> Προφιλ </b> </h2>

    <div class="well">
			<h2 class="header text-center"> Στοιχεία Χρήστη </h2>

			<div class="panel-group">

				<div class="panel panel-info">
					<div class="panel-heading">Στοιχεία Επικοινωνίας</div>

					<div class="panel-body">
						<span class="col-md-2 attribute">Όνομα:</span>
						<span class="col-md-2 attribute_value">Μάριος</span>
					</div>

					<div class="panel-body">
						<span class="col-md-2 attribute">Επίθετο:</span>
						<span class="col-md-2 attribute_value">Παπαμιχαλόπουλος</span>
				 </div>

					<div class="panel-body">
						<span class="col-md-2 attribute">Ηλεκτρονική Διεύθυνση: </span>
						<span class="col-md-2 attribute_value">papamichalopoulos.m@gmail.com</span>
					</div>
				</div>

				<div class="panel panel-info">
					<div class="panel-heading">Διεύθυνση & Περιοχή</div>

					<div class="panel-body">
						<span class="col-md-2 attribute">Διεύθυνση:</span>
						<span class="col-md-2 attribute_value">Σεϊζάνη 4</span>
					</div>

					<div class="panel-body">
						<span class="col-md-2 attribute">Περιοχή:</span>
						<span class="col-md-2 attribute_value">Κερατσίνι</span>
					</div>

					<div class="panel-body">
						<span class="col-md-2 attribute">Ταχυδρομικός κώδικας:</span>
						<span class="col-md-2 attribute_value">18755</span>
					</div>

				</div>
				<div class="panel panel-info">
					<div class="panel-heading"> Μοναδικοί Αριθμοί Επιβεβαίωσης</div>

					<div class="panel-body">
						<span class="col-md-2 attribute"><abbr title="Αριθμός Μητρώου Κοινωνικής Ασφάλισης"> ΑΜΚΑ: </abbr> </span>
						<span class="col-md-2 attribute_value">19129602934</span>
					</div>

					<div class="panel-body">
						<span class="col-md-2 attribute"><abbr title="Αριθμός Φορολογικού Μητρώου"> ΑΦΜ: </abbr></span>
						<span class="col-md-2 attribute_value">166552722</span>
					</div>

					<div class="panel-body">
						<span class="col-md-2 attribute"><abbr title="Αριθμός Δελτίου Ταυτότητας"> ΑΔΤ: </abbr></span>
						<span class="col-md-2 attribute_value">ΑΗ 543193</span>
					</div>

				</div>
			</div>

		</div>

		<div class="well">
			<h2 class="header text-center"> Αλλαγή Κωδικού Πρόσβασης </h2>
			<form class="form-horizontal" method="post" name="changePassForm" onsubmit="return validateChangePass(); action="profile.php"">
				<fieldset>

					<div class="form-group">
						<span class="col-md-1 col-md-offset-1 text-center"></span>
						<div class="col-md-8">
							<div class="input-group">
							 <div class="input-group-addon">
								 <span class="glyphicon glyphicon-lock"></span>
							 </div>
							 <input id="current-password" name="current-password" type="password" placeholder="Τωρινός Κωδικός Πρόσβασης" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group">
						<span class="col-md-1 col-md-offset-1 text-center"></span>
						<div class="col-md-8">
							<div class="input-group">
							 <div class="input-group-addon">
								 <span class="glyphicon glyphicon-lock"></span>
							 </div>
							 <input id="new-password" name="new-password" type="password" placeholder="Καινούριος Κωδικός Πρόσβασης" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group">
						<span class="col-md-1 col-md-offset-1 text-center"></span>
						<div class="col-md-8">
							<div class="input-group">
							 <div class="input-group-addon">
								 <span class="glyphicon glyphicon-lock"></span>
							 </div>
							 <input id="renew-password" name="renew-password" type="password" placeholder="Επαλήθευση Καινούριου Κωδικού Πρόσβασης" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-12 text-center">
							<button type="submit" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-ok"></span> Αλλαγή Κωδικού Πρόσβασης </button>
							<button type="reset"  class="btn btn-danger btn-md"><span class="glyphicon glyphicon-remove"></span> Εκκαθάριση Πεδίων </button>
						</div>
					</div>

				</fieldset>
			</form>

			<div id="displayOnErrorPass"> </div>

		</div>

		<div class="well">
			<h2 class="header text-center"> Αλλαγή Ηλεκτρονικής Διεύθυνσης E-mail</h2>
			<form class="form-horizontal" method="post" name="changeEmailForm" onsubmit="return validateChangeEmail(); actiion="profile.php"">
				<fieldset>

					<div class="form-group">
						<span class="col-md-1 col-md-offset-1 text-center"></span>
						<div class="col-md-8">
							<div class="input-group">
							 <div class="input-group-addon">
								 @
							 </div>
							 <input id="current-email" name="current-email" type="text" placeholder="Τωρινή Ηλεκτρονική Διεύθυνση E-mail" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group">
						<span class="col-md-1 col-md-offset-1 text-center"></span>
						<div class="col-md-8">
							<div class="input-group">
							 <div class="input-group-addon">
								 @
							 </div>
							 <input id="new-email" name="new-email" type="text" placeholder="Καινούρια Ηλεκτρονική Διεύθυνση E-mail" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group">
						<span class="col-md-1 col-md-offset-1 text-center"></span>
						<div class="col-md-8">
							<div class="input-group">
							 <div class="input-group-addon">
								 @
							 </div>
							 <input id="renew-email" name="renew-email" type="text" placeholder="Επαλήθευση Καινούριας Ηλεκτρονικής Διεύθυνσης E-mail" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-12 text-center">
							<button type="submit" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-ok"></span> Αλλαγή Ηλεκτρονικής Διεύθυνσης E-mail</button>
							<button type="reset"  class="btn btn-danger btn-md"><span class="glyphicon glyphicon-remove"></span> Εκκαθάριση Πεδίων </button>
						</div>
					</div>

				</fieldset>
			</form>

			<div id="displayOnErrorEmail"> </div>

		</div>

  </body>
</html>
