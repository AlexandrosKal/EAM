function validateApplicationPension()
{
  var errorList = [];
  var error_flag = false;

  /*briskoume ti lista me ta errors*/
  var input = document.getElementById("dikaiologitiko1").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ ανεβάστε την αίτηση σύνταξης γήρατος σας.");
  }

  input = document.getElementById("dikaiologitiko2").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ ανεβάστε τη φωτοτυπία ταυτότητας σας.");
  }

  input = document.getElementById("dikaiologitiko3").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ ανεβάστε ανεβάστε τη φωτοτυπία ενσήμων σας.");
  }

  input = document.getElementById("dikaiologitiko4").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ ανεβάστε ανεβάστε τη φωτοτυπία εκκαθαριστικού εφορίας σας.");
  }

  input = document.getElementById("dikaiologitiko5").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ ανεβάστε ανεβάστε τη βεβαίωση παραίτησης απο τον εργοδότη σας.");
  }

  /*ektupwsi tis listas*/
  if(error_flag === true)
  {
    document.getElementById("displayOnError").innerHTML="";
    document.getElementById("displayOnError").innerHTML += "<div id='applic-error' class='alert alert-danger error-alert-margin'>"
    for(var i=0; i < errorList.length; i++)
    {
        document.getElementById("applic-error").innerHTML += "<li class='text-danger'> <span class='glyphicon glyphicon-alert'></span> &nbsp;" + errorList[i] + "</li>";
    }

    return false;
  }
  else
  {
    return true;
  }
}
