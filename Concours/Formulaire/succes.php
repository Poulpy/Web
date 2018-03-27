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
        </div>
        <?php include("piedPage.php"); ?>
    </body>
</html>