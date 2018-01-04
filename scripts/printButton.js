function printButton()
{
  var myWindow=window.open();

  myWindow.document.write("<p>Το Ίδρυμα Κοινωνικής Ασφάλισης πιστοποιεί ότι το άτομο με <abbr title='Αριθμός Μητρώου Κοινωνικής Ασφάλισης'>ΑΜΚΑ</abbr> 19129602934 και στοιχεία τα παρακάτω:</p>");
  myWindow.document.close();

  myWindow.focus();
  myWindow.print();
  myWindow.close();
}
