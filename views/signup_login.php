<!doctype html>
<html lang="el">
	<head>
		<title>Εγγραφείτε/Συνδεθείτε</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- NavBar css -->
		<link rel="stylesheet" type="text/css" href="css/navbar.css">
		<link rel="stylesheet" type="text/css" href="css/button.css">
		<link rel="stylesheet" type="text/css" href="css/container.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/navtabs.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/error_text.css">
		<link rel="stylesheet" type="text/css" href="css/signup_login.css">
		<link rel="stylesheet" type="text/css" href="css/footnote.css">
		<link rel="stylesheet" type="text/css" href="css/backToTopButton.css">
		<link rel="stylesheet" type="text/css" href="css/form.css">
		<link rel="stylesheet" type="text/css" href="css/error_js.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="scripts/backToTopButton.js"></script>

		<script src="scripts/validateLogIn.js"></script>
		<script src="scripts/validateSignUp.js"></script>

		<script src="scripts/validateEmail.js"></script>
		<script src="scripts/validateEmailNO.js"></script>
		<script src="scripts/validateLName.js"></script>
		<script src="scripts/validateNumber.js"></script>
		<script src="scripts/validateFName.js"></script>
		<script src="scripts/validatePassword.js"></script>
		<script src="scripts/validatePasswordNO.js"></script>
		<script src="scripts/validateAdt.js"></script>
		<script src="scripts/validateBday.js"></script>
		<script src="scripts/validateArea.js"></script>
		<script src="scripts/validateStreet.js"></script>
		<script src="scripts/validateDoubleField.js"></script>
		<script src="scripts/notEmpty.js"></script>

		<script src="scripts/onlyNumbers.js"></script>
	</head>

	<body class="background-color">
		<!--- include to navbar-->
		<?php	require 'navbar.php' ;?>
		<!-- include to koubi gia epistrofi stin korufi-->
		<?php require 'backToTopButton.php' ;?>
		<!--- set to path-->
		<h5> <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b></a> > <a href="signup_login.php"> <b> Είσοδος/Εγγραφή </b></a> </h5>

    <ul class="nav nav-tabs padding nav-justified padding-lr">
			<?php if (isset($login)) {?>
			<li class="active tab_header"><a data-toggle="tab" href="#Sundesi"> <b>Σύνδεση </b></a></li>
			<li><a data-toggle="tab" href="#Eggrafi" class="tab_header"> <b> Εγγραφή </b></a></li>
			<?php } else { ?>
			<li><a data-toggle="tab" href="#Sundesi" class= "tab_header"> <b>Σύνδεση </b></a></li>
			<li class="active tab_header"><a data-toggle="tab" href="#Eggrafi"> <b> Εγγραφή </b></a></li>
			<?php } ?>
		</ul>

    <div class="tab-content padding dimensions padding-lr">

			<?php if (isset($login)) {?>
      <div id="Sundesi" class="tab-pane fade in active">
			<?php } else { ?>
			<div id="Sundesi" class="tab-pane fade">
		 	<?php } ?>
				<div class="well">
					<h1 class="text-center header">Είστε χρηστης της πλατφόρμας μας; Παρακαλώ συνδεθείτε. </h1>

            <form class="form-horizontal" method="post" name="loginForm" onsubmit="return validateLogIn()">
  						<fieldset>
  							<div class="form-group" id="emailForm_l">
  								<span class="col-md-1 col-md-offset-1 text-center"></span>
  								<div class="col-md-8">
										<label class="form-label" for="email_l">Ηλεκτρονική Διεύθυνση E-mail</label>
  									<div class="input-group">
  									 <div class="input-group-addon">
  										 @
  									 </div>
  									 <input id="email_l" name="email" type="text" placeholder="πχ user@example.com" class="form-control" onchange="validateEmailNO('emailForm_l', 'email_l', 'displayOnErrorEmail_l')">
  									</div>

										<div id="displayOnErrorEmail_l"> </div>

  								</div>
  							</div>

                <div class="form-group" id="passwordForm_l">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
										<label class="form-label" for="password_l">Κωδικός πρόσβασης</label>
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-lock"></span>
                     </div>
                     <input id="password_l" name="password" type="password" placeholder="*******" class="form-control" maxlength="24" onchange="validatePasswordNO('passwordForm_l', 'password_l', 'displayOnErrorPassword_l', 8, 24)">
                    </div>

										<div id="displayOnErrorPassword_l"> </div>

                  </div>
                </div>

								<div class="form-group">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
										<div class="checkbox">
										 <label><input type="checkbox" name="persistent" value="persistent">Να παραμείνω συνδεδεμένος.</label><br>
									 	</div>
                  </div>
                </div>

								<div class="form-group">
									<span class="col-md-1 col-md-offset-1 text-left"></span>
									<div class="col-md-8">
	 									<a href="#">Ξεχάσατε τον κωδικό σας; </a>
									</div>
								</div>

  							<div class="form-group">
  								<div class="col-md-12 text-center">
  									<button type="submit" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-log-in"></span> Σύνδεση </button>
  								</div>
  							</div>
  						</fieldset>
  					</form>

						<div id="displayOnError_l"> </div>

				</div>
      </div>

			<?php if (isset($login)) {?>
      <div id="Eggrafi" class="tab-pane fade">
			<?php } else { ?>
			<div id="Eggrafi" class="tab-pane fade in active">
      <?php } ?>
				<div class="well">
					<h1 class="text-center header">Δεν είστε χρήστης; Εγγραφείτε δωρεάν. </h1>
            <form class="form-horizontal" method="post" name="signupForm" onsubmit="return validateSignUp()">
              <fieldset>

								<p class="text-center footnote"> Παρακαλώ συπληρώστε όλα τα πεδία της φόρμας με ελληνικούς ή λατινικούς χαρακτήρες. Μπορείτε να παραλείψετε τους τόνους.
									Αναγκαία η χρήση διαλυτικών όπου χρειάζεται.
								</p>

                <div class="form-group" id="fNameForm">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
										<label class="form-label" for="fname">Όνομα</label>
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-user"></span>
                     </div>
                     <input id="fname" name="fname" type="text" placeholder="πχ Αλέξανδρος, Χρήστος Χαράλαμπος, Marios" class="form-control" onchange="validateFName('fNameForm', 'fname', 'displayOnErrorFName')">
                    </div>

										<div id="displayOnErrorFName"> </div>

                  </div>
                </div>

                <div class="form-group" id="lNameForm">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
										<label class="form-label" for="lname">Επίθετο</label>
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-user"></span>
                     </div>
                     <input id="lname" name="lname" type="text" placeholder="πχ Λοΐζος, Douglas" class="form-control" onchange="validateLName('lNameForm', 'lname', 'displayOnErrorLName')">
                    </div>

										<div id="displayOnErrorLName"> </div>

                  </div>
                </div>

                <div class="form-group" id="emailForm">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
										<label class="form-label" for="email">Ηλεκτρονική Διεύθυνση E-mail</label>
                    <div class="input-group">
                     <div class="input-group-addon">
                       @
                     </div>
                     <input id="email" name="email" type="email" placeholder="πχ user@example.com" class="form-control" onchange="validateEmail('emailForm', 'email', 'displayOnErrorEmail')">
                    </div>

										<div id="displayOnErrorEmail"> </div>

                  </div>
                </div>

								<div class="form-group" id="reEmailForm">
									<span class="col-md-1 col-md-offset-1 text-center"></span>
									<div class="col-md-8">
										<label class="form-label" for="reemail">Επαλήθευση Ηλεκτρονική Διεύθυνση E-mail</label>
										<div class="input-group">
										 <div class="input-group-addon">
											 @
										 </div>
										 <input id="reemail" name="reemail" type="email" placeholder="πχ user@example.com" class="form-control" onchange="validateEmail('reEmailForm', 'reemail', 'displayOnErrorReEmail')" onfocusout="validateDoubleField('email', 'reemail', 'emailForm', 'reEmailForm', 'displayOnErrorDoubleFieldEmail', 'Οι ηλεκτρονικές διευθύνσεις email δεν είναι ίδιες.')">
										</div>

										<div id="displayOnErrorReEmail"> </div>
										<div id="displayOnErrorDoubleFieldEmail"> </div>

									</div>
								</div>

                <div class="form-group" id="passwordForm">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
										<label class="form-label" for="password">Κωδικός Πρόσβασης</label>
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-lock"></span>
                     </div>
                     <input id="password" name="password" type="password" placeholder="******" class="form-control" maxlength="24" onchange="validatePassword('passwordForm', 'password', 'displayOnErrorPassword', 8, 24)">
                    </div>

										<div id="displayOnErrorPassword"> </div>

                  </div>
                </div>

                <div class="form-group" id="rePasswordForm">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
										<label class="form-label" for="repassword">Επαλήθευση Κωδικού Πρόσβασης</label>
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-lock"></span>
                     </div>
                     <input id="repassword" name="repassword" type="password" placeholder="******" class="form-control" maxlength="24" onchange="validatePassword('rePasswordForm', 'repassword', 'displayOnErrorRePassword', 8, 24)" onfocusout="validateDoubleField('password', 'repassword', 'passwordForm', 'rePasswordForm', 'displayOnErrorDoubleFieldPasword', 'Οι κωδικοί πρόσβασης δεν είναι ίδιοι.')">
                    </div>

										<div id="displayOnErrorRePassword"> </div>
										<div id="displayOnErrorDoubleFieldPasword"> </div>

                  </div>
                </div>

                <div class="form-group" id="afmForm">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
										<label class="form-label" for="afm">Αριθμός Φορολογικού Μητρώου</label>
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-list"></span>
                     </div>
                     <input id="afm" name="afm" type="text" placeholder="πχ 199552722" class="form-control" maxlength="9" onkeydown="return onlyNumbers(event);" onchange="validateNumber('afmForm', 'afm', 'displayOnErrorAfm', 9);">
                    </div>

										<div id="displayOnErrorAfm"> </div>

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
                     <input id="amka" name="amka" type="text" placeholder="πχ 19129612345" class="form-control" maxlength="11" onkeydown="return onlyNumbers(event);" onchange="validateNumber('amkaForm', 'amka', 'displayOnErrorAmka', 11);">
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
                     <input id="adt" name="adt" type="text" placeholder="πχ AH542412" class="form-control" maxlength="8" onchange="validateAdt('adtForm', 'adt', 'displayOnErrorAdt');">
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
                     <input id="bday" name="bday" type="text" placeholder="πχ 19/12/96" maxlength="10" class="form-control" onchange="validateBday('bdayForm', 'bday', 'displayOnErrorBday');">
                    </div>

										<div id="displayOnErrorBday"> </div>

                  </div>
                </div>

								<div class="form-group" id="addressForm">
									<span class="col-md-1 col-md-offset-1 text-center"></span>
									<div class="col-md-4">
										<label class="form-label" for="street">Οδός</label>
										<div class="input-group">
										 <div class="input-group-addon">
											 <span class="glyphicon glyphicon-home"></span>
										 </div>
										 <input id="street" name="street" type="text" placeholder="πχ Στρατηγού Πλαστήρα, Stratigou Plastira" class="form-control" onchange="validateArea('addressForm', 'street', 'displayOnErrorStreet')">
										</div>

										<div id="displayOnErrorStreet"> </div>

									</div>

									<div class="col-md-4">
										<label class="form-label" for="streetNum">Αριθμός Οδού</label>
										<div class="input-group">
										 <div class="input-group-addon">
											 <span class="glyphicon glyphicon-home"></span>
										 </div>
										 <input id="streetNum" name="streetNum" type="text" placeholder="πχ 4" class="form-control" maxlength="4" onkeydown="return onlyNumbers(event);" onchange="notEmpty('addressForm', 'streetNum', 'displayOnErrorStreetNum');">
										</div>

										<div id="displayOnErrorStreetNum"> </div>

									</div>
							</div>

							<div class="form-group" id="areaForm">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-4">
									<label class="form-label" for="area">Περιοχή</label>
									<div class="input-group">
									 <div class="input-group-addon">
										 <span class="glyphicon glyphicon-home"></span>
									 </div>
									 <input id="area" name="area" type="text" placeholder="πχ Νέα Σμύρνη, Nea Smurni" class="form-control" onchange="validateArea('areaForm', 'area', 'displayOnErrorArea')">
									</div>

									<div id="displayOnErrorArea"> </div>

								</div>

									<div class="col-md-4">
										<label class="form-label" for="postal">Ταχυδρομικός Κώδικας</label>
										<div class="input-group">
										 <div class="input-group-addon">
											 <span class="glyphicon glyphicon-envelope"></span>
										 </div>
										 <input id="postal" name="postal" type="text" placeholder="πχ 18756" class="form-control" maxlength="5" onkeydown="return onlyNumbers(event);" onchange="validateNumber('areaForm', 'postal', 'displayOnErrorPostal', 5);">
										</div>

										<div id="displayOnErrorPostal"> </div>

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

    </div>

  </body>
</html>
