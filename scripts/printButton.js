function printButton()
{
  var myWindow=window.open();

  myWindow.document.write('<h2 class='main-page-header page-header'> <b> Έκδοση Πιστοποιητικού Αναπηρίας </b> </h2>

  <div class='well container'>
    <p class='padding paragraph'>
      Το Ίδρυμα Κοινωνικής Ασφάλισης πιστοποιεί ότι το άτομο με <abbr title='Αριθμός Μητρώου Κοινωνικής Ασφάλισης'>ΑΜΚΑ</abbr> 19129602934 και στοιχεία τα παρακάτω:
    </p>

      <div class='row'>
        <span class='col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute info'>Όνομα:</span>
        <span class='col-md-offset-4'> </span>
        <span class='col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute_value'>Μάριος</span>
      </div>

      <div class='row'>
        <span class='col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute info'>Επίθετο:</span>
        <span class='col-md-offset-4'> </span>
        <span class='col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute_value'>Παπαμιχαλόπουλος</span>
      </div>

      <div class='row'>
        <span class='col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute info'>Διεύθυνση:</span>
        <span class='col-md-offset-4'> </span>
        <span class='col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute_value'>Σεϊζάνη 4, Κερατσίνι</span>
      </div>

      <div class='row'>
        <span class='col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute info'>Ταχυδρομικός Κώδικας:</span>
        <span class='col-md-offset-4'> </span>
        <span class='col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute_value'>18755</span>
      </div>

      <div class='row'>
        <span class='col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute info'> <abbr title='Αριθμός Φορολογικού Μητρώου'> ΑΦΜ:</span>
        <span class='col-md-offset-4'> </span>
        <span class='col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute_value'>166552722</span>
      </div>

      <div class='row'>
        <span class='col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute info'> <abbr title='Αριθμός Δελτίου Ταυτότητας'> ΑΔΤ:</span>
        <span class='col-md-offset-4'> </span>
        <span class='col-md-3 col-lg-3 col-sm-3 col-xs-3 attribute_value'>ΑΗ 543193</span>
      </div>

      <br>
      <p class='padding paragraph'>
        πάσχει απο ένα ποσοστό αναπηρίας.
      </p>');
  myWindow.document.close();

  myWindow.focus();
  myWindow.print();
  myWindow.close();
}
