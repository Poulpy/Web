<html>
    <?php
        if (isset($_POST['id'], $_POST['login'], $_POST['mdp'], $_POST['mail'])) {
            if (!empty($_POST['id']) and !empty($_POST['login']) and !empty($_POST['mdp']) and !empty($_POST['mail'])) {      
                require("parametres.php");
                $connexion=mysqli_connect($serveur,$login,$mdp) 
                or die("Connexion impossible au serveur $serveur pour $login");
                $bd="tpweb_sql";
                mysqli_select_db($connexion,$bd)
                or die("Impossible d'acceder à la base de données");
                
                $reqinsert="INSERT into ex30(id,login,mdp,mail)";
                $reqinsert.="VALUES(?,?,?,?)";

                $reqprepare=mysqli_prepare($connexion,$reqinsert);

                $id=$_POST['id'];
                $login=$_POST['login'];
                $mdp=$_POST['mdp'];
                $mail=$_POST['mail'];

                // insertion
                mysqli_stmt_bind_param($reqprepare,'ssss',$id,$login,$mdp,$mail);
                mysqli_stmt_execute($reqprepare);
                mysqli_close($connexion);
            }
        }
    ?>
    <head>
    <title>Select et Insert MySQL</title>
    </head>
    <body>
    <h1>Select et Insert MySQL</h1></hr/>
    <?php
        require("parametres.php");
        $connexion=mysqli_connect($serveur,$login,$mdp) 
        or die("Connexion impossible au serveur $serveur pour $login");
        $bd="tpweb_sql";
        mysqli_select_db($connexion,$bd)
        or die("Impossible d'accèder à la base de données");
        $tables="ex30";
        $requete="SELECT * FROM $tables";
        $resultat=mysqli_query($connexion,$requete);

        echo "<table border='1' cellpading='5'><tr><th>Id</th><th>Login</th><th>Mdp</th><th>Mail</th></tr>";
        while ($ligne=mysqli_fetch_row($resultat)) {
            echo "<tr>";
            foreach($ligne as $v) {
                echo "<td>" . $v . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($connexion);
    ?>
    <h3>Formulaire d'insertion</h3>
    <fieldset>
        <legend>Ajout d'un etudiant</legend>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Id :</td>
                    <td><input type='text' maxsize='10' name='id' required></td>
                </tr>
                <tr>
                    <td>Login :</td><td><input type='text' maxsize='10' name='login'></td>
                </tr>
                <tr>
                    <td>Mdp :</td><td><input type='text' maxsize='10' name='mdp'></td>
                </tr>
                <tr>
                    <td>Mail :</td><td><input type='text' maxsize='20' name='mail'></td>
                </tr>
                <tr>
                    <td>&nbsp;</td><td>
                    <input type='submit' name='plus' value='Ajouter'></td>
                </tr>
            </table>
        </form>
    </fieldset>

    </body>
</html>