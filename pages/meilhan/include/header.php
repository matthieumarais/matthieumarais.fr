<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Bienvenue à la ferme de Meilhan dans le Gers, découvrez nos produits gastronomiques. Foie gras d'oie, canard et spécialités traditionnelles. Vente en ligne.">
<title><?php echo $metatitre; ?></title>
<link href="https://fonts.googleapis.com/css?family=Hind|Open+Sans" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.ico" />
<link rel="icon" type="image/x-icon" href="img/favicon.ico" />
<link rel="icon" type="image/png" href="img/favicon_32.png" />
<link href="css/jquery.bxslider.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all"/>
</head>

<body>
<header>
  <div class="container">
    <ul class="panier cf">
      <li <?php if(PAGE == 'compte'){echo 'class="active"';}?>><a id="compte" href="#">MON COMPTE</a></li>
      <li <?php if(PAGE == 'panier'){echo 'class="active"';}?>><a href="https://www.paypal.com/webapps/shoppingcart?mid=3324761249186464506212211481283054&xclick_params=b3V0ZGF0ZWRfcGFnZV90bXBsJTNkcCUyZmdlbiUyZmZhaWxlZCUyZHRvJTJkbG9hZCUyNmNtZCUzZF9jYXJ0JTI2YnVzaW5lc3MlM2RlYXJsJTJlYm91bGV0JTI1NDBsYXBvc3RlJTJlbmV0JTI2c3VibWl0JTJleCUzZDYzJTI2c3VibWl0JTJleSUzZDE4JTI2ZGlzcGxheSUzZDElMjZ2aXNpdG9yX2lkJTNkNjEyNDkxODY0NjQ1MDYyMTIyMSUyNm1lcmNoYW50X2VtYWlsJTNkZWFybCUyZWJvdWxldCU0MGxhcG9zdGUlMmVuZXQlMjZidXNpbmVzc19uYW1lJTNkRUFSTCUyMEJvdWxldCUyNm1lcmNoYW50X2lkJTNkOUhQQkFQUlFOOFNVRyUyNndhX3R5cGUlM2RTaG9wcGluZ0NhcnQlMjZzaG9wcGluZ19jYXJ0X2ZsYWclM2R0cnVlJTI2QXV0b1JldHVybiUzZHRydWUlMjY&flowlogging_id=2a867b00d879e#/checkout/shoppingCart" target="_blank">PANIER</a></li>
    </ul>
    <div class="logo"><a href="index.php"><img src="img/logo_desktop.svg" title="logo" alt="logo"></a></div>
  </div>
  <nav id="burger_nav" class="container">
    <ul class="menu cf">
      <li <?php if(PAGE == 'accueil'){echo 'class="active"';}?>><a href="index.php">Accueil</a></li>
      <li <?php if(PAGE == 'produits'){echo 'class="active"';}?>><a href="produits.php">Produits</a></li>
      <li <?php if(PAGE == 'boutique'){echo 'class="active"';}?>><a href="boutique.php">Boutique</a></li>
      <li <?php if(PAGE == 'savoir_faire'){echo 'class="active"';}?>><a href="savoir_faire.php">Savoir-faire</a></li>
      <li <?php if(PAGE == 'contact'){echo 'class="active"';}?>><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
  <div class="burger">
    <button id="hamburger" type="button" class="navbar-toggle collapsed hamburglar" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span>
    <div class="burger-icon">
      <div class="burger-container"> <span class="burger-bun-top"></span> <span class="burger-filling"></span> <span class="burger-bun-bot"></span> </div>
    </div>
    <div class="burger-ring"> <svg class="svg-ring">
      <path class="path" fill="none" stroke="#073748" stroke-miterlimit="10" stroke-width="2" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
      </svg> </div>
    <svg width="0" height="0">
    <mask id="mask">
      <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0000" stroke-miterlimit="10" stroke-width="2" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
    </mask>
    </svg> </button>
  </div>
  <div id="overlay-popup">
    <div id="bg-close"></div>
    <div id="block-popup">
      <div id="close-popup">X</div>
      <p>Identifiez-vous</p>
      <div class="login">
        <form method="post" action="traitement.php">
          <div class="connection">
            <input type="text" name="login" id="login" placeholder="Login*" required/>
          </div>
          <div class="pw">
            <input type="password" name="pw" id="pw" placeholder="Mot de passe*" required/>
          </div>
          <div class="send">
            <button class="bouton2" type="submit">Identifiez-vous</button>
          </div>
          <div>
            <p>Nouveau client</p>
          </div>
          <div class="send">
            <button class="bouton2" type="submit">Créer un compte</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</header>
