<?php
$errors = array();

$lastname 	= isset($_POST['lastname']) 	? trim($_POST['lastname']) 	: null;
$firstname 	= isset($_POST['firstname']) 	? trim($_POST['firstname']) : null;
$email 		= isset($_POST['email']) 		? trim($_POST['email']) 	: null;
$message 	= isset($_POST['message']) 		? trim($_POST['message']) 	: null;
$tel		= isset($_POST['tel'])			? trim($_POST['tel'])		: null;


$send = isset($_POST['send']);


$validation = false;
// vérification
if ($send){
	
	if (empty($lastname)){
			$errors['lastname'] = " le nom est vide ";
	}else if (strlen($lastname) < 2) {
			$errors['lastname'] = "le nom ne semble pas valide";
	}
	
	if (empty($firstname)){
			$errors['firstname'] = "le prénom ne semble pas valide";	
	}else if (strlen($firstname) < 2){
			$errors['firstname'] = "le prénom ne semble pas valide";	
	}
	
	if(!empty($tel) && !preg_match("`^0[0-9]([-. ]?\d{2}){4}[-. ]?$`", $tel)){
		$errors['tel'] = "votre téléphone est incorrect"; 	
	}
	
	if (empty($email)){
			$errors['email'] = "votre email est incorrect";	
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors['email'] = "votre email ne semble pas valide";	
	}
	
	//if (empty($message)){
//			$errors['message'] = "votre message ne peut pas etre vide";	
//	}else if (strlen($message) < 10){
//			$errors['message'] = "Merci de détailler votre demande";
//	}else if (strlen($message) > 100){
//			$errors['message'] = "Merci d'être concis";
//	}
	
	if (empty($errors)) {
		$fullname =$firstname .' '.$lastname;
		
		require("classes/phpmailer/class.phpmailer.php");
		$mailAdmin = new PHPMailer; //coté admin
		$mailClient = new PHPMailer; //coté admin

        $mailClient->isSMTP();                                      // Set mailer to use SMTP
        $mailClient->SMTPDebug = 2;
//Ask for HTML-friendly debug output
        $mailClient->Debugoutput = 'html';
//        $mailClient->Host = 'smtp.mail.me.com';
        $mailClient->Host = 'smtp.gmail.com';

// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mailClient->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
        $mailClient->SMTPSecure = 'tls';
//Whether to use SMTP authentication
        $mailClient->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
        $mailClient->Username = "mqtthieu@gmail.com";
//Password to use for SMTP authentication
        $mailClient->Password = 'france28';

        //Confirmation pour le client
		$mailClient->CharSet = 'utf-8';
		$mailClient->isHTML(true);
        $mailClient->addAddress($email, $fullname);
		$mailClient->setFrom("no-reply@gmail.com","Powergym");
		$mailClient->Subject="Confirmation de pré-inscription au concept Powergym";
		
		$mailClient->Body ="<p>Merci $fullname pour votre pré-inscription.</p>";
		$mailClient->Body.="<p>Nous reviendrons vers vous dans les plus brefs délais</p>";
		$mailClient->Body.="<p>Voici votre message : ".strip_tags($message)."</p>";
		
		$mailClient->AltBody ="Merci $fullname pour votre pré-inscription.\r\n\r\n";
		$mailClient->AltBody.="Nous reviendrons vers vous dans les plus brefs délais\r\n\r\n";
		$mailClient->AltBody.="Voici votre message : ".strip_tags($message);
        $mailClient->Body.="<img src=''/>";

        $succesClient = $mailClient->send();

		//Confirmation pour l'admin
		$mailClient->CharSet = 'utf-8';
//		$mailClient->addAddress("powergym974@icloud.com","Admin Powergym");
		$mailClient->addAddress("mqtthieu@gmail.com","Admin Powergym");
		$mailClient->setFrom($email, $fullname);
		$mailClient->Subject="Confirmation message client";
		
		$mailClient->Body ="<p>$fullname vient de se préinscrire à POWERGYM.</p>";
		if(!empty($tel)) $mailClient->Body.="<p>numéro de téléphone : $tel</p>";
		$mailClient->Body.="<p>Voici le message : ".strip_tags($message)."</p>";
		
		$mailClient->AltBody ="$fullname nous a contacté.\r\n\r\n";
		$mailClient->AltBody.="Voici le message : $message";
		if ($mailClient->send()) {
			header("Location: preinscription.php#localForm").$mailClient->ErrorInfo;
		}else{header("Location: index.php");};
	}
}

?>
<?php
  define('PAGE','preinscription');
  $metatitre = "Powergym - Pré-inscription";
?>
<?php include("include/header.php"); ?>
<main>
  <section class="container-fluid bgInscription contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Le concept Powergym vous plaît ?</h1>
          <h2>
          N’attendez plus !
          <h2>
          <p>Venez profiter d’un tarif exceptionnel de 39,90€TTC/mois* et sans frais de dossier !<br>
            Cette offre vous permet une économie de 65€ sur les frais de dossier et de 10€ ou 15€/mois<br/>suivant les formules d’abonnement que l’on propose. </p>
          <h3>Cette offre vous intéresse ?</h3>
          <p>Remplissez le formulaire. Cela nous permettra de vous enregistrer en attendant votre venu pour finaliser votre adhésion à Powergym.</p>
          <h3>Ce n’est pas tout !!!!</h3>
          <p>Dès l’ouverture officielle, Powergym vous donnera la possibilité de devenir parrain. Faites partager l’aventure d’un concept unique à vos amis en les faisant bénéficier de l’offre de lancement avec le premier mois offert.</p>
          <h3>Les avantages du parrainage :</h3>
          <p>1 Parrainage = 1 Casquette<br>
            2 Parrainage = 1 Serviette<br>
            3 Parrainage = 1 T-shirt <br>
          </p>
          <p>*engagement d’un an à respecter</p>
        </div>
      </div>
    </div>
    <section class="container">
      <div class="contact-content">
        <div class="row">
          <div class="col-lg-5 col-md-5">
            <h2 id="localForm">PR&Eacute;-INSCRIPTION POWERGYM</h2>
            <form name="contact-form" id="contact-form" method="post">
              <div<?php if (isset($errors['lastname'])) echo ' class="error"'; ?>>
                <label>Votre nom</label>
                <input type="text" name="lastname" id="lastname" placeholder="..." value="<?php echo $lastname; ?>"/>
                <?php /*est ce que dans le tableau errors il existe une clés lastname */?>
                <?php if(isset($errors['lastname'])) { ?>
                <span class="error"><?php echo $errors['lastname']; ?></span>
                <?php } ?>
              </div>
              <div<?php if (isset($errors['firstname'])) echo ' class="error"'; ?>>
                <label>Votre prénom</label>
                <input type="text" name="firstname" id="firstname" placeholder="..." value="<?php echo $firstname; ?>" />
                <?php if(isset ($errors['firstname'])) {?>
                <span class="error"><?php echo $errors['firstname']; ?></span>
                <?php } ?>
              </div>
              <div<?php if (isset($errors['tel'])) echo ' class="error"'; ?>>
                <label>Votre téléphone</label>
                <input maxlength="10" type="tel" name="tel" id="tel" placeholder="..." value="<?php echo $tel; ?>"/>
                <!-- value sert a laisser le texte afficher apres avoir rafraichit la page -->
                <?php if(isset ($errors['tel'])) { ?>
                <span class="error"><?php echo $errors['tel']; ?></span>
                <?php } ?>
              </div>
              <div<?php if (isset($errors['email'])) echo ' class="error"'; ?>>
                <label>Votre email</label>
                <input type="email" name="email" id="email" placeholder="..." value="<?php echo $email; ?>"/>
                <?php if(isset($errors['email'])) { ?>
                <span class="error"><?php echo $errors['email']; ?></span>
                <?php } ?>
              </div>
              <div<?php if (isset($errors['message'])) echo ' class="error"'; ?>>
                <label>Une question ?</label>
                <textarea id="message" name="message" cols="5" rows="10" placeholder="..." maxlength="300"><?php echo $message ?></textarea>
                <?php if(isset($errors['message'])) { ?>
                <span class="error"><?php echo $errors['message']; ?></span>
                <?php } ?>
              </div>
              <div>
                <button class="send" type="submit" name="send" id="send" onClick="location.href='preinscription.php#localForm'">Envoyez le message</button>
              </div>
            </form>
          </div>
          <div class="col-lg-5 col-lg-offset-2 col-md-5 col-md-offset-2 info">
            <div>
              <h3>Horaires d'ouvertures</h3>
              <p><span class="days">lundi au vendredi</span> 6h - 22h</p>
              <p><span class="days">Samedi</span> 9h - 20h</p>
              <p><span class="days">Dimanche</span> 8h - 14h</p>
            </div>
            <div>
              <h3>Adresse</h3>
              <p>Bientôt disponible</p>
            </div>
            <div>
              <h3>Téléphone</h3>
              <p>Bientôt disponible</p>
            </div>
            <!--<div class="box-iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3727.458670605809!2d55.49510931495777!3d-20.893858474397565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217881d3634c431f%3A0xa17b276fc0455c12!2s4+Rue+Gabriel+de+Kerveguen%2C+Sainte-Clotilde%2C+R%C3%A9union!5e0!3m2!1sfr!2sfr!4v1495182155486" frameborder="0" style="border:0" allowfullscreen></iframe></div>
          </div>-->
        </div>
      </div>
    </section>
  </section>
</main>
<?php include("include/footer.php"); ?>