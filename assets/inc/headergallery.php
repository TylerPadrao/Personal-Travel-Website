<!-- Header for gallery page -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <!-- Set viewport for responsiveness on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link external style sheet -->
    <link rel="stylesheet" href="assets/css/gallery.css" />
    <!-- Link external javaScript file -->
    <script src="assets/js/gallery.js"></script>
    <!-- Links for external google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <!-- Links for external google fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <!-- Links external hamburger menu logo on font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Set title of page -->
    <title><?php echo $page;?></title>
  </head>
  <body onload="init();">
  <!-- When button is clicked at bottom, this is a link to go back to the top of the page -->
    <a id="top"></a>