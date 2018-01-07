function validateLName(lNameForm, lname, displayOnErrorLName)
{
  var input = document.getElementById(lname).value;
  var regex =/((^([Α-Ω]|[ΆΈΉΊΌΎΏΪΫ])[α-ω]*([ϊϋ]?[α-ω]*[άέήόίύώ]?|[ΐΰ]?)[α-ω]*\s?$|^[A-Z][a-z]*\s?$)|^([Α-Ω]*[ΪΫ]?[Α-Ω]*|[A-Z]*)$)/;

  if (! regex.test(input))
  {
    document.getElementById(lNameForm).className = "form-group";
    document.getElementById(lNameForm).className += " has-error";
    document.getElementById(displayOnErrorLName).innerHTML = "<li class='text-danger'> Το επίθετο που εισάγετε δεν ειναι έγκυρο.";
  }
  else
  {
    document.getElementById(lNameForm).className = "form-group";
    document.getElementById(lNameForm).className += " has-success";
    document.getElementById(displayOnErrorLName).innerHTML = "";
  }
}
