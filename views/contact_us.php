<!doctype html>
<html lang="el">
	<head>
		<title>Επικοινωνήστε μαζί μας!</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- NavBar css -->
		<link rel="stylesheet" type="text/css" href="css/navbar.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/navtabs.css">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/error_text.css">
		<link rel="stylesheet" type="text/css" href="css/contact_us.css">
		<link rel="stylesheet" type="text/css" href="css/backToTopButton.css">
		<link rel="stylesheet" type="text/css" href="css/form.css">
		<link rel="stylesheet" type="text/css" href="css/footnote.css">
		<link rel="stylesheet" type="text/css" href="css/error_js.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="scripts/validateContact.js"></script>
		<script src="scripts/onlyNumbers.js"></script>
		<script src="scripts/backToTopButton.js"></script>
		<script src="scripts/validateEmail.js"></script>
		<script src="scripts/validateFName.js"></script>
		<script src="scripts/validateLName.js"></script>
		<script src="scripts/validateNumber.js"></script>
	</head>

	<body class="background-color">
		<!--- include to navbar-->
		<?php	require 'navbar.php' ;?>
		<!-- include to koubi gia epistrofi stin korufi-->
		<?php require 'backToTopButton.php' ;?>
		<!--- set to path-->
		<h5> <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b> </a> > <a href="contact_us.php"> <b> Επικοινωνία </b> </a> </h5>
		<h2 class="text-left main-page-header page-header"> Επικοινωνήστε μαζί μας!</h2>

		<ul class="nav nav-tabs padding nav-justified contact-style">
		  <li class="active"><a data-toggle="tab" href="#Epikoinwnia" class="tab_header"> <b>Επικοινωνία μέσω αλληλογραφίας</b></a></li>
			<li><a data-toggle="tab" href="#Dioikisi" class="tab_header"> <b>Διοίκηση </b></a></li>
		  <li><a data-toggle="tab" href="#Grafeia" class="tab_header"> <b>Υποκαταστήματά</b></a></li>
		</ul>

		<div class="tab-content padding contact-style">
			<div id="Epikoinwnia" class="tab-pane fade  in active">
				<div class="well well-sm">
					<form class="form-horizontal" method="post" name"contactForm" onsubmit="return validateContact()" action="contact_us.php">
						<fieldset>
							<h2 class="text-center page-header header">Επικοινωνήστε μαζί μας!</h2>

							<div class="form-group" id="fNameForm">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-8">

									<p class="text-center footnote"> Παρακαλώ συπληρώστε όλα τα πεδία της φόρμας με ελληνικούς ή λατινικούς χαρακτήρες. Μπορείτε να παραλείψετε τους τόνους.
										Αναγκαία η χρήση διαλυτικών όπου χρειάζεται.
									</p>


									<label class="form-label" for="fname">Όνομα</label>
									<div class="input-group">
									 <div class="input-group-addon">
										 <span class="glyphicon glyphicon-user"></span>
									 </div>
									 <?php
									 if ( isset( $_SESSION['uid'] ) )
									 { ?>
										<input id="fname" name="first_name" type="text" value="<?php echo $_SESSION['first_name']; ?>" class="form-control" onchange="validateFName('fNameForm', 'fname', 'displayOnErrorFName');">
										<?php
									 }
									 else
									 { ?>
										 <input id="fname" name="first_name" type="text" placeholder="πχ Αλέξανδρος, Χρήστος Χαράλαμπος, Marios" class="form-control" onchange="validateFName('fNameForm', 'fname', 'displayOnErrorFName');">
										<?php
									 }
									 ?>
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
									 <?php
									 if ( isset( $_SESSION['uid'] ) )
									 { ?>
									 <input id="lname" name="last_name" type="text" value="<?php echo $_SESSION['last_name']?>" class="form-control" onchange="validateLName('lNameForm', 'lname', 'displayOnErrorLName');">
									 <?php
									}
									else
									{ ?>
										<input id="lname" name="last_name" type="text" placeholder="πχ Λοΐζος, Douglas" class="form-control" onchange="validateLName('lNameForm', 'lname', 'displayOnErrorLName');">
										<?php
									 }
									 ?>
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
									 <?php
									 if ( isset( $_SESSION['uid'] ) )
									 { ?>
									 <input id="email" name="email" type="text" value="<?php echo $_SESSION['email']?>" class="form-control" onchange="validateEmail('emailForm', 'email', 'displayOnErrorEmail');">
									 <?php
									}
									else
									{ ?>
										<input id="email" name="email" type="text" placeholder="πχ user@example.com" class="form-control" onchange="validateEmail('emailForm', 'email', 'displayOnErrorEmail');">
										<?php
									 }
									 ?>
									</div>

									<div id="displayOnErrorEmail"> </div>

								</div>
							</div>

							<div class="form-group" id="phoneForm">
								<span class="col-md-1 col-md-offset-1 text-center"> </span>
								<div class="col-md-8">
									<label class="form-label" for="phone">Τηλέφωνο (Προαιρετικό)</label>
									<div class="input-group">
									 <div class="input-group-addon">
											<span class="glyphicon glyphicon-earphone"></span>
									 </div>
									 <input id="phone" name="phone" type="text" placeholder="πχ 6989088366, 2104613688" maxlength="10" class="form-control" onkeypress="return onlyNumbers(event);" onchange="validateNumber('phoneForm', 'phone', 'displayOnErrorPhone', 10);">
									</div>

									<div id="displayOnErrorPhone"> </div>

								</div>
							</div>

							<div class="form-group">
								<span class="col-md-1 col-md-offset-1 text-center"></span>
								<div class="col-md-8">
									<label class="form-label" for="message">Μήνυμα</label>
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

					<div id="displayOnError"> </div>

					<?php
					if(isset($success) && $success)
					{ ?>
						<div class="alert alert-success">
							<strong>Το μήνυμα στάλθηκε επιτυχώς!</strong> Θα επικοινωνήσουμε μαζί σας όσο το δυνατόν πιο γρήγορα.
						</div>
					<?php
					}
					else if(isset($success) && !$success)
					{ ?>
						<div class="alert alert-danger">
							<strong> <?php echo $errors[0]; ?> </strong>
						</div>
					<?php
					}
					?>

				</div>
			</div>

			<div id="Grafeia" class="tab-pane fade">
				<div class="well well-sm">
					<h2 class="text-center page-header header">Tα υποκαταστήματά μας & τηλέφωνα επικοινωνίας</h2>
				</div>
			</div>

			<div id="Dioikisi" class="tab-pane fade">
				<div class="well well-sm">
					<h2 class="text-center page-header header">Tηλέφωνα επικοινωνίας</h2>
				</div>
			</div>

		</div>

	</body>
</html>
