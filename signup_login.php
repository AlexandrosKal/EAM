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
    <link rel="stylesheet" type="text/css" href="css/well.css">
		<link rel="stylesheet" type="text/css" href="css/error_text.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="scripts/validateLogIn.js"></script>
		<script type="text/javascript" src="scripts/validateSignUp.js"></script>
		<script type="text/javascript" src="scripts/onlyNumbers.js"></script>
	</head>

	<body class="bckgrnd">
		<!--- include to navbar-->
		<?php		require 'navbar.php' ;?>
		<!--- set to path-->
		<h5> <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b></a> > <a href="signup_login.php"> <b> Είσοδος/Εγγραφή </b></a> </h5>

    <ul class="nav nav-tabs padding nav-justified" style="padding-right:25em;padding-left:25em">
		  <li class="active tab_header"><a data-toggle="tab" href="#Sundesi"> <b>Σύνδεση </b></a></li>
		  <li><a data-toggle="tab" href="#Eggrafi" class="tab_header"> <b> Εγγραφή </b></a></li>
		</ul>

    <div class="tab-content padding dimensions" style="padding-right:25em;padding-left:25em">

      <div id="Sundesi" class="tab-pane fade in active">
				<div class="well well-sm">
					<legend class="text-center header">Είστε χρηστης της πλατφόρμας μας; Παρακαλώ συνδεθείτε. </legend>

          <div class="well well-sm">
            <form class="form-horizontal" method="post" name="loginForm" onsubmit="return validateLogIn()">
  						<fieldset>
  							<div class="form-group">
  								<span class="col-md-1 col-md-offset-1 text-center"></span>
  								<div class="col-md-8">
  									<div class="input-group">
  									 <div class="input-group-addon">
  										 @
  									 </div>
  									 <input id="email_l" name="email" type="text" placeholder="Ηλεκτρονική Διεύθυνση E-mail" class="form-control">
  									</div>
  								</div>
  							</div>

                <div class="form-group">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-warning-sign"></span>
                     </div>
                     <input id="password_l" name="password" type="password" placeholder="Κωδικός πρόσβασης" class="form-control">
                    </div>
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
					<legend class="text-center header">Δεν είστε χρήστης; Εγγραφείτε δωρεάν. </legend>
          <div class="well well-sm">
            <form class="form-horizontal" method="post" name="signupForm" onsubmit="return validateSignUp()">
              <fieldset>

								<p class="text-center" style="color:#36A0FF;"> Παρακαλώ συπληρώστε όλα τα πεδία της φόρμας με ελληνικούς ή λατινικούς χαρακτήρες. Μπορείτε να παραλείψετε τους τόνους.
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
                       @
                     </div>
                     <input id="email" name="email" type="email" placeholder="Ηλεκτρονική Διεύθυνση E-mail" class="form-control">
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
										 <input id="reemail" name="reemail" type="email" placeholder="Επαλήθευση Ηλεκτρονικής Διεύθυνσης E-mail" class="form-control">
										</div>
									</div>
								</div>

                <div class="form-group">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-warning-sign"></span>
                     </div>
                     <input id="password" name="password" type="password" placeholder="Κωδικός Πρόσβασης" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-warning-sign"></span>
                     </div>
                     <input id="repassword" name="repassword" type="password" placeholder="Επαλήθευση Κωδικού Πρόσβασης" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <span class="col-md-1 col-md-offset-1 text-center"></span>
                  <div class="col-md-8">
                    <div class="input-group">
                     <div class="input-group-addon">
                       <span class="glyphicon glyphicon-list"></span>
                     </div>
                     <input id="afm" name="afm" type="text" placeholder="Αριθμός Φορολογικού Μητρώου" class="form-control" maxlength="9" onkeypress="return onlyNumbers(event)">
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
                     <input id="amka" name="amka" type="text" placeholder="Αριθμός Μητρώου Κοινωνικής Ασφάλισης" class="form-control" maxlength="11" onkeypress="return onlyNumbers(event)">
                    </div>
                  </div>
                </div>

								<div class="form-group">
									<span class="col-md-1 col-md-offset-1 text-center"></span>
									<div class="col-md-4">
										<div class="input-group">
										 <div class="input-group-addon">
											 <span class="glyphicon glyphicon-home"></span>
										 </div>
										 <input id="street" name="street" type="text" placeholder="Oδός" class="form-control">
										</div>
									</div>

								<span>
									<div class="col-md-4">
										<div class="input-group">
										 <div class="input-group-addon">
											 <span class="glyphicon glyphicon-home"></span>
										 </div>
										 <input id="streetNum" name="streetNum" type="text" placeholder="Αριθμός Οδού" class="form-control" maxlength="4" onkeypress="return onlyNumbers(event)">
										</div>
									</div>
								</span>
							</div>

							<div class="form-group">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-4">
									<div class="input-group">
									 <div class="input-group-addon">
										 <span class="glyphicon glyphicon-home"></span>
									 </div>
									 <input id="area" name="area" type="text" placeholder="Περιοχή" class="form-control">
									</div>
								</div>

								<span>
									<div class="col-md-4">
										<div class="input-group">
										 <div class="input-group-addon">
											 <span class="glyphicon glyphicon-envelope"></span>
										 </div>
										 <input id="postal" name="postal" type="text" placeholder="Ταχυδρομικός Κώδικας" class="form-control" maxlength="5" onkeypress="return onlyNumbers(event)">
										</div>
									</div>
								</span>
							</div>

                <div class="form-group">
									<span class="col-md-2 col-md-offset-2 text-center"></span>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-md" style="margin:10px"><span class="glyphicon glyphicon-log-in"></span> Εγγραφή </button>
										<button type="reset" class="btn btn-danger btn-md" style="margin:10px"><span class="glyphicon glyphicon-remove"></span> Εκκαθάριση Πεδίων </button>
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
