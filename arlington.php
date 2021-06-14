<!-- Tyler Padrao -->
<!-- 05/09/2021 -->
<!-- Individual Project Final - HTML Structure -->
<!-- A website that displays our country's capitiol, Washington D.C., and -->
<!-- many historical places to visit in D.C. -->
<!-- Include PHP Header and Nav -->
<?php
    $page = "Arlington National Cemetery";
    include('assets/inc/header.php');
    include('assets/inc/nav.php');
?>
    <!-- Banner image across top of page -->
    <article id="arlington" class="banner_img">
      <!-- Text within banner image -->
      <header class="banner_text">
        <h2>Arlington National Cemetery</h2>
      </header>
    </article>

    <!-- Main section of page where content is located -->
    <section>
      <!-- Content about historical places in Washington D.C. -->
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/arlington1.jpg" alt="Cemetery" />
          <h2>In Memory of</h2>
          <p>
            Arlington is a United States 650 acre military cemetery in Arlington
            County, Virginia. It is located across the Potomac River from
            Washington D.C. It is where the dead and fallen heroes of our
            country have been laid to rest after fighting our nation's conflicts
            and wars that began during the Civil War. The United States
            Department of the Army controls the cemetery. The national cemetery
            was established during the Civil War on the slave plantation grounds
            of the Arlington House. This was owned by Mary Anne C. and Robert E.
            Lee, the Confederate Civil War general.
          </p>
        </header>
      </article>
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/arlington2.jpg" alt="Tomb of the Unknown" />
          <h2>The Tomb of the Unknown Soldier</h2>
          <p>
            The Arlington Memorial Amphitheater was constructed in an encircling
            colonnade made of brilliant white marble which stands on a hill
            overlooking Washington D.C. It is an awesome sight to see and walk
            through.
          </p>
          <p>
            The Tomb of the Unknown Soldier resides in the amphitheater. It has
            been perpetually guarded since July 2, 1937 by an elite unit of the
            U.S. Army Honor guards. Visitors can view the ceremony in its
            entirety along with the changing of the guards. This is another
            remarkable event that one would not want to miss.
          </p>
        </header>
      </article>
    </section>
<!-- Include PHP footer -->
<?php
    include('assets/inc/footer.php');
?>