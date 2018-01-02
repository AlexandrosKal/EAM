<!doctype html>
<html lang="el">
	<head>
		<title>Υπηρεσίες βάση κατηγοριών</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- NavBar css -->
		<link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/well.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      .imagetiles{
        position: relative;
        display: block;
        margin: 0 auto;
        width:  350px;
        height: 300px;
        background-position: 50% 50%;
        background-repeat:   no-repeat;
        background-size:     cover;
        padding:0px;
      }
   </style>
	</head>

	<body class="bckgrnd">
		<!--- include to navbar-->
		<?php		require 'navbar.php' ;?>
		<!--- set to path-->
		<h5> <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b> </a> > <a href="services.php"> <b> Υπηρεσίες </b> </a> </h5>
    <h2 style="padding-left:1em"> <b> <u> Υπηρεσίες </b> </u> </h2>
    <div class="container">
			<div class="well">
	      <div class="row">

	        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	          <div class="thumbnail" style="width:360px;height:350px">
	            <a href="insuranced.php">
	              <legend class="text-center header">Ασφαλισμένοι</legend>
	              <img src="images/asfalismenoi.png" alt="asfalismenoi" class="imagetiles img-rounded img-responsive"/>
	            </a>
	          </div>
	        </div>

	        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	          <div class="thumbnail" style="width:360px;height:350px">
	            <a href="seniors.php">
	              <legend class="text-center header">Συνταξιούχοι</legend>
	              <img src="images/suntaksiouxoi.jpg" alt="suntaksiouxoi" class="imagetiles img-rounded img-responsive" border="5"/>
	            </a>
	          </div>
	        </div>

	        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-46">
	          <div class="thumbnail" style="width:360px;height:350px">
	            <a href="amea.php">
	              <legend class="text-center header">ΑμΕΑ</legend>
	              <img src="images/amea.png" alt="amea" class="imagetiles img-rounded img-responsive">
	            </a>
	          </div>
	        </div>
	      </div>

	      <div class="row">
					<span class="col-md-1 col-md-offset-1 text-center"></span>
	        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	          <div class="thumbnail" style="width:360px;height:350px">
	            <a href="employers.php">
	              <legend class="text-center header">Εργοδότες</legend>
	              <img src="images/ergodotes.png" alt="ergodotes" class="imagetiles img-rounded img-responsive">
	            </a>
	          </div>
	        </div>

	        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	          <div class="thumbnail" style="width:360px;height:350px">
	            <a href="debtors.php">
	              <legend class="text-center header">Οφειλέτες</legend>
	              <img src="images/ofeiletes.png" alt="ofeiletes" class="imagetiles img-rounded img-responsive">
	            </a>
	          </div>
	        </div>
	      </div>
			</div>
		</div>

  </body>
</html>
