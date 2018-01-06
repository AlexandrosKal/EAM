function validateAdt(adtForm, adt, displayOnErrorAdt)
{
  var input = document.getElementById(adt).value;
  var regex = /^(?:[A-Z]){2}(?:[0-9]){6}$/;

  if(input.length < 8)
  {
    document.getElementById(adtForm).className = "form-group";
    document.getElementById(adtForm).className += " has-error";
    document.getElementById(displayOnErrorAdt).innerHTML = "<li class='text-danger'> Παρακαλώ εισάγετε 8 χαρακτήρες.";
  }
  else if (! regex.test(input))
  {
    document.getElementById(adtForm).className = "form-group";
    document.getElementById(adtForm).className += " has-error";
    document.getElementById(displayOnErrorAdt).innerHTML = "<li class='text-danger'> Ο Αριθμός Δελτίου Ταυτότητας δεν ειναι έγκυρος.";
  }
  else
  {
    document.getElementById(adtForm).className = "form-group";
    document.getElementById(adtForm).className += " has-success";
    document.getElementById(displayOnErrorAdt).innerHTML = "";
  }
}
