<!doctype html>
<html lang="el">
	<head>
		<title>Ανακοινώσεις</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- NavBar css -->
		<link rel="stylesheet" type="text/css" href="css/navbar.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/navtabs.css">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/backToTopButton.css">
		<link rel="stylesheet" type="text/css" href="css/error_text.css">
		<link rel="stylesheet" type="text/css" href="css/contact_us.css">
		<link rel="stylesheet" type="text/css" href="css/error_js.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body class="background-color">
		<!--- include to navbar-->
		<?php	require 'views/navbar.php' ;?>
		<!-- include to koubi gia epistrofi stin korufi--></p><
		<?php require 'views/backToTopButton.php' ;?>
		<!--- set to path-->
		<h5> <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b> </a> > <a href="announcements.php"> <b> Συχνές Ερωτήσεις </b> </a> </h5>

		<ul class="nav nav-tabs padding nav-justified contact-style">
     <li class="active tab_header"><a data-toggle="tab" href="#Nea"> <b>Νέα</b></a></li>
           <li><a data-toggle="tab" href="#Egkuklioi" class="tab_header"> <b>Εγκύκλιοι </b></a></li>
     <li><a data-toggle="tab" href="#Deltia_tupou" class="tab_header"> <b> Δελτία τύπου </b></a></li>
	  </ul>

   <div class="tab-content padding contact-style">
           <div id="Nea" class="tab-pane fade in active">
                   <div class="well well-sm">
                           <h2 class="text-center header page-header">Πρόσφατες Ανακοινώσεις</h2>

													 <ul class="paragraph">
													 	<li>Οι άνδρες ασφαλισμένοι του ΙΚΑ-ΕΤΑΜ μπορούν να συμπληρώσουν τις 10.000 ημέρες ασφάλισης με αναγνώριση πλασματικών χρόνων του άρθ. 40 του Ν. 3996/2011, προκειμένου να λάβουν μειωμένη σύνταξη εφόσον η αίτηση αναγνώρισης και η αίτηση για σύνταξη έχει υποβληθεί έως την 31/12/2013» </li>
													 </ul>
									 </div>
           </div>

           <div id="Egkuklioi" class="tab-pane fade">
                   <div class="well well-sm">
                           <h2 class="text-center page-header header"> Εγκύκλιοι 2017-2018</h2>

													 <ul class="paragraph">
														<li>Ημερομηνίες οριστικοποίησης αποφάσεων Παροχών Ασθενείας ΙΚΑ-ΕΤΑΜ έτους 2017</li>
													</ul>

                   </div>
           </div>

           <div id="Deltia_tupou" class="tab-pane fade">
                   <div class="well well-sm">
										 <h2 class="text-center page-header header"> Δελτία τύπου 2017-2018</h2>

										 <ul class="paragraph">
					 						<li>Ηλεκτρονική υποβολή Αιτήματος για εξέταση από Υγειονομική Επιτροπή ΚΕ.Π.Α.</li>
					 						<li>Βελτίωση εισπραξιμότητας</li>
					 						<li>Σχετικά με τις εξελίξεις στο Υποκατάστημα ΙΚΑ-ΕΤΑΜ Αιγάλεω</li>
					 					</ul>

                   </div>
           </div>
   </div>

	</body>


</html>
