function validateEmail(emailForm, email, displayOnErrorEmail)
{
  var input = document.getElementById(email).value;
  var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  if (! regex.test(input))
  {
    document.getElementById(emailForm).className = "form-group";
    document.getElementById(emailForm).className += " has-error";
    document.getElementById(displayOnErrorEmail).innerHTML = "<li class='text-danger'> Το e-mail που εισάγετε δεν ειναι έγκυρο.";
  }
  else
  {
    document.getElementById(emailForm).className = "form-group";
    document.getElementById(emailForm).className += " has-success";
    document.getElementById(displayOnErrorEmail).innerHTML = "";
  }
}
