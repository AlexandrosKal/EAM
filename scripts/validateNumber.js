function validateNumber(numForm, num, displayOnErrorNum, digits)
{
  var input = document.getElementById(num).value;

  if(input.length < digits)
  {
    document.getElementById(numForm).className = "form-group";
    document.getElementById(numForm).className += " has-error";
    document.getElementById(displayOnErrorNum).innerHTML = "<li class='text-danger'> Παρακαλώ εισάγετε " + digits + " ψηφία.";
  }
  else if(input.length == digits)
  {
    document.getElementById(numForm).className = "form-group";
    document.getElementById(numForm).className += " has-success";
    document.getElementById(displayOnErrorNum).innerHTML = "";
  }
}
