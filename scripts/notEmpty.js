function notEmpty(confirmForm, confirm, displayOnError)
{
  var input = document.getElementById(confirm).value;

  if(input.length >= 1)
  {
    document.getElementById(confirmForm).className = "form-group";
    document.getElementById(confirmForm).className += " has-success";
    document.getElementById(displayOnError).innerHTML = "";
  }
  else
  {
    document.getElementById(confirmForm).className = "form-group";
    document.getElementById(confirmForm).className += " has-error";
    document.getElementById(displayOnError).innerHTML = "<li class='text-danger'> Παρακαλώ συμπληρώστε το πεδίο.";
  }
}
