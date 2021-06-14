<!-- Tyler Padrao -->
<!-- 05/09/2021 -->
<!-- Individual Project Final - HTML Structure -->
<!-- A website that displays our country's capitiol, Washington D.C., and -->
<!-- many historical places to visit in D.C. -->
<!-- Include PHP Header and Nav -->
<?php
    $page = "African American History";
    include('assets/inc/header.php');
    include('assets/inc/nav.php');
?>
    <!-- Banner image across top of page -->
    <article id="aahistory" class="banner_img">
      <!-- Text within banner image -->
      <header class="banner_text">
        <h2>
          Smithsonian National Museum of African American History and Culture
        </h2>
      </header>
    </article>

    <!-- Main section of page where content is located -->
    <section>
      <!-- Content about historical places in Washington D.C. -->
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/aahistory1.jpg" alt="Building" />
          <h2>America’s Heritage</h2>
          <p>
            Here is a magnificent building shaped in three tiered crowns worn by
            the Yoruba people from West Africa. The building is adorned and
            decorated with bronze colored latticework that honor the United
            States slave roots. You can take an adventure inside and view some
            of the amazing African architecture.
          </p>
        </header>
      </article>
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/aahistory2.jpg" alt="Court" />
          <h2>The Diversity of the American Culture</h2>
          <p>
            More than 36,000 African American artifacts and displays are inside.
            One of the most moving and emotional displays are the photographs of
            Dr. Martin Luther King Jr. highlighting the immense struggles of the
            African American citizens who suffered greatly in achieving freedom
            and civil rights in this country.
          </p>
        </header>
      </article>
    </section>
<!-- Include PHP footer -->
<?php
    include('assets/inc/footer.php');
?>