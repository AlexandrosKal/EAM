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
		<link rel="stylesheet" type="text/css" href="css/form.css">
		<link rel="stylesheet" type="text/css" href="css/error_js.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="scripts/validateChangePass.js"></script>
		<script src="scripts/validateChangeEmail.js"></script>
		<script src="scripts/backToTopButton.js"></script>

		<script src="scripts/validateEmail.js"></script>
		<script src="scripts/validatePassword.js"></script>
		<script src="scripts/validateDoubleField.js"></script>
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
						<span class="col-md-2 attribute_value"> <?php echo "$user['first_name']"; ?> </span>
					</div>

					<div class="panel-body">
						<span class="col-md-2 attribute">Επίθετο:</span>
						<span class="col-md-2 attribute_value"><?php echo "$user['last_name']"; ?></span>
				 </div>

					<div class="panel-body">
						<span class="col-md-2 attribute">Ηλεκτρονική Διεύθυνση: </span>
						<span class="col-md-2 attribute_value"><?php echo "$user['email']"; ?></span>
					</div>
				</div>

				<div class="panel panel-info">
					<div class="panel-heading">Διεύθυνση &amp; Περιοχή</div>

					<div class="panel-body">
						<span class="col-md-2 attribute">Διεύθυνση:</span>
						<span class="col-md-2 attribute_value"><?php echo "$user['street'].' '.$user['street_num']"; ?></span>
					</div>

					<div class="panel-body">
						<span class="col-md-2 attribute">Περιοχή:</span>
						<span class="col-md-2 attribute_value"><?php echo "$user['area']" ?></span>
					</div>

					<div class="panel-body">
						<span class="col-md-2 attribute">Ταχυδρομικός κώδικας:</span>
						<span class="col-md-2 attribute_value"><?php echo "$user['postal']" ?></span>
					</div>

				</div>
				<div class="panel panel-info">
					<div class="panel-heading"> Μοναδικοί Αριθμοί Επιβεβαίωσης</div>

					<div class="panel-body">
						<span class="col-md-2 attribute"><abbr title="Αριθμός Μητρώου Κοινωνικής Ασφάλισης"> ΑΜΚΑ: </abbr> </span>
						<span class="col-md-2 attribute_value"><?php echo "$user['amka']" ?></span>
					</div>

					<div class="panel-body">
						<span class="col-md-2 attribute"><abbr title="Αριθμός Φορολογικού Μητρώου"> ΑΦΜ: </abbr></span>
						<span class="col-md-2 attribute_value"><?php echo "$user['afm']" ?></span>
					</div>

					<div class="panel-body">
						<span class="col-md-2 attribute"><abbr title="Αριθμός Δελτίου Ταυτότητας"> ΑΔΤ: </abbr></span>
						<span class="col-md-2 attribute_value"><?php echo "$user['id_num']" ?></span>
					</div>

				</div>
			</div>

		</div>

		<div class="well">
			<h2 class="header text-center"> Αλλαγή Κωδικού Πρόσβασης </h2>
			<form class="form-horizontal" method="post" name="changePassForm" onsubmit="return validateChangePass();">
				<fieldset>

					<div class="form-group" id="current-passwordForm">
						<span class="col-md-1 col-md-offset-1 text-center"></span>
						<div class="col-md-8">
							<label class="form-label" for="current-password">Τωρινός Κωδικός Πρόσβασης</label>
							<div class="input-group">
							 <div class="input-group-addon">
								 <span class="glyphicon glyphicon-lock"></span>
							 </div>
							 <input id="current-password" name="current-password" type="password" maxlength="10" placeholder="******" class="form-control" onchange="validatePassword('current-passwordForm', 'current-password', 'displayOnErrorCurrentPassword', 8, 10)">
							</div>

							<div id="displayOnErrorCurrentPassword"> </div>

						</div>
					</div>

					<div class="form-group" id="new-passwordForm">
						<span class="col-md-1 col-md-offset-1 text-center"></span>
						<div class="col-md-8">
							<label class="form-label" for="new-password">Καινούριος Κωδικός Πρόσβασης</label>
							<div class="input-group">
							 <div class="input-group-addon">
								 <span class="glyphicon glyphicon-lock"></span>
							 </div>
							 <input id="new-password" name="new-password" type="password" maxlength="24" placeholder="******" class="form-control" onchange="validatePassword('new-passwordForm', 'new-password', 'displayOnErrorNewPassword', 8, 24)">
							</div>

							<div id="displayOnErrorNewPassword"> </div>

						</div>
					</div>

					<div class="form-group" id="renew-passwordForm">
						<span class="col-md-1 col-md-offset-1 text-center"></span>
						<div class="col-md-8">
							<label class="form-label" for="renew-password">Επαλήθευση Καινούριου Κωδικού Πρόσβασης</label>
							<div class="input-group">
							 <div class="input-group-addon">
								 <span class="glyphicon glyphicon-lock"></span>
							 </div>
							 <input id="renew-password" name="renew-password" type="password" maxlength="24" placeholder="******" class="form-control" onchange="validatePassword('renew-passwordForm', 'renew-password', 'displayOnErrorReNewPassword', 8, 24)" onfocusout="validateDoubleField('new-password', 'renew-password', 'new-passwordForm', 'renew-passwordForm', 'displayOnErrorDoubleFieldPassword', 'Οι κωδικοί πρόσβασης δεν είναι ίδιοι.')">
							</div>

							<div id="displayOnErrorReNewPassword"> </div>
							<div id="displayOnErrorDoubleFieldPassword"> </div>

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
			<form class="form-horizontal" method="post" name="changeEmailForm" onsubmit="return validateChangeEmail();">
				<fieldset>

					<div class="form-group" id="current-emailForm">
						<span class="col-md-1 col-md-offset-1 text-center"></span>
						<div class="col-md-8">
							<label class="form-label" for="current-email">Τωρινή Ηλεκτρονική Διεύθυνση E-mail</label>
							<div class="input-group">
							 <div class="input-group-addon">
								 @
							 </div>
							 <input id="current-email" name="current-email" type="text" placeholder="πχ user@example.com" class="form-control" onchange="validateEmail('current-emailForm', 'current-email', 'displayOnErrorCurrentEmail')">
							</div>

							<div id="displayOnErrorCurrentEmail"> </div>

						</div>
					</div>

					<div class="form-group" id="new-emailForm">
						<span class="col-md-1 col-md-offset-1 text-center"></span>
						<div class="col-md-8">
							<label class="form-label" for="new-email">Καινούρια Ηλεκτρονική Διεύθυνση E-mail</label>
							<div class="input-group">
							 <div class="input-group-addon">
								 @
							 </div>
							 <input id="new-email" name="new-email" type="text" placeholder="πχ new_user@example.com" class="form-control" onchange="validateEmail('new-emailForm', 'new-email', 'displayOnErrorNewEmail')">
							</div>

							<div id="displayOnErrorNewEmail"> </div>

						</div>
					</div>

					<div class="form-group" id="renew-emailForm">
						<span class="col-md-1 col-md-offset-1 text-center"></span>
						<div class="col-md-8">
							<label class="form-label" for="renew-email">Επαλήθευση Καινούριας Ηλεκτρονικής Διεύθυνσης E-mail</label>
							<div class="input-group">
							 <div class="input-group-addon">
								 @
							 </div>
							 <input id="renew-email" name="renew-email" type="text" placeholder="πχ new_user@example.com" class="form-control" onchange="validateEmail('renew-emailForm', 'renew-email', 'displayOnErrorReNewEmail')" onfocusout="validateDoubleField('new-email', 'renew-email', 'new-emailForm', 'renew-emailForm', 'displayOnErrorDoubleFieldEmail', 'Οι ηλεκτρονικές διευθύνσεις email δεν είναι ίδιες.')">
							</div>

							<div id="displayOnErrorNewEmail"> </div>
							<div id="displayOnErrorDoubleFieldEmail"> </div>

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
