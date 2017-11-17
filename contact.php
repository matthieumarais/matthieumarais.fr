<?php
// tableau vide qui stockera les éventuelles erreurs de validation
$errors = array();

//				CONDITION 					?  SI OUI						: SI NON;
$firstname 	= isset($_POST['firstname']) 	? trim($_POST['firstname']) 	: null;
$lastname 	= isset($_POST['lastname']) 	? trim($_POST['lastname']) 		: null;
$email 		= isset($_POST['email']) 		? trim($_POST['email']) 		: null;
$message 	= isset($_POST['message']) 		? trim($_POST['message']) 		: null;

// isset => is set => est défini ?
$send = isset($_POST['send']);
// en d'autre termes, l'utilisateur a-t'il appuyé sur le bouton "envoyer" ?

$validation = false;
if ($send) {
	/// vérification et envoi de mail le cas échéant	
	
	// vérification du prénom
	if ( empty($firstname) ) {
		$errors['firstname'] = 'Le prénom est vide';	
	} 
	
	// vérification du nom
	if (empty($lastname)) {
		$errors['lastname'] = 'Le nom est vide';	
	} else if (strlen($lastname) < 2) {//signifique qu'il faut minimum 2 lettres
		$errors['lastname'] = 'Le nom ne semble pas valide';	
	}
	
	if (empty($email)) {
		$errors['email'] = "L'adresse email est vide";	
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = 'L\'adresse email ne semble pas valide';	
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
		$mailClient->setFrom("no-reply@matthieudesign.fr", "no-reply@matthieudesign.fr"); // expediteur
		$mailClient->Subject = "Confirmation d'envoi de message";
		
		$mailClient->Body = "<p>Merci $fullname de m'avoir contacté.</p>";
		$mailClient->Body.= "<p>Je reviendrai vers vous dans les plus brefs délais</p>";
		$mailClient->Body.= "<p>Cordialement,</p><p>Matthieu MARAIS</p>";
		$mailClient->Body.= "<p>votre message:</p><blockquote>$message</blockquote>";
		$mailClient->AltBody = "Merci $fullname de m'avoir contacté.\r\n\r\n";
		$mailClient->AltBody.= "Je reviendrai vers vous dans les plus brefs délais\r\n\r\n";
		$mailClient->AltBody.= "Cordialement,\r\n\r\nMatthieu MARAIS\r\n\r\n";
		$mailClient->AltBody.= "votre message:\r\n$message";
		
		$succesClient = $mailClient->send();
	
		$mailAdmin->addAddress("mqtthieu@gmail.com", "Admin Matthieu MARAIS");
		$mailAdmin->setFrom($email, $fullname);
		$mailAdmin->CharSet = 'UTF-8';
		$mailAdmin->Subject = "[Matthieu] $fullname vous a envoyé un message";
		
		$mailAdmin->Body = "<h1>Un message de $fullname (<a href=\"mailto:$email\">$email</a>)</h1>";
		$mailAdmin->Body.= "<p>son message :</p>";
		$mailAdmin->Body.= "<blockquote>$message</blockquote>";
		if ($mailAdmin->Send() ) {
			 header("Location: index.php");

				}
	}
	
}
                
?>
<?php
define('PAGE','contact');
$metatitre = "Portfolio de matthieu marais webdesigner intégrateur. Contactez moi.";
$metaDescrition = "Bienvenue sur la page contact de matthieu marais web designer intégrateur, Contactez-moi et laissez-moi un message.";
include("include/header.php");
?>


 <main class="bg_body">
	<div class="container">
    	<div class="formulaire">
        <h1>Contactez-moi</h1>
        <div class="contact">
        <form name="contact-form" id="contact-form" method="post">
        
        	<div class="info" <?php if (isset($errors['lastname'])) echo ' class="error"'; ?>>
                <input type="text" name="lastname" id="lastname" placeholder="Votre nom*" value="<?php echo $lastname; ?>">
<?php if (isset($errors['lastname'])) { ?><span class="error"><?php echo $errors['lastname']; ?></span><?php } ?>                
            </div>
            
            
			<div class="prenom" <?php if (isset($errors['firstname'])) echo ' class="error"'; ?>>
                <input type="text" name="firstname" id="firstname" placeholder="Votre prénom*" value="<?php echo $firstname; ?>">
<?php if (isset($errors['firstname'])) { ?><span class="error"><?php echo $errors['firstname']; ?></span><?php } ?>                
            </div>  
            
                  
			<div class="mail" <?php if (isset($errors['email'])) echo ' class="error"'; ?>>
                <input type="email" name="email" id="email" placeholder="Votre e-mail*" value="<?php echo $email; ?>">
<?php if (isset($errors['email'])) { ?><span class="error"><?php echo $errors['email']; ?></span><?php } ?>                
            </div>   
            
                 
			<div class="msg" <?php if (isset($errors['message'])) echo ' class="error"'; ?>>
                <textarea id="message" name="message" cols="50" rows="10" placeholder="détaillez votre demande tout en étant concis*" maxlength="100"><?php echo $message; ?></textarea>
<?php if (isset($errors['message'])) { ?><span class="error"><?php echo $errors['message']; ?></span><?php } ?>                
            </div>
            
            <p class="champs">*Champs obligatoires.</p>
            <div class="envoyer">
				<input type="submit" class="boutonPerso" name="send" id="send" value"Envoyer">
            </div>
         </form>
         </div>
         </div>
    </div>
</main>
<?php 

include("include/footer.php");
?>