function validateStamps()
{
  var errorList = [];
  var error_flag = false;

  /*briskoume ti lista me ta errors*/
  var input = document.getElementById("fname").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ονόματος.");
  }
  else
  {
    var inputArray = input.split(" ");
    var regex =/((^([Α-Ω]|[ΆΈΉΊΌΎΏΪΫ])[α-ω]*([ϊϋ]?[α-ω]*[άέήόίύώ]?|[ΐΰ]?)[α-ω]*\s?$|^[A-Z][a-z]*\s?$)|^([Α-Ω]*[ΪΫ]?[Α-Ω]*|[A-Z]*)$)/;

    for(var i=0; i<inputArray.length; i++)
    {
      if( !regex.test(inputArray[i]) )
      {
        error_flag=true;
        errorList.push("To πεδίο ονόματος δεν είναι έγκυρο.");
        break;
      }
    }
  }

  input = document.getElementById("lname").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο επιθέτου.");
  }
  else
  {
    var regex =/((^([Α-Ω]|[ΆΈΉΊΌΎΏΪΫ])[α-ω]*([ϊϋ]?[α-ω]*[άέήόίύώ]?|[ΐΰ]?)[α-ω]*\s?$|^[A-Z][a-z]*\s?$)|^([Α-Ω]*[ΪΫ]?[Α-Ω]*|[A-Z]*)$)/;

    if( !regex.test(input) )
    {
      error_flag=true;
      errorList.push("To πεδίο επιθέτου δεν είναι έγκυρο.");
    }
  }

  input = document.getElementById("amka").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αριθμού μητρώου κοινωνικής ασφάλισης.");
  }
  else
  {
    if(input.length != 11)
    {
      error_flag = true;
      errorList.push("Παρακαλώ συμπληρώστε το πεδίο αριθμόυ μητρώου κοινωνικής ασφάλισης με 11 ψηφία.");
    }
  }

  input = document.getElementById("adt").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αριθμού δελτίου ταυτότητας.");
  }
  else
  {
    if(input.length != 8)
    {
      error_flag = true;
      errorList.push("Παρακαλώ συμπληρώστε το πεδίο αριθμόυ δελτίου ταυτότητας με 8 ψηφία.");
    }

    if( !/^(?:[A-Z]){2}(?:[0-9]){6}$/.test(input) )
    {
      error_flag=true;
      errorList.push("To πεδίο αριθμού δελτίου ταυτότητας δεν είναι έγκυρο. Μην χρησιμοποιείται κενό μεταξύ των αριθμών και των γραμμάτων.");
    }
  }

  input = document.getElementById("bday").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ημερομηνίας γέννησης.");
  }
  else
  {
    if( !/^(?:[0-9]){2}\/(?:[0-9]){2}\/(?:[0-9]){4}$/.test(input) )
    {
      error_flag=true;
      errorList.push("To πεδίο ημερομηνίας γέννησης δεν είναι έγκυρο.");
    }
  }

  /*ektupwsi tis listas*/
  if(error_flag === true)
  {
    document.getElementById("displayOnError").innerHTML="";
    document.getElementById("displayOnError").innerHTML += "<div id='stamps-error' class='alert alert-danger error-alert-margin'>"
    for(var i=0; i < errorList.length; i++)
    {
        document.getElementById("stamps-error").innerHTML += "<li class='text-danger'> <span class='glyphicon glyphicon-alert'></span> &nbsp;" + errorList[i] + "</li>";
    }

    return false;
  }
  else
  {
    return true;
  }
}
