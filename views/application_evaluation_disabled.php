<!doctype html>
<html lang="el">
	<head>
		<title>Αίτηση Αξιολόγησης Αναπηρίας</title>
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
    <link rel="stylesheet" type="text/css" href="css/well.css">
		<link rel="stylesheet" type="text/css" href="css/form.css">
		<link rel="stylesheet" type="text/css" href="css/error_js.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="scripts/backToTopButton.js"></script>
		<script src="scripts/validateApplicationEvaluationDisabled.js"></script>
	</head>

	<body class="background-color">
		<!--- include to navbar-->
		<?php	require 'navbar.php' ;?>
		<!-- include to koubi gia epistrofi stin korufi-->
		<?php require 'backToTopButton.php' ;?>
		<!--- set to path-->
		<h5> <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b></a>
      >
      <a href="services.php"> <b> Υπηρεσίες </b></a>
      >
      <a href="amea.php"> <b> ΑμΕΑ </b></a>
      >
      <a href="application_evaluation_disabled.php"> <b> Αίτηση Aξιολόγησης Αναπηρίας </b></a>
    </h5>

    <h2 class="page-header"> Αίτηση Αξιολόγησης Αναπηρίας</h2>

    <div class="well">
      <h3 class="text-center header"> Παρακαλώ ανεβάστε τα κατάλληλα δικαιολογητικά σε μορφή αρχείων .pdf.</h1>

        <form class="form-horizontal" method="post" enctype="multipart/form-data" name="loginForm" onsubmit="return validateApplicationPension()" action="request.php?type=disabled">
          <fieldset>
          <fieldset>
            <div class="form-group">
              <span class="col-md-1 col-md-offset-1 text-center"></span>
              <div class="col-md-8">
								<label class="form-label" for="dikaiologitiko1">Αίτηση Aξιολόγησης Αναπηρίας</label>
                <div class="input-group">
                 <div class="input-group-addon">
                   <span class="	glyphicon glyphicon-folder-open"></span>
                 </div>
                 <input id="dikaiologitiko1" name="dikaiologitiko1" type="file" class="form-control" accept="application/pdf">
                </div>
              </div>
            </div>

            <div class="form-group">
              <span class="col-md-1 col-md-offset-1 text-center"></span>
              <div class="col-md-8">
								<label class="form-label" for="dikaiologitiko2">Φωτοτυπία Ταυτότητας</label>
                <div class="input-group">
                 <div class="input-group-addon">
                   <span class="	glyphicon glyphicon-folder-open"></span>
                 </div>
                 <input id="dikaiologitiko2" name="dikaiologitiko2" type="file" class="form-control" accept="application/pdf">
                </div>
              </div>
            </div>

						<div class="form-group">
              <span class="col-md-1 col-md-offset-1 text-center"></span>
              <div class="col-md-8">
								<label class="form-label" for="dikaiologitiko3">Φωτοτυπία Βιβλιαρίου Υγίειας</label>
                <div class="input-group">
                 <div class="input-group-addon">
                   <span class="	glyphicon glyphicon-folder-open"></span>
                 </div>
                 <input id="dikaiologitiko3" name="dikaiologitiko3" type="file" class="form-control" accept="application/pdf">
                </div>
              </div>
            </div>

						<div class="form-group">
              <span class="col-md-1 col-md-offset-1 text-center"></span>
              <div class="col-md-8">
								<label class="form-label" for="dikaiologitiko4">Πιστοποιητικό Ασθένειας</label>
                <div class="input-group">
                 <div class="input-group-addon">
                   <span class="	glyphicon glyphicon-folder-open"></span>
                 </div>
                 <input id="dikaiologitiko4" name="dikaiologitiko4" type="file" class="form-control" accept="application/pdf">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-log-in"></span> Υποβολή </button>
                <button type="reset" class="btn btn-danger btn-md"><span class="glyphicon glyphicon-remove"></span> Εκκαθάριση Πεδίων </button>
              </div>
            </div>
          </fieldset>
        </form>

        <div id="displayOnError"> </div>

    </div>

  </body>
</html>
