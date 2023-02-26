function validateLoginForm() {
  // Get the input values
  var username = document.forms["myform1"]["uname2"].value;
  var password = document.forms["myform1"]["upswd3"].value;

  // Validate the input values
  if (username == "") {
    alert("Please enter a username.");
    return false;
  }

  if (password == "") {
    alert("Please enter a password.");
    return false;
  }

  // If all input values are valid, return true
  return true;
}
