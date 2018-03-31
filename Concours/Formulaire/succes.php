<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("headMin.php"); ?>
        <title>Twitter - Inscription réussie</title>
        <style>
			html, body {
				width:100%;
			}
            
            .image {
                position : relative;
                width:100%;
            } 
			
			.container {
                width:100%;
                display: inline;
			}
			
			footer {
				text-align:center;
				width:100%;
			}

            footer ul li {
                list-style:none;
            }
            footer ul li a {
                color : white !important;
            }
            
            body p {
                width:100%;
                position:absolute;
                top:270px;
                
                text-align : center ;
                color : white;
            }
        </style>
        
    </head>
    <body>
        <div class="image">
        <img src="images/index2.png" width=100%/><!-- image Twitter en fond -->
            <div id="contenu" class="container">
                <p><?php echo htmlspecialchars($_POST['prenom']); ?> <?php echo htmlspecialchars($_POST['nom']); ?>, votre inscription à Twitter est confirmée.<br>
                Un mail vous sera envoyé dans les prochaines minutes à <?php echo htmlspecialchars($_POST['email']); ?>.</p>
            </div>
        <?php
        
            
        
		 // adresse de destination.
		$mail = htmlspecialchars($_POST['email']);
		//
		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
			$passage_ligne = "\r\n";
		else
			$passage_ligne = "\n";
		// message
        // format txt
		$message_txt = htmlspecialchars($_POST['prenom']).htmlspecialchars($_POST['nom']).", votre inscription à Twitter est confirmée. Votre mot de passe est :".htmlspecialchars($_POST['mdp']);
		$message_txt .= "Numéro de téléphone : ".htmlspecialchars($_POST['num_tel']).".";
        $message_txt .= "Code postal : ".htmlspecialchars($_POST['codepostal']);
        $message_txt .= "Vous êtes un(e) ".htmlspecialchars($_POST['op']).".";
        // format html
        $message_html = "<html><head></head><body>".htmlspecialchars($_POST['prenom']).htmlspecialchars($_POST['nom']).", votre inscription à Twitter est confirmée. Votre mot de passe est :".htmlspecialchars($_POST['email'])."</body></html>";
        //
		$boundary = "-----=".md5(rand());
        // objet
        $sujet = "Inscription à Twitter";
        // header
		$header = "From: \"EXPEDITEUR\"<paul.repain@yahoo.com>".$passage_ligne; 
		$header.= "Reply-to: \"RETOUR\"<".htmlspecialchars($_POST['email']).">".$passage_ligne;
		$header .= "MIME-Version: 1.0".$passage_ligne;
		$header .= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
		//
        
        //
        $message = $passage_ligne."--".$boundary.$passage_ligne;
        
        $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_txt.$passage_ligne;
        //
        $message.= $passage_ligne."--".$boundary.$passage_ligne;
        //
        
        $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_html.$passage_ligne;
        
        //
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        //
         
        //=====Envoi de l'e-mail.
        if(mail($mail,$sujet,$message,$header))
            echo 'TOUT SE PASSE BIEN';
        else
            echo 'CA VA PAS';
		
        ?>
        </div>
        <?php include("piedPage.php"); ?>
    </body>
</html>
