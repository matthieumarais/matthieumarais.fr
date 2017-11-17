<!doctype html>
<html>
<head>
<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="Author" content="Matthieu Marais">
<meta name="robots" content="all" />
<meta name="robots" content="index,follow" />
<meta name="robots" content="noarchive">
<meta name="revisit-after" content="2 days">
<meta name="rating" content="general">
<meta name="revisit-after" content="2 days">
<meta name="identifier-url" content="http://www.matthieudesign.com">
<meta http-equiv="location" content="France">
<meta http-equiv="cache-control" content="no-cache, must-revalidate">
<meta http-equiv="pragma" content="no-cache">
<meta name="description" content="<?php echo $metaDescription; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, 
minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="HandheldFriendly" content="true">
<title><?php echo $metatitre; ?></title>
<link href="https://fonts.googleapis.com/css?family=Hind|Montserrat" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
<link rel="icon" href="img/favicon.svg" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/normalize.css" />

<link rel="stylesheet" type="text/css" href="css/set2.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all"/>
<link href="css/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all"/>

<!--[if lt IE 9]>
		<script
src="http://html5shiv.googlecode.com/snv/trunk/html5.js"></script>
	<![endif]-->
</head>


<body <?php if(PAGE == 'accueil'){echo 'class="bg-img"';}?>>
<header class="bgapropos">
  <div class="container">
  <nav class="nav_pages cf"> <img src="img/logo_nav.svg" title="logo nav" alt="logo nav" <?php if(PAGE == 'accueil'){echo 'class="display-logo"';}?>>
  <button id="hamburger" type="button" class="navbar-toggle collapsed hamburglar" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span>
        <div class="burger-icon">
          <div class="burger-container"> <span class="burger-bun-top"></span> <span class="burger-filling"></span> <span class="burger-bun-bot"></span> </div>
        </div>
        <div class="burger-ring"> <svg class="svg-ring">
          <path class="path" fill="none" stroke="#ffffff" stroke-miterlimit="10" stroke-width="2" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
          </svg> </div>
        <svg width="0" height="0">
        <mask id="mask">
          <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0000" stroke-miterlimit="10" stroke-width="2" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
        </mask>
        </svg> </button>
  
    <ul>
      <li <?php if(PAGE == 'accueil'){echo 'class="active"';}?>><a href="index.php">ACCUEIL</a></li>
      <li <?php if(PAGE == 'portfolio'){echo 'class="active"';}?>><a href="portfolio.php">PORTFOLIO</a></li>
      <li <?php if(PAGE == 'apropos'){echo 'class="active"';}?>><a href="apropos.php">&Agrave; PROPOS</a></li>
      <li <?php if(PAGE == 'contact'){echo 'class="active"';}?>><a href="contact.php">CONTACT</a></li>
    </ul>
  </nav>
</header>