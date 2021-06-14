<!-- Tyler Padrao -->
<!-- 05/09/2021 -->
<!-- Individual Project Final - HTML Structure -->
<!-- A website that displays our country's capitiol, Washington D.C., and -->
<!-- many historical places to visit in D.C. -->
<!-- Include PHP Header and Nav -->
<?php
    $page = "Old Alexandria";
    include('assets/inc/header.php');
    include('assets/inc/nav.php');
?>
    <!-- Banner image across top of page -->
    <article id="oldalexandria" class="banner_img">
      <!-- Text within banner image -->
      <header class="banner_text">
        <h2>Old Alexandria</h2>
      </header>
    </article>

    <!-- Main section of page where content is located -->
    <section>
      <!-- Content about historical places in Washington D.C. -->
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/oldalexandria1.jpg" alt="Town" />
          <h2>Across the Potomac</h2>
          <p>
            Also called Old Town Neighborhood in Alexandria, Virginia and is
            nationally recognized for its rich history along the Potomac River,
            across from Washington D.C. King Street in Old Alexandria is an
            extraordinary backdrop for many splendid eateries along the river,
            quaint boutiques, vibrant arts, and culture as well as a farmer’s
            market which has been operating continually for over 260 years.
          </p>
        </header>
      </article>
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img
            src="assets/images/oldalexandria2.JPG"
            alt="Old Alexandria holidays"
          />
          <h2>Charming Historic City</h2>
          <p>
            Alexandria is primarily known for its rich colonial history. It is
            George Washington’s hometown, and includes attractions frequented by
            America’s Founding Fathers. George Washington would often sleep
            above Gadsby’s Tavern in Old Town. It is now one of the many small
            museums to visit in the area. So on a trip to Washington D.C., Old
            Town Alexandria is a trip back in time. It’s a rare gem that should
            not be missed and has so much to offer.
          </p>
        </header>
      </article>
    </section>
<!-- Include PHP footer -->
<?php
    include('assets/inc/footer.php');
?>
