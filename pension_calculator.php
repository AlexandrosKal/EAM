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
    <link rel="stylesheet" type="text/css" href="css/header.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="scripts/backToTopButton.js"></script>
    <script src="scripts/validatePensionCalculator.js"></script>
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
      <a href="seniors.php"> <b> Συνταξιούχοι </b> </a>
      >
      <a href="pension_calculator"> <b> Υπολογισμός Σύνταξης Γήρατος</b> </a>
    </h5>

    <div class="well well-sm">
      <form class="form-horizontal" method="post" name="loginForm" onsubmit="return validatePensionCalculator()">
        <fieldset>
          <legend class="header text-center"> Υπολογισμός Σύνταξης Γήρατος IKA</legend>
          <div class="form-group">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-8">
              <div class="input-group">
               <div class="input-group-addon">
                 <span 	class="	glyphicon glyphicon-calendar"> </span>
               </div>
               <input id="totalDays" name="totalDays" type="text" placeholder="Σύνολο Ημερών Εργασίας Ως Ασφαλισμένος" onkeydown="return onlyNumbers(event);" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2017
               </div>
               <input id="income2k17" name="income2k17" type="text" placeholder="Αποδοχές (€)" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2017
               </div>
               <input id="days2k17" name="days2k17" type="text" placeholder="Ημέρες Εργασίας" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>
          </div>

          <div class="form-group">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2016
               </div>
               <input id="income2k16" name="income2k16" type="text" placeholder="Αποδοχές (€)" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2016
               </div>
               <input id="days2k16" name="days2k16" type="text" placeholder="Ημέρες Εργασίας" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>
          </div>

          <div class="form-group">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2015
               </div>
               <input id="income2k15" name="income2k15" type="text" placeholder="Αποδοχές (€)" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2015
               </div>
               <input id="days2k15" name="days2k15" type="text" placeholder="Ημέρες Εργασίας" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>
          </div>

          <div class="form-group">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2014
               </div>
               <input id="income2k14" name="income2k14" type="text" placeholder="Αποδοχές (€)" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2014
               </div>
               <input id="days2k14" name="days2k14" type="text" placeholder="Ημέρες Εργασίας" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>
          </div>

          <div class="form-group">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2013
               </div>
               <input id="income2k13" name="income2k13" type="text" placeholder="Αποδοχές (€)" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2013
               </div>
               <input id="days2k13" name="days2k13" type="text" placeholder="Ημέρες Εργασίας" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>
          </div>

          <div class="form-group">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2012
               </div>
               <input id="income2k12" name="income2k12" type="text" placeholder="Αποδοχές (€)" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2012
               </div>
               <input id="days2k12" name="days2k12" type="text" placeholder="Ημέρες Εργασίας" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>
          </div>

          <div class="form-group">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2011
               </div>
               <input id="income2k11" name="income2k11" type="text" placeholder="Αποδοχές (€)" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2011
               </div>
               <input id="days2k11" name="days2k11" type="text" placeholder="Ημέρες Εργασίας" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>
          </div>

          <div class="form-group">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2010
               </div>
               <input id="income2k10" name="income2k10" type="text" placeholder="Αποδοχές (€)" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2010
               </div>
               <input id="days2k10" name="days2k10" type="text" placeholder="Ημέρες Εργασίας" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>
          </div>

          <div class="form-group">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2009
               </div>
               <input id="income2k09" name="income2k09" type="text" placeholder="Αποδοχές (€)" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2009
               </div>
               <input id="days2k09" name="days2k09" type="text" placeholder="Ημέρες Εργασίας" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>
          </div>

          <div class="form-group">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2008
               </div>
               <input id="income2k08" name="income2k08" type="text" placeholder="Αποδοχές (€)" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2008
               </div>
               <input id="days2k08" name="days2k08" type="text" placeholder="Ημέρες Εργασίας" class="form-control" onkeydown="return onlyNumbers(event);">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12 text-center">
              <button type="submit" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-log-in"></span> Υπολογισμός </button>
              <button type="reset" class="btn btn-danger btn-md"><span class="glyphicon glyphicon-log-in"></span> Εκκαθάριση Πεδίων </button>
            </div>
          </div>
        </fieldset>
      </form>

      <div id="displayOnError"> </div>

    </div>

  </body>
</html>
