<?php
$errors = array();

require("classes/phpmailer/class.phpmailer.php");

$lastname 	= isset($_POST['lastname']) 	? trim($_POST['lastname']) 	: null;
$email 		= isset($_POST['email']) 		? trim($_POST['email']) 	: null;
$message 	= isset($_POST['message']) 		? trim($_POST['message']) 	: null;
$demande 	= isset($_POST['demande']) 		? trim($_POST['demande']) 	: null;


$send = isset($_POST['send']);


$validation = false;
if ($send) {
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
	if (empty($errors)) {
		$chemin_destination = '/tmp/';
		move_uploaded_file($_FILES[pjfile]['tmp_name'], $chemin_destination.$_FILES[pjfile]['name']);
		$maxsize = 5000;
 
		$typedefichier = $_FILES[pjfile]['name'];
		$typedefichier = explode('.',$typedefichier);
		$extention = end($typedefichier);
 
	if (strtolower($extention) != 'pdf' and !empty($_FILES[pjfile]['name']))
	{
    	echo'<div class="content-popup">
						<div class="popup">
							<div class="close-popup">X</div>
							<p class="type-pdf">Sélectionnez un fichier de type  .PDF !!</p>
						</div>
					  </div>';
	}else {
    if ($_FILES[pjfile]['size'] < $maxsize and !empty($_FILES[pjfile]['name']))
    {
        echo '<div class="content-popup">
						<div class="popup">
							<div class="close-popup">X</div>
							<p class="taille-depasse">Le fichier est trop gros</p>
						</div>
					  </div>';
    }
    else
    {
		$mailAdmin  = new PHPMailer;
	
		$mailAdmin->CharSet = 'utf-8';
		$mailAdmin->addAddress("contact@multivation.com","Multivote");
		$mailAdmin->setFrom($email, $fullname);
		$mailAdmin->Subject="Confirm message client";
		
		$mailAdmin->Body ="<p style=\"text-align:center; font-size:20px; font-weight:bold\">$lastname est :<br/> $demande</p>";
		$mailAdmin->Body.="<p style=\"text-align:center\">Mail : $email</p>";
		$mailAdmin->Body.="<p style=\"text-align:center\">Message : $message</p>";
		
		$mailAdmin->AddAttachment("/tmp/".$_FILES[pjfile]['name']);
		
		$mailAdmin->AltBody ="$fullname\r\n\r\n";
		$mailAdmin->AltBody ="$fullname est : $demande\r\n\r\n";
		$mailAdmin->AltBody ="Mail : $email\r\n\r\n";
		$mailAdmin->AltBody.="Message : $message";
		if ( !$mailAdmin->Send() ) {
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
	}
			unset($mailAdmin);
	}
}

?>
<?php
  define('PAGE','contact');
  $metatitre = "MULTIVOTE révélateur d'opinions | CONTACT";
?>
<?php include("include/header.php"); ?>
<section id="header-contact" class="text-center offres offres-margin container-fluid">
  <h1>CONTACT</h1>
</section>
<section id="contact" class="container-fluid bg-color-grey offres">
  <div class="container">
    <form name="contact-form" id="contact-form" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <div class="row formulaire">
            <div class="col-lg-6 col-md-6">
              <div  <?php if (isset($errors['lastname'])) echo ' class="error"'; ?>>
                <input type="text" name="lastname" id="lastname" placeholder="Votre nom*" value="<?php echo $lastname; ?>"/>
                <?php if(isset($errors['lastname'])) { ?>
                <span class="error"><?php echo $errors['lastname']; ?></span>
                <?php } ?>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div <?php if (isset($errors['email'])) echo ' class="error"'; ?>>
                <input type="email" name="email" id="email" placeholder="Votre e-mail*" value="<?php echo $email; ?>"/>
                <?php if(isset($errors['email'])) { ?>
                <span class="error"><?php echo $errors['email']; ?></span>
                <?php } ?>
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <label>Vous cherchez des infos :</label>
              <div id="demande" class="row">
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"> <input type= "radio" name="demande" value="partenaire">
                Partenaire</div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"> <input type= "radio" name="demande" value="client">
                Client</div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"> <input type= "radio" name="demande" value="collaborateur">
                Collaborateur</div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><input type= "radio" name="demande" value="autre">
                Autre</div></div>
            </div>
            <div class="col-lg-12 col-md-12 text-center">
              <div <?php if (isset($errors['message'])) echo ' class="error"'; ?>>
                <textarea id="message" name="message" placeholder="Votre message*"><?php echo $message ?></textarea>
                <?php if(isset($errors['message'])) { ?>
                <span class="error"><?php echo $errors['message']; ?></span>
                <?php } ?>
              </div>
              <p class="champs-obligatoires">*Champs obligatoires.</p>
              <div class="row">
                <div class="col-lg-7 col-md-7">
                  <p>Votre CV (pour un recrutement) ou explications de votre projet
                    Fichier (format PDF | max. 500ko) </p>
                </div>
                <div class="col-lg-5 col-md-5">
                  <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
                  <input id="file" type='file' name='pjfile' />
                </div>
              </div>
              <button type="submit" name="send" id="send">ENVOYEZ</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div id="map"></div>
        </div>
      </div>
    </form>
  </div>
</section>
<?php include("include/footer.php"); ?>