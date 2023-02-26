function validateForm() {
    // Get the input values
    var username = document.forms["myform2"]["uname1"].value;
    var email = document.forms["myform2"]["email"].value;
    var password1 = document.forms["myform2"]["upswd1"].value;
    var password2 = document.forms["myform2"]["upswd2"].value;
  
    // Validate the input values
    if (username == "") {
      alert("Please enter a username.");
      return false;
    }
  
    if (email == "") {
      alert("Please enter an email address.");
      return false;
    }
  
    if (password1 == "") {
      alert("Please enter a password.");
      return false;
    }
  
    if (password1 != password2) {
      alert("Passwords do not match.");
      return false;
    }
  
    // If all input values are valid, return true
    return true;
  }
  