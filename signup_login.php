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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            <form class="form-horizontal" method="post">
  						<fieldset>
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
                       <span class="glyphicon glyphicon-warning-sign"></span>
                     </div>
                     <input id="password" name="password" type="password" placeholder="Κωδικός πρόσβασης" class="form-control">
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
          </div>
				</div>
      </div>

      <div id="Eggrafi" class="tab-pane fade">
				<div class="well well-sm">
					<legend class="text-center header">Δεν είστε χρήστης; Εγγραφείτε δωρεάν. </legend>
          <div class="well well-sm">
            <form class="form-horizontal" method="post">
              <fieldset>

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
                     <input id="afm" name="afm" type="number" placeholder="Αριθμός Φορολογικού Μητρώου" class="form-control">
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
                     <input id="amka" name="amka" type="number" placeholder="Αριθμός Μητρώου Κοινωνικής Ασφάλισης" class="form-control">
                    </div>
                  </div>
                </div>

								<div class="form-group">
									<span class="col-md-1 col-md-offset-1 text-center"></span>
									<div class="col-md-8">
										<div class="input-group">
										 <div class="input-group-addon">
											 <span class="glyphicon glyphicon-home"></span>
										 </div>
										 <input id="address" name="address" type="text" placeholder="Διεύθυνση" class="form-control">
										</div>
									</div>
								</div>

								<div class="form-group">
									<span class="col-md-1 col-md-offset-1 text-center"></span>
									<div class="col-md-8">
										<div class="input-group">
										 <div class="input-group-addon">
											 <span class="glyphicon glyphicon-envelope"></span>
										 </div>
										 <input id="postal" name="postal" type="number" placeholder="Ταχυδρομικός Κώδικας" class="form-control">
										</div>
									</div>
								</div>

								<div class="form-group">
									<span class="col-md-1 col-md-offset-1 text-center"></span>
									<div class="col-md-8">
										<div class="input-group">
										 <div class="input-group-addon">
											 <span class="glyphicon glyphicon-home"></span>
										 </div>
										 <input id="area" name="area" type="text" placeholder="Περιοχή" class="form-control">
										</div>
									</div>
								</div>

                <div class="form-group">
									<span class="col-md-2 col-md-offset-2 text-center"></span>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-md" style="margin:10px"><span class="glyphicon glyphicon-log-in"></span> Εγγραφή </button>
										<button type="submit" class="btn btn-danger btn-md" style="margin:10px"><span class="glyphicon glyphicon-remove"></span> Εκκαθάριση Πεδίων </button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
				</div>
      </div>

    </div>
  </body>
</html>
