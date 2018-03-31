<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" language="JavaScript">
            // NE MARCHE PAS
            // colore la case PASSWD de rouge si mots de passe tapés différents
            var check = function() {
                if (document.getElementById('mdp').value == document.getElementById('mdp2').value) {
                    //document.getElementById('message').style.color = 'green';
                    //document.getElementById('message').innerHTML = 'matching';
                    document.getElementById('mots_de_passe').classList.toggle('form-group row has-success');
                    document.getElementById('mdp2').classList.toggle('form-control form-control-success');
                    //document.getElementById('mdp2').className = "form-control form-control-success";
                    
                }
                else {
                    //document.getElementById('message').style.color = 'red';
                    //
                    document.getElementById('mots_de_passe').classList.toggle('form-group row has-warning');
                    document.getElementById('mdp2').classList.toggle("form-control form-control-danger");
                    //document.getElementById('mots_de_passe').className = 'form-group row has-warning';
                    //document.getElementById('mdp2').className = 'form-control form-control-danger';
                    
                    //document.getElementById('message').innerHTML = 'not matching';
                }
            }
            
            // l'utilisateur ne peux envoyer le formulaire s'il
            // n'adhère pas à la politique de confidentialité
            function checkCheckBoxes(theForm) {
                return theForm.case.checked;
            }

        </script>
        <?php include("headMin.php"); ?>

        <title>Twitter - Inscription</title>
        <style>
            form {
                width:550px;
                padding:10px;
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
                transform: translate(-40%, -50%);
                // 1er parametre : horizontal
            }
            footer ul li {
                list-style:none;
            }
            footer ul li a {
                color : white !important;

            }
            fieldset, button {
                margin-top:10px;
            }
            message {
                position:relative;
            }
        </style>

    </head>
    <body>

        <img src="images/index2.png" width=100%/><!-- image Twitter en fond -->
            <div id="contenu" class="container">
            <form action="succes.php" method="post" onsubmit="return checkCheckBoxes(this);">
                <div class="container">
                    <div class="row"><!-- PREMIERE LIGNE -->
                        <div class="col">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Adresse e-mail" name="email">
                            </div><!-- EMAIL -->
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Numéro de téléphone" name="num_tel">
                            </div><!-- NUMERO DE TELEPHONE -->
                        </div>
                    </div>
                    <div class="row"><!-- DEUXIEME LIGNE -->
                        <div class="col"><!-- PRENOM -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Prénom" name="prenom">
                            </div>
                        </div>
                        <div class="col"><!-- NOM -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nom" name="nom">
                            </div>
                        </div>
                    </div>
                    <div class="row" id="mots_de_passe"><!-- TROISIEME LIGNE -->
                        <div class="col-6"><!-- MOT DE PASSE -->
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Mot de passe" name="mdp" id="mdp">
                            </div>
                        </div>
                        <div class="col-6"><!-- CONFIRMATION -->
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirmez votre mot de passe" name="mdp2" id="mdp2">
                            </div>
                        </div>
                        <span id='message'></span>
                    </div>
                        
                    <div class="row"><!-- QUATRIEME LIGNE -->
                        <div class="col"><!-- ANNEE DE NAISSSANCE -->
                            <div class="from-group">
                                <input class="form-control" type="date" name="dob">
                            </div>
                        </div>
                        <div class="col"><!-- PAYS -->
                            <select class="custom-select">
                                <option selected>Pays</option>
                                <option value="1" name="pays1">France</option>
                                <option value="2" name="pays2">Japon</option>
                                <option value="3" name="pays3">Chine</option>
                            </select>
                        </div>
                        <div class="col"><!-- CODE POSTAL -->
                            <div class="from-group">
                                <input class="form-control" type="text" placeholder="Code Postal" name="codepostal">
                            </div>
                        </div>
                    </div>
                    <div class="row"><!-- CINQUIEME LIGNE -->
                        <div class="col"><!-- GENRE -->
                            <fieldset class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="op" value="option1" checked>
                                        femme
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="op" value="option2">
                                        homme
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row"><!-- SIXIEME LIGNE -->
                        <div class="col"><!--  -->
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" name="case" class="form-check-input">
                                    Vous avez lu et approuvez la politique de confidentialité
                                </label>
                             </div>
                         </div>
                    </div>
                    <div class="row"><!-- SEPTIEME LIGNE -->
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