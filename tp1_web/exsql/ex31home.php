<html>
    <fieldset>
        <form action="ex31log.php" method="post">
            <table>
                <tr>
                    <td>LOGIN :</td>
                    <td><input type='text' maxsize='10' name='login' 
<?php
    if (isset($_GET['e'])) {
        if (!empty($_GET['e'])) {
            if ($_GET['e'] == 1) {
                echo "value=\"ERREUR\" ";
            }
            else {
                echo "value=\" \" ";
            }
        }
    }
?>
required></td>
                </tr>
                <tr>
                    <td>MOT DE PASSE :</td>
                    <td><input type='text' maxsize='10' name='mdp'></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <input type='submit' value='CONNEXION'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</html>
