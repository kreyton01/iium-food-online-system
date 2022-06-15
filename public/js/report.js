function validateForm() {
  var fn = document.forms["myForm"]["firstname"].value;
  var ln = document.forms["myForm"]["lastname"].value;
  var mail = document.forms["myForm"]["email"].value;
  var sub = document.forms["myForm"]["subject"].value;
//username validation
  if (fn == ""){
    alert("Please insert your First Name!");
    return false;
  }

//password validation
if (ln == ""){
  alert("Please insert your Last Name");
  return false;
}

if (mail == ""){
  alert("Please insert your Email!");
  return false;
}

if (sub == ""){
  alert("Please elaborate your Query!");
  return false;
}
}
