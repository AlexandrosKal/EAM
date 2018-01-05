function validateStreet(streetForm, street, displayOnErrorStreet)
{
  var input = document.getElementById(street).value;
  var inputArray = input.split(" ");
  var regex =/(^([Α-Ω]|[ΆΈΉΊΌΎΏΪΫ])[α-ω]*([ϊϋ]?[α-ω]*[άέήόίύώ]?|[ΐΰ]?)[α-ω]*\s?$|^[A-Z][a-z]*\s?$)/;

  for(var i=0; i<inputArray.length; i++)
  {
    if( !regex.test(inputArray[i]) )
    {
      document.getElementById(fNameForm).className = "form-group";
      document.getElementById(fNameForm).className += " has-error";
      document.getElementById(displayOnErrorFName).innerHTML = "<li class='text-danger'> Η οδός που εισάγετε δεν ειναι έγκυρη.";

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
