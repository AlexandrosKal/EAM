function validateStreet(streetForm, street, displayOnErrorStreet)
{
  var input = document.getElementById(street).value;
  var inputArray = input.split(" ");
  var regex =/((^([Α-Ω]|[ΆΈΉΊΌΎΏΪΫ])[α-ω]*([ϊϋ]?[α-ω]*[άέήόίύώ]?|[ΐΰ]?)[α-ω]*\s?$|^[A-Z][a-z]*\s?$)|^([Α-Ω]*[ΪΫ]?[Α-Ω]*|[A-Z]*)$)/;

  for(var i=0; i<inputArray.length; i++)
  {
    if( !regex.test(inputArray[i]) )
    {
      document.getElementById(streetForm).className = "form-group";
      document.getElementById(streetForm).className += " has-error";
      document.getElementById(displayOnErrorStreet).innerHTML = "<li class='text-danger'> Η οδός που εισάγετε δεν ειναι έγκυρη.";

      break;
    }
    else
    {
      document.getElementById(streetForm).className = "form-group";
      document.getElementById(streetForm).className += " has-success";
      document.getElementById(displayOnErrorStreet).innerHTML = "";
    }
  }
}
