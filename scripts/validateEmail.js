function validateEmail(emailForm, email, displayOnErrorEmail)
{
  var input = document.getElementById(email).value;
  var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

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
