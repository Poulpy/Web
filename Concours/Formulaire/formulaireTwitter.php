<!DOCTYPE html>
<html>
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
        <title>Twitter - Inscription</title>
        <style>
            form {
                width:550px;
            }
			
			label {
				color : white ;
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
				transform: translate(-40%, -60%);
				// 1er parametre : horizontal
			}
			            footer ul li {
                list-style:none;
            }
            footer ul li a {
                color : white !important;
                
            }
			fieldset {
				padding-top:10px;
			}
        </style>
        
    </head>
	<body>
		<img src="images/index2.png" width=100% ><!-- image Twitter en fond -->
		<div id="contenu" class="container">
			<form>
				<div class="container">
					<div class="row"><!-- PREMIERE LIGNE -->
						<div class="col">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Adresse e-mail">
							</div><!-- EMAIL -->
						</div>
						<div class="col">
							<div class="form-group">
								<input type="tel" class="form-control" placeholder="Numéro de téléphone">
							</div><!-- NUMERO DE TELEPHONE -->
						</div>
					</div>
					<div class="row"><!-- DEUXIEME LIGNE -->
						<div class="col"><!-- PRENOM -->
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Prénom">
							</div>
						</div>
						<div class="col"><!-- NOM -->
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Nom">
							</div>
						</div>
					</div>
					<div class="row"><!-- TROISIEME LIGNE -->
						<div class="col"><!-- ANNEE DE NAISSSANCE -->
							<div class="from-group">
								<input class="form-control" type="date">
							</div>
						</div>
						<div class="col"><!-- PAYS -->
							<select class="custom-select">
								<option selected>Pays</option>
								<option value="1">France</option>
								<option value="2">Japon</option>
								<option value="3">Chine</option>
							</select>
						</div>
						<div class="col"><!-- CODE POSTAL -->
							<div class="from-group">
								<input class="form-control" type="text" placeholder="Code Postal">
							</div>
						</div>
					</div>
					<div class="row"><!-- QUATRIEME LIGNE -->
						<div class="col"><!-- GENRE -->
							<fieldset class="form-group">
								<div class="form-check">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										femme
									</label>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
										homme
									</label>
								</div>
							</fieldset>
						</div>
					</div>
					<div class="row"><!-- CINQUIEME LIGNE -->
						<div class="col"><!--  -->
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input">
									Vous avez lu et approuvez la politique de confidentialité
								</label>
							 </div>
						 </div>
					</div>
					<div class="row"><!-- SIXIEME LIGNE -->
						<div class="col-2">
							<button type="submit" class="btn btn-outline-primary">S'inscrire</button>
						</div>
					</div>
				</div>
			</form>
		</div><!-- CONTENU -->
		<?php include("piedPage.php"); ?>
	</body>
</html>