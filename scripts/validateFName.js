function validateFName(fNameForm, fname, displayOnErrorFName)
{
  var input = document.getElementById(fname).value;
  var inputArray = input.split(" ");
  var regex =/((^([Α-Ω]|[ΆΈΉΊΌΎΏΪΫ])[α-ω]*([ϊϋ]?[α-ω]*[άέήόίύώ]?|[ΐΰ]?)[α-ω]*\s?$|^[A-Z][a-z]*\s?$)|^([Α-Ω][ΪΫ]?[Α-Ω]*|[A-Z]*)$)/;

  for(var i=0; i<inputArray.length; i++)
  {
    if( !regex.test(inputArray[i]) )
    {
      document.getElementById(fNameForm).className = "form-group";
      document.getElementById(fNameForm).className += " has-error";
      document.getElementById(displayOnErrorFName).innerHTML = "<li class='text-danger'> Το όνομα που εισάγετε δεν ειναι έγκυρο.";

      break;
    }
    else
    {
      document.getElementById(fNameForm).className = "form-group";
      document.getElementById(fNameForm).className += " has-success";
      document.getElementById(displayOnErrorFName).innerHTML = "";
    }
  }
}
