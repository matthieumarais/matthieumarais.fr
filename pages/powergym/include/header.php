<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="Author" content="Matthieu Marais">
<meta name="robots" content="all" />
<meta name="robots" content="index,follow" />
<meta name="robots" content="noarchive">
<meta name="rating" content="general">
<meta name="revisit-after" content="7 days">
<meta name="identifier-url" content="http://www.powergym.re">
<meta http-equiv="cache-control" content="no-cache, must-revalidate">
<meta http-equiv="pragma" content="no-cache">
<meta name="description" content="Vous cherchez une salle de sport à La Reunion ? Entraînez-vous chez Powergym.">
<meta name="keywords" content="powergym, salle, sport, performance, reunion, bodybuilding, entrainement, Crossfit, Cross-training, Powerlifting, ">
<meta name="viewport" content="width=device-width, initial-scale=1.0, 
minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="HandheldFriendly" content="true">
<link rel="icon" type="image/png" href="img/favicon.png" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" /><![endif]-->
<title><?php echo $metatitre; ?></title>
<link href="https://fonts.googleapis.com/css?family=Montserrat|Patua+One" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/hamburglar.css">
<link rel="stylesheet" href="css/style_generale.css">
<link rel="stylesheet" href="css/style_responsive.css">
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<header class="container-fluid">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button id="hamburger" type="button" class="navbar-toggle collapsed hamburglar" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span>
          <div class="burger-icon">
            <div class="burger-container"> <span class="burger-bun-top"></span> <span class="burger-filling"></span> <span class="burger-bun-bot"></span> </div>
          </div>
          <div class="burger-ring"> <svg class="svg-ring">
            <path class="path" fill="none" stroke="#131A1C" stroke-miterlimit="10" stroke-width="2" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
            </svg> </div>
          <svg width="0" height="0">
          <mask id="mask">
            <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0000" stroke-miterlimit="10" stroke-width="2" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
          </mask>
          </svg>
        </button>
        <a class="navbar-brand" href="index"><img src="img/logo-powergym.png" alt="powergym" title="powergym"></a> </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li <?php if(PAGE == 'home'){ echo 'class="active"'; } ?>><a href="index.php">Accueil</a></li>
          <li <?php if(PAGE == 'presentation'){ echo 'class="active"'; } ?>><a href="presentation.php">Présentation</a></li>
          <li <?php if(PAGE == 'equipements'){ echo 'class="active"'; } ?>><a href="equipements.php">&Eacute;quipements</a></li>
          <li <?php if(PAGE == 'tarifs'){ echo 'class="active"'; } ?>><a href="tarifs.php">Tarifs</a></li>
          <li <?php if(PAGE == 'preinscription'){ echo 'class="active"'; } ?>><a href="preinscription.php">Pré-inscription</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
