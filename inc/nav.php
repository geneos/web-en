<!-- Nav -->
<div class="container" >
  <nav id="nav" class="navbar nav-transparent">
    <div class="container">

      <a class="logo" href="/web-en">
        <img class="logo-header" src="img/icons/logo_geneos.png" alt="logo">
      </a>

      <div class="navbar-header">

        <!-- Collapse nav button -->
        <div class="nav-collapse">
          <span></span>
        </div>
        <!-- /Collapse nav button -->
      </div>

      <!--  Main navigation  -->
      <ul class="main-nav nav navbar-nav navbar-right">
        <!-- <li><a href="#home">Home</a></li> -->
        <li><a href="index.php">INICIO</a></li>
        <li><a id="xxx" href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#who-we-are">Who we are?</a></li>
        <li><a href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#about">Why choose us?</a></li>
        <li><a href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#platforms">Technologies</a></li>
        <li><a href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#team">Team</a></li>
        <li><a href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#success">Success Stories</a></li>
        <li><a href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#footer">Contact</a></li>
        <li><a href="design.php">GRAPHIC DESIGN</a></li>
        <li><a href="<?php if(PAGE_NAME != 'development') echo 'development.php' ?>#about">WEB/MOBILE APPS</a></li>
        <li><a href="<?php if(PAGE_NAME != 'development') echo 'development.php' ?>#staff-augmentation">STAFF AUGMENTATION</li>
        <li><a href="<?php if(PAGE_NAME != 'platforms') echo 'platforms.php' ?>#odoo">MANAGMENT SOFTWARE</a></li>
        <li><a href="<?php if(PAGE_NAME != 'platforms') echo 'platforms.php' ?>#moodle">ELEARNING PLATFORM</a></li>
      </ul>
      <!-- /Main navigation -->

    </div>
  </nav>
  <!-- /Nav -->
</div>