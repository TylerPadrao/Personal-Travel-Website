    <!-- Global navigation -->
    <div class="nav">
      <!-- Logo on right side of navigation -->
      <img onclick="indexPage();" src="assets/images/logo.png" alt="logo" />
      <div class="ul">
        <!-- Drop down menu to view locations in Washington D.C. -->
        <div class="dropdown_menu">
          <!-- Input button for home page, and drop down menu -->
          <form action="index.php">
          <!-- If page is on any of the main pages, make it active! -->
            <input onclick="dropbtn();" type="button" value="Explore D.C." <?php echo (isset($page) && ($page=='Washington D.C.' || $page=='White House' || $page=='United States Capitol' || $page=='Lincoln Memorial' || $page=='The Pentagon' || $page=='Arlington National Cemetery' || $page=='Supreme Court' || $page=='African American History' || $page=='Vietnam Veterans Memorial' || $page=='Old Alexandria')) ? ' class="active dropbtn" ' :' class="dropbtn" ' ?> />
          </form>
          <!-- Drop down content -->
          <!-- If page is on any of the main pages, make it active! -->
          <div class="places" style="display: none;">
            <a <?php echo (isset($page) && $page=='White House') ? ' class="myLink active" ' :'' ?> href="whitehouse.php">White House</a>
            <a <?php echo (isset($page) && $page=='United States Capitol') ? ' class="myLink active" ' :'' ?> href="capitol.php">United States Capitol</a>
            <a <?php echo (isset($page) && $page=='Lincoln Memorial') ? ' class="myLink active" ' :'' ?> href="lincolnmemorial.php">Lincoln Memorial</a>
            <a <?php echo (isset($page) && $page=='The Pentagon') ? ' class="myLink active" ' :'' ?> href="pentagon.php">The Pentagon</a>
            <a <?php echo (isset($page) && $page=='Arlington National Cemetery') ? ' class="myLink active" ' :'' ?> href="arlington.php"
              >Arlington National Cemetery</a
            >
            <a <?php echo (isset($page) && $page=='Supreme Court') ? ' class="myLink active" ' :'' ?> href="supremecourt.php">Supreme Court</a>
            <a <?php echo (isset($page) && $page=='African American History') ? ' class="myLink active" ' :'' ?> href="aahistory.php"
              >African American History</a
            >
            <a <?php echo (isset($page) && $page=='Vietnam Veterans Memorial') ? ' class="myLink active" ' :'' ?> href="vietnammemorial.php"
              >Vietnam Veterans Memorial</a
            >
            <a <?php echo (isset($page) && $page=='Old Alexandria') ? ' class="myLink active" ' :'' ?> href="oldalexandria.php">Old Alexandria</a>
          </div>
        </div>
        <!-- Other links in global navigation -->
        <!-- If page is on about, contact, comments, or galery page, make it active! -->
        <a <?php echo (isset($page) && $page=='About') ? ' class="myLink active" ' :'' ?> href="about.php">About</a>
        <a <?php echo (isset($page) && $page=='Contact') ? ' class="myLink active" ' :'' ?> href="contact.php">Contact</a>
        <a <?php echo (isset($page) && $page=='Tell us about your visit') ? ' class="myLink active" ' :'' ?> href="comments.php">Comments</a>
        <a <?php echo (isset($page) && $page=='Gallery') ? ' class="myLink active" ' :'' ?> href="gallery.php">Gallery</a>
      </div>
    <!-- Link external javaScript file for hamburger menu -->
    <script src="assets/js/nav.js"></script>
    </div>
    <!-- Div for hamburger menu when on mobile view -->
    <div class="hamburger">
      <a href="#" class="icon" onclick="myFunction();" ><i class="fa fa-bars"></i></a>
    </div>