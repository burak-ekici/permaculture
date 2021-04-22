			<h1 class="mb-5 text-center display-4">Formulaire de contact</h1>
             
             <form method='post' action="index.php">
               <fieldset>

                 
                 <div class="form-group ">
                   <label class="mb-2 text-body " for="nom">Nom *</label>
                   <input required  type="text" class="input form-control form-control-lg" id="nom" name="nom" value="<?php if(isset($_POST['nom'])){ echo $_POST['nom'];} ?>">
                 </div>
                 
                 <div class="form-group">
                   <label class=" mb-2 text-body" for="email">Mail</label>
                   <input type="email" class="input form-control-lg form-control" id="email" name='mail' value="<?php if(isset($_POST['mail'])){ echo $_POST['mail'];} ?>">
                 </div>
                 
                 
                 <div class="form-group ">
                   <label class="mb-2 text-body" for="comment">Message *</label>
                   <textarea required class="textarea form-control-lg form-control" name="message" id="comment" rows="3"><?php if(isset($_POST['message'])){ echo $_POST['message'];} ?></textarea>
                 </div>
                 
                 <input type="submit" value="Envoyer" name="mailform" class="btn-md px-5 py-2 mt-5 btn-body mx-auto my-0 d-block h3">
               </fieldset>
             </form>

<?php 


if(isset($_POST['mailform']) AND isset($_POST['nom']) AND isset($_POST['message']))
{
        $nom = htmlspecialchars($_POST['nom']);
        $message = htmlspecialchars($_POST['message']);
        $email = htmlspecialchars($_POST['mail']) ;
        
    if(!empty($nom) AND !empty($message)){
        
        $header="MIME-Version: 1.0\r\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';
		$header.= 'From: burakroxx@noreply.com';
		
		$mail='
		<html>
			<body>
				<div align="center">
					<br />
					<u>Nom de l\'expéditeur :</u>'.$nom.'<br />
					<u>Mail de l\'expéditeur :</u>'.$email.'<br />
					<br />
					'.nl2br($message).'
					<br />
				</div>
			</body>
		</html>
		';
		
		$monMail = 'burakroxx@gmail.com';

		mail($monMail, "CONTACT - Monsite.com", $mail, $header);
		
		$commentairebon="Votre message a bien été envoyé !";
        
        
        
        
        
    }else{
        $commentaire = " Tous les champs oblogatoire doivent être remplie !";
        
    };
    
};