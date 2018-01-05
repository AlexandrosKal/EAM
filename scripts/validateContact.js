function validateContact()
{
  var errorList = [];
  var error_flag = false;

/*briskoume ti lista me ta errors*/
  var input = document.getElementById("fname").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ονόματος.")
  }
  else
  {
    var inputArray = input.split(" ");
    var regex = /(^([Α-Ω]|[ΆΈΉΊΌΎΏΪΫ])[α-ω]*([ϊϋ]?[α-ω]*[άέήόίύώ]?|[ΐΰ]?)[α-ω]*\s?$|^[A-Z][a-z]*\s?$)/;
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
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο επιθέτου.")
  }
  else
  {
    if( !/(^([Α-Ω]|[ΆΈΉΊΌΎΏΪΫ])[α-ω]*([ϊϋ]?[α-ω]*[άέήόίύώ]?|[ΐΰ]?)[α-ω]*\s?$|^[A-Z][a-z]*\s?$)/.test(input) )
    {
      error_flag=true;
      errorList.push("To πεδίο επιθέτου δεν είναι έγκυρο.");
    }
  }

  input = document.getElementById("email").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο e-mail.")
  }
  else
  {
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(input))
    {
      error_flag = true;
      errorList.push("Το e-mail που εισάγετε δεν ειναι έγκυρο.")
    }
  }

  input = document.getElementById("message").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο μηνύματος.")
  }

  /*ektupwsi tis listas*/
  if(error_flag === true)
  {
    document.getElementById("displayOnError").innerHTML="";
    for(var i=0; i < errorList.length; i++)
    {
        document.getElementById("displayOnError").innerHTML += "<span class='col-md-1 col-md-offset-1 text-center'></span>";
        document.getElementById("displayOnError").innerHTML += "<li class='text-danger'> <span class='glyphicon glyphicon-alert'></span> &nbsp;" + errorList[i] + "</li>";
    }

    return false;
  }
  else
  {
    return true;
  }
}
