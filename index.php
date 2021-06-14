<!-- Tyler Padrao -->
<!-- 05/09/2021 -->
<!-- Individual Project Final - HTML Structure -->
<!-- A website that displays our country's capitiol, Washington D.C., and -->
<!-- many historical places to visit in D.C. -->
<!-- Include PHP Header and Nav -->
<?php
    $page = "Washington D.C.";
    include('assets/inc/header.php');
    include('assets/inc/nav.php');
?>
    <!-- Banner image across top of page -->
    <article id="index" class="banner_img">
      <!-- Text within banner image -->
      <header class="banner_text">
        <h2>Washington D.C.</h2>
        <p>The great capital of the United States of America</p>
      </header>
    </article>

    <!-- Main section of page where content is located -->
    <section>
      <!-- Content about historical places in Washington D.C. -->
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/indexmap.JPG" alt="Map" />
          <h2>The Nation's Historic Capital</h2>
          <p>
            Washington D.C. is the district capital of the United States and the
            U.S. capital. It is a beautiful historical small city on the Potomac
            River. It borders the states of Maryland and Virginia. It is known
            and defined by its classical, historical monuments, and buildings.
            The iconic ones include the Capitol, White House, and Supreme Court.
            These house the 3 branches of the federal government.
          </p>
          <p>
            In Washington, Georgetown is the oldest part of the city. It dates
            back to 1751; 40 years before Washington D.C. was founded.
          </p>
        </header>
      </article>
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/index2.jpg" alt="DC Sky line" />
          <h2>Discover D.C.</h2>
          <p>
            Washington D.C. is a very international city. It is home to more
            than 175 embassies and cultural centers from around the world.
            Washington D.C. is one of the most visited cities in the U.S. In
            2019, over 20 million visitors enjoyed this historic city of 705,749
            residents.
          </p>
          <p>
            There are countless things to enjoy and see in and around Washington
            D.C. that include world class museums and important historical
            monuments. Many of the most important things to see and do are in
            the northwest quadrant along the National Mall which are best seen
            on foot.
          </p>
        </header>
      </article>
    </section>
<!-- Include PHP footer -->
<?php
    include('assets/inc/footer.php');
?>