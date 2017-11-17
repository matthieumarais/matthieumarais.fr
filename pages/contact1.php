<?php
// tableau vide qui stockera les éventuelles erreurs de validation
$errors = array();

//				CONDITION 					?  SI OUI						: SI NON;
$firstname 	= isset($_POST['firstname']) 	? trim($_POST['firstname']) 	: null;
$lastname 	= isset($_POST['lastname']) 	? trim($_POST['lastname']) 		: null;
$email 		= isset($_POST['email']) 		? trim($_POST['email']) 		: null;
$phone 		= isset($_POST['phone']) 		? trim($_POST['phone']) 		: null;
$message 	= isset($_POST['message']) 		? trim($_POST['message']) 		: null;

// isset => is set => est défini ?
$send = isset($_POST['send']);
// en d'autre termes, l'utilisateur a-t'il appuyé sur le bouton "envoyer" ?

$validation = false;
if ($send) {
	/// vérification et envoi de mail le cas échéant	
	
	// vérification du prénom
	if ( empty($firstname) ) {
		$errors['firstname'] = 'Le prénom ne peut pas être vide';	
	} 
	
	// vérification du nom
	if (empty($lastname)) {
		$errors['lastname'] = 'Le nom ne peut pas être vide';	
	} else if (strlen($lastname) < 2) {//signifique qu'il faut minimum 2 lettres
		$errors['lastname'] = 'Le nom ne semble pas valide';	
	}
	
	if (empty($email)) {
		$errors['email'] = "L'adresse email ne peut pas être vide";	
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = 'L\'adresse email ne semble pas valide';	
	}
	
	if (!empty($phone) && !preg_match("`^0[0-9]([-. ]?\d{2}){4}[-. ]?$`", $phone)) {
		$errors['phone'] = 'Le numéro ne semble pas valide'; 
	}
	
	if (empty($message)) {
		$errors['message'] = 'Le message ne peut pas être vide';	
	} else if (strlen($message) < 10) {
		$errors['message'] = 'Merci de détailler votre demande';
	} else if (strlen($message) > 100) {
		$errors['message'] = 'Merci d\'être concis';	
	}
	
	if (empty($errors)) { // pas d'erreur
		$fullname = $firstname. ' '.$lastname;
		
		require("classes/phpmailer/class.phpmailer.php");

		$mailClient = new PHPMailer; // Instantiation de la classe PHPMailer
		$mailAdmin  = new PHPMailer;
		
		$mailClient->CharSet = 'UTF-8';
		$mailClient->addAddress($email, $fullname); // destinataire
		$mailClient->setFrom("slone@free.fr", "Slone Muuuuusic"); // expediteur
		$mailClient->Subject = "Confirmation d'envoi de message";
		
		$mailClient->Body = "<p>Merci $fullname de nous avoir contacté.</p>";
		$mailClient->Body.= "<p>Nous reviendrons vers vous dans les plus brefs délais</p>";
		$mailClient->Body.= "<p>Cordialement,</p><p>Toute l'équipe de Trait du Gnon</p>";
		$mailClient->Body.= "<p>votre message:</p><blockquote>$message</blockquote>";
		$mailClient->AltBody = "Merci $fullname de nous avoir contacté.\r\n\r\n";
		$mailClient->AltBody.= "Nous reviendrons vers vous dans les plus brefs délais\r\n\r\n";
		$mailClient->AltBody.= "Cordialement,\r\n\r\nToute l'équipe de Trait du Gnon\r\n\r\n";
		$mailClient->AltBody.= "votre message:\r\n$message";
		
		$succesClient = $mailClient->send();
	
		$mailAdmin->addAddress("toto@toto.ffr", "Admin Trait du Gnon");
		$mailAdmin->setFrom($email, $fullname);
		$mailAdmin->CharSet = 'UTF-8';
		$mailAdmin->Subject = "[Trait du Gnon] $fullname vous a envoyé un message";
		
		$mailAdmin->Body = "<h1>Un message de $fullname (<a href=\"mailto:$email\">$email</a>)</h1>";
		if (!empty($phone)) $mailAdmin->Body.= "<p>numéro de téléphone : $phone</p>";
		$mailAdmin->Body.= "<p>son message :</p>";
		$mailAdmin->Body.= "<blockquote>$message</blockquote>";
		if ($mailAdmin->send()) {
			
			header("Location: contact-confirmation.php");
		}
	}
	
}


$metaTitre = "Page d'accueil";
$metaDescription = "Ceci est la page de galerie photo";


include("inc/header.php");

?>
	<div class="container">
        <h1>Contactez-nous</h1>
        <form name="contact-form" id="contact-form" method="post">
        	<div<?php if (isset($errors['lastname'])) echo ' class="error"'; ?>>
            	<label>Votre nom</label>
                <input type="text" name="lastname" id="lastname" placeholder="ex.: Dupond-Lajoie" value="<?php echo $lastname; ?>">
<?php if (isset($errors['lastname'])) { ?><span class="error"><?php echo $errors['lastname']; ?></span><?php } ?>                
            </div>
			<div<?php if (isset($errors['firstname'])) echo ' class="error"'; ?>>
            	<label>Votre prénom</label>
                <input type="text" name="firstname" id="firstname" placeholder="ex.: Jean-Jean" value="<?php echo $firstname; ?>">
<?php if (isset($errors['firstname'])) { ?><span class="error"><?php echo $errors['firstname']; ?></span><?php } ?>                
            </div>        
			<div<?php if (isset($errors['email'])) echo ' class="error"'; ?>>
            	<label>Votre email</label>
                <input type="email" name="email" id="email" placeholder="ex.: jeanjean@youhou.fr" value="<?php echo $email; ?>">
<?php if (isset($errors['email'])) { ?><span class="error"><?php echo $errors['email']; ?></span><?php } ?>                
            </div>        
			<div<?php if (isset($errors['phone'])) echo ' class="error"'; ?>>
            	<label>Votre téléphone</label>
                <input type="tel" name="phone" id="phone" placeholder="ex.: 0655223344" value="<?php echo $phone; ?>">
<?php if (isset($errors['phone'])) { ?><span class="error"><?php echo $errors['phone']; ?></span><?php } ?>                
            </div>        
			<div<?php if (isset($errors['message'])) echo ' class="error"'; ?>>
            	<label>Votre message</label>
                <textarea id="message" name="message" placeholder="détaillez votre demande tout en étant concis" maxlength="100"><?php echo $message; ?></textarea>
<?php if (isset($errors['message'])) { ?><span class="error"><?php echo $errors['message']; ?></span><?php } ?>                
            </div>
            <div>
				<button type="submit" name="send" id="send">Envoyez le message</button>
            </div>
         </form>
    </div>
<?php 

include("inc/footer.php");