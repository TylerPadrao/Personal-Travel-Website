<!-- Tyler Padrao -->
<!-- 05/09/2021 -->
<!-- Individual Project Final - HTML Structure -->
<!-- A website that displays our country's capitiol, Washington D.C., and -->
<!-- many historical places to visit in D.C. -->
<!-- Include PHP Header and Nav -->
<?php
    $page = "The Pentagon";
    include('assets/inc/header.php');
    include('assets/inc/nav.php');
?>
    <!-- Banner image across top of page -->
    <article id="pentagon" class="banner_img">
      <!-- Text within banner image -->
      <header class="banner_text">
        <h2>The Pentagon</h2>
      </header>
    </article>

    <!-- Main section of page where content is located -->
    <section>
      <!-- Content about historical places in Washington D.C. -->
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/pentagon1.jpg" alt="Pentagon" />
          <h2>The US Symbol of Strength</h2>
          <p>
            The Pentagon is the headquarters of the United States Department of
            Defense. It is the symbol of all U.S. military forces. Built in
            1943, it is the world’s largest office building with 6.5 million
            square feet of floor space. It was constructed in the shape of a
            pentagon with five sides, five floors above ground, and two basement
            levels. 26,000 military and civilian employees work at the Pentagon.
          </p>
        </header>
      </article>
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/pentagon2.jpg" alt="Pentagon City" />
          <h2>A Must See Sight</h2>
          <p>
            Due to the massive size and area that it occupies, the Pentagon has
            six Washington D.C. zip codes despite its location in Virginia. The
            Pentagon spans 29 acres. It includes an additional 51 acres of land
            and has a beautiful central courtyard. A somber part of the Pentagon
            is the 9/11 Memorial to honor those who lost their lives during the
            9/11 terrorists attack. Just south of the Pentagon are Pentagon City
            and Crystal City. This area boasts extensive shopping, business, and
            high density residential districts in Arlington. The Pentagon is
            surrounded by its own roadways. All these details make the Pentagon
            a must see on a Washington visit.
          </p>
        </header>
      </article>
    </section>
<!-- Include PHP footer -->
<?php
    include('assets/inc/footer.php');
?>