<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Cooperativa Geneos</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="../css/owl.carousel.css" />
      <link type="text/css" rel="stylesheet" href="../css/owl.theme.default.css" />

    <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="../css/magnific-popup.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- Custom Icons -->
    <link type="text/css" rel="stylesheet" href="../css/geneos-codes.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <link type="text/css" rel="stylesheet" href="../css/mobile.css" />


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

  <link rel="stylesheet" href="../css/animation.css">
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
  <body id="<?= PAGE_NAME ?>">
