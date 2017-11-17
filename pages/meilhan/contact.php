<?php $metatitre = "la Ferme de Meilhan, horaires, visite et contacts";
define('PAGE','contact');
?>
<?php include("include/header.php") ?>
<main id="contact">
  <section class="bandeau">
    <h1><strong>NOUS CONTACTEZ</strong></h1>
  </section>
  <section class="introduction">
    <div class="container">
      <div class="intro">
        <p class="p1">Vous avez une question, un besoin spécifique, vous souhaitez visiter la ferme...n'hésitez pas.</p>
        <p><strong>Nous sommes ouvert du lundi au samedi, de 9h à 18h, pour visiter notre exploitation.</strong></p>
      </div>
    </div>
  </section>
  <section class=" courrier container">
    <h2><strong>Contactez la ferme du Meilhan</strong></h2>
    <p>Marlène et Jean-Marc Boulet</p>
    <p>"Meilhan"</p>
    <p>32190 Dému</p>
    <p>Tel. 05 62 08 57 91</p>
  </section>
  <section class="bg_grey">
    <div class="contact container cf">
      <div class="formulaire">
        <form method="post" action="traitement.php">
          <div>
            <label for="monsieur">M.</label>
            <input type="radio" name="civilite" id="monsieur"/>
            <label for="madame">Mme</label>
            <input type="radio" name="civilite" id="madame"/>
          </div>
          <div>
            <input type="text" name="first_name" id="first_name" placeholder="Prénom*" required/>
            <input type="text" name="name" id="name" placeholder="Nom*" required/>
          </div>
          <div>
            <input type="text" name="societe" id="societe" placeholder="Société"/>
          </div>
          <div>
            <input type="text" name="address" id="address" placeholder="Adresse*" required/>
          </div>
          <div>
            <input type="tel" name="zip" id="zip" maxlength="5" placeholder="Code postal*" required/>
            <input type="text" name="city" id="city" placeholder="Ville*" required/>
          </div>
          <input type="tel" name="tel" id="tel" maxlength="10" placeholder="Téléphone*" required/>
          <div>
            <input type="email" name="email" id="email" placeholder="e-mail"/>
          </div>
          <div>
            <textarea cols="100" rows="10" type="message" name="message" id="message" placeholder="Votre demande*" required></textarea>
          </div>
          <p>Champs obligatoires*</p>
          <div> 
            <!--<input class="send" type="submit" value"Envoyer"/>-->
            <button type="submit" id="send" class="bouton2">Envoyer</button>
          </div>
        </form>
      </div>
      <div id='Meilhan' class="formulaire">
        <iframe src="http://mapbuildr.com/frame/7vw2f5" frameborder="0" height="795" width="446"></iframe>
      </div>
    </div>
  </section>
</main>
<?php include("include/footer.php") ?>