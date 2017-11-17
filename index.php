<?php $metatitre = "Portfolio de matthieu marais webdesigner intégrateur.";
$metaDescrition = "Bienvenue sur le portfolio de matthieu marais web designer intégrateur, réalisation sur photoshop, illustrator et de sites internet en html5, css3, php, js.";
define('PAGE','accueil');
 ?>
<?php include('include/header.php'); ?>
<main >
  <section class="container bloc1 pageHome">
    <div class="logo"><img src="img/logo_head.svg" alt="logo matthieu marais" title="logo matthieu marais">
      <h1>MATTHIEU MARAIS | <strong>WEB DESIGNER - INT&Eacute;GRATEUR</strong></h1>
    </div>
    <div class="fleche"><a href="#scroll"><img src="img/fleche.svg" alt="fleche" title="flèche"></a></div>
  </section>
  <section class="bloc2">
    <div class="container">
      <article class="homepage cf">
        <h2 id="scroll"><strong>Petite intro</strong></h2>
        <p>Je vais faire court :)</p>
        <div><img src="img/portrait.png" alt="portrait" title="portrait"></div>
        <div>
          <p>"Cela fait 20 ans que je surf sur le web. Je veux faire un métier qui me passionne, j’ai envie de créer et de m’éclater. Autodidacte en veille constante j'ai confirmé mes connaissances en effectuant une formation de niveau bac +2 en <strong>infographie multimédia</strong>."</p>
        </div>
      </article>
      <section class="cf bloc3">      
        <div class="parallelogramme">
        <h3>Réalisations</h3>
        <a href="portfolio?#ps"><img src="img/fish_logo.jpg" alt="poisson dans l'ampoule" title="poisson dans l'ampoule"></a>
        </div>        
        <div class="parallelogramme">
        <h3>Intégrations</h3>
        <a href="portfolio?#int"><img src="img/code.png" alt="code html5 css3" title="code html5 css3"></a></div>        
        <div class="parallelogramme">
        <h3>&Agrave; propos</h3>
        <a href="apropos"><img src="img/point_interrogation.png" alt="a propos" title="a propos"></a></div>
      </section>
    </div>
  </section>
</main>
<?php include('include/footer.php'); ?>
