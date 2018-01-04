function validateLogIn()
{
  var errorList = [];
  var error_flag = false;

  /*briskoume ti lista me ta errors*/
  var input = document.getElementById("email_l").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο e-mail.");
  }
  else
  {
    if (!/^[\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})]+$/.test(input))
    {
      error_flag = true;
      errorList.push("Το e-mail που εισάγατε δεν ειναι έγκυρο.");
    }
  }

  input = document.getElementById("password_l").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο κωδικού πρόσβασης.");
  }

  /*ektupwsi tis listas*/
  if(error_flag === true)
  {
    document.getElementById("displayOnError_l").innerHTML="";
    for(var i=0; i < errorList.length; i++)
    {
        document.getElementById("displayOnError_l").innerHTML += "<span class='col-md-1 col-md-offset-1 text-center'></span>";
        document.getElementById("displayOnError_l").innerHTML += "<li class='text-danger'> <span class='glyphicon glyphicon-alert'></span> &nbsp;" + errorList[i] + "</li>";
    }

    return false;
  }
  else
  {
    return true;
  }
}
