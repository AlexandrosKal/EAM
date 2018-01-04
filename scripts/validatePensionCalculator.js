function validatePensionCalculator()
{
  var errorList = [];
  var error_flag = false;

  /*briskoume ti lista me ta errors*/
  var input = document.getElementById("totalDays").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο συνολικών ημερών εργάσιας ωσ ασφαλισμένος.");
  }

  input = document.getElementById("income2k17").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αποδοχών κατά το έτος 2017.");
  }

  input = document.getElementById("days2k17").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ημερών εργάσιας κατά το έτος 2017.");
  }

  input = document.getElementById("income2k16").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αποδοχών κατά το έτος 2016.");
  }

  input = document.getElementById("days2k16").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ημερών εργάσιας κατά το έτος 2016.");
  }

  input = document.getElementById("income2k15").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αποδοχών κατά το έτος 2015.");
  }

  input = document.getElementById("days2k15").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ημερών εργάσιας κατά το έτος 2015.");
  }

  input = document.getElementById("income2k14").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αποδοχών κατά το έτος 2014.");
  }

  input = document.getElementById("days2k14").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ημερών εργάσιας κατά το έτος 2014.");
  }

  input = document.getElementById("income2k13").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αποδοχών κατά το έτος 2013.");
  }

  input = document.getElementById("days2k13").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ημερών εργάσιας κατά το έτος 2013.");
  }

  input = document.getElementById("income2k12").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αποδοχών κατά το έτος 2012.");
  }

  input = document.getElementById("days2k12").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ημερών εργάσιας κατά το έτος 2012.");
  }

  input = document.getElementById("income2k11").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αποδοχών κατά το έτος 2011.");
  }

  input = document.getElementById("days2k11").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ημερών εργάσιας κατά το έτος 2011.");
  }

  input = document.getElementById("income2k10").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αποδοχών κατά το έτος 2010.");
  }

  input = document.getElementById("days2k10").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ημερών εργάσιας κατά το έτος 2010.");
  }

  input = document.getElementById("income2k09").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αποδοχών κατά το έτος 2009.");
  }

  input = document.getElementById("days2k09").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ημερών εργάσιας κατά το έτος 2009.");
  }

  input = document.getElementById("income2k08").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αποδοχών κατά το έτος 2008.");
  }

  input = document.getElementById("days2k08").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ημερών εργάσιας κατά το έτος 2008.");
  }

  /*ektupwsi tis listas*/
  if(error_flag === true)
  {
    document.getElementById("displayOnError").innerHTML="";
    for(var i=0; i < errorList.length; i++)
    {
        document.getElementById("displayOnError").innerHTML += "<span class='col-md-1 col-md-offset-1 text-center'></span>";
        document.getElementById("displayOnError").innerHTML += "<li class='text-danger'> <span class='glyphicon glyphicon-alert'></span> &nbsp;" + errorList[i] + "</li>";
    }

    return false;
  }
  else
  {
    return true;
  }
}
