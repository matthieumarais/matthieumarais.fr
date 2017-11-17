<?php $metatitre = "la Ferme de Meilhan, tarifs des produits et boutique en ligne";
define('PAGE','boutique');
?>
<?php include("include/header.php") ?>
<main id="boutique">
  <section class="bandeau">
    <h1><strong>NOTRE BOUTIQUE</strong></h1>
  </section>
  <section>
    <div class="container">
      <div class="intro">
        <p class="p1"> Vous pouvez commander directement en ligne tous les produits de l'exploitation.</p>
        <p class="p1">Paiement sécurisé par carte bleue ou par compte "Paypal".</p>
        <p class="p1">Livraison sur toute la France métropolitaine dans un délais d'une semaine environ. Les frais de port sont offerts pour toute commande supérieure à 400€. Une participation de 15€ est demandée dans le cas contraire. </p>
        <p>Contactez nous pour une livraison hors métropole.</p>
      </div>
    </div>
  </section>
  <section class="bg_boutique">
    <div class="boutique container cf">
      <div class="menu" id="foie_gras" data-scroll-reveal="enter from the left move 30px after wait 0.4s reset"> <img src="img/boutique_foie_gras.jpg" title="foie gras entier" alt="foie gras entier">
        <p class="p1"><strong>Foie gras de canard entier</strong></p>
        <p class="ingredients">Ingrédients : foie gras de canard, sel, poivre</p>
        <form>
          <label>Selectionner votre produit</label>
          <select name="selection" id="selection">
            <option value="100g">Bocal de 100g - 11.50€</option>
            <option value="180g">Bocal de 180g - 19.50€</option>
            <option value="320g">Bocal de 320g - 29.50€</option>
            <option value="450g">Bocal de 180g - 38.50€</option>
          </select>
        </form>
        <a href="https://www.paypal.com/webapps/shoppingcart?mid=6985261249186798237924671481192320&xclick_params=b3V0ZGF0ZWRfcGFnZV90bXBsJTNkcCUyZmdlbiUyZmZhaWxlZCUyZHRvJTJkbG9hZCUyNnglM2Q1MyUyNnklM2QxNCUyNmFkZCUzZDElMjZjbWQlM2RfY2FydCUyNmJ1c2luZXNzJTNkZWFybCUyZWJvdWxldCUyNTQwbGFwb3N0ZSUyZW5ldCUyNml0ZW1fbmFtZSUzZEZvaWUlMjUyMGdyYXMlMjUyMGQlMjUyN29pZSUyNTIwMTAwZyUyNmFtb3VudCUzZDEzJTJlMDAlMjZub19ub3RlJTNkMSUyNmN1cnJlbmN5X2NvZGUlM2RFVVIlMjZsYyUzZEZSJTI2Ym4lM2RQUCUyZFNob3BDYXJ0QkYlMjZ2aXNpdG9yX2lkJTNkNjEyNDkxODY3OTgyMzc5MjQ2NyUyNm1lcmNoYW50X2VtYWlsJTNkZWFybCUyZWJvdWxldCU0MGxhcG9zdGUlMmVuZXQlMjZidXNpbmVzc19uYW1lJTNkRUFSTCUyMEJvdWxldCUyNm1lcmNoYW50X2lkJTNkOUhQQkFQUlFOOFNVRyUyNm5ld19jYXJ0JTNkdHJ1ZSUyNndhX3R5cGUlM2RTaG9wcGluZ0NhcnQlMjZTSElQUElOR19BTkRfVEFYJTNkMSUyNiUyNkF1dG9SZXR1cm4lM2R0cnVlJTI2&flowlogging_id=3cc3e546d1ab7#/checkout/shoppingCart" target="_blank">AJOUTER AU PANIER</a> </div>
      <div class="menu" data-scroll-reveal="enter from the top move 30px after wait 0.4s reset"> <img src="img/boutique_foie_gras_oie.jpg" title="foie gras d'oie entier" alt="foie gras d'oie entier">
        <p class="p1"><strong>Foie gras d'oie entier</strong></p>
        <p class="ingredients">Ingrédients : foie gras d'oie, sel, poivre</p>
        <form>
          <label>Selectionner votre produit</label>
          <select name="selection" id="selection">
            <option value="100g">Bocal de 100g - 13€</option>
            <option value="180g">Bocal de 180g - 22.50€</option>
            <option value="320g">Bocal de 320g - 32.50€</option>
            <option value="450g">Bocal de 180g - 43€</option>
          </select>
        </form>
        <a href="https://www.paypal.com/webapps/shoppingcart?mid=9112861249186798237924671481195308&xclick_params=b3V0ZGF0ZWRfcGFnZV90bXBsJTNkcCUyZmdlbiUyZmZhaWxlZCUyZHRvJTJkbG9hZCUyNnglM2Q0NSUyNnklM2QxOSUyNmFkZCUzZDElMjZjbWQlM2RfY2FydCUyNmJ1c2luZXNzJTNkZWFybCUyZWJvdWxldCUyNTQwbGFwb3N0ZSUyZW5ldCUyNml0ZW1fbmFtZSUzZEZvaWUlMjUyMGdyYXMlMjUyMGRlJTI1MjBjYW5hcmQlMjUyMDEwMGclMjZhbW91bnQlM2QxMSUyZTUwJTI2bm9fbm90ZSUzZDElMjZjdXJyZW5jeV9jb2RlJTNkRVVSJTI2bGMlM2RGUiUyNmJuJTNkUFAlMmRTaG9wQ2FydEJGJTI2dmlzaXRvcl9pZCUzZDYxMjQ5MTg2Nzk4MjM3OTI0NjclMjZtZXJjaGFudF9lbWFpbCUzZGVhcmwlMmVib3VsZXQlNDBsYXBvc3RlJTJlbmV0JTI2YnVzaW5lc3NfbmFtZSUzZEVBUkwlMjBCb3VsZXQlMjZtZXJjaGFudF9pZCUzZDlIUEJBUFJRTjhTVUclMjZ3YV90eXBlJTNkU2hvcHBpbmdDYXJ0JTI2c2hvcHBpbmdfY2FydF9mbGFnJTNkdHJ1ZSUyNlNISVBQSU5HX0FORF9UQVglM2QxJTI2JTI2QXV0b1JldHVybiUzZHRydWUlMjY&flowlogging_id=aef19bd089939#/checkout/shoppingCart" target="_blank">AJOUTER AU PANIER</a> </div>
      <div class="menu" data-scroll-reveal="enter from the right move 30px after wait 0.4s reset"> <img src="img/boutique_confit.jpg" title="Confit de canard" alt="Confit de canard">
        <p class="p1"><strong>Confit de canard</strong></p>
        <p class="ingredients">Ingrédients: quartiers de canard, graisse, sel</p>
        <form>
          <label>Selectionner votre produit</label>
          <select name="selection" id="selection">
            <option value="200g">Bocal de 200g - 7.50€</option>
            <option value="400g">Bocal de 400g - 12€</option>
            <option value="800g">Bocal de 800g - 20€</option>
          </select>
        </form>
        <a href="https://www.paypal.com/webapps/shoppingcart?mid=8238161249186798237924671481195744&xclick_params=b3V0ZGF0ZWRfcGFnZV90bXBsJTNkcCUyZmdlbiUyZmZhaWxlZCUyZHRvJTJkbG9hZCUyNnglM2Q0OCUyNnklM2QxMiUyNmFkZCUzZDElMjZjbWQlM2RfY2FydCUyNmJ1c2luZXNzJTNkZWFybCUyZWJvdWxldCUyNTQwbGFwb3N0ZSUyZW5ldCUyNml0ZW1fbmFtZSUzZENvbmZpdCUyNTIwZGUlMjUyMGNhbmFyZCUyNTIwdW5lJTI1MjBhaWxlJTI2YW1vdW50JTNkNyUyZTUwJTI2bm9fbm90ZSUzZDElMjZjdXJyZW5jeV9jb2RlJTNkRVVSJTI2bGMlM2RGUiUyNmJuJTNkUFAlMmRTaG9wQ2FydEJGJTI2dmlzaXRvcl9pZCUzZDYxMjQ5MTg2Nzk4MjM3OTI0NjclMjZtZXJjaGFudF9lbWFpbCUzZGVhcmwlMmVib3VsZXQlNDBsYXBvc3RlJTJlbmV0JTI2YnVzaW5lc3NfbmFtZSUzZEVBUkwlMjBCb3VsZXQlMjZtZXJjaGFudF9pZCUzZDlIUEJBUFJRTjhTVUclMjZ3YV90eXBlJTNkU2hvcHBpbmdDYXJ0JTI2c2hvcHBpbmdfY2FydF9mbGFnJTNkdHJ1ZSUyNlNISVBQSU5HX0FORF9UQVglM2QxJTI2JTI2QXV0b1JldHVybiUzZHRydWUlMjY&flowlogging_id=f3fb7aafa9ff9#/checkout/shoppingCart" target="_blank">AJOUTER AU PANIER</a> </div>
      <div class="menu" data-scroll-reveal="enter from the left move 30px after wait 0.4s reset"> <img src="img/boutique_confit_oie.jpg" title="Confit d’ oie" alt="Confit d’ oie">
        <p class="p1"><strong>Confit d’ oie</strong></p>
        <p class="ingredients">Ingrédients: quartier d'oie, graisse, sel</p>
        <form>
          <label>Selectionner votre produit</label>
          <select name="selection" id="selection">
            <option value="325g">Bocal de 325g - 7.50€</option>
            <option value="650g">Bocal de 650g - 13€</option>
          </select>
        </form>
        <a href="https://www.paypal.com/webapps/shoppingcart?mid=5066561249186798237924671481197016&xclick_params=b3V0ZGF0ZWRfcGFnZV90bXBsJTNkcCUyZmdlbiUyZmZhaWxlZCUyZHRvJTJkbG9hZCUyNnglM2QyNSUyNnklM2QxNCUyNmFkZCUzZDElMjZjbWQlM2RfY2FydCUyNmJ1c2luZXNzJTNkZWFybCUyZWJvdWxldCUyNTQwbGFwb3N0ZSUyZW5ldCUyNml0ZW1fbmFtZSUzZENvbmZpdCUyNTIwZCUyNTI3b2llJTI1MjAxJTI1MjBhaWxlJTI1MjAzMjVnJTI2YW1vdW50JTNkNyUyZTUwJTI2bm9fbm90ZSUzZDElMjZjdXJyZW5jeV9jb2RlJTNkRVVSJTI2bGMlM2RGUiUyNmJuJTNkUFAlMmRTaG9wQ2FydEJGJTI2dmlzaXRvcl9pZCUzZDYxMjQ5MTg2Nzk4MjM3OTI0NjclMjZtZXJjaGFudF9lbWFpbCUzZGVhcmwlMmVib3VsZXQlNDBsYXBvc3RlJTJlbmV0JTI2YnVzaW5lc3NfbmFtZSUzZEVBUkwlMjBCb3VsZXQlMjZtZXJjaGFudF9pZCUzZDlIUEJBUFJRTjhTVUclMjZ3YV90eXBlJTNkU2hvcHBpbmdDYXJ0JTI2U0hJUFBJTkdfQU5EX1RBWCUzZDElMjYlMjZBdXRvUmV0dXJuJTNkdHJ1ZSUyNg&flowlogging_id=6769cb4c86900#/checkout/shoppingCart" target="_blank">AJOUTER AU PANIER</a> </div>
      <div id="gelee" data-scroll-reveal="enter from the top move 30px after wait 0.4s reset"> <img src="img/boutique_canard_gelee.jpg" title="Canard en gelée" alt="Canard en gelée">
        <p class="p1"><strong>Canard en gelée<br/>
          300g</strong></p>
        <p class="ingredients">Ingrédients: quartier de canard, gelée, sel, poivre</p>
        <p class="prix">8€</p>
        <a href="https://www.paypal.com/webapps/shoppingcart?mid=8750161249186798237924671481198363&xclick_params=b3V0ZGF0ZWRfcGFnZV90bXBsJTNkcCUyZmdlbiUyZmZhaWxlZCUyZHRvJTJkbG9hZCUyNnglM2QyMCUyNnklM2QxMiUyNmFkZCUzZDElMjZjbWQlM2RfY2FydCUyNmJ1c2luZXNzJTNkZWFybCUyZWJvdWxldCUyNTQwbGFwb3N0ZSUyZW5ldCUyNml0ZW1fbmFtZSUzZENhbmFyZCUyNTIwZW4lMjUyMGdlbGVlJTI2YW1vdW50JTNkOCUyZTAwJTI2bm9fbm90ZSUzZDElMjZjdXJyZW5jeV9jb2RlJTNkRVVSJTI2bGMlM2RGUiUyNmJuJTNkUFAlMmRTaG9wQ2FydEJGJTI2dmlzaXRvcl9pZCUzZDYxMjQ5MTg2Nzk4MjM3OTI0NjclMjZtZXJjaGFudF9lbWFpbCUzZGVhcmwlMmVib3VsZXQlNDBsYXBvc3RlJTJlbmV0JTI2YnVzaW5lc3NfbmFtZSUzZEVBUkwlMjBCb3VsZXQlMjZtZXJjaGFudF9pZCUzZDlIUEJBUFJRTjhTVUclMjZ3YV90eXBlJTNkU2hvcHBpbmdDYXJ0JTI2U0hJUFBJTkdfQU5EX1RBWCUzZDElMjYlMjZBdXRvUmV0dXJuJTNkdHJ1ZSUyNg&flowlogging_id=a61d32945771d#/checkout/shoppingCart" target="_blank">AJOUTER AU PANIER</a> </div>
      <div data-scroll-reveal="enter from the right move 30px after wait 0.4s reset"> <img src="img/boutique_magret_foure.jpg" title="Magret de canard fourré au foie gras" alt="Magret de canard fourré au foie gras">
        <p class="p1"><strong>Magret de canard fourré au foie gras 400g</strong></p>
        <p class="ingredients">ingrédients: magret, foie gras (20%), sel, poivre</p>
        <p class="prix">10.50€</p>
        <a href="https://www.paypal.com/webapps/shoppingcart?mid=4288061249186798237924671481197419&xclick_params=b3V0ZGF0ZWRfcGFnZV90bXBsJTNkcCUyZmdlbiUyZmZhaWxlZCUyZHRvJTJkbG9hZCUyNnglM2QyOCUyNnklM2QxMiUyNmFkZCUzZDElMjZjbWQlM2RfY2FydCUyNmJ1c2luZXNzJTNkZWFybCUyZWJvdWxldCUyNTQwbGFwb3N0ZSUyZW5ldCUyNml0ZW1fbmFtZSUzZE1hZ3JldCUyNTIwZGUlMjUyMGNhbmFyZCUyNTIwZm91cnJlJTI1MjBhdSUyNTIwZm9pZSUyNTIwZ3JhcyUyNmFtb3VudCUzZDEwJTJlNTAlMjZub19ub3RlJTNkMSUyNmN1cnJlbmN5X2NvZGUlM2RFVVIlMjZsYyUzZEZSJTI2Ym4lM2RQUCUyZFNob3BDYXJ0QkYlMjZ2aXNpdG9yX2lkJTNkNjEyNDkxODY3OTgyMzc5MjQ2NyUyNm1lcmNoYW50X2VtYWlsJTNkZWFybCUyZWJvdWxldCU0MGxhcG9zdGUlMmVuZXQlMjZidXNpbmVzc19uYW1lJTNkRUFSTCUyMEJvdWxldCUyNm1lcmNoYW50X2lkJTNkOUhQQkFQUlFOOFNVRyUyNndhX3R5cGUlM2RTaG9wcGluZ0NhcnQlMjZTSElQUElOR19BTkRfVEFYJTNkMSUyNiUyNkF1dG9SZXR1cm4lM2R0cnVlJTI2&flowlogging_id=cf01db0fc6ff5#/checkout/shoppingCart" target="_blank">AJOUTER AU PANIER</a> </div>
      <div id="salmis" class="boutique_prix" data-scroll-reveal="enter from the left move 30px after wait 0.4s reset"> <img src="img/boutique_salmis.jpg" title="Magret de canard fourré au foie gras" alt="Magret de canard fourré au foie gras">
        <p class="p1"><strong>Salmis de canard<br/>
          350g</strong></p>
        <p class="ingredients">Ingrédients: viande de canard, vin rouge, oignons, carottes, sel, poivres, épices</p>
        <p class="prix">10.50€</p>
        <a href="https://www.paypal.com/webapps/shoppingcart?mid=646161249186798237924671481197532&xclick_params=b3V0ZGF0ZWRfcGFnZV90bXBsJTNkcCUyZmdlbiUyZmZhaWxlZCUyZHRvJTJkbG9hZCUyNnglM2Q4JTI2eSUzZDE4JTI2YWRkJTNkMSUyNmNtZCUzZF9jYXJ0JTI2YnVzaW5lc3MlM2RlYXJsJTJlYm91bGV0JTI1NDBsYXBvc3RlJTJlbmV0JTI2aXRlbV9uYW1lJTNkU2FsbWlzJTI1MjBkZSUyNTIwY2FuYXJkJTI2YW1vdW50JTNkMTAlMmU1MCUyNm5vX25vdGUlM2QxJTI2Y3VycmVuY3lfY29kZSUzZEVVUiUyNmxjJTNkRlIlMjZibiUzZFBQJTJkU2hvcENhcnRCRiUyNnZpc2l0b3JfaWQlM2Q2MTI0OTE4Njc5ODIzNzkyNDY3JTI2bWVyY2hhbnRfZW1haWwlM2RlYXJsJTJlYm91bGV0JTQwbGFwb3N0ZSUyZW5ldCUyNmJ1c2luZXNzX25hbWUlM2RFQVJMJTIwQm91bGV0JTI2bWVyY2hhbnRfaWQlM2Q5SFBCQVBSUU44U1VHJTI2d2FfdHlwZSUzZFNob3BwaW5nQ2FydCUyNlNISVBQSU5HX0FORF9UQVglM2QxJTI2JTI2QXV0b1JldHVybiUzZHRydWUlMjY&flowlogging_id=701eb92d19a5#/checkout/shoppingCart" target="_blank">AJOUTER AU PANIER</a> </div>
      <div class="boutique_prix" data-scroll-reveal="enter from the top move 30px after wait 0.4s reset"> <img src="img/boutique_cassoulet.jpg" title="Cassoulet au confit de canard" alt="Cassoulet au confit de canard">
        <p class="p1"><strong>Cassoulet au confit de canard 1kg</strong></p>
        <p class="ingredients">Ingrédients: haricots 310g, saucisses 200g, manchons de canard 20%, couennes</p>
        <p class="prix">12€</p>
        <a href="https://www.paypal.com/webapps/shoppingcart?mid=9475561249186798237924671481197686&xclick_params=b3V0ZGF0ZWRfcGFnZV90bXBsJTNkcCUyZmdlbiUyZmZhaWxlZCUyZHRvJTJkbG9hZCUyNnglM2QyOSUyNnklM2QxNCUyNmFkZCUzZDElMjZjbWQlM2RfY2FydCUyNmJ1c2luZXNzJTNkZWFybCUyZWJvdWxldCUyNTQwbGFwb3N0ZSUyZW5ldCUyNml0ZW1fbmFtZSUzZENhc3NvdWxldCUyNTIwMTAwMGclMjZhbW91bnQlM2QxMiUyZTAwJTI2bm9fbm90ZSUzZDElMjZjdXJyZW5jeV9jb2RlJTNkRVVSJTI2bGMlM2RGUiUyNmJuJTNkUFAlMmRTaG9wQ2FydEJGJTI2dmlzaXRvcl9pZCUzZDYxMjQ5MTg2Nzk4MjM3OTI0NjclMjZtZXJjaGFudF9lbWFpbCUzZGVhcmwlMmVib3VsZXQlNDBsYXBvc3RlJTJlbmV0JTI2YnVzaW5lc3NfbmFtZSUzZEVBUkwlMjBCb3VsZXQlMjZtZXJjaGFudF9pZCUzZDlIUEJBUFJRTjhTVUclMjZ3YV90eXBlJTNkU2hvcHBpbmdDYXJ0JTI2U0hJUFBJTkdfQU5EX1RBWCUzZDElMjYlMjZBdXRvUmV0dXJuJTNkdHJ1ZSUyNg&flowlogging_id=ce64f94654f38#/checkout/shoppingCart" target="_blank">AJOUTER AU PANIER</a> </div>
      <div data-scroll-reveal="enter from the right move 30px after wait 0.4s reset"> <img src="img/boutique_gesiers.jpg" title="Gésiers confits" alt="Gésiers confits">
        <p class="p1"><strong>Gésiers confits<br/>
          250g</strong></p>
        <p class="ingredients">Ingrédients: gésiers d'oie ou de canard, graisse, sel</p>
        <p class="prix">10.50€</p>
        <a href="https://www.paypal.com/webapps/shoppingcart?mid=4850761249186798237924671481198013&xclick_params=b3V0ZGF0ZWRfcGFnZV90bXBsJTNkcCUyZmdlbiUyZmZhaWxlZCUyZHRvJTJkbG9hZCUyNnglM2Q0NSUyNnklM2QxMSUyNmFkZCUzZDElMjZjbWQlM2RfY2FydCUyNmJ1c2luZXNzJTNkZWFybCUyZWJvdWxldCUyNTQwbGFwb3N0ZSUyZW5ldCUyNml0ZW1fbmFtZSUzZEdlc2llcnMlMjUyMGNvbmZpdHMlMjUyMDI1MGclMjZhbW91bnQlM2QxMSUyZTAwJTI2bm9fbm90ZSUzZDElMjZjdXJyZW5jeV9jb2RlJTNkRVVSJTI2bGMlM2RGUiUyNmJuJTNkUFAlMmRTaG9wQ2FydEJGJTI2dmlzaXRvcl9pZCUzZDYxMjQ5MTg2Nzk4MjM3OTI0NjclMjZtZXJjaGFudF9lbWFpbCUzZGVhcmwlMmVib3VsZXQlNDBsYXBvc3RlJTJlbmV0JTI2YnVzaW5lc3NfbmFtZSUzZEVBUkwlMjBCb3VsZXQlMjZtZXJjaGFudF9pZCUzZDlIUEJBUFJRTjhTVUclMjZ3YV90eXBlJTNkU2hvcHBpbmdDYXJ0JTI2U0hJUFBJTkdfQU5EX1RBWCUzZDElMjYlMjZBdXRvUmV0dXJuJTNkdHJ1ZSUyNg&flowlogging_id=5ce2117ed46b7#/checkout/shoppingCart" target="_blank">AJOUTER AU PANIER</a> </div>
      <div data-scroll-reveal="enter from the left move 30px after wait 0.4s reset"> <img src="img/boutique_emince_canard.jpg" title="&Eacute;mincé de canard confit" alt="&Eacute;mincé de canard confit">
        <p class="p1"><strong>&Eacute;mincé de canard confit<br/>
          250g</strong></p>
        <p class="ingredients">Ingrédients: magret de canard confit découpé en lamelles, sel</p>
        <p class="prix">7.50€</p>
        <a href="https://www.paypal.com/webapps/shoppingcart?mid=7991561249186798237924671481198144&xclick_params=b3V0ZGF0ZWRfcGFnZV90bXBsJTNkcCUyZmdlbiUyZmZhaWxlZCUyZHRvJTJkbG9hZCUyNnglM2QxOSUyNnklM2QxOSUyNmFkZCUzZDElMjZjbWQlM2RfY2FydCUyNmJ1c2luZXNzJTNkZWFybCUyZWJvdWxldCUyNTQwbGFwb3N0ZSUyZW5ldCUyNml0ZW1fbmFtZSUzZEVtaW5jZSUyNTIwZGUlMjUyMGNhbmFyZCUyNTIwY29uZml0JTI2YW1vdW50JTNkNyUyZTUwJTI2bm9fbm90ZSUzZDElMjZjdXJyZW5jeV9jb2RlJTNkRVVSJTI2bGMlM2RGUiUyNmJuJTNkUFAlMmRTaG9wQ2FydEJGJTI2dmlzaXRvcl9pZCUzZDYxMjQ5MTg2Nzk4MjM3OTI0NjclMjZtZXJjaGFudF9lbWFpbCUzZGVhcmwlMmVib3VsZXQlNDBsYXBvc3RlJTJlbmV0JTI2YnVzaW5lc3NfbmFtZSUzZEVBUkwlMjBCb3VsZXQlMjZtZXJjaGFudF9pZCUzZDlIUEJBUFJRTjhTVUclMjZ3YV90eXBlJTNkU2hvcHBpbmdDYXJ0JTI2U0hJUFBJTkdfQU5EX1RBWCUzZDElMjYlMjZBdXRvUmV0dXJuJTNkdHJ1ZSUyNg&flowlogging_id=b72a9e45ebde9#/checkout/shoppingCart" target="_blank">AJOUTER AU PANIER</a> </div>
      <div id="friton" data-scroll-reveal="enter from the top move 30px after wait 0.4s reset"> <img src="img/boutique_fritons.jpg" title="Fritons d'oie" alt="Fritons d'oie">
        <p class="p1"><strong>Fritons d’oie<br/>
          170g</strong></p>
        <p class="ingredients">Ingrédients: viande d'oie 66%, porc, sel</p>
        <p class="prix">3.30€</p>
        <a href="https://www.paypal.com/webapps/shoppingcart?mid=9463261249186798237924671481197245&xclick_params=b3V0ZGF0ZWRfcGFnZV90bXBsJTNkcCUyZmdlbiUyZmZhaWxlZCUyZHRvJTJkbG9hZCUyNnglM2Q0MSUyNnklM2QxMyUyNmFkZCUzZDElMjZjbWQlM2RfY2FydCUyNmJ1c2luZXNzJTNkZWFybCUyZWJvdWxldCUyNTQwbGFwb3N0ZSUyZW5ldCUyNml0ZW1fbmFtZSUzZEZyaXRvbnMlMjUyMGQlMjUyN29pZSUyNmFtb3VudCUzZDMlMmUzMCUyNm5vX25vdGUlM2QxJTI2Y3VycmVuY3lfY29kZSUzZEVVUiUyNmxjJTNkRlIlMjZibiUzZFBQJTJkU2hvcENhcnRCRiUyNnZpc2l0b3JfaWQlM2Q2MTI0OTE4Njc5ODIzNzkyNDY3JTI2bWVyY2hhbnRfZW1haWwlM2RlYXJsJTJlYm91bGV0JTQwbGFwb3N0ZSUyZW5ldCUyNmJ1c2luZXNzX25hbWUlM2RFQVJMJTIwQm91bGV0JTI2bWVyY2hhbnRfaWQlM2Q5SFBCQVBSUU44U1VHJTI2d2FfdHlwZSUzZFNob3BwaW5nQ2FydCUyNlNISVBQSU5HX0FORF9UQVglM2QxJTI2JTI2QXV0b1JldHVybiUzZHRydWUlMjY&flowlogging_id=6ac4ac41aaf98#/checkout/shoppingCart" target="_blank">AJOUTER AU PANIER</a> </div>
      <div data-scroll-reveal="enter from the right move 30px after wait 0.4s reset"> <img src="img/boutique_pate_canard.jpg" title="Pâté au foie de canard" alt="Pâté au foie de canard">
        <p class="p1"><strong>Pâté au foie de canard<br/>
          180g</strong></p>
        <p class="ingredients">Ingrédients: viande de canard, morceaux de foie gras, oeufs</p>
        <p class="prix">5.80€</p>
        <a href="https://www.paypal.com/webapps/shoppingcart?mid=1461761249186798237924671481198446&xclick_params=b3V0ZGF0ZWRfcGFnZV90bXBsJTNkcCUyZmdlbiUyZmZhaWxlZCUyZHRvJTJkbG9hZCUyNnglM2QxOSUyNnklM2QxNiUyNmFkZCUzZDElMjZjbWQlM2RfY2FydCUyNmJ1c2luZXNzJTNkZWFybCUyZWJvdWxldCUyNTQwbGFwb3N0ZSUyZW5ldCUyNml0ZW1fbmFtZSUzZFBhdGUlMjUyMGF1JTI1MjBmb2llJTI1MjBkZSUyNTIwY2FuYXJkJTI2YW1vdW50JTNkNSUyZTgwJTI2bm9fbm90ZSUzZDElMjZjdXJyZW5jeV9jb2RlJTNkRVVSJTI2bGMlM2RGUiUyNmJuJTNkUFAlMmRTaG9wQ2FydEJGJTI2dmlzaXRvcl9pZCUzZDYxMjQ5MTg2Nzk4MjM3OTI0NjclMjZtZXJjaGFudF9lbWFpbCUzZGVhcmwlMmVib3VsZXQlNDBsYXBvc3RlJTJlbmV0JTI2YnVzaW5lc3NfbmFtZSUzZEVBUkwlMjBCb3VsZXQlMjZtZXJjaGFudF9pZCUzZDlIUEJBUFJRTjhTVUclMjZ3YV90eXBlJTNkU2hvcHBpbmdDYXJ0JTI2U0hJUFBJTkdfQU5EX1RBWCUzZDElMjYlMjZBdXRvUmV0dXJuJTNkdHJ1ZSUyNg&flowlogging_id=7a40b6cc52bf0#/checkout/shoppingCart" target="_blank">AJOUTER AU PANIER</a> </div>
    </div>
  </section>
  <section id="coffrets" class="bg_boutique">
    <div class="coffret container cf">
      <div data-scroll-reveal="enter from the left move 30px after wait 0.4s reset"> <img src="img/boutique_coffret.jpg" title="coffret cadeau d'oie" alt="coffret cadeau d'oie">
        <p><strong>COFFRET CADEAU OIE</strong></p>
        <p>1 foie gras entier 180 g</p>
        <p>1 confit une aile et une cuisse 650g</p>
        <p>1 Floc (apéritif gascon)</p>
        <p>1 coffret cartonné</p>
        <p class="prix">40€</p>
        <a href="https://www.paypal.com/webapps/shoppingcart?mid=955961249186798237924671481206516&xclick_params=b3V0ZGF0ZWRfcGFnZV90bXBsJTNkcCUyZmdlbiUyZmZhaWxlZCUyZHRvJTJkbG9hZCUyNnglM2QxNyUyNnklM2QxNCUyNmFkZCUzZDElMjZjbWQlM2RfY2FydCUyNmJ1c2luZXNzJTNkZWFybCUyZWJvdWxldCUyNTQwbGFwb3N0ZSUyZW5ldCUyNml0ZW1fbmFtZSUzZENvZmZyZXQlMjUyMGNhZGVhdSUyNTIwJTI1MjhvaWUlMjUyOSUyNmFtb3VudCUzZDQwJTJlMDAlMjZub19ub3RlJTNkMSUyNmN1cnJlbmN5X2NvZGUlM2RFVVIlMjZsYyUzZEZSJTI2Ym4lM2RQUCUyZFNob3BDYXJ0QkYlMjZ2aXNpdG9yX2lkJTNkNjEyNDkxODY3OTgyMzc5MjQ2NyUyNm1lcmNoYW50X2VtYWlsJTNkZWFybCUyZWJvdWxldCU0MGxhcG9zdGUlMmVuZXQlMjZidXNpbmVzc19uYW1lJTNkRUFSTCUyMEJvdWxldCUyNm1lcmNoYW50X2lkJTNkOUhQQkFQUlFOOFNVRyUyNndhX3R5cGUlM2RTaG9wcGluZ0NhcnQlMjZTSElQUElOR19BTkRfVEFYJTNkMSUyNiUyNkF1dG9SZXR1cm4lM2R0cnVlJTI2&flowlogging_id=b3b6462f217fd#/checkout/shoppingCart" target="_blank">AJOUTER AU PANIER</a> </div>
      <div data-scroll-reveal="enter from the right move 30px after wait 0.4s reset"> <img src="img/boutique_coffret.jpg" title="coffret cadeau canard" alt="coffret cadeau canard">
        <p><strong>COFFRET CADEAU CANARD</strong></p>
        <p>1 foie gras entier 180 g</p>
        <p>1 confit une aile et une cuisse 400g</p>
        <p>1 Floc (apéritif gascon)</p>
        <p>1 coffret cartonné</p>
        <p class="prix">37€</p>
        <a href="https://www.paypal.com/webapps/shoppingcart?mid=9108761249186798237924671481206664&xclick_params=b3V0ZGF0ZWRfcGFnZV90bXBsJTNkcCUyZmdlbiUyZmZhaWxlZCUyZHRvJTJkbG9hZCUyNnglM2Q1OCUyNnklM2QxNCUyNmFkZCUzZDElMjZjbWQlM2RfY2FydCUyNmJ1c2luZXNzJTNkZWFybCUyZWJvdWxldCUyNTQwbGFwb3N0ZSUyZW5ldCUyNml0ZW1fbmFtZSUzZENvZmZyZXQlMjUyMGNhZGVhdSUyNTIwJTI1MjhjYW5hcmQlMjUyOSUyNmFtb3VudCUzZDM3JTJlMDAlMjZub19ub3RlJTNkMSUyNmN1cnJlbmN5X2NvZGUlM2RFVVIlMjZsYyUzZEZSJTI2Ym4lM2RQUCUyZFNob3BDYXJ0QkYlMjZ2aXNpdG9yX2lkJTNkNjEyNDkxODY3OTgyMzc5MjQ2NyUyNm1lcmNoYW50X2VtYWlsJTNkZWFybCUyZWJvdWxldCU0MGxhcG9zdGUlMmVuZXQlMjZidXNpbmVzc19uYW1lJTNkRUFSTCUyMEJvdWxldCUyNm1lcmNoYW50X2lkJTNkOUhQQkFQUlFOOFNVRyUyNndhX3R5cGUlM2RTaG9wcGluZ0NhcnQlMjZTSElQUElOR19BTkRfVEFYJTNkMSUyNiUyNkF1dG9SZXR1cm4lM2R0cnVlJTI2&flowlogging_id=9cc32631909f1#/checkout/shoppingCart" target="_blank">AJOUTER AU PANIER</a> </div>
    </div>
  </section>
</main>
<?php include("include/footer.php") ?>