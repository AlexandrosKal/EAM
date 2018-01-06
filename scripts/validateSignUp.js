function validateSignUp()
{
  var errorList = [];
  var error_flag = false;

  /*briskoume ti lista me ta errors*/
  var input = document.getElementById("fname").value;
  if(input==="")
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
  if(input==="")
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
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο e-mail.");
  }

  input = document.getElementById("reemail").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο επαλήθευσης e-mail.");
  }

  var password = document.getElementById("password").value;
  if(password==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο κωδικόυ πρόσβασης.");
  }
  else
  {
    if ( (password.length < 8) || (password.length > 24) )
    {
      error_flag = true;
      errorList.push("Ο κωδικός πρόσβασης σας πρέπει να αποτελείται από 8-24 χαρακτήρες.");
    }
  }

  var repassword = document.getElementById("repassword").value;
  if(repassword==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο επαλήθευσης κωδικόυ πρόσβασης.");
  }
  else
  {
    if ( (repassword.length < 8) || (repassword.length > 24) )
    {
      error_flag = true;
      errorList.push("Ο κωδικός πρόσβασης επαλήθευσής σας πρέπει να αποτελείται από 8-24 χαρακτήρες.");
    }
  }

  if(password != repassword)
  {
      error_flag = true;
      errorList.push("Ο κωδικός πρόσβασης διαφέρει από τον κωδικό πρόσβασης επαλήθευσης.");
  }

  input = document.getElementById("afm").value;
  if(input==="")
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
  if(input==="")
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

  input = document.getElementById("adt").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αριθμού δελτίου ταυτότητας.");
  }
  else
  {
    if(input.length != 8)
    {
      error_flag = true;
      errorList.push("Παρακαλώ συμπληρώστε το πεδίο αριθμόυ δελτίου ταυτότητας με 8 ψηφία.");
    }

    if( !/^(?:[A-Z]){2}(?:[0-9]){6}$/.test(input) )
    {
      error_flag=true;
      errorList.push("To πεδίο αριθμού δελτίου ταυτότητας δεν είναι έγκυρο. Μην χρησιμοποιείται κενό μεταξύ των αριθμών και των γραμμάτων.");
    }
  }

  input = document.getElementById("bday").value;
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο ημερομηνίας γέννησης.");
  }
  else
  {
    if( !/^(?:[0-9]){1,2}\/(?:[0-9]){1,2}\/(?:[0-9]){4}$/.test(input) )
    {
      error_flag=true;
      errorList.push("To πεδίο ημερομηνίας γέννησης δεν είναι έγκυρο.");
    }
  }

  input = document.getElementById("street").value;
  if(input==="")
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
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο αριθμού οδού.");
  }

  input = document.getElementById("postal").value;
  if(input==="")
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
  if(input==="")
  {
    error_flag = true;
    errorList.push("Παρακαλώ συμπληρώστε το πεδίο περιοχής.");
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
        errorList.push("To πεδίο περιοχής δεν είναι έγκυρο.");
        break;
      }
    }
  }
  /*ektupwsi tis listas*/
  if(error_flag === true)
  {
    document.getElementById("displayOnError").innerHTML="";
    document.getElementById("displayOnError").innerHTML += "<div id='signup-error' class='alert alert-danger error-alert-margin'>"
    for(var i=0; i < errorList.length; i++)
    {
        document.getElementById("signup-error").innerHTML += "<li class='text-danger'> <span class='glyphicon glyphicon-alert'></span> &nbsp;" + errorList[i] + "</li>";
    }

    return false;
  }
  else
  {
    return true;
  }
}
