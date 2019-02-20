<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Geneos Cooperative</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom Icons -->
	<link type="text/css" rel="stylesheet" href="css/geneos-codes.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style>


/* FontAwesome for working BootSnippet :> */

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');


.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #0a236b;
    border-color: #0a236b;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}


</style>

<link rel="stylesheet" href="css/animation.css">
<!--[if IE 7]><link rel="stylesheet" href="css/" + font.fontname + "-ie7.css"><![endif]-->
<script>
	function toggleCodes(on) {
		var obj = document.getElementById('icons');

		if (on) {
		  obj.className += ' codesOn';
		} else {
		  obj.className = obj.className.replace(' codesOn', '');
		}
	}

	function goInitAbout() {
		//e.preventDefault();
		$('#xxx').click();
	}
  
</script>

</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/news/fondo.png');">
			<!--div class="overlay"></div-->
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="img/logo.png" alt="logo">
							<img class="logo-alt" src="img/logo-alt.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<!-- <li><a href="#home">Home</a></li> -->
					<li><a id="xxx" href="#about">Who we are?</a></li>
					<li><a href="#service">Why choose us?</a></li>
					<li><a href="#testimonial">Technologies</a></li>
					<li><a href="#team">Team</a></li>
					<li><a href="#blog">Success Stories</a></li>
					<li><a href="#footer">Contact</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h2 class="white-text">Equality unites us,<br/>
							the cooperative strengthens us</h2>
							<div style="padding-top: 70px;">
							<a onclick="goInitAbout()"><i class="fa fa-arrow-circle-down white-text" style="font-size: 50pt;"></i></a>
							</div>
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding" style="background-color: #0a236b;">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header-about text-center">
					<h2 class="title-about">Who we are?</h2>
					<div class="section-desc-center">
						<!-- <h4>We are a technology-based Cooperative organization specialized in the development of web and stand alone applications under free software.
					</h4> -->
					</div>					
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<img class="about-img" src="img/news/about_icon.svg" alt="About Us">
						<h3>Abous Us</h3>
						<p>Founded in 2013 by systems engineers, programmers and design professionals that allow us to work in an integral way in the search of solutions for our clients to help improve their overall business results and gain more from their technology investments.</p>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about contenedor">
						<!-- <i class="fa fa-cubes"></i> -->
						<img class="about-img" src="img/news/work_icon.svg" alt="About Us">
						<h3>About our Work</h3>
						<p>We work with Agile methodologies for each project involving the customer in the whole cycle and our processes are designed to make our team more efficient, more focused, and more consistent.</p>
						<br>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
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
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


	<!-- Service -->
	<div id="service" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header-services text-center">
					<h2 class="title">Our services</h2>
				</div>
				<!-- /Section header -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="icon-services icon-plataform"></i>
						<h3>Free Software</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="icon-services icon-web"></i>
						<h3>Web & Mobile</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="icon-services icon-team"></i>
						<h3>Staff Augmentation</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="icon-services icon-infraestructure"></i>
						<h3>Servers Services</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="icon-services icon-design"></i>
						<h3>Graphic Design</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="icon-services icon-app"></i>
						<h3>App Development</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->

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
	<div id="testimonial" class="section md-padding" style="background-color: #479544; padding-bottom: 100px;">
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

					<div class="platform-sliders">
						<div id="platform-slider-for">
							<?php foreach($platforms as $platform) { ?>
								<div>
		                            <img style="height: 150px; width: 150px;" src="./img/ic/<?php echo $platform["img"] ?>" alt="">
		                            <h2><?php echo $platform["name"] ?></h2>
									<h4><?php echo $platform["description"] ?><h4>
		                        </div>
							<?php } ?>
						</div>
						<div id="platform-slider">
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
	<!-- /Platforms -->

	<?php

	$teamMembers = [
		[
			"name" => "Pablo Velazquez",
			"desc_short" => "The Magic!",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "pablo"
		],
		[
			"name" => "Ibrian Gomez",
			"desc_short" => "The Magic!",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "ibrian"
		],
		[
			"name" => "Jose Fantasia",
			"desc_short" => "The Magic!",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "jose"
		],
		[
			"name" => "Mario Ferreyra",
			"desc_short" => "The Magic!",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "mario"
		],
		[
			"name" => "Cesar Tynik",
			"desc_short" => "The Magic!",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "cesar"
		],
		[
			"name" => "Pablo Velazquez",
			"desc_short" => "The Magic!",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "pablo"
		],
		[
			"name" => "Pablo Velazquez",
			"desc_short" => "The Magic!",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "pablo"
		],
		[
			"name" => "Pablo Velazquez",
			"desc_short" => "The Magic!",
			"desc_long" => "This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.",
			"id" => "pablo"
		]

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

			
	        <div class="row">

	        	<?php foreach($teamMembers as $teamMember) { ?>

	        		<!-- Team member -->
		            <div class="member-card col-xs-12 col-sm-6 col-md-3">
		                <div class="card">
		                	<img class="img1 img-fluid" src="./img/team/<?php echo $teamMember["id"]?>.jpeg" alt="card image">
		                	<img class="img2 img-fluid" src="./img/team/<?php echo $teamMember["id"]?>2.jpeg" alt="card image">
		                    <div class="card-body text-center">
		                        <h4 class="card-title"><?php echo $teamMember["name"]; ?></h4>
		                        <p class="card-text"><?php echo $teamMember["desc_short"]; ?></p>
		                    </div>
		                </div>

		                <div id="member-<?php echo $teamMember["id"]?>" class="mfp-hide white-popup">
		                    <h4 class="card-title"><?php echo $teamMember["name"]; ?></h4>
		                    <p class="card-text"><?php echo $teamMember["desc_long"]; ?></p>
		                    <ul class="list-inline">
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
		                    </ul>
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
    		"problem" => "Solve the computerization of production management and integrate production with administrative management.",
    		"solution" => "Implementation of Compiere ERP and the Líbero MRP module for production management."
    	],
    	[
    		"name" => "UNAJ University",
    		"type" => "Education",
    		"img" => "unaj-01.png",
    		"technologies" => ["moodle","nodejs","reactjs"],
    		"problem" => "Integrate the Moodle and SIU Guarani platforms.",
    		"solution" => "Development of an interface to synchronize these platforms."
    	],
    	[
    		"name" => "Mateo Hermanos S.A.",
    		"type" => "Industry",
    		"img" => "mateo-01.png",
    		"technologies" => ["java","postgresql"],
    		"problem" => "Solve the computerization of production management.",
    		"solution" => "Implementation of Libertya MRP, an module of Libertya ERP for production management."
    	]
    ]

    ?>
			
	<!-- Blog -->
	<div id="blog" class="section md-padding bg-grey" >

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<?php /* ?>
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Success Stories</h2>
				</div>
				<!-- /Section header -->

				
				<!-- About slider -->
				<div>
					<div id="about-slider" class="owl-carousel owl-theme">
						<?php foreach($successHistories as $successHistory) { ?>
							<div>
								<div class="blog row">
									<div class="blog-img col-md-6">
										<img class="img-responsive" src="./img/<?php echo $successHistory["img"]?>" alt="">
									</div>
									<div class="blog-content col-md-6">
										<h3><?php echo $successHistory["name"]?></h3>
										<h4><?php echo $successHistory["type"]?></h4>
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
			<?php */ ?>
			<!-- /Row -->


							<!-- Row -->
			<div class="row">

				<div class="section-header text-center">
					<h2 class="title">Success Stories</h2>
				</div>

				<?php 

				$filters = ['All'];

				foreach($successHistories as $successHistory) { 
					if ( array_search($successHistory["type"], $filters) === false )
						$filters[] = $successHistory["type"];
				} 

				?>

				
				

				<div class="about-sliders">
					<div class="filters">
						<ul class="about-filters">
							<?php foreach($filters as $filter) { ?>
								<li class="js-filter <?php echo $filter?>" data-key="<?php echo $filter?>"><?php echo $filter?></li>
							<?php } ?>
						</ul>
					</div>
					<div id="about-slider-for" class="filtering">
						<?php foreach($successHistories as $successHistory) { ?>
							<div data-key="<?php echo $successHistory["type"]?>">
								<div class="blog row">
									<div class="col-md-12">
										<h2><?php echo $successHistory["name"]?></h3>
										<h4>#<?php echo $successHistory["type"]?></h4>
									</div>
									<div class="blog-img col-md-6">
										<img class="img-responsive" src="./img/<?php echo $successHistory["img"]?>" alt="">
									</div>
									<div class="blog-content col-md-6">
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
							<div data-key="<?php echo $successHistory["type"]?>">
								<img width="300px" class="<?php echo $platform["size"] ?>" width="" src="./img/<?php echo $successHistory["img"]?>" alt="">
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

    <!-- Footer -->
	<!-- <footer id="footer" class="sm-padding bg-dark"> -->
	<footer id="footer" class="sm-padding">
		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
<!-- 					<div class="footer-logo">
						<i class="icon-header icon-logo-geneos">&#xe808;</i>
					</div> -->
					<!-- /footer logo -->


					<div class="row">

						<!-- contact -->
						<div class="col-sm-4">
							<div class="contact">
								<i class="fa fa-phone"></i>
								<h5>Phone</h5>
								<p>+54 249 4380914</p>
							</div>
						</div>
						<!-- /contact -->

						<!-- contact -->
						<div class="col-sm-4">
							<div class="contact">
								<i class="fa fa-envelope"></i>
								<h5>Email</h5>
								<p>info@geneos.com.ar</p>
							</div>
						</div>
						<!-- /contact -->

						<!-- contact -->
						<div class="col-sm-4">
							<div class="contact">
								<i class="fa fa-map-marker"></i>
								<h5>Address</h5>
								<p>Paz 440 - Tandil - Buenos Aires - Argentina</p>
							</div>
						</div>
						<!-- /contact -->
					</div>
					<!-- /Row -->


					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-github"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Designed by Geneos Cooperative</p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>

	<!-- Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <script type="text/javascript" src="js/slick.js"></script>

    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>
