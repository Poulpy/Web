<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("headMin.php"); ?>
        <title>La Brocante à Gégé - lot de dictionnaires</title>
        <style>
			html, body {
				width:100%;
			}

            .container {
                margin-top:70px;
                position:relative;
            }
			
            button {
                margin-right:10px;
            }
            .display-5 {
                text-align:center;
            }
            
            .nav li a:hover{
                color : MediumSeaGreen !important;
            }
            
            input.form-control{
                color : DarkGreen !important;
            }

            .navbar ul li a {
                margin-right:15px;
            }
            
            /* IMAGE */
            
            
            .left{
                float:left;
                margin-top:100px;
            }
            
            #myImg {
                border-radius: 5px;
                cursor: pointer;
                transition: 0.3s;
            }

            #myImg:hover {opacity: 0.7;}

            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
            }

            /* Modal Content (Image) */
            .modal-content {
                margin: auto;
                display: block;
                width: 80%;
                max-width: 700px;
            }

            /* Caption of Modal Image (Image Text) - Same Width as the Image */
            #caption {
                margin: auto;
                display: block;
                width: 80%;
                max-width: 700px;
                text-align: center;
                color: #ccc;
                padding: 10px 0;
                height: 150px;
            }

            /* Add Animation - Zoom in the Modal */
            .modal-content, #caption {
                animation-name: zoom;
                animation-duration: 0.6s;
            }

            @keyframes zoom {
                from {transform:scale(0)}
                to {transform:scale(1)}
            }

            /* The Close Button */
            .close {
                position: absolute;
                top: 25px;
                left: 35px;
                color: #f1f1f1;
                font-size: 40px;
                font-weight: bold;
                transition: 0.3s;
            }

            .close:hover,
            .close:focus {
                color: #bbb;
                text-decoration: none;
                cursor: pointer;
            }

            /* 100% Image Width on Smaller Screens */
            @media only screen and (max-width: 700px){
                .modal-content {
                    width: 100%;
                }
            }
            
            
            /* IMAGE */
        </style>
    </head>
    <body>
        <?php include("navigation.php") ?>
        <div id="contenu" class="container">
            <!-- CONTENU :
            IMAGE DU PRODUIT, PRIX, NOM, bouton pour commander (l'original ou une copie), COMMENTAIRES, DIMENSIONS, DESCRIPTION--
            ceux qui ont acheté ont également commandé:..., DISPONIBILITES-->
            <div class="row">
                <div class="col">
                    <!-- Trigger the Modal -->
                    <img id="myImg" src="images/lotLivres.jpg" alt="Lot de dictionnaires du XIè siècle" width="300" height="200" class="left">
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <!-- bouton pour fermer -->
                        <span class="close">&times;</span>
                        <!-- image -->
                        <img class="modal-content" id="img01">
                        <!-- caption -->
                        <div id="caption"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="jumbotron">
                        <h1 class="display-4">Description</h1>
                        <p class="lead">
                            Le Grand Dictionnaire Historique :</br>retour sur la beauté de la langue française, héritage de Louis Moréri.
                        </p>
                        <hr class="my-4">
                        <p class="lead">
                            Prix (à l'unité) : 20 €</br>Prix (le lot) : 110 €</br>Prix (originaux) : 10 000 €</br>
                            Nombre de pages : 300 chaque</br>
                            Disponibilités : <i>rupture de stock</i>
                        </p>
                        <button type="button" class="btn btn-outline-danger disabled"><i class="fas fa-cart-plus"></i></button>
                    </div>
                </div>
                
            </div>
            <hr class="my-4">
            <div class="row"><!-- COMMENTAIRES : nom, date, description + séparation -->
                <h1 class="display-6" style="width:100%; text-align : center !important;">Commentaires</h1>
                <div class="col">
                    <h6>Eloïse <small>23/11/2018</small></h6>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin odio dui, gravida porttitor mollis eu, sollicitudin sed tortor.</p>
                </div>
                <div class="col">
                    <h6>Loïc <small>03/04/2</small></h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar sed augue non sagittis.
                    </p>
                </div>
                <div class="col">
                    <h6>xX_Trol_Xx <small>01/01/2418</small></h6>
                    <p>OUI</p>
                </div>
                <div class="col">
                    <h6>Jésus <small>01/01/01</small></h6>
                    <p>
                        En vérité, je vous le dis, celui qui écoute ma parole, et qui croit à celui qui m'a envoyé, a la vie éternelle et ne vient point en jugement, mais il est passé de la mort à la vie.
                    </p>
                </div>
            </div>
            <hr class="my-4">
            <div class="row vertical-align">
                <h4 class="display-6" style="width:100%; text-align : center !important; margin-bottom:15px;">
                    Les clients ayant acheté cet article ont également acheté
                </h4>
                <div class="col-sm-6">
                    <a href="estampe.php" title="">
                        <img src="images/estampes.jpg" width=250 class="rounded mx-auto d-block img-responsive">
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="meuble.php" title="">
                        <img src="images/meubles.jpg" width=250 class="rounded mx-auto d-block img-responsive">
                    </a>
                </div>   
            </div>
        </div>
        <?php include("piedPage.php") ?>
    </body>
    <?php include("scriptImage.php") ?>
</html>