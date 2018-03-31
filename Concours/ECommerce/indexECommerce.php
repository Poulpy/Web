<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("headMin.php"); ?>
        <title>La Brocante à Gégé - Accueil</title>
        <style>
			html, body {
				width:100%;
			}

            .container {
                margin-top:70px;
                width:48%;
                height:70%;
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
            
            .overlay {
                position: absolute;
                width: 100%;
                height: 100%;
                background: #000;
                opacity: 0.7;
                transition: all 0.2s ease-out;
            }
            
            @media (max-width: 992px) {
                .navbar-header {
                    float: none;
                }
                .navbar-left,.navbar-right {
                    float: none !important;
                }
                .navbar-toggle {
                    display: block;
                }
                .navbar-collapse {
                    border-top: 1px solid transparent;
                    box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
                }
                .navbar-fixed-top {
                    top: 0;
                    border-width: 0 0 1px;
                }
                .navbar-collapse.collapse {
                    display: none!important;
                }
                .navbar-nav {
                    float: none!important;
                    margin-top: 7.5px;
                }
                .navbar-nav>li {
                    float: none;
                }
                .navbar-nav>li>a {
                    padding-top: 10px;
                    padding-bottom: 10px;
                }
                .collapse.in{
                    display:block !important;
                }
            }
            
        </style>
        
    </head>
    <body>
        <?php include("navigation.php") ?>
        <div id="contenu" class="container">
            <h1 class="display-5">Les perles du mois</h1>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="estampe.php">
                            <img class="d-block w-100" src="images/estampes.jpg" alt="First slide">
                            <div class="overlay"></div>
                            <div class="carousel-caption">
                                <h2><b>Estampe de Makoto Shinkai</b></h2>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="livres.php">
                            <img class="d-block w-100" src="images/lotLivres.jpg" alt="Second slide">
                            <div class="overlay"></div>
                            <div class="carousel-caption">
                                <h2><b>Lot de dictionnaires datant du XI siècle</b></h2>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="meuble.php">
                            <img class="d-block w-100" src="images/meubles.jpg" alt="Third slide">
                            <div class="overlay"></div>
                            <div class="carousel-caption">
                                <h2><b>Meuble style Louis XVI en parfait état</b></h2>
                            </div>
                        </a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        
        </div>
        <?php include("piedPage.php") ?>
    </body>
    <!-- scripts faisant marcher le carousel -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
        <script>
            $('#myCarousel').carousel({
                // Options
            });
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</html>