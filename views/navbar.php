<div class="img_container">
  <a href="index.php">
    <img src="images/ika_logo_.png" alt="IKA logo" class="img_logo"/>
  </a>
</div>
		<?php require_once 'models/users.php';?>
		<?php require_once 'models/connect.php';?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"> <b class="tone">Ί</b>δρυμα <b class="tone">Κ</b>οινωνικής <b class="tone">Α</b>σφάλισης</a>
    </div>

    <ul class="nav navbar-nav navbar-left">
      <form class="navbar-form navbar-left" action="#">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Αναζήτηση.." name="search">
        </div>
          <button class="btn btn-default" type="submit">
          <i class="glyphicon glyphicon-search"></i>
          </button>
      </form>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li> <a href="services.php"><b>Υπηρεσίες</b></a> </li>
      <li> <a href="#"><b>Ανακοινώσεις</b></a> </li>
      <li> <a href="faq.php"><b>Συχνές Ερωτήσεις</b></a> </li>
      <li> <a href="contact_us.php"><b>Επικοινωνία</b></a> </li> <?php
      if ( isset( $_SESSION[ 'uid' ] ) )
      { ?>
        <li class="active">
            <a href="profile.php">
              <span class="glyphicon glyphicon-cog"></span>
              <b>Προφιλ</b>
            </a>
        </li>

        <li class="active">
            <a href="logout.php">
              <span class="glyphicon glyphicon-log-out"></span>
              <b>Αποσύνδεση</b>
            </a>
        </li>
      <?php
      }
      else
      { ?>
        <li class="active">
            <a href="signup_login.php">
              <span class="glyphicon glyphicon-log-in"></span>
              <b>Είσοδος/Εγγραφή</b>
            </a>
        </li>
        <?php
      }
      ?>

    </ul>
  </div>
</nav>
