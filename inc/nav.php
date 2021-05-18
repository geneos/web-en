<!-- Nav -->
<div class="container" >
  <nav id="nav" class="navbar nav-transparent">
    <div class="lang-menu-container">
      <div class="container">
      <ul class="lang-menu">
        <!-- <li><a href="#home">Home</a></li> -->
        <li class="es"><a href="es/<?php echo CURRENT_PAGE_ES ?>.php"><img title="Spanish" src="img/icons/icon-es.png" /></a></li>
        <li class="en active"><a href="<?php echo CURRENT_PAGE_EN ?>.php"><img title="English" src="img/icons/icon-en.png" /></a></li>
      </ul>
      </div>
    </div>
    <div class="container">

      <a class="logo" href="/">
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
        <li class="main-item"><a href="index.php">HOME</a></li>
        <li class="sub-item"><a id="xxx" href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#who-we-are">Who we are?</a></li>
        <li class="sub-item"><a href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#about">Why choose us?</a></li>
        <li class="sub-item"><a href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#platforms">Technologies</a></li>
        <li class="sub-item"><a href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#team">Team</a></li>
        <li class="sub-item"><a href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#success">Success Stories</a></li>
        <li class="main-item"><a href="design.php">GRAPHIC DESIGN</a></li>
        <li class="main-item"><a href="<?php if(PAGE_NAME != 'development') echo 'development.php' ?>#about">WEB/MOBILE APPS</a></li>
        <li class="main-item"><a href="<?php if(PAGE_NAME != 'development') echo 'development.php' ?>#staff-augmentation">STAFF AUGMENTATION</a></li>
        <li class="main-item"><a href="<?php if(PAGE_NAME != 'platforms') echo 'platforms.php' ?>#odoo">MANAGMENT SOFTWARE</a></li>
        <li class="main-item"><a href="<?php if(PAGE_NAME != 'platforms') echo 'platforms.php' ?>#moodle">ELEARNING PLATFORM</a></li>
        <li class="main-item"><a href="#form">CONTACT</a></li>

      </ul>
      <!-- /Main navigation -->
    </div>
  </nav>
  <!-- /Nav -->
</div>