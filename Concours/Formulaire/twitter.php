<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("headMin.php"); ?>
        <title>Twitter - Connexion</title>
        <style>
			html, body {
				width:100%;
			}

			
			footer {
				text-align:center;
				width:100%;
				margin-top:-140px;
			}
			
			.container {
				position: relative;
				//top: 50%;
				left: 50%;
				transform: translate(-40%, -100%);
				// 1er parametre : horizontal
			}
			
            form {
                width:600px;
            }
            .col {
                color : white;
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
		<div id="contenu" class="container">
            <form action="login.php" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-10">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email ou numéro de téléphone" name="login">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Mot de passe" name="mdp">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-outline-primary">Connection</button>
                        </div>
                        <div class="col">
                            <p>Vous n'avez pas de compte ? <a href="./formulaireTwitter.php">Inscrivez-vous</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php include("piedPage.php"); ?>
    </body>
</html>