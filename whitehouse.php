<!-- Tyler Padrao -->
<!-- 05/09/2021 -->
<!-- Individual Project Final - HTML Structure -->
<!-- A website that displays our country's capitiol, Washington D.C., and -->
<!-- many historical places to visit in D.C. -->
<!-- Include PHP Header and Nav -->
<?php
    $page = "White House";
    include('assets/inc/header.php');
    include('assets/inc/nav.php');
?>
<!-- Banner image across top of page -->
<article id="whitehouse" class="banner_img">
  <!-- Text within banner image -->
  <header class="banner_text">
    <h2>The White House</h2>
  </header>
</article>

<!-- Main section of page where content is located -->
<section>
  <!-- Content about historical places in Washington D.C. -->
  <article>
    <header>
      <!-- Image to the right of the content -->
      <img src="assets/images/whitehouse1.jpg" alt="White House" />
      <h2>From Past</h2>
      <p>
        The White House is the official residence of the president of the United
        States. It is located at 1600 Pennsylvania Ave. It has been the
        residence of every U.S. president since John Adams in 1800.
      </p>
      <p>
        The residence was designed by Irish born architect, James Hoban. In the
        British War of 1812, the White House was burned by the British Army,
        destroying the interior and charring much of the exterior.
        Reconstruction began almost immediately, and President James Monroe
        moved into the reconstructed executive residence in October 1817.
      </p>
    </header>
  </article>
  <article>
    <header>
      <!-- Image to the right of the content -->
      <img src="assets/images/whitehouse2.jpg" alt="White House office" />
      <h2>To Modern Day</h2>
      <p>
        Over the years and up to the present time, there have been numerous
        expansions increasing the size, security, and scope of the White House.
        The modern-day White House complex includes the executive residence,
        West Wing, East Wing, Eisenhower Executive Office Building, Blair House,
        and a guest residence on the grounds. The White House is made up of six
        stories and is a national heritage site owned by the U.S. government and
        operated by the National Park Service.
      </p>
    </header>
  </article>
</section>
<!-- Include PHP footer -->
<?php
    include('assets/inc/footer.php');
?>