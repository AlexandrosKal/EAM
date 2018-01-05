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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="scripts/backToTopButton.js"></script>

		<script src="scripts/validateLogIn.js"></script>
		<script src="scripts/validateSignUp.js"></script>

		<script src="scripts/validateEmail.js"></script>
		<script src="scripts/validateLName.js"></script>
		<script src="scripts/validateNumber.js"></script>
		<script src="scripts/validateFName.js"></script>
		<script src="scripts/validatePassword.js"></script>
		<script src="scripts/validateAdt.js"></script>
		<script src="scripts/validateBday.js"></script>
		<script src="scripts/validateArea.js"></script>
		<script src="scripts/validateStreet.js"></script>
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
		  <li class="active tab_header"><a data-toggle="tab" href="#Sundesi"> <b>Σύνδεση </b></a></li>
		  <li><a data-toggle="tab" href="#Eggrafi" class="tab_header"> <b> Εγγραφή </b></a></li>
		</ul>

    <div class="tab-content padding dimensions padding-lr">

      <div id="Sundesi" class="tab-pane fade in active">
				<div class="well well-sm">
					<h1 class="text-center header">Είστε χρηστης της πλατφόρμας μας; Παρακαλώ συνδεθείτε. </h1>

          <div class="well well-sm">
            <form class="form-horizontal" method="post" name="loginForm" onsubmit="return validateLogIn()">
  						<fieldset>
  							<div class="form-group" id="emailForm_l">
  								<span class="col-md-1 col-md-offset-1 text-center"></span>
  								<div class="col-md-8">
  									<div class="input-group">
  									 <div class="input-group-addon">
  										 @
  									 </div>
  									 <input id="email_l" name="email" type="text" placeholder="Ηλεκτρονική Διεύθυνση E-mail" class="form-control" onblur="validateEmail('emailForm_l', 'email_l', 'displayOnErrorEmail_l')">
  									</div>

										<div id="displayOnErrorEmail_l"> </div>

  								</div>
  							</div>

                <div class="form-group" id="passwordForm_l">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-lock"></span>
                     </div>
                     <input id="password_l" name="password" type="password" placeholder="Κωδικός πρόσβασης" class="form-control" maxlength="24" onblur="validatePassword('passwordForm_l', 'password_l', 'displayOnErrorPassword_l', 8, 24)">
                    </div>

										<div id="displayOnErrorPassword_l"> </div>

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
      </div>

      <div id="Eggrafi" class="tab-pane fade">
				<div class="well well-sm">
					<h1 class="text-center header">Δεν είστε χρήστης; Εγγραφείτε δωρεάν. </h1>
          <div class="well well-sm">
            <form class="form-horizontal" method="post" name="signupForm" onsubmit="return validateSignUp()">
              <fieldset>

								<p class="text-center footnote"> Παρακαλώ συπληρώστε όλα τα πεδία της φόρμας με ελληνικούς ή λατινικούς χαρακτήρες. Μπορείτε να παραλείψετε τους τόνους.
									Αναγκαία η χρήση διαλυτικών όπου χρειάζεται.
								</p>

                <div class="form-group" id="fNameForm">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-user"></span>
                     </div>
                     <input id="fname" name="fname" type="text" placeholder="Όνομα" class="form-control" onblur="validateFName('fNameForm', 'fname', 'displayOnErrorFName')">
                    </div>

										<div id="displayOnErrorFName"> </div>

                  </div>
                </div>

                <div class="form-group" id="lNameForm">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-user"></span>
                     </div>
                     <input id="lname" name="lname" type="text" placeholder="Επίθετο" class="form-control" onblur="validateLName('lNameForm', 'lname', 'displayOnErrorLName')">
                    </div>

										<div id="displayOnErrorLName"> </div>

                  </div>
                </div>

                <div class="form-group" id="emailForm">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
                    <div class="input-group">
                     <div class="input-group-addon">
                       @
                     </div>
                     <input id="email" name="email" type="email" placeholder="Ηλεκτρονική Διεύθυνση E-mail" class="form-control" onblur="validateEmail('emailForm', 'email', 'displayOnErrorEmail')">
                    </div>

										<div id="displayOnErrorEmail"> </div>

                  </div>
                </div>

								<div class="form-group" id="reEmailForm">
									<span class="col-md-1 col-md-offset-1 text-center"></span>
									<div class="col-md-8">
										<div class="input-group">
										 <div class="input-group-addon">
											 @
										 </div>
										 <input id="reemail" name="reemail" type="email" placeholder="Επαλήθευση Ηλεκτρονικής Διεύθυνσης E-mail" class="form-control" onblur="validateEmail('reEmailForm', 'reemail', 'displayOnErrorReEmail')">
										</div>

										<div id="displayOnErrorReEmail"> </div>

									</div>
								</div>

                <div class="form-group" id="passwordForm">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-lock"></span>
                     </div>
                     <input id="password" name="password" type="password" placeholder="Κωδικός Πρόσβασης" class="form-control" maxlength="24" onblur="validatePassword('passwordForm', 'password', 'displayOnErrorPassword', 8, 24)">
                    </div>

										<div id="displayOnErrorPassword"> </div>

                  </div>
                </div>

                <div class="form-group" id="rePasswordForm">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-lock"></span>
                     </div>
                     <input id="repassword" name="repassword" type="password" placeholder="Επαλήθευση Κωδικού Πρόσβασης" class="form-control" maxlength="24" onblur="validatePassword('rePasswordForm', 'repassword', 'displayOnErrorRePassword', 8, 24)">
                    </div>

										<div id="displayOnErrorRePassword"> </div>

                  </div>
                </div>

                <div class="form-group" id="afmForm">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-list"></span>
                     </div>
                     <input id="afm" name="afm" type="text" placeholder="Αριθμός Φορολογικού Μητρώου" class="form-control" maxlength="9" onkeydown="return onlyNumbers(event);" onblur="validateNumber('afmForm', 'afm', 'displayOnErrorAfm', 9);">
                    </div>

										<div id="displayOnErrorAfm"> </div>

                  </div>
                </div>

								<div class="form-group" id="amkaForm">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-th-list"></span>
                     </div>
                     <input id="amka" name="amka" type="text" placeholder="Αριθμός Μητρώου Κοινωνικής Ασφάλισης" class="form-control" maxlength="11" onkeydown="return onlyNumbers(event);" onblur="validateNumber('amkaForm', 'amka', 'displayOnErrorAmka', 11);">
                    </div>

										<div id="displayOnErrorAmka"> </div>

                  </div>
								</div>

								<div class="form-group" id="adtForm">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-th-list"></span>
                     </div>
                     <input id="adt" name="adt" type="text" placeholder="Αριθμός Δελτίου Ταυτότητας" class="form-control" maxlength="8" onblur="validateAdt('adtForm', 'adt', 'displayOnErrorAdt');">
                    </div>

										<div id="displayOnErrorAdt"> </div>

                  </div>
                </div>

								<div class="form-group" id="bdayForm">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-calendar"></span>
                     </div>
                     <input id="bday" name="bday" type="text" placeholder="Ημερομηνία Γέννησης - HH/MM/EEEE" maxlength="10" class="form-control" onblur="validateBday('bdayForm', 'bday', 'displayOnErrorBday');">
                    </div>

										<div id="displayOnErrorBday"> </div>

                  </div>
                </div>

								<div class="form-group" id="addressForm">
									<span class="col-md-1 col-md-offset-1 text-center"></span>
									<div class="col-md-4">
										<div class="input-group">
										 <div class="input-group-addon">
											 <span class="glyphicon glyphicon-home"></span>
										 </div>
										 <input id="street" name="street" type="text" placeholder="Oδός" class="form-control" onblur="validateArea('addressForm', 'street', 'displayOnErrorStreet')">
										</div>

										<div id="displayOnErrorStreet"> </div>

									</div>

									<div class="col-md-4">
										<div class="input-group">
										 <div class="input-group-addon">
											 <span class="glyphicon glyphicon-home"></span>
										 </div>
										 <input id="streetNum" name="streetNum" type="text" placeholder="Αριθμός Οδού" class="form-control" maxlength="4" onkeydown="return onlyNumbers(event);" onblur="notEmpty('addressForm', 'streetNum', 'displayOnErrorStreetNum');">
										</div>

										<div id="displayOnErrorStreetNum"> </div>

									</div>
							</div>

							<div class="form-group" id="areaForm">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-4">
									<div class="input-group">
									 <div class="input-group-addon">
										 <span class="glyphicon glyphicon-home"></span>
									 </div>
									 <input id="area" name="area" type="text" placeholder="Περιοχή" class="form-control" onblur="validateArea('areaForm', 'area', 'displayOnErrorArea')">
									</div>

									<div id="displayOnErrorArea"> </div>

								</div>

									<div class="col-md-4">
										<div class="input-group">
										 <div class="input-group-addon">
											 <span class="glyphicon glyphicon-envelope"></span>
										 </div>
										 <input id="postal" name="postal" type="text" placeholder="Ταχυδρομικός Κώδικας" class="form-control" maxlength="5" onkeydown="return onlyNumbers(event);" onblur="validateNumber('areaForm', 'postal', 'displayOnErrorPostal', 5);">
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

    </div>

  </body>
</html>
