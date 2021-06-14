<!-- Tyler Padrao -->
<!-- 05/09/2021 -->
<!-- Individual Project Final - HTML Structure -->
<!-- A website that displays our country's capitiol, Washington D.C., and -->
<!-- many historical places to visit in D.C. -->
<!-- Include PHP Header and Nav -->
<?php
    $page = "Gallery";
    include('assets/inc/headergallery.php');
    include('assets/inc/nav.php');
?>
<!-- Big Pics -->
<h1>Beautiful sights of Washington D.C.</h1>
<figure id="bigPlace">
  <img
    src="assets/imagesgallery/gallery1big.jpg"
    alt="big pics!"
    id="bigPic"
  />
  <figcaption id="cap"></figcaption>
</figure>
<!-- Section holding all of the thumbnail pictures -->
<section class="table">
  <div
    style="width: 833px; height: 104px; overflow: auto; white-space: nowrap"
    id="imgHolder"
  >
  <!-- Change clicked thumb nail image to big image  -->
    <img
      onclick="changeMe(this)"
      src="assets/imagesgallery/gallery1.jpg"
      alt="White House"
      onmouseover="this.style.cursor='pointer';"
    />
    <img
      onclick="changeMe(this)"
      src="assets/imagesgallery/gallery2.jpg"
      alt="U.S. Capitol"
      onmouseover="this.style.cursor='pointer';"
    />
    <img
      onclick="changeMe(this)"
      src="assets/imagesgallery/gallery3.jpg"
      alt="Lincoln Memorial"
      onmouseover="this.style.cursor='pointer';"
    />
    <img
      onclick="changeMe(this)"
      src="assets/imagesgallery/gallery4.jpg"
      alt="The Pentagon"
      onmouseover="this.style.cursor='pointer';"
    />
    <img
      onclick="changeMe(this)"
      src="assets/imagesgallery/gallery5.jpg"
      alt="Arlington National Cemetery"
      onmouseover="this.style.cursor='pointer';"
    />
    <img
      onclick="changeMe(this)"
      src="assets/imagesgallery/gallery6.jpg"
      alt="Supreme Court"
      onmouseover="this.style.cursor='pointer';"
    />
    <img
      onclick="changeMe(this)"
      src="assets/imagesgallery/gallery7.jpg"
      alt="African American History"
      onmouseover="this.style.cursor='pointer';"
    />
    <img
      onclick="changeMe(this)"
      src="assets/imagesgallery/gallery8.jpg"
      alt="Vietnam Veterans Memorial"
      onmouseover="this.style.cursor='pointer';"
    />
    <img
      onclick="changeMe(this)"
      src="assets/imagesgallery/gallery9.jpg"
      alt="Old Alexandria"
      onmouseover="this.style.cursor='pointer';"
    />
  </div>
</section>
<!-- Include PHP footer -->
<?php
    include('assets/inc/footer.php');
?>
