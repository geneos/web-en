<!-- Nav -->
<div class="container" >
  <nav id="nav" class="navbar nav-transparent">
    <div class="container">

      <a class="logo" href="/web-en">
        <img class="logo-header" src="../img/icons/logo_geneos.png" alt="logo">
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
        <li class="main-item"><a href="index.php">INICIO</a></li>
        <li class="sub-item"><a id="xxx" href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#who-we-are">Quienes somos?</a></li>
        <li class="sub-item"><a href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#about">Porque elegirnos?</a></li>
        <li class="sub-item"><a href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#platforms">Tecnologias</a></li>
        <li class="sub-item"><a href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#team">Equipo</a></li>
        <li class="sub-item"><a href="<?php if(PAGE_NAME != 'home') echo 'index.php' ?>#success">Casos de exito</a></li>
        <li class="main-item"><a href="design.php">DISEÑO GRAFICO</a></li>
        <li class="main-item"><a href="<?php if(PAGE_NAME != 'development') echo 'desarrollo.php' ?>#about">APLICACIONES WEB/MOBILE</a></li>
        <li class="main-item"><a href="<?php if(PAGE_NAME != 'development') echo 'desarrollo.php' ?>#staff-augmentation">STAFF AUGMENTATION</a></li>
        <li class="main-item"><a href="<?php if(PAGE_NAME != 'platforms') echo 'plataformas.php' ?>#odoo">SOFTWARE DE GESTION</a></li>
        <li class="main-item"><a href="<?php if(PAGE_NAME != 'platforms') echo 'plataformas.php' ?>#moodle">PLATAFORMAS ELEARNING</a></li>
        <li class="main-item"><a href="#form">CONTACTO</a></li>

      </ul>
      <!-- /Main navigation -->
    </div>
  </nav>
  <!-- /Nav -->
</div>