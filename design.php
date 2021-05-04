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
          We work from the cooperative to offer each
          client a proposed strategy of creation or
          continuity in the design of its brand identity, to
          position yourself in the mind of the consumer
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
        <span class="weight-normal-1 pull-right">
        You never get a second chance to make a first impression
        <span class="weight-normal-2 pull-right">Oscar Wilde / Will Rogers</span>
      </h2>
      
    </div>

    <div class="col-md-6 slogan">
      <h2 class="green-text">
        <span class="font-caveat">We specialize in</span>
        <span>Design of digital pieces</span>
      </h2>
    </div>

    <div class="col-md-6 styled-ul grey-text">
      <ul>
        <li class="web">Websites</li>
        <li class="email">Email-marketing</li>
        <li class="redes">Social medias: flyers, profiles, covers</li>
        <li class="videos">Institutional Videos</li>
        <li class="pictograma">Pictograms</li>
        <li class="papeleria">Digital stationery: counterfoil, budgets, documents</li>
        <li class="presentaciones">Dynamic Digital Presentations</li>
      </ul>
    </div>
    
  </div>
</div>

<div class="geneos-separator reverse"></div>

<!-- About -->

<div id="about" class="section">
  <div class="section-header text-center sm-padding">
    <h2 class="title green green-text">What do you need?</h2>
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
            <h3>Create a brand from scratch</h3>
            <br/><br/><br/>
            <p>We propose ourselves from a concept co-created with you, together with the culture and corporate identity that you have or wish to generate, a brand image from scratch, with all the graphic and multimedia elements and applications that you require.</p>
          </div>
          <div class="about contenedor">
            <h3>Redesign a brand</h3>
            <br/><br/><br/>
            <p>It's easy to tell when an ad is old, and with brands the years go by too. Fashions and technologies advance. We propose to reposition the brand again, designing what is necessary and applying it in various messages.</p>
          </div>
          <div class="about contenedor">
            <h3>Apply the brand identity</h3>
            <br/><br/><br/>
            <p>From an icon, to the color of the garments, they must have synergy in communication, managing to transmit messages united under a brand identity strategy. Based on each company we seek to transmit different messages with the same esthetic.</p>
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

    $successHistories2 = [
    	[
        "name" => "UNAJ University",
        "type" => "Presentation",
    		"img" => "design/success_histories/casos_exito_web_2-01.png",
    		"problem" => "Presentación para ingresar al campus virtual de modo dinámico.",
    		"solution" => " Video de introducción animado con la identidad marcaria de la institución."
    	],
		[
        "name" => "MATEO Hermanos S.A.",
        "type" => "Presentation",
    		"img" => "design/success_histories/casos_exito_web_2-02.png",
    		"problem" => "Presentación digital de presentación de proyecto.",
    		"solution" => "Diapositivas digitales para la presentación manteniendo la cultura e identidad de la empresa."
    	],
			[
        "name" => "Mar Chiquita District",
        "type" => "Web Design",
    		"img" => "design/success_histories/casos_exito_web_2-03.png",
    		"problem" => "Rediseño de la web de la Red de Espacios Culturales de Mar chiquita.",
    		"solution" => "Desarrollo de la web para la red con una página específica para cada espacio individual ."
      ],
      [
        "name" => "San Cayetano District",
        "type" => "Design",
    		"img" => "design/success_histories/casos_exito_web_2-04.png",
    		"problem" => "Diseño para la campaña de donación de órganos en conjunto con la insitución pública secundaria del municipio.",
    		"solution" => "Resolución del diseño inicial de la secundaria para ejecutar digitalmente piezas diversas de la campaña 360°."
      ],
      [
        "name" => "General Works",
        "type" => "Design",
    		"img" => "design/success_histories/casos_exito_web_2-05.png",
    		"problem" => "Comunicación digital para diferentes emprendimientos y empresas.",
    		"solution" => "Diseño digital de flyer, banner, folletería, presentaciones, emailmarketing."
      ],
      [
        "name" => "Flacso Virtual.",
        "type" => "Design",
    		"img" => "design/success_histories/casos_exito_web_2-06.png",
    		"problem" => "Campus virtual básico en diseño sin imagen marcaria.",
    		"solution" => "Diseño de pictogramas y banners para el campus virtual de la institución, junto con la identidad de marca en todo el campus virtual."
      ],
      [
        "name" => "Mar Chiquita District",
        "type" => "Corporative Image",
    		"img" => "design/success_histories/casos_exito_web_2-07.png",
    		"problem" => "Diseño de la imagen marcaria e isologotipo para Red de Espacios Culturales de Mar Chiquita",
    		"solution" => "Diseño de identidad e isologotipo desde cero en base a las cualidades detalladas por el cliente."
    	]
    	    	
    ]

    ?>
			
	<!-- Success Histories 2-->
	<div id="success" class="section bg-grey" >

		<!-- Container -->
		<div class="container md-padding ">

		<!-- Row -->
			<div class="row">

				<div class="section-header text-center">
					<h2 class="title green">Success Stories</h2>
				</div>

				<div class="center-sliders">

					<div id="success-history-slider2" class="filtering green">
						<?php foreach($successHistories2 as $successHistory) { ?>


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
    <!-- /Success Histories 2-->
    
<?php include('inc/footer.php') ?>