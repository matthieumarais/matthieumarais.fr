<?php $metatitre = "la ferme de MEIHLAN producteur de foie gras, spécialités du gers";
define('PAGE','accueil');
?>
<?php include("include/header.php") ?>
<main>
  <section class="slider">
    <h1><strong>PRODUCTEUR</strong> TRADITIONNEL <strong>GERSOIS</strong><br/>
      DE <strong>FOIE GRAS</strong> & <strong>SP&Eacute;CIALIT&Eacute;S LOCALES</strong></h1>
    <ul class="bxslider">
      <li> <img src="img/foie_gras_slider.jpg" title="foie gras" alt="foie gras" /></li>
      <li> <img src="img/magret_slider.jpg" title="magret" alt="magret" /></li>
      <li> <img src="img/confit_slider.jpg" title="confit" alt="confit" /></li>
    </ul>
  </section>
  <section class="container">
    <div class="intro">
      <h2><strong>BIENVENUE &Agrave; LA FERME DE MEIHLAN</strong></h2>
      <p class="p1">Au coeur de la Gascogne, la famille Boulet produit de façon traditionnelle foie gras, confits et autres produits à base d'oie et de canard qui ont fait la réputation du Gers.</p>
      <p>Producteurs depuis 1986 nous travaillons dans le strict respect des traditions gersoises, gage d'authenticité et de qualité.</p>
    </div>
  </section>
  <section class="bg_grey">
    <div class="container">
      <div class="home_vente cf">
        <h2><strong>NOS MEILLEURES VENTES</strong></h2>
        <article data-scroll-reveal="enter from the left move 30px after wait 0.4s reset">
          <h3><strong>Foie gras de canard entier</strong></h3>
          <div class="home_canard"><img src="img/bocal_canard.jpg" title="foie gras canard" alt="foie gras canard"></div>
          <p>Foie gras de canard entier 450g</p>
          <p class="prix">38,50€</p>
          <a href="produits.php?#foie_gras">Découvrir</a> <a class="achat_rapide" href="boutique.php?#foie_gras">Achat rapide</a> </article>
        <article data-scroll-reveal="enter from the right move 30px after wait 0.4s reset">
          <h3><strong>Foie gras d'oie entier</strong></h3>
          <div class="home_canard"><img src="img/bocal_oie.jpg" title="foie gras d'oie" alt="foie gras d'oie"></div>
          <p>Foie gras d'oie entier 450g</p>
          <p class="prix">43,00€</p>
          <a href="produits.php?#foie_gras">Découvrir</a> <a class="achat_rapide" href="boutique.php?#foie_gras">Achat rapide</a></article>
      </div>
    </div>
  </section>
  <section class="container">
    <div class="home_selection cf">
      <h2><strong>S&Eacute;LECTION DE PRODUITS</strong></h2>
      <article data-scroll-reveal="enter from the left move 30px after wait 0.8s reset">
        <h3><strong>Confit de canard</strong></h3>
        <img src="img/home_confit.png" title="confit" alt="confit"> <a class="bouton" href="produits.php?#confit">Infos</a> <a class="bouton1" href="boutique.php?#foie_gras">Acheter</a>
      </article>
      <article data-scroll-reveal="enter from the left move 30px after wait 0.4s reset">
        <h3><strong>Magret de canard</strong></h3>
        <img src="img/home_magret.png" title="Magret de canard" alt="Magret de canard"> <a class="bouton" href="produits.php?#magret">Infos</a> <a class="bouton1" href="boutique.php?#gelee">Acheter</a>
      </article>
      <article data-scroll-reveal="enter from the right move 30px after wait 0.4s reset">
        <h3><strong>Pâté de canard</strong></h3>
        <img src="img/home_pate.png" title="Pâté de canard" alt="Pâté de canard"> <a class="bouton" href="produits.php?#pate">Infos</a> <a class="bouton1" href="boutique.php?#friton">Acheter</a>
      </article>
      <article data-scroll-reveal="enter from the right move 30px after wait 0.8s reset">
        <h3><strong>Coffrets cadeaux</strong></h3>
        <img src="img/home_coffret.png" title="Coffrets cadeaux" alt="Coffrets cadeaux"> <a class="bouton" href="boutique.php?#coffrets">Infos</a> <a class="bouton1" href="boutique.php?#coffrets">Acheter</a>
      </article>
    </div>
  </section>
  <section class="elevage bg_grey">
    <div class="container">
      <h2><strong>L’&Eacute;LEVAGE</strong></h2>
      <p class="p1">Les bêtes sont toutes élevées sur notre exploitation. Les races et souches sont sélectionnées pour leurs qualités gustatives (foie et viande) et <span class="bold">non pas pour des critères de vitesse de croissance et d'engraissement</span>. Ainsi, nous <span class="bold">garantissons la qualité, la régularité et l'autenticité des produits</span>.</p>
      <p class="p1">Nous achetons les oisons et canetons à l'age de 1 jour (courant avril), ils sont ensuite élevés sur la ferme durant 16 semaines environ , ayant <span class="bold">accès pour la journée aux herbages des alentours et à l'étang</span>. Il faut les fermer chaque nuit (maître renard oblige...).</p>
      <p>Au menu : avoine, blé, orge, maïs... La plupart des céréales sont produites sur l'exploitation.</p>
    </div>
  </section>
</main>
<?php include("include/footer.php") ?>