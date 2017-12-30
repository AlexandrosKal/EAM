<!doctype html>
<html lang="el">
	<head>
		<title>Επικοινωνήστε μαζί μας!</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- NavBar css -->
		<link rel="stylesheet" type="text/css" href="../css/navbar.css">
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/navtabs.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body class="bckgrnd">
		<!--- include to navbar-->
		<?php		require 'navbar.php' ;?>
		<!--- set to path-->
		<h5> <a href="../index.php" class="padding"> <b> Αρχική Σελίδα </b> </a> > <a href="contact_us.php"> <b> Επικοινωνία </b> </a> </h5>

		<ul class="nav nav-tabs padding nav-justified" style="width:100%;padding-right:20em;padding-left:20em">
		  <li class="active tab_header"><a data-toggle="tab" href="#Grafeia"> <b>Υποκαταστήματά</b></a></li>
			<li><a data-toggle="tab" href="#Dioikisi" class="tab_header"> <b>Διοίκηση </b></a></li>
		  <li><a data-toggle="tab" href="#Epikoinwnia" class="tab_header"> <b>Επικοινωνία μέσω αλληλογραφίας </b></a></li>
		</ul>

		<div class="tab-content padding" style="width:100%;padding-right:20em;padding-left:20em">
			<div id="Grafeia" class="tab-pane fade in active">
				<div class="well well-sm">
					<legend class="text-center header">Tα υποκαταστήματά μας & τηλέφωνα επικοινωνίας</legend>
				</div>
			</div>

			<div id="Dioikisi" class="tab-pane fade">
				<div class="well well-sm">
					<legend class="text-center header">Tηλέφωνα επικοινωνίας</legend>
				</div>
			</div>

			<div id="Epikoinwnia" class="tab-pane fade">
				<div class="well well-sm">
					<form class="form-horizontal" method="post">
						<fieldset>
							<legend class="text-center header">Επικοινωνήστε μαζί μας!</legend>

							<div class="form-group">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-8">
									<div class="input-group">
									 <div class="input-group-addon">
										 <span class="glyphicon glyphicon-user"></span>
									 </div>
									 <input id="fname" name="name" type="text" placeholder="Όνομα" class="form-control">
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
									 <input id="lname" name="name" type="text" placeholder="Επίθετο" class="form-control">
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
								<span class="col-md-1 col-md-offset-1 text-center"> </span>
								<div class="col-md-8">
									<div class="input-group">
									 <div class="input-group-addon">
											<span class="glyphicon glyphicon-earphone"></span>
									 </div>
									 <input id="phone" name="phone" type="number" placeholder="Τηλέφωνο" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-8">
									<div class="input-group">
									 <div class="input-group-addon">
											<span class="glyphicon glyphicon-pencil"></span>
									 </div>
									 <textarea class="form-control" id="message" name="message" placeholder="Τι σας απασχολεί; Ρωτήστε μας και εμέις απαντάμε!" rows="7"></textarea>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12 text-center">
									<button type="submit" class="btn btn-primary btn-lg">Υποβολή</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>

	</body>
</html>
