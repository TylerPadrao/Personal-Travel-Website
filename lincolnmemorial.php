<!-- Tyler Padrao -->
<!-- 05/09/2021 -->
<!-- Individual Project Final - HTML Structure -->
<!-- A website that displays our country's capitiol, Washington D.C., and -->
<!-- many historical places to visit in D.C. -->
<!-- Include PHP Header and Nav -->
<?php
    $page = "Lincoln Memorial";
    include('assets/inc/header.php');
    include('assets/inc/nav.php');
?>
    <!-- Banner image across top of page -->
    <article id="lincolnmemorial" class="banner_img">
      <!-- Text within banner image -->
      <header class="banner_text">
        <h2>Lincoln Memorial</h2>
      </header>
    </article>

    <!-- Main section of page where content is located -->
    <section>
      <!-- Content about historical places in Washington D.C. -->
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/lincoln1.jpg" alt="Lincoln Memorial" />
          <h2>The Freedom & Dignity of All People</h2>
          <p>
            The Lincoln Memorial is a memorial built to honor the 16th President
            of the United States, Abraham Lincoln. Construction began February
            12, 1915 on Lincoln’s birthday. It is located on the western end of
            the National Mall, across from the Washington Monument. The Lincoln
            Memorial is a massive, beautiful building with a statue of President
            Lincoln inside. Inside the building are carved inscriptions of
            Lincoln’s second inaugural address and his Gettysburg Address. It is
            one of the most visited well known buildings in Washington and is
            open 24 hours a day to visitors. At night, the monument is lit up in
            a multi colored light display that is amazing to see.
          </p>
        </header>
      </article>
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/lincoln2.jpg" alt="Lincoln Statue" />
          <h2>Four Score and 7</h2>
          <p>
            Abraham Lincoln’s involvement in abolishing slavery led to the
            Lincoln Memorial becoming an important symbol for race relations.
            There are 87 steps from the Reflecting Pool to Lincoln’s statue in
            the monument. The number 87 represents “four score and 7” as Abraham
            Lincoln spoke in his famous Gettysburg Address.
          </p>
        </header>
      </article>
    </section>
<!-- Include PHP footer -->
<?php
    include('assets/inc/footer.php');
?>