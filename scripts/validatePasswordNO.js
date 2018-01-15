function validatePasswordNO(passwordForm, password, displayOnErrorPassword, minDigits, maxDigits)
{
  var input = document.getElementById(password).value;

  if ( (input.length < minDigits) || (input.length > maxDigits) )
  {
    document.getElementById(passwordForm).className = "form-group";
    document.getElementById(passwordForm).className += " has-error";
    document.getElementById(displayOnErrorPassword).innerHTML = "<li class='text-danger'> Ο κωδικός πρόσβασής σας πρέπει να αποτελείται από " + minDigits + "-" + maxDigits + " χαρακτήρες.";
  }
  else
  {
    document.getElementById(passwordForm).className = "form-group";
    document.getElementById(displayOnErrorPassword).innerHTML = "";
  }
}
