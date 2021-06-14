// Function for form validation and also DHTML requirment
function validate() {
  // Variable for name input
  var name = document.forms["userForm"]["name"].value;
  // Variable for comment input
  var comment = document.forms["userForm"]["comment"].value;
  // If name is empty and comment is not empty
  if (name == "" && comment != "") {
    // Notify user with alert to enter name in input box
    alert("Please enter your name below.");
    // Make border of name input box red - DHTML
    document.getElementById("user").style.borderColor = "red";
    // Keep border of comment input box blue - DHTML
    document.getElementById("message").style.borderColor = "#1d3557";
    return false;
    // If comment is empty and name is not empty
  } else if (comment == "" && name != "") {
    // Notify user with alert to enter comment in input box
    alert("Please enter a comment below.");
    // Make border of comment input box red - DHTML
    document.getElementById("message").style.borderColor = "red";
    // Keep border of name input box blue - DHTML
    document.getElementById("user").style.borderColor = "#1d3557";
    return false;
    // If comment and name input boxes are empty
  } else if (comment == "" && name == "") {
    // Notify user with alert to enter name and comment in input boxes
    alert("Please enter your name and a comment below.");
    // Make border of name input box red - DHTML
    document.getElementById("user").style.borderColor = "red";
    // Make border of comment input box red - DHTML
    document.getElementById("message").style.borderColor = "red";
    return false;
  }
}
