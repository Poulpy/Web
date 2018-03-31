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
 
			html, body {
				width:100%;
			}
            
            header {
                position:absolute;
                top :50px;
                left:50px;
            }
            
            .image {
                position : relative;
                width:100%;
            } 
			
			.container {
                width:100%;
                display: inline;
			}

            .table {
                position:absolute;
                
                top:270px;
                
                text-align : center ;
                color : white;
            }
            
        </style>
        
    </head>
    <body>
        <img src="images/index2.png" width=100%><!-- image Twitter en fond -->
        <header>
            <a class="btn btn-danger" role="button" aria-pressed="true" href="logout.php">Déconnexion</a>
            <a class="btn btn-primary" role="button" href="page_membre.php">Page d'accueil</a>
        </header>
		<div id="contenu" class="container">
            
            <table class="table table-striped table-dark"><!-- TABLEAU -->      
                <?php
                    $fic = fopen("l-homme-moderne2.csv", "a+");
                    for($ligne = 2 ; $tableau=fgetcsv($fic,1024,',') ; $ligne++) {
                        $nombreChamps = count($tableau);//nombre de champ dans la ligne en question
                        //affichage de chaque champ de la ligne en question
                        // ENTETE / HEAD
                        if ($ligne==2) {
                            echo "<thead><tr>";
                            for($indice=0; $indice<$nombreChamps; $indice ++)
                                echo '<th scope="col">'.$tableau[$indice].'</th>';
                            echo "</tr></thead>";
                        }
                        // LIGNES / BODY
                        else {
                            echo '<tbody><tr>';
                            for($indice=0; $indice<$nombreChamps; $indice ++) {
                                if ($indice==0)
                                    echo '<th scope="row">'.$tableau[$indice].'</th>';
                                else
                                    echo '<td>'.$tableau[$indice].'</td>';
                            }
                            echo '</tr>';
                        }
                        echo '</tbody>';
                    }
                    fclose($fic);
                ?>
            </table>
        </div>
    </body>
</html>