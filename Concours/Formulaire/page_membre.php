<!DOCTYPE html>
<?php
    // On demarre la session
    session_start ();
?>
<html lang="fr">
    <head>
        <?php include("headMin.php"); ?>
        <title>Twitter</title>
        <style>	
            footer {
				text-align:center;
				width:100%;
				margin-top:-140px;
			}
			
            header {
                position:absolute;
                top :50px;
                left:50px;
            }
            
			.container {
				position: relative;
				//top: 50%;
				left: 50%;
				transform: translate(-40%, -100%);
				// 1er parametre : horizontal
			}
      
            footer ul li {
                list-style:none;
            }
            
            footer ul li a {
                color : white !important;
            }
        </style>
    </head>
    <body>
        <img src="images/index2.png" width=100%><!-- image Twitter en fond -->
        <header>
            <a class="btn btn-danger" role="button" aria-pressed="true" href="logout.php">Déconnexion</a>
            <a class="btn btn-primary" role="button" href="fichierCSV.php">Lire un fichier csv</a>
        </header>
		<div id="contenu" class="container">
        </div>
        <?php include("piedPage.php"); ?>
    </body>
</html>