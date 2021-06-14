<!-- Tyler Padrao -->
<!-- 05/09/2021 -->
<!-- Individual Project Final - HTML Structure -->
<!-- A website that displays our country's capitiol, Washington D.C., and -->
<!-- many historical places to visit in D.C. -->
<!-- Include PHP Header and Nav -->
<?php
    $page = "About";
    include('assets/inc/header.php');
    include('assets/inc/nav.php');
?>
    <!-- Banner image across top of page -->
    <article id="about" class="banner_img">
      <!-- Text within banner image -->
      <header class="banner_text">
        <h2>About Tyler</h2>
      </header>
    </article>

    <!-- Main section of page where content is located -->
    <section>
      <!-- Content about historical places in Washington D.C. -->
      <article>
        <header>
          <!-- Image to the right of the content -->
          <img src="assets/images/about1.jpg" alt="Statue" />
          <h2>About Tyler</h2>
          <p>
            Tyler has always had a passion for traveling and exploration.
            Washington D.C. is one of his favorite places due to endless
            adventures to our nation’s historic sites. His love of travel and
            timeless experiences compel him to engage and share his quest for
            new journeys. By embracing this pursuit coupled with his interest in
            web design, he creates an experience tailored to his passion. Tyler
            is proud to soon begin a summer co-op and experience more within the
            web development career.
          </p>
        </header>
      </article>
      <!-- Original JavaScript Component -->
      <article>
        <header>
          <h2>Original JavaScript Component</h2>
          <p>
            Within the final portion of my project, I thought a photo gallery would be 
            a good addition for viewers. I felt providing a photo gallery with the main locations highlighted 
            from my site would entice viewers to visit Washington. The photo gallery has a large image in the 
            middle of the screen with a caption displayed underneath so the user knows the 
            location of what is in the picture. There are a number of thumbnail pictures 
            below the large image section. When the user clicks on one of the thumbnail 
            images, the image will load into the large image section with the given caption. 
            The user also has a scroll bar to scroll through the thumbnail images. 
            To view the photo gallery, the user can easily access it by clicking on the “gallery” 
            tab in the top navigation bar.
          </p>
        </header>
      </article>
      <!-- DHTML Component -->
      <article>
        <header>
          <h2>DHTML Component</h2>
          <p>
            For my DHTML addition, I decided to integrate it with my form validation for the comments 
            section of the website. On the comments page, the user has two input boxes where they can 
            enter their name and comment which will display on the bottom of the page. If the user fails 
            to provide a name but provides a comment, the browser will pop up an alert box informing the 
            user to provide a name. The border of the name box will also highlight red, giving a clear 
            indication that the user must fill in their name to submit a comment. If the user provides 
            a name but not a comment, there will be an alert to notify the user to submit a comment. 
            The border of the comment box will also highlight red, giving a clear indication for the 
            user to fill in a comment for the form to submit. Lastly, if the user hits the submit button
            without filling in the comment or name input boxes, both boxes will highlight red indicating 
            to fill in a name and comment before submission. An alert pop up will also request the user 
            to submit a name and a comment. To view the DHTML component, the user can easily access it by 
            clicking on the “comments” tab in the top navigation bar.
          </p>
        </header>
      </article>
      <!-- Splitting up pages using PHP -->
      <article>
        <header>
          <h2>Splitting up pages using PHP</h2>
          <p>
            Instead of coding the entire site in HTML and CSS, I utilized PHP to split up my pages. 
            This technology was used to facilitate ease of changes within my website. On every main page within the 
            top navigation and the pages within the footer, I utilized PHP "include" statements to split up my pages. 
            I split up my pages using a header, navigation, and footer. With this addition, modifying each page 
            in the future will be easier, more consistent, and more likely to be error free. Using PHP also 
            eliminates repeated code. This allows for cleaner coding techniques where you are not constantly copying and 
            pasting the header, navigation, and header into your main pages. Splitting up the pages in PHP can be 
            found throughout every page on the website.
          </p>
        </header>
      </article>
      <!-- Comments Form -->
      <article>
        <header>
          <h2>Comments Form</h2>
          <p>
            Within my final project, I included a comments page where a user can comment their name, experience, 
            and thoughts they have about Washington D.C. The comments page is very user friendly. When the user goes 
            to the comments page, they will see two input boxes that will ask them to enter their name and comment. 
            As discussed earlier, my DHTML component of the site will easily indicate to the user if they are missing 
            any input information with an alert and by highlighting the input boxes with missing information. 
            This page is very user friendly because it checks and validates all user input. JavaScript is used to alert 
            the user if form validation fails. I have also built in a database to retain the comments. The user's 
            information is secured in a database where it is then appended to the bottom of the page. 
            The users will be able to view their name, comment, and time after they submit. All inputted data is sanitized for 
            security purposes. If the user submits a malicious script, the sanitization function will prevent the malicious 
            script from executing by using a series of escape characters. The user’s names are displayed in red while the 
            comments are displayed in blue for ease when viewing. You can view the comments section of my website by going 
            to the “comments” tab within the top navigation bar.
          </p>
        </header>
      </article>
      <!-- Solace Server -->
      <article>
        <header>
          <h2>Solace Server</h2>
          <p>
            Since I am using PHP, which is a server-side scripting language, I uploaded these files to RIT’s Solace Server. 
            This project is organized in a simple structure. I have all the main files within a “final” directory. 
            I have my JavaScript, CSS, and images organized in different folders. I also have my header, navigation, 
            and footer PHP pages within an "include" folder. My file structure can be viewed on RIT’s Solace Server.
          </p>
        </header>
      </article>
      <!-- Responsive Design and Hamburger Menu -->
      <article>
        <header>
          <h2>Responsive Design and Hamburger Menu</h2>
          <p>
            My site is mobile friendly as well as desktop friendly as most users can access the internet via a mobile device. 
            When the page is resized, a hamburger menu appears instead of the 5-menu navigation that desktop 
            users would see. The hamburger menu is very user friendly. When the user clicks on the hamburger menu, all the menu items appear. 
            As you further click on the “Explore D.C.” tab, all of Washington’s popular tourists’ locations appear. The user can simply click again to hide the hamburger menu. 
            I used JavaScript to make my hamburger menu functional which is in my “js” folder on Solace. My page is very responsive for desktop and mobile devices. 
            There is no horizontal scrolling since mobile users do not prefer this method. When you click on the logo in the top right corner, it will take the user back to the home page.
            On a mobile device, all the images and text have 
            less padding so there is not wasted space. I also provide a “Back to Top” button which will easily push the user to the top of the page, 
            instead of tedious scrolling. Lastly, all my images are resizable based upon the device utilized. 
            Overall, my site is ready to use whether it be on a desktop, or your pocket device. You can view my responsive design and hamburger menu depending on the page size.
          </p>
        </header>
      </article>
      <!-- Site Architecture -->
      <article>
        <header>
          <h2>Site Architecture</h2>
          <p>
            My website has an amazing architecture making it user friendly. My site has a top navigation bar where the user can easily navigate. 
            There is also a banner image and a title at the top of every page, so the user knows where they are. 
            Overall, my site architecture is highly organized making it user friendly.
          </p>
        </header>
      </article>
      <!-- Spectacular Design -->
      <article>
        <header>
          <h2>Spectacular Design</h2>
          <p>
            My site has a spectacular design and structure which is user friendly. I utilizied all the “CRAP” principles. 
            I selected a patriotic color scheme to match the theme of Washington D.C. 
            I also utilized repetition on each page so that the user knows they are on the same website no matter what page they are on. 
            The structure of the navigation is user friendly and simplistic, so the user is never confused. 
            I also provided active links so the user knows what page they are on and where they can navigate to. 
            The banner images also inform the user where they are on my website and provides a warm welcome to each page. 
            Thus, my design is spectacular since it includes color schemes and images that matches a patriotic theme, 
            and many unique features such as a mobile friendly site, a comments page, and a fun interactive photo gallery. My striking
            design can be found throughout my webpage.
          </p>
        </header>
      </article>
    </section>
<!-- Include PHP footer -->
<?php
    include('assets/inc/footer.php');
?>