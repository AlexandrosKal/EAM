function validateArea(areaForm, area, displayOnErrorArea)
{
  var input = document.getElementById(area).value;
  var inputArray = input.split(" ");
  var regex =/((^([Α-Ω]|[ΆΈΉΊΌΎΏΪΫ])[α-ω]*([ϊϋ]?[α-ω]*[άέήόίύώ]?|[ΐΰ]?)[α-ω]*\s?$|^[A-Z][a-z]*\s?$)|^([Α-Ω]*[ΪΫ]?[Α-Ω]*|[A-Z]*)$)/;

  for(var i=0; i<inputArray.length; i++)
  {
    if( !regex.test(inputArray[i]) )
    {
      document.getElementById(areaForm).className = "form-group";
      document.getElementById(areaForm).className += " has-error";
      document.getElementById(displayOnErrorArea).innerHTML = "<li class='text-danger'> Η περιοχή που εισάγετε δεν ειναι έγκυρη.";

      break;
    }
    else
    {
      document.getElementById(areaForm).className = "form-group";
      document.getElementById(areaForm).className += " has-success";
      document.getElementById(displayOnErrorArea).innerHTML = "";
    }
  }
}
