<!-- Tyler Padrao -->
<!-- 05/09/2021 -->
<!-- Individual Project Final - HTML Structure -->
<!-- A website that displays our country's capitiol, Washington D.C., and -->
<!-- many historical places to visit in D.C. -->
<!-- Include PHP Header and Nav -->
<?php
    $page = "Supreme Court";
    include('assets/inc/header.php');
    include('assets/inc/nav.php');
?>
<!-- Banner image across top of page -->
<article id="supremecourt" class="banner_img">
  <!-- Text within banner image -->
  <header class="banner_text">
    <h2>Supreme Court</h2>
  </header>
</article>

<!-- Main section of page where content is located -->
<section>
  <!-- Content about historical places in Washington D.C. -->
  <article>
    <header>
      <!-- Image to the right of the content -->
      <img src="assets/images/supremecourt1.jpg" alt="Supreme Court" />
      <h2>Equal Justice Under the Law</h2>
      <p>
        The Supreme Court is the highest court in the federal judiciary of the
        United States of America. It has been in existence for 232 years and was
        established March 4, 1789. It took 146 years before this important part
        of government was given its own building.
      </p>
    </header>
  </article>
  <article>
    <header>
      <!-- Image to the right of the content -->
      <img src="assets/images/supremecourt2.JPG" alt="Court" />
      <h2>Justice, the Guardian of Liberty</h2>
      <p>
        The Supreme Court building is beautiful, majestic and rich in
        ornamentation. It is constructed in 24 massive white marble columns
        imported from Italy. It is a massive building in addition to the
        courtroom. Portions of the ground floor includes the clerk’s office and
        gift shop which are open to the public for conducting tours. The second
        floor holds the courtroom, the Great Hall, and all but one judge’s
        chambers. The largest floor, is the third which holds the largest
        judge’s chamber, dining room, legal office, and reading room. The fourth
        floor is the library and the fifth floor is a basketball court and gym.
        The basketball court is named “The Highest Court in the Land.”
      </p>
    </header>
  </article>
</section>
<!-- Include PHP footer -->
<?php
    include('assets/inc/footer.php');
?>
