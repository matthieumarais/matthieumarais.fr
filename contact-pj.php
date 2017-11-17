<?php
$errors = array();

require("classes/phpmailer/class.phpmailer.php");

$firstname 	= isset($_POST['firstname']) 	? trim($_POST['firstname']) 	: null;
$lastname 	= isset($_POST['lastname']) 	? trim($_POST['lastname']) 		: null;
$email 		= isset($_POST['email']) 		? trim($_POST['email']) 		: null;
$message 	= isset($_POST['message']) 		? trim($_POST['message']) 		: null;



$send = isset($_POST['send']);


$validation = false;
if ($send) {
	if ( empty($firstname) ) {
		$errors['firstname'] = 'Le prénom est vide';	
	}
	
	
	if (empty($lastname)){
			$errors['lastname'] = "Votre nom n'est pas rempli";
	}else if (strlen($lastname) < 1) {
			$errors['lastname'] = "Votre nom ne semble pas valide";
	}
	
	
	if (empty($email)){
			$errors['email'] = "Votre e-mail est incorrect";	
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors['email'] = "Votre e-mail est incorrect";	
	}
	
	
	if (empty($message)){
			$errors['message'] = "Votre message ne peux pas être vide";	
	}else if (strlen($message) > 100){
			$errors['message'] = "Merci de réduire votre commentaire";
	}
	
	
	if (empty($errors)) { // pas d'erreur
		$fullname = $firstname. ' '.$lastname;
	}
    else
    {
		$mailAdmin  = new PHPMailer;
	
		$mailAdmin->addAddress("mqtthieu@gmail.com", "Admin Matthieu MARAIS");
		$mailAdmin->setFrom($email, $fullname);
		$mailAdmin->CharSet = 'UTF-8';
		$mailAdmin->Subject = "[Matthieu] $fullname vous a envoyé un message";
		
		$mailAdmin->Body = "<h1>Un message de $fullname (<a href=\"mailto:$email\">$email</a>)</h1>";
		$mailAdmin->Body.= "<p>son message :</p>";
		$mailAdmin->Body.= "<blockquote>$message</blockquote>";
		if ($mailAdmin->send()) {
			echo '<div class="content-popup">
						<div class="popup">
							<div class="close-popup">X</div>
							<p class="erreur-message">Votre Message<br/>n\'est pas envoyé</p>
						</div>
					  </div>' . $mailAdmin->ErrorInfo;
		} else {
				echo '<div class="content-popup">
						<div class="popup">
							<div class="close-popup">X</div>
							<p>Envoyé</p>
						</div>
					  </div>';
				}
		
	}
			unset($mailAdmin);
}

?>
<?php
  define('PAGE','contact');
  $metatitre = "Contact";
  $metaDescription = "Ceci est la page contact";
?>
<?php include("include/header.php"); ?>
<main class="bg_body">
  <div class="container">
  <div class="formulaire">
  <h1>Contactez-moi</h1>
  <div class="contact">
  <form name="contact-form" id="contact-form" method="post" enctype="multipart/form-data">
    <div class="info" <?php if (isset($errors['lastname'])) echo ' class="error"'; ?>>
      <input type="text" name="lastname" id="lastname" placeholder="Votre nom*" value="<?php echo $lastname; ?>">
      <?php if (isset($errors['lastname'])) { ?>
        <span class="error"><?php echo $errors['lastname']; ?></span>
        <?php } ?>
    </div>
    <div class="prenom" <?php if (isset($errors['firstname'])) echo ' class="error"'; ?>>
      <input type="text" name="firstname" id="firstname" placeholder="Votre prénom*" value="<?php echo $firstname; ?>">
      <?php if (isset($errors['firstname'])) { ?>
        <span class="error"><?php echo $errors['firstname']; ?></span>
        <?php } ?>
    </div>
    <div class="mail" <?php if (isset($errors['email'])) echo ' class="error"'; ?>>
      <input type="email" name="email" id="email" placeholder="Votre e-mail*" value="<?php echo $email; ?>">
      <?php if (isset($errors['email'])) { ?>
        <span class="error"><?php echo $errors['email']; ?></span>
        <?php } ?>
    </div>
    <div class="msg" <?php if (isset($errors['message'])) echo ' class="error"'; ?>>
      <textarea id="message" name="message" cols="50" rows="10" placeholder="détaillez votre demande tout en étant concis*" maxlength="100"><?php echo $message; ?></textarea>
      <?php if (isset($errors['message'])) { ?>
        <span class="error"><?php echo $errors['message']; ?></span>
        <?php } ?>
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
<?php include("include/footer.php"); ?>