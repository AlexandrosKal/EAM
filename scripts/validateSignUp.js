function validateSignUp()
{
  var errorList = [];
  var error_flag = false;

  /*briskoume ti lista me ta errors*/
  var input = document.getElementById("fname").value;
  if(input=="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ονόματος.");
  }
  else
  {
    var inputArray = input.split(" ");
    var regex = /(^([Α-Ω]|[ΆΈΉΊΌΎΏΪΫ])[α-ω]*([ϊϋ]?[α-ω]*[άέήόίύώ]?|[ΐΰ]?)[α-ω]*\s?$|^[A-Z][a-z]*\s?$)/;
    for(var i=0; i<inputArray.length; i++)
    {
      if( !regex.test(inputArray[i]) )
      {
        error_flag=true;
        errorList.push("To πεδίο ονόματος δεν είναι έγκυρο.");
        break;
      }
    }
  }

  input = document.getElementById("lname").value;
  if(input=="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο επιθέτου.");
  }
  else
  {
    if( !/(^([Α-Ω]|[ΆΈΉΊΌΎΏΪΫ])[α-ω]*([ϊϋ]?[α-ω]*[άέήόίύώ]?|[ΐΰ]?)[α-ω]*\s?$|^[A-Z][a-z]*\s?$)/.test(input) )
    {
      error_flag=true;
      errorList.push("To πεδίο επιθέτου δεν είναι έγκυρο.");
    }
  }

  input = document.getElementById("email").value;
  if(input=="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο e-mail.");
  }

  input = document.getElementById("reemail").value;
  if(input=="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο επαλήθευσης e-mail.");
  }

  var password = document.getElementById("password").value;
  if(password=="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο κωδικόυ πρόσβασης.");
  }

  var repassword = document.getElementById("repassword").value;
  if(repassword=="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο επαλήθευσης κωδικόυ πρόσβασης.");
  }

  if(password != repassword)
  {
      error_flag = true;
      errorList.push("Ο κωδικός πρόσβασης διαφέρει από τον κωδικό πρόσβασης επαλήθευσης.");
  }

  input = document.getElementById("afm").value;
  if(input=="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αριθμόυ φορολογικού μητρώου.");
  }
  else
  {
    if(input.length != 9)
    {
      error_flag = true;
      errorList.push("Παρακαλώ συμπληρώστε το πεδίο αριθμόυ φορολογικού μητρώου με 9 ψηφία.");
    }
  }

  input = document.getElementById("amka").value;
  if(input=="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αριθμού μητρώου κοινωνικής ασφάλισης.");
  }
  else
  {
    if(input.length != 11)
    {
      error_flag = true;
      errorList.push("Παρακαλώ συμπληρώστε το πεδίο αριθμόυ μητρώου κοινωνικής ασφάλισης με 11 ψηφία.");
    }
  }

  input = document.getElementById("street").value;
  if(input=="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο οδού.");
  }
  else
  {
    var inputArray = input.split(" ");
    var regex = /(^([Α-Ω]|[ΆΈΉΊΌΎΏΪΫ])[α-ω]*([ϊϋ]?[α-ω]*[άέήόίύώ]?|[ΐΰ]?)[α-ω]*\s?$|^[A-Z][a-z]*\s?$)/;
    for(var i=0; i<inputArray.length; i++)
    {
      if( !regex.test(inputArray[i]) )
      {
        error_flag=true;
        errorList.push("To πεδίο οδού δεν είναι έγκυρο.");
        break;
      }
    }
  }

  input = document.getElementById("streetNum").value;
  if(input=="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αριθμού οδού.");
  }

  input = document.getElementById("postal").value;
  if(input=="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το ταχυδρομικού κώδικα.");
  }
  else
  {
    if(input.length != 5)
    {
      error_flag = true;
      errorList.push("Παρακαλώ συμπληρώστε το πεδίο ταχυδρομικού κώδικα με 5 ψηφία.");
    }
  }

  input = document.getElementById("area").value;
  if(input=="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο περιοχής.");
  }
  else
  {
    if( !/(^([Α-Ω]|[ΆΈΉΊΌΎΏΪΫ])[α-ω]*([ϊϋ]?[α-ω]*[άέήόίύώ]?|[ΐΰ]?)[α-ω]*\s?$|^[A-Z][a-z]*\s?$)/.test(input) )
    {
      error_flag=true;
      errorList.push("To πεδίο περιοχής δεν είναι έγκυρο.");
    }
  }
  /*ektupwsi tis listas*/
  if(error_flag == true)
  {
    document.getElementById("displayOnError").innerHTML="";
    for(var i=0; i < errorList.length; i++)
    {
        document.getElementById("displayOnError").innerHTML += "<li class='errtext'> <span class='glyphicon glyphicon-alert'></span>" + errorList[i] + "</li>";
    }

    return false;
  }
  else
  {
    return true;
  }
}