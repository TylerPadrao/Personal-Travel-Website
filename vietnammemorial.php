<!-- Tyler Padrao -->
<!-- 05/09/2021 -->
<!-- Individual Project Final - HTML Structure -->
<!-- A website that displays our country's capitiol, Washington D.C., and -->
<!-- many historical places to visit in D.C. -->
<!-- Include PHP Header and Nav -->
<?php
    $page = "Vietnam Veterans Memorial";
    include('assets/inc/header.php');
    include('assets/inc/nav.php');
?>
    <!-- Banner image across top of page -->
    <article id="vietnammemorial" class="banner_img">
      <!-- Text within banner image -->
      <header class="banner_text">
        <h2>Vietnam Veterans Memorial and National Mall</h2>
      </header>
    </article>

    <!-- Main section of page where content is located -->
    <section>
      <!-- Content about historical places in Washington D.C. -->
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/vietnam1.jpg" alt="Vietnam Wall" />
          <h2>Icon’s in the National Capital</h2>
          <p>
            The National Mall is nicknamed “America’s front lawn” and is the
            home of inspiring monuments, memorials, and museums. The park honors
            our American forefathers and heroes. A reflection pool is the
            nucleus of the mall and hosts many of the 24 million visitors a
            year. It is a walking path on both sides of an open area of gardens,
            fountains, trees, and monuments stretching nearly two miles between
            the Capitol and ends at the Lincoln Memorial. Depending on the
            viewer's vantage point, it dramatically reflects the Washington
            Monument, the Lincoln Memorial, or the Mall's trees.
          </p>
        </header>
      </article>
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/vietnam2.jpg" alt="Statue" />
          <h2>About the Wall</h2>
          <p>
            The Vietnam Veterans Memorial is in the Constitution Gardens
            adjacent to the National Mall and just northeast of the Lincoln
            Memorial. The Vietnam Memorial receives over 3 million visitors a
            year. The black granite wall is engraved with the names of U.S.
            service members who died as a result of the war. Along with the wall
            monument there is a statue of three U.S. Soldiers and the Vietnam
            Women’s Memorial. It is interesting and moving to visit.
          </p>
        </header>
      </article>
    </section>
<!-- Include PHP footer -->
<?php
    include('assets/inc/footer.php');
?>
