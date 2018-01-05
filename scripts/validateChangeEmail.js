function validateChangeEmail()
{
  var errorList = [];
  var error_flag = false;

  /*briskoume ti lista me ta errors*/
  var input = document.getElementById("current-email").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο τωρινής ηλεκτρονικής διεύθυνσης e-mail.");
  }
  else
  {
    if (!/^[\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})]+$/.test(input))
    {
      error_flag = true;
      errorList.push("Το e-mail που εισάγατε δεν ειναι έγκυρο.");
    }
  }

  input = document.getElementById("new-email").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο καινούριας ηλεκτρονικής διεύθυνσης e-mail.");
  }
  else
  {
    if (!/^[\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})]+$/.test(input))
    {
      error_flag = true;
      errorList.push("Το e-mail που εισάγατε δεν ειναι έγκυρο.");
    }
  }

  input = document.getElementById("renew-email").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο επαλήθευσης καινούριας διεύθυνσης e-mail.");
  }
  else
  {
    if (!/^[\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})]+$/.test(input))
    {
      error_flag = true;
      errorList.push("Το e-mail που εισάγατε δεν ειναι έγκυρο.");
    }
  }

  /*ektupwsi tis listas*/
  if(error_flag === true)
  {
    document.getElementById("displayOnErrorEmail").innerHTML="";
    for(var i=0; i < errorList.length; i++)
    {
        document.getElementById("displayOnErrorEmail").innerHTML += "<span class='col-md-1 col-md-offset-1 text-center'></span>";
        document.getElementById("displayOnErrorEmail").innerHTML += "<li class='text-danger'> <span class='glyphicon glyphicon-alert'></span> &nbsp;" + errorList[i] + "</li>";
    }

    return false;
  }
  else
  {
    return true;
  }
}
