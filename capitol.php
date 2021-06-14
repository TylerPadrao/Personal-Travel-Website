<!-- Tyler Padrao -->
<!-- 05/09/2021 -->
<!-- Individual Project Final - HTML Structure -->
<!-- A website that displays our country's capitiol, Washington D.C., and -->
<!-- many historical places to visit in D.C. -->
<!-- Include PHP Header and Nav -->
<?php
    $page = "United States Capitol";
    include('assets/inc/header.php');
    include('assets/inc/nav.php');
?>
    <!-- Banner image across top of page -->
    <article id="capitol" class="banner_img">
      <!-- Text within banner image -->
      <header class="banner_text">
        <h2>U.S. Capitol</h2>
      </header>
    </article>

    <!-- Main section of page where content is located -->
    <section>
      <!-- Content about historical places in Washington D.C. -->
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/capitol1.jpg" alt="US Capitol" />
          <h2>One Country, One Constitution, One Destiny</h2>
          <p>
            One of the most beautiful, magnificent buildings in all of
            Washington, the U.S. Capitol is where visitors go to see American
            politics in action. Inside, representatives and members of both
            houses of congress argue, debate, and create national policies and
            laws. The U.S. Capitol is a symbol of the American people, and their
            government that represents democracy.
          </p>
        </header>
      </article>
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/capitol2.jpg" alt="Capitol interior" />
          <h2>Admire the Beauty</h2>
          <p>
            The Capitol was designed in 1793 and captures the ideals of the
            Founding Fathers. Its impressive architecture is viewed by over 5
            million people a year. The building’s north and south wings surround
            the center part of the circular shaped building called the Rotunda.
            This stunning hall boasts over 300 paintings and sculptures
            depicting famous points of American history. There is also a 150
            year old cast iron dome in the Rotunda that is spectacular. Numerous
            inscriptions from our presidential and other influential leaders are
            found throughout the Capitol building.
          </p>
        </header>
      </article>
    </section>
<!-- Include PHP footer -->
<?php
    include('assets/inc/footer.php');
?>