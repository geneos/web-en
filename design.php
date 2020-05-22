<?php DEFINE('PAGE_NAME','design') ?>

<?php include('inc/head.php') ?>
<?php include('inc/nav.php') ?>

<!-- Service-main -->
<div id="services-main" class="section">

  <div class="green background-img" >

    <!-- Container -->
    <div class="container md-padding">

      <div class="col-md-4">
        <!-- Graphic design -->
        <a href="#" target="_blank" class="service-link">
          <div class="icon icon-graphic-design" ></div>
          <h3> GRAPHIC DESIGN </h3>
        </a>
      </div> 

      <div class="col-md-4">
        <!-- Web Apps -->
        <h4>
          Trabajamos desde la cooperativa para ofrecerle a cada
          cliente una propuesta estrategia de creación o de
          continuidad en el diseño de su identidad marcaria, para
          posicionarse en la mente del consumidor
        </h4>
      </div>

    </div>
    <!-- /Container -->
  </div>
</div>

<div class="geneos-separator green"></div>

<div id="who-we-are" class="section">
  <div class="container md-padding">
    <div class="row geneos-quotes-design right">
      
      <h2 class="black-text ">
        <span class="weight-normal-1 pull-right">You never...</span><br/>
        get a second chance <br/>
        to make a first impression<br/>
        <span class="weight-normal-2 pull-right">Oscar Wilde / Will Rogers</span>
      </h2>
      
    </div>

    <div class="col-md-6 slogan">
      <h2 class="green-text">
        <span class="font-caveat">Nos especializamos en</span>
        <span>Diseño de piezas digitales</span>
      </h2>
    </div>

    <div class="col-md-6 styled-ul grey-text">
      <ul>
        <li class="web">Sitios Web</li>
        <li class="email">Email-marketing</li>
        <li class="redes">Redes sociales: flyer, perfiles, portadas, comunicados</li>
        <li class="videos">Videos Institucionales</li>
        <li class="pictograma">Pictogramas</li>
        <li class="papeleria">Papeleria digital: talonarios, presupuestos, documentos</li>
        <li class="presentaciones">Presentaciones Digitales Dinámicas</li>
      </ul>
    </div>
    
  </div>
</div>

<div class="geneos-separator reverse"></div>

<!-- About -->

<div id="about" class="section">
  <div class="section-header text-center sm-padding">
    <h2 class="title green green-text">¿Qué necesitas?</h2>
  </div>
  <!-- Container -->
  <div class="container">
    <div class="row">
      <div id="about-what-u-need-for">
        <div class="col-md-4 text-center">
          <a href="javascript:;"  class="service-link">
            <img src="img/design/icon_crearmarca.png" alt="">
            <i class="fa fa-angle-down green-text" style="font-size: 50pt;"></i>
          </a>
        </div>
        <div class="col-md-4 text-center">
          <a href="javascript:;"  class="service-link">
            <img src="img/design/icon_rediseñar.png" alt="">
            <i class="fa fa-angle-down" style="font-size: 50pt;"></i>
          </a>
        </div>
        <div class="col-md-4 text-center">
          <a href="javascript:;"  class="service-link">
            <img src="img/design/icon_aplicacionesmarca.png" alt="">
            <i class="fa fa-angle-down violet-text" style="font-size: 50pt;"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Container -->

  <!-- about -->
  <div class="about-what-u-need bg-green">
    <!-- Container -->
    <div class="container">
        
      <div class="row">
        <div id="about-what-u-need-slider" class="col-md-4 white">
          <div class="about">
            <h3>Crear una marca desde cero</h3>
            <br/><br/><br/>
            <p>Nos proponemos a partir de un concepto cocreado con ustedes, junto a la cultura e identidad corporativa que posean o desean generar una imagen de marca desde cero, con todos los elementos y aplicaciones graficas y multimediales que requieran.</p>
          </div>
          <div class="about contenedor">
            <h3>Rediseñar una marca</h3>
            <br/><br/><br/>
            <p>Es fácil deducir cuando un anuncio es antiguo, y con las marcas los años también pasan. Las modas y las tecnologías avanzan. Nos proponemos reposicionar nuevamente la marca, diseñando lo que fuera necesario y aplicándolo en diversos mensajes.</p>
          </div>
          <div class="about contenedor">
            <h3>Aplicar la identidad marcaria</h3>
            <br/><br/>
            <p>esde un ícono, hasta el color de las prendas deben tener sinergia en comunicación, logrando transmitir mensajes unidos bajo una estrategia de identidad marcaria. En base a cada empresa buscamos transmitir diferentes mensajes con una misma estética.</p>
          </div>
        </div>
        <div class="col-md-8">
          <img src="img/en/imagen_slider_Marca.png" alt="">
        </div>
        
      </div>
    </div>
    <!-- Container -->
  </div>
  <!-- /about -->

</div>
<!-- /About -->

<div class="geneos-separator"></div>

    <?php

    $successHistories = [
    	[
    		"name" => "PANALAB Laboratories",
    		"type" => "Industry",
    		"img" => "panalab-02.png",
    		"technologies" => ["java","postgresql"],
    		"problem" => "To find a solution to the production process management automation and production integration with the administrative management.",
    		"solution" => "Compiere ERP (Enterprise Resource Planning) system implementation and Libero MRP (Material Requirement Planning) module customization for production process management."
    	],
		[
    		"name" => "MATEO Hermanos S.A.",
    		"type" => "Industry",
    		"img" => "mateo-01.png",
    		"technologies" => ["java","postgresql"],
    		"problem" => "To find a solution to the production process management automation and production integration with the administrative management.",
    		"solution" => "Libertya MRP (Material Requirement Planning) system implementation and Libertya ERP (Enterprise Resource Planning) module customization for production process management."
    	],
		[
    		"name" => "WM Argentina S.A.",
    		"type" => "Industry",
    		"img" => "wm.png",
    		"technologies" => ["odoo"],
    		"problem" => "To find a new information system solution to the company processes management.",
    		"solution" => "Odoo ERP (Enterprise Resource Planning) system implementation and custom modules development."
    	],
    	[
    		"name" => "UNAJ University",
    		"type" => "Education",
    		"img" => "unaj-01.png",
    		"technologies" => ["moodle","nodejs","reactjs","java"],
    		"problem" => "Moodle LMS (Learning Management System) and SIU Guarani AMS (Academic Management System) integration. Technical support.",
    		"solution" => "Interface development to synchronize both platforms. Bring support for system administration."
    	],
		[
    		"name" => "FLACSO University",
    		"type" => "Education",
    		"img" => "flacso.png",
    		"technologies" => ["moodle","nodejs","reactjs","java"],
    		"problem" => "Support for Moodle LMS (Learning Management System) use. User experience (UX) improvements and custom requirements on Moodle.",
    		"solution" => "Bring support for system administration. Web design and development. Custom modules development."
    	],
		[
    		"name" => "UNAHUR University",
    		"type" => "Education",
    		"img" => "unahur.png",
    		"technologies" => ["moodle","nodejs","reactjs","java"],
    		"problem" => "Moodle LMS (Learning Management System) and SIU Guarani AMS (Academic Management System) integration.",
    		"solution" => "Interface development to synchronize both platforms."
    	],
		[
    		"name" => "CATSPBA",
    		"type" => "Education",
    		"img" => "catspba.png",
    		"technologies" => ["moodle"],
    		"problem" => "Support for Moodle LMS (Learning Management System) use. User experience (UX) improvements and custom requirements on Moodle.",
    		"solution" => "Bring support for system administration. Web design and development. Custom modules development."
    	],
		[
    		"name" => "MAR CHIQUITA District",
    		"type" => "Goverment",
    		"img" => "marchiquita.png",
    		"technologies" => ["wordpress"],
    		"problem" => "To present cultural spaces, places and activities of the district.",
    		"solution" => "Web design and web site development. Custom modules development."
    	],
		[
    		"name" => "TAPALQUE District",
    		"type" => "Goverment",
    		"img" => "tapalque.png",
    		"technologies" => ["wordpress"],
    		"problem" => "To present tourism spaces, places and activities of the district.",
    		"solution" => "Web design and web site development."
    	],
		[
    		"name" => "CINEA UNICEN",
    		"type" => "Education",
    		"img" => "cinea.png",
    		"technologies" => ["drupal"],
    		"problem" => "To present institutional information, projects and activities of the center.",
    		"solution" => "Web design and web site development."
    	],
		[
    		"name" => "CIEP UNICEN",
    		"type" => "Education",
    		"img" => "ciep.png",
    		"technologies" => ["drupal"],
    		"problem" => "To present institutional information, projects and activities of the center.",
    		"solution" => "Web design and web site development."
    	],
    	
    	/*** DUMMY ****/
    	
    ]

    ?>
			
	<!-- Success Histories -->
	<div id="success" class="section bg-grey" >

		<!-- Container -->
		<div class="container md-padding ">

		<!-- Row -->
			<div class="row">

				<div class="section-header text-center">
					<h2 class="title green">Success Stories</h2>
				</div>

				<?php 

				$verticalFilters = ['All'];
				$techFilters = ['All'];

				foreach($successHistories as $successHistory) { 
					if ( array_search($successHistory["type"], $verticalFilters) === false )
						$verticalFilters[] = $successHistory["type"];

					foreach($successHistory["technologies"] as $tech) { 
						if ( array_search($tech, $techFilters) === false )
							$techFilters[] = $tech;
					}
					
				} 

				?>

				<div class="center-sliders">



					<div id="success-history-slider" class="filtering green">
						<?php foreach($successHistories as $successHistory) { ?>

							<?php
							$techs = "";
							foreach($successHistory["technologies"] as $tech) {
								$techs .= " ".$tech;
							} ?>

							<div data-key="<?php echo $successHistory["type"].$techs?>">
								<div class="blog row">
									<div class="col-md-12">
										<h2><?php echo $successHistory["name"]?></h3>
										<h4>#<?php echo $successHistory["type"]?></h4>
									</div>
									<div class="blog-img col-md-6 col-sm-6">
										<img class="img-responsive" src="./img/<?php echo $successHistory["img"]?>" alt="">
									</div>
									<div class="blog-content col-md-6 col-sm-6">
										<p><strong>Technologies</strong></p>
										<ul class="blog-meta">
											<?php foreach($successHistory["technologies"] as $tech) {?>
												<li><i class="icon-tec-med icon-<?php echo $tech ?>"></i></li>
											<?php } ?>
										</ul>
										<p>
											<strong>Problem:</strong> <?php echo $successHistory["problem"]?>
										</p>
										<p>
											<strong>Solution:</strong> <?php echo $successHistory["solution"]?>
										</p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
    <!-- /Blog -->
    
<?php include('inc/footer.php') ?>