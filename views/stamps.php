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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="scripts/backToTopButton.js"></script>
    </head>

    <body class="background-color">
        <!--- include to navbar-->
        <?php       require 'navbar.php' ;?>
        <!-- include to koubi gia epistrofi stin korufi-->
        <?php require 'backToTopButton.php' ;?>
        <!--- set to path-->
        <h5>
      <a href="index.php" class="padding"> <b> Αρχική Σελίδα </b> </a>
      >
      <a href="services.php"> <b> Υπηρεσίες </b> </a>
      >
      <a href="insuranced.php"> <b> Ασφαλισμένοι </b> </a>
      >
      <a href="stamps.php"> <b> Ένσημα </b> </a>
    </h5>

    <div class="well">
      <h2 class="header text-center"> Παρουσίαση Ενσήμων </h2>

      <div class="panel-group">

        <div class="panel panel-info">
          <div class="panel-heading">Συνολικά Ένσημα</div>

          <div class="panel-body">
            <span class="col-md-2 attribute">420</span>
          </div>
        </div>

        <div class="panel panel-info">
          <div class="panel-heading">Ένσημα προηγούμενου μήνα</div>

          <div class="panel-body">
            <span class="col-md-2 attribute">4.20</span>
          </div>

        </div>
      </div>

    </div>
  </body>
</html>

