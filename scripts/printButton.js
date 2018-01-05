function printButton()
{
  var myWindow=window.open();
  var jsvar = <?php echo json_encode("alex"); ?>;

  myWindow.document.write(jsvar);
  myWindow.document.close();

  myWindow.focus();
  myWindow.print();
  myWindow.close();
}
