function validateDoubleField(field1, field2, field1Form, field2Form, displayDoubleField, errorString)
{
  input1 = document.getElementById(field1).value;
  input2 = document.getElementById(field2).value;

  if(input1 != input2)
  {
    document.getElementById(field1Form).className = "form-group";
    document.getElementById(field1Form).className += " has-error";

    document.getElementById(field2Form).className = "form-group";
    document.getElementById(field2Form).className += " has-error";

    document.getElementById(displayDoubleField).innerHTML = "<li class='text-danger'>" + errorString;
  }
  else
  {
    document.getElementById(field1Form).className = "form-group";
    document.getElementById(field1Form).className += " has-success";

    document.getElementById(field2Form).className = "form-group";
    document.getElementById(field2Form).className += " has-success";

    document.getElementById(displayDoubleField).innerHTML = "";
  }
}
