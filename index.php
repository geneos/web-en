<?php DEFINE('PAGE_NAME','home') ?>

<?php include('inc/head.php') ?>
<?php include('inc/nav.php') ?>

<!-- Service-main -->
<div id="services-main" class="section">

  <div class="three-color background-img" >

    <!-- Container -->
    <div class="container md-padding">

      <div class="col-md-4">
        <!-- Graphic design -->
        <a href="design.php" target="_blank" class="service-link">
          <div class="icon icon-graphic-design" ></div>
          <h3> GRAPHIC DESIGN </h3>
          <i class="fa fa-angle-down white-text" style="font-size: 50pt;"></i>
        </a>
      </div> 

      <div class="col-md-4">
        <!-- Web Apps -->
        <a href="development.php" target="_blank" class="service-link">
          <div class="icon icon-web-apps" ></div>
          <h3> WEP/MOBILE APPS </h3>
          <h3> STAFF AUGMENTATION </h3>
          <i class="fa fa-angle-down white-text" style="font-size: 50pt;"></i>
        </a>
      </div>

      <div class="col-md-4">
        <!-- Managment Software -->
        <a href="platforms.php" target="_blank" class="service-link">
          <div class="icon icon-managment-software" ></div>
          <h3> MANAGMENT SOFTWARE </h3>
          <h3> PLATFORM ELEARNING </h3>
          <i class="fa fa-angle-down white-text" style="font-size: 50pt;"></i>
        </a>
      </div>


    </div>
    <!-- /Container -->
  </div>
</div>

<div class="geneos-separator"></div>

<div id="who-we-are" class="section">
  <div class="container md-padding">
    <div class="row">
      <h2 class="blue-text geneos-quotes">
        Equality unites us<br/>
        The cooperative strengthens us
      </h2>
      <div class="technology-based">
        <div class="col-md-5">
          <img src="img/computadora.png">
        </div>
        <div class="col-md-7">
          <h2>
            we are technology-based cooperative<br/>
            organization specialized in<br/>
            <span class="font-caveat">free software</span>
          </h2>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>

<div class="geneos-separator reverse"></div>

<!-- About -->
<div id="about" class="section">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <div class="about-us-sliders">
        <div id="about-us-slider-for">
          <div>
            <img src="img/news/fondo.png" alt="">
          </div>
          <div>
            <img src="img/news/fondo.png" alt="">
          </div>
          <div>
            <img src="img/news/fondo.png" alt="">
          </div>
        </div>
        <!-- about -->
        <div id="about-us-slider" class="col-md-offset-8 col-md-4 white">
          <div class="about">
            <img class="about-img" src="img/news/about_icon.svg" alt="About Us">
            <h3>Abous Us</h3>
            <p>Founded in 2013 by systems engineers, programmers and design professionals that allow us to work in an integral way in the search of solutions for our clients to help improve their overall business results and gain more from their technology investments.</p>
          </div>
          <div class="about contenedor">
            <!-- <i class="fa fa-cubes"></i> -->
            <img class="about-img" src="img/news/work_icon.svg" alt="About Us">
            <h3>About our Work</h3>
            <p>We work with Agile methodologies for each project involving the customer in the whole cycle and our processes are designed to make our team more efficient, more focused, and more consistent.</p>
            <br>
          </div>
          <div class="about contenedor">
            <!-- <i class="fa fa-indent"></i> -->
            <img class="about-img" src="img/news/filosofia_icon.svg" alt="About Us">
            <h3>Our philosophy</h3>
            <p>The more efficient we are the faster we get results; the more focus we have the better the code; and the more consistent we become the more predictable our output and accurate our planning.</p>
            <br>
            <br>
          </div>
        </div>
        <!-- /about -->
      </div>

    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->

</div>
<!-- /About -->

<div class="geneos-separator reverse"></div>

	<?php
	$platforms = [
		[
			"name" => "Vue JS",
			"img" => "Vuejs_b.svg",
			"description" => "The Progressive JavaScript Framework"
		],
		[
			"name" => "Angular JS",
			"img" => "angularjs_b.svg",
			"description" => "An structural framework for dynamic web apps"
		],
		[
			"name" => "Node JS",
			"img" => "nodejs_b.svg",
			"description" => "An asynchronous event driven JavaScript runtime"
		],
		[
			"name" => "React",
			"img" => "reactjs_b.svg",
			"description" => "A JavaScript library for building user interfaces"
		],
		[
			"name" => "Moodle",
			"img" => "moodle_b.svg",
			"description" => "A learning platform (LMS) designed to provide educators, administrators and learners with a single robust, secure and integrated system"
		],
		[
			"name" => "Suite CRM",
			"img" => "suiteCRM_b.svg",
			"description" => "A free and open source Customer Relationship Management application",
			"size" => "big"
		],
		[
			"name" => "Wordpress",
			"img" => "wordpress_b.svg",
			"description" => "Easiest, powerful, free and open-source blogging and website content management system (CMS)."
		],
		[
			"name" => "Odoo",
			"img" => "odoo_b.svg",
			"description" => "An all-in-one management software that offers a complete suite of enterprise management applications.",
			"size" => "medium"
		],
		[
			"name" => "Drupal",
			"img" => "drupal_b.svg",
			"description" => "Flexible, highly scalable, free and open-source content management system (CMS)."
		],

	]
	?>

	<!-- Platforms -->
	<div id="platforms" class="section" style="background-color: #479544; padding-bottom: 100px;">
    <div class="container lg-padding">
      <!-- Section header -->
      <div class="section-header-about text-center">
        <h2 class="title-about">Plataforms, Frameworks & Languages</h2>
      </div>
      <!-- /Section header -->

      <div class="section">

        <!-- Container -->
        <div class="container">

          <!-- Row -->
          <div class="row">

            <div class="center-sliders">
              <div id="platform-slider-for" class="white">
                <?php foreach($platforms as $platform) { ?>
                  <div>
                                  <img style="height: 150px; width: 150px;" src="./img/ic/<?php echo $platform["img"] ?>" alt="">
                                  <h2><?php echo $platform["name"] ?></h2>
                    <h4><?php echo $platform["description"] ?><h4>
                              </div>
                <?php } ?>
              </div>
              <div id="platform-slider" class="white">
                <?php foreach($platforms as $platform) { ?>
                  <div>
                    <img class="<?php echo $platform["size"] ?>" src="./img/ic/<?php echo $platform["img"] ?>" alt="">
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <!-- /Row -->
        </div>
        <!-- /Container -->
      </div>
    </div>
      <!-- /Container -->
	</div>
	<!-- /Platforms -->

	<?php

	$teamMembers = [
		[
			"name" => "Ibrian Gómez",
			"desc_short" => "Software Developer / Web Front-end and Back-end Developer",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "ibrian"
		],
		[
			"name" => "Clara Sorensen",
			"desc_short" => "Graphic Designer / UX Designer",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "cla"
		],
		[
			"name" => "Bruno Tubino",
			"desc_short" => "Software Developer / Web Front-end and Back-end Developer",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "bruno"
		],
		[
			"name" => "Santiago Costa",
			"desc_short" => "Software Developer / Web Back-end Developer",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "santi"
		],
		[
			"name" => "Mario Ferreyra",
			"desc_short" => "Administrative Manager / Software Developer",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "mario"
		],
		[
			"name" => "Martín Di Lisio",
			"desc_short" => "Project Manager / Functional Analyst / Software Developer",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "martin"
		],
		[
			"name" => "Pablo Velázquez",
			"desc_short" => "Technology Manager / Software Developer",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "pablo"
		],
		[
			"name" => "José Fantasia",
			"desc_short" => "Sales Manager / Project Manager / Functional Analyst",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "jose"
		],
		[
			"name" => "Fernando Recci",
			"desc_short" => "IT Infrastructure Manager / Software Developer",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "fer"
		],



	];
	?>

    <!-- Team -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Our Team</h2>
				</div>
				<!-- /Section header -->
			</div>

			
	        <div class="row" id="team_members">

	        	<?php foreach($teamMembers as $teamMember) { ?>

	        		<!-- Team member -->
		            <div class="member-card col-xs-12 col-sm-6 col-md-4">
		            	<a href="#member-<?php echo $teamMember["id"]?>">
			                <div class="card">
			                	<img class="img1 img-fluid" src="./img/team/<?php echo $teamMember["id"]?>.jpeg" alt="card image">
			                	<img class="img2 img-fluid" src="./img/team/<?php echo $teamMember["id"]?>2.jpeg" alt="card image">
			                	<i class="fa fa-plus"></i>
			                    <div class="card-body text-center">
			                        <h4 class="card-title"><?php echo $teamMember["name"]; ?></h4>
			                        <p class="card-text"><?php echo $teamMember["desc_short"]; ?></p>
			                    </div>
			                </div>
		                </a>

		                <div id="member-<?php echo $teamMember["id"]?>" class="mfp-hide white-popup">
		                	<div class="row">
		                		<div class="col-md-6">
		                			<img class="img-fluid main-image" src="./img/team/<?php echo $teamMember["id"]?>.jpeg" alt="card image">
		                		</div>
		                		<div class="col-md-6">
		                			<h2 class="card-title"><?php echo $teamMember["name"]; ?></h4>
		                			<h4 class="card-text"><?php echo $teamMember["desc_short"]; ?></h4>
		                			<hr/>
				                    <p class="card-text"><?php echo $teamMember["desc_long"]; ?></p>
				                    <!-- Redes sociales -->
				                    <!--ul class="list-inline">
				                        <li class="list-inline-item">
				                            <a class="social-icon text-xs-center" target="_blank" href="#">
				                                <i class="fa fa-facebook"></i>
				                            </a>
				                        </li>
				                        <li class="list-inline-item">
				                            <a class="social-icon text-xs-center" target="_blank" href="#">
				                                <i class="fa fa-twitter"></i>
				                            </a>
				                        </li>
				                        <li class="list-inline-item">
				                            <a class="social-icon text-xs-center" target="_blank" href="#">
				                                <i class="fa fa-skype"></i>
				                            </a>
				                        </li>
				                        <li class="list-inline-item">
				                            <a class="social-icon text-xs-center" target="_blank" href="#">
				                                <i class="fa fa-google"></i>
				                            </a>
				                        </li>
				                    </ul-->
		                			
		                		</div>
		                	</div>
		                </div>

		            </div>
		            <!-- ./Team member -->
	        	<?php } ?>

	        </div>
	    </div>
    </div>
    <!-- Team -->



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
					<h2 class="title">Success Stories</h2>
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



					<div id="about-slider-for" class="filtering">
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
					<div id="about-slider" class="filtering">
						<?php foreach($successHistories as $successHistory) { ?>
							<div data-key="<?php echo $successHistory["type"].$techs?>">
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