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
		<link rel="stylesheet" type="text/css" href="css/form.css">
		<link rel="stylesheet" type="text/css" href="css/error_js.css">
		<link rel="stylesheet" type="text/css" href="css/well.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="scripts/backToTopButton.js"></script>
    <script src="scripts/validatePensionCalculator.js"></script>
		<script src="scripts/onlyNumbers.js"></script>
		<script src="scripts/notEmpty.js"></script>
	</head>

	<body class="background-color">
		<!--- include to navbar-->
		<?php	require 'navbar.php' ;?>
		<!-- include to koubi gia epistrofi stin korufi-->
		<?php require 'backToTopButton.php' ;?>
		<!--- set to path-->
		<h5>
      <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b> </a>
      >
      <a href="seniors.php"> <b> Συνταξιούχοι </b> </a>
      >
      <a href="pension_calculator"> <b> Υπολογισμός Σύνταξης Γήρατος</b> </a>
    </h5>

		<?php
		if( !isset($pension) )
		{
		?>

    <div class="well well-sm">
      <form class="form-horizontal" method="post" name="loginForm" onsubmit="return validatePensionCalculator()" action="compute_pension.php">
        <fieldset>
          <h1 class="page-header header text-center"> Υπολογισμός Σύνταξης Γήρατος IKA</h1>
          <div class="form-group" id="totalDaysForm">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-8">
							<label class="form-label" for="totalDays">Σύνολο Ημερών Εργασίας Ως Ασφαλισμένος</label>
              <div class="input-group">
               <div class="input-group-addon">
                 <span 	class="	glyphicon glyphicon-calendar"> </span>
               </div>
               <input id="totalDays" name="totalDays" type="text" placeholder="πχ 10000" onkeydown="return onlyNumbers(event);" class="form-control" onchange="notEmpty('totalDaysForm', 'totalDays', 'displayOnErrorTotalDays')">
              </div>

							<div id="displayOnErrorTotalDays"> </div>
            </div>
          </div>

          <div class="form-group" id="2k17Form">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
							<label class="form-label" for="income2k17">Αποδοχές (€)</label>
              <div class="input-group">
               <div class="input-group-addon">
                 2017
               </div>
               <input id="income2k17" name="income2k17" type="text" placeholder="πχ 12000" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k17Form', 'income2k17', 'displayOnErrorIncome2k17')">
              </div>

							<div id="displayOnErrorIncome2k17"> </div>

            </div>

            <div class="col-md-4">
							<label class="form-label" for="days2k17">Ημέρες Εργασίας</label>
              <div class="input-group">
               <div class="input-group-addon">
                 2017
               </div>
               <input id="days2k17" name="days2k17" type="text" placeholder="πχ 190" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k17Form', 'days2k17', 'displayOnErrorDays2k17')">
              </div>

							<div id="displayOnErrorDays2k17"> </div>

            </div>
          </div>

          <div class="form-group" id="2k16Form">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2016
               </div>
               <input id="income2k16" name="income2k16" type="text" placeholder="πχ 12000" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k16Form', 'income2k16', 'displayOnErrorIncome2k16')">
              </div>

							<div id="displayOnErrorIncome2k16"> </div>

            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2016
               </div>
               <input id="days2k16" name="days2k16" type="text" placeholder="πχ 190" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k16Form', 'days2k16', 'displayOnErrorDays2k16')">
              </div>

							<div id="displayOnErrorDays2k16"> </div>

            </div>
          </div>

          <div class="form-group" id="2k15Form">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2015
               </div>
               <input id="income2k15" name="income2k15" type="text" placeholder="πχ 12000" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k15Form', 'income2k15', 'displayOnErrorIncome2k15')">
              </div>

							<div id="displayOnErrorIncome2k15"> </div>

            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2015
               </div>
               <input id="days2k15" name="days2k15" type="text" placeholder="πχ 190" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k15Form', 'days2k15', 'displayOnErrorDays2k15')">
              </div>

							<div id="displayOnErrorDays2k15"> </div>

            </div>
          </div>

          <div class="form-group" id="2k14Form">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2014
               </div>
               <input id="income2k14" name="income2k14" type="text" placeholder="πχ 12000" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k14Form', 'income2k14', 'displayOnErrorIncome2k14')">
              </div>

							<div id="displayOnErrorIncome2k14"> </div>

            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2014
               </div>
               <input id="days2k14" name="days2k14" type="text" placeholder="πχ 190" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k14Form', 'days2k14', 'displayOnErrorDays2k14')">
              </div>

							<div id="displayOnErrorDays2k14"> </div>

            </div>
          </div>

          <div class="form-group" id="2k13Form">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2013
               </div>
               <input id="income2k13" name="income2k13" type="text" placeholder="πχ 12000" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k13Form', 'income2k13', 'displayOnErrorIncome2k13')">
              </div>

							<div id="displayOnErrorIncome2k13"> </div>

            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2013
               </div>
               <input id="days2k13" name="days2k13" type="text" placeholder="πχ 190" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k13Form', 'days2k13', 'displayOnErrorDays2k13')">
              </div>

							<div id="displayOnErrorDays2k13"> </div>

            </div>
          </div>

          <div class="form-group" id="2k12Form">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2012
               </div>
               <input id="income2k12" name="income2k12" type="text" placeholder="πχ 12000" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k12Form', 'income2k12', 'displayOnErrorIncome2k12')">
              </div>

							<div id="displayOnErrorIncome2k12"> </div>

            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2012
               </div>
               <input id="days2k12" name="days2k12" type="text" placeholder="πχ 190" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k12Form', 'days2k12', 'displayOnErrorDays2k12')">
              </div>

							<div id="displayOnErrorDays2k12"> </div>

            </div>
          </div>

          <div class="form-group" id="2k11Form">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2011
               </div>
               <input id="income2k11" name="income2k11" type="text" placeholder="πχ 12000" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k11Form', 'income2k11', 'displayOnErrorIncome2k11')">
              </div>

							<div id="displayOnErrorIncome2k11"> </div>

            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2011
               </div>
               <input id="days2k11" name="days2k11" type="text" placeholder="πχ 190" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k11Form', 'days2k11', 'displayOnErrorDays2k11')">
              </div>

							<div id="displayOnErrorDays2k11"> </div>

            </div>
          </div>

          <div class="form-group" id="2k10Form">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2010
               </div>
               <input id="income2k10" name="income2k10" type="text" placeholder="πχ 12000" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k10Form', 'income2k10', 'displayOnErrorIncome2k10')">
              </div>

							<div id="displayOnErrorIncome2k10"> </div>

            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2010
               </div>
               <input id="days2k10" name="days2k10" type="text" placeholder="πχ 190" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k10Form', 'days2k10', 'displayOnErrorDays2k10')">
              </div>

							<div id="displayOnErrorDays2k10"> </div>

            </div>
          </div>

          <div class="form-group" id="2k09Form">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2009
               </div>
               <input id="income2k09" name="income2k09" type="text" placeholder="πχ 12000" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k09Form', 'income2k09', 'displayOnErrorIncome2k09')">
              </div>

							<div id="displayOnErrorIncome2k09"> </div>

            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2009
               </div>
               <input id="days2k09" name="days2k09" type="text" placeholder="πχ 190" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k09Form', 'days2k09', 'displayOnErrorDays2k09')">
              </div>

							<div id="displayOnErrorDays2k09"> </div>

            </div>
          </div>

          <div class="form-group" id="2k08Form">
            <span class="col-md-1 col-md-offset-1 text-center"></span>
            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2008
               </div>
               <input id="income2k08" name="income2k08" type="text" placeholder="πχ 12000" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k08Form', 'income2k08', 'displayOnErrorIncome2k08')">
              </div>

							<div id="displayOnErrorIncome2k08"> </div>

            </div>

            <div class="col-md-4">
              <div class="input-group">
               <div class="input-group-addon">
                 2008
               </div>
               <input id="days2k08" name="days2k08" type="text" placeholder="πχ 190" class="form-control" onkeydown="return onlyNumbers(event);" onchange="notEmpty('2k08Form', 'days2k08', 'displayOnErrorDays2k08')">
              </div>

							<div id="displayOnErrorDays2k08"> </div>

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

		<?php
		}
		else
		{
		?>
			<div class="well">
				<h2 class="header page-header text-center"> Παρουσίαση Σύνταξης Γήρατος </h2>

				<div class="panel-group">

					<div class="panel panel-info">
						<div class="panel-heading">Ποσό Σύνταξης Γήρατος</div>

						<div class="panel-body">
							<span class="col-md-2 attribute"><?php echo $pension; ?></span>
						</div>
					</div>

				</div>

			</div>
		<?php
		}
		?>
  </body>
</html>
