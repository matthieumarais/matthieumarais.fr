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
	
	if (empty($message)){
			$errors['message'] = "votre message ne peut pas etre vide";	
	}else if (strlen($message) < 10){
			$errors['message'] = "Merci de détailler votre demande";
	}else if (strlen($message) > 100){
			$errors['message'] = "Merci d'être concis";
	}
	
	if (empty($errors)) {
		$fullname =$firstname .' '.$lastname;
		
		require("classes/phpmailer/class.phpmailer.php");

		$mailClient =new PHPMailer; //Coté client
		$mailAdmin = new PHPMailer; //coté admin

	
		//Confirmation pour le client
		$mailClient->CharSet = 'utf-8';
		$mailClient->addAddress($email, $fullname);
		$mailClient->setFrom("jenna.amsellem@gmail.com","trait du gnon");
		$mailClient->Subject="Confirmation d'envoi de message";
		
		$mailClient->Body ="<p>Merci $fullname de nous avoir contacté.</p>";
		$mailClient->Body.="<p>Nous reviendrons vers vous dans les plus brefs délais</p>";
		$mailClient->Body.="<p>Voici votre message : $message</p>";
		
		$mailClient->AltBody ="Merci $fullname de nous avoir contacté.\r\n\r\n";
		$mailClient->AltBody.="Nous reviendrons vers vous dans les plus brefs délais\r\n\r\n";
		$mailClient->AltBody.="Voici votre message : $message";
		
		$succesClient = $mailClient->send();
		
		
		//Confirmation pour l'admin
		$mailAdmin->CharSet = 'utf-8';
		$mailAdmin->addAddress("jenna.amsellem@gmail.com","trait du gnon");
		$mailAdmin->setFrom($email, $fullname);
		$mailAdmin->Subject="Confirmation message client";
		
		$mailAdmin->Body ="<p>$fullname nous a contacté.</p>";
		if(!empty($tel)) $mailAdmin->Body.="<p>numéro de téléphone : $tel</p>";
		$mailAdmin->Body.="<p>Voici le message : $message</p>";
		
		$mailAdmin->AltBody ="$fullname nous a contacté.\r\n\r\n";
		$mailAdmin->AltBody.="Voici le message : $message";
		if ( !$mailAdmin->Send() ) {
			echo "Echec de l'envoi du mail, Erreur: " . $mailAdmin->ErrorInfo;
		} else {
				echo '<div class="content-popup">
						<div class="popup">
							<div class="close-popup">X</div>
							<p class="taille-depasse">Le fichier est trop gros</p>
						</div>
					  </div>';
		}
			unset($mail);
	}
	
}

?>

<?php
  define('PAGE','contact');
  $metatitre = "Sivan Innovation - Contact";
?>
<?php include("header.php"); ?>
<section class="contact-content">
	<div class="row">
    	<div class="col-lg-6 col-lg-offset-2 col-md-6 col-md-offset-1 col-sm-8 col-md-offset-0">
        <h1>CONTACT</h1>
        <h2>NEED MORE INFORMATION</h2>
        <form name="contact-form" id="contact-form" method="post">
        	<div<?php if (isset($errors['lastname'])) echo ' class="error"'; ?>>
            	<label>Votre nom</label>
                <input type="text" name="lastname" id="lastname" placeholder="ex:...dupond" value="<?php echo $lastname; ?>"/>
                <?php /*est ce que dans le tableau errors il existe une clés lastname */?>
				<?php if(isset($errors['lastname'])) { ?><span class="error"><?php echo $errors['lastname']; ?></span> <?php } ?>
            </div>
            <div<?php if (isset($errors['firstname'])) echo ' class="error"'; ?>>
            	<label>Votre prénom</label>
                <input type="text" name="firstname" id="firstname" placeholder="ex:...jean" value="<?php echo $firstname; ?>" />
                <?php if(isset ($errors['firstname'])) {?><span class="error"><?php echo $errors['firstname']; ?></span><?php } ?>
            </div>
            <div<?php if (isset($errors['tel'])) echo ' class="error"'; ?>>
            	<label>Votre téléphone</label>
                <input maxlength="10" type="tel" name="tel" id="tel" placeholder="ex:...0606060606" value="<?php echo $tel; ?>"/><!-- value sert a laisser le texte afficher apres avoir rafraichit la page -->
                <?php if(isset ($errors['tel'])) { ?><span class="error"><?php echo $errors['tel']; ?></span><?php } ?>
            </div>
            <div<?php if (isset($errors['email'])) echo ' class="error"'; ?>>
            	<label>Votre email</label>
                <input type="email" name="email" id="email" placeholder="ex:...jeanjean@youhou.fr" value="<?php echo $email; ?>"/>
                <?php if(isset($errors['email'])) { ?><span class="error"><?php echo $errors['email']; ?></span><?php } ?>
            </div>
            <div<?php if (isset($errors['message'])) echo ' class="error"'; ?>>
            	<label>Votre message</label>
                <textarea id="message" name="message" placeholder="détaillez votre demande en étant concis" maxlength="300"><?php echo $message ?></textarea>
                <?php if(isset($errors['message'])) { ?> <span class="error"><?php echo $errors['message']; ?></span><?php } ?>
            </div>
            <div>
            	<button type="submit" name="send" id="send">Envoyez le message</button>
            </div>
        
        </form>
        </div>
        <div class="col-lg-2 col-md-5 col-sm-4 contact-address">
        	<h2>ADDRESS</h2>
            <p>S<strong>IVAN INNOVATION LTD.</strong><br/>19 Hartom Street <br/>97775 Jerusalem - ISRAEL</p>
        </div>
    </div>
</section>
<?php include("footer.php"); ?>