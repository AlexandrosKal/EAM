function validateChangePass()
{
  var errorList = [];
  var error_flag = false;

  /*briskoume ti lista me ta errors*/
  var input = document.getElementById("current-password").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο τωρινού κωδικού πρόσβασης.");
  }

  input = document.getElementById("new-password").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο καινούριου κωδικού πρόσβασης.");
  }

  input = document.getElementById("renew-password").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο επαλήθευσης καινούριου κωδικού πρόσβασης.");
  }

  /*ektupwsi tis listas*/
  if(error_flag === true)
  {
    document.getElementById("displayOnErrorPass").innerHTML="";
    for(var i=0; i < errorList.length; i++)
    {
        document.getElementById("displayOnErrorPass").innerHTML += "<span class='col-md-1 col-md-offset-1 text-center'></span>";
        document.getElementById("displayOnErrorPass").innerHTML += "<li class='text-danger'> <span class='glyphicon glyphicon-alert'></span> &nbsp;" + errorList[i] + "</li>";
    }

    return false;
  }
  else
  {
    return true;
  }
}
