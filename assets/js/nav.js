// Function for hamburger menu switching between mobile and desktop view
function myFunction() {
  // Variable for ul elements in nav
  var x = document.getElementsByClassName("ul")[0];
  // If display of ul list is none, make it block display - from mobile to desktop view
  if (x.style.display == "block") {
    x.style.display = "none";
    // If display is block, make it none - from desktop to mobile view
  } else {
    x.style.display = "block";
  }
}

// Function for making the drop down button display the places between mobile and desktop view
function dropbtn() {
  // Variable for places class in nav
  var y = document.getElementsByClassName("places")[0];
  // If places class has a display of none, make it block  - from mobile to desktop view
  if (y.style.display == "none") {
    y.style.display = "block";
    // If places class has a display of block, make it none - from desktop to mobile view
  } else {
    y.style.display = "none";
  }
}

// Function for when clicking logo in top right, go back to home page
function indexPage() {
  window.location.href = "index.php";
}
