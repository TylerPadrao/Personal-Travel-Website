<!-- Tyler Padrao -->
<!-- 05/09/2021 -->
<!-- Individual Project Final - HTML Structure -->
<!-- A website that displays our country's capitiol, Washington D.C., and -->
<!-- many historical places to visit in D.C. -->
<!-- Include PHP Header and Nav -->
<?php
    $page = "Contact";
    include('assets/inc/header.php');
    include('assets/inc/nav.php');
?>
    <!-- Banner image across top of page -->
    <article id="contact" class="banner_img">
      <!-- Text within banner image -->
      <header class="banner_text">
        <h2>Contact Us</h2>
      </header>
    </article>

    <!-- Main section of page where content is located -->
    <section>
      <!-- Content about historical places in Washington D.C. -->
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/contact1.jpg" alt="Statue" />
          <h2>Contact Us</h2>
          <p>
            Do you want to reach us? You can call us at 315-406-6632 or email us
            at
            <a href="mailto:tjpadrao@yahoo.com"
              ><span>tjpadrao@yahoo.com</span></a
            >
          </p>
        </header>
      </article>
    </section>
<!-- Include PHP footer -->
<?php
    include('assets/inc/footer.php');
?>
