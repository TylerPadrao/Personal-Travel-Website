// Array for store all the big images - JavaScript requirement
var newImage = new Array();

// Array to hold image captions underneath big images
var captionArray = [
  "White House",
  "United States Capitol",
  "Lincoln Memorial",
  "The Pentagon",
  "Arlington National Cemetery",
  "Supreme Court",
  "African American History",
  "Vietnam Veterans Memorial",
  "Old Alexandria",
];

// Function that is calls onload of the document
function init() {
  // Variable for storing the images using the img tag - this is used for on page loading
  var numImg = document.getElementById("imgHolder").getElementsByTagName("img")
    .length;
  // Go through all of the numImg images
  for (var i = 1; i <= numImg; i++) {
    // Put an Image object in the array spot
    newImage[i] = new Image();
    // Since there is an image object, if I assign it a .src, it will go out and load it!
    newImage[i].src = "assets/imagesgallery/gallery" + i + "big.jpg";
  }
  // Set up first caption using the first element in the caption array
  document.getElementById("cap").innerHTML = captionArray[0];
}

// Function for swapping the pictures
function changeMe(dom) {
  // Test which dom element called me
  console.log(dom);
  // Variable for getting the starting index for finding the specfic number image
  var start = dom.src.indexOf("/gallery") + 8;
  // Vairable for finding the end index for finding specfic number image
  var end = dom.src.indexOf(".jpg");
  // With the starting and ending indexes, get the substring() for tge specific number image
  var num = dom.src.substring(start, end);
  // Set the large image on the screen's src to be the one we preloaded
  document.getElementById("bigPic").src = newImage[num].src;
  // Put the correct caption out with the associated image
  document.getElementById("cap").innerHTML = captionArray[parseInt(num) - 1];
}
