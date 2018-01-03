function onlyNumbers(event)
{
  var charCode = (event.which) ? event.which : event.keyCode;

  return (charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 46;
}
