<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- concerne les mobiles :
        ~ width=device-width : on ouvre la fenetre a la largeur de l'ecran 
        ~ initial scale : reglage du zoom -->
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.0.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
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
            <form>
                <div class="container">
                    <div class="row">
                        <div class="col-10">
                            <div class="form-group">
                                <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email ou numéro de téléphone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Mot de passe">
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