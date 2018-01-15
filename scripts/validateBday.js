function validateBday(bdayForm, bday, displayOnErrorBday)
{
  var input = document.getElementById(bday).value;
  var regex = /^(?:[0-9]){1,2}\/(?:[0-9]){1,2}\/(?:[0-9]){4}$/;

  if ( !regex.test(input) || input.length < 8)
  {
    document.getElementById(bdayForm).className = "form-group";
    document.getElementById(bdayForm).className += " has-error";
    document.getElementById(displayOnErrorBday).innerHTML = "<li class='text-danger'> Η ημερομηνία γέννησης που εισάγετε δεν ειναι έγκυρη.";
  }
  else
  {
    document.getElementById(bdayForm).className = "form-group";
    document.getElementById(bdayForm).className += " has-success";
    document.getElementById(displayOnErrorBday).innerHTML = "";
  }
}
