function validateContact()
{
  var errorList = [];
  var error_flag = false;

/*briskoume ti lista me ta errors*/
  var input = document.getElementById("fname").value;
  document.getElementById("fname").focus();
    document.getElementById("lname").focus();
      document.getElementById("email").focus();
  if(input=="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ονόματος.")
  }
  else
  {
    if( !/(^([Α-Ω]|[ΆΈΉΊΌΎΏΪΫ])[α-ω]*([ϊϋ]?[α-ω]*[άέήόίύώ]?|[ΐΰ]?)[α-ω]*\s?$|^[A-Z][a-z]*\s?$)/.test(input) )
    {
      error_flag=true;
      errorList.push("To πεδίο ονόματος δεν είναι έγκυρο.");
    }
  }

  input = document.getElementById("lname").value;
  if(input=="")
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
  if(input=="")
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
  if(input=="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο μηνύματος.")
  }

  /*ektupwsi tis listas*/
  if(error_flag == true)
  {
    document.getElementById("displayOnError").innerHTML="";
    for(var i=0; i < errorList.length; i++)
    {
        document.getElementById("displayOnError").innerHTML += "<li class='errtext'> <span class='glyphicon glyphicon-alert'></span>" + errorList[i] + "</li>";
    }

    return false;
  }
  else
  {
    return true;
  }
}
