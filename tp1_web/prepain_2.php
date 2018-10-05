<html>
    <h1>Test 2</h1>
    <h2>REPAIN Paul</h2><hr>
    Tous les champs du formulaire suivant devront etre renseignes 
pour pouvoir provoquer l'affichage cote serveur, il faudra verifier que toute reference 
commence par ref suivi d'un tiret et de 4 chiffres puis un # (mot-diese) suivi de 2, 3 ou 4 lettres.
Exemple :
    <ul>
        <li>ref-23#Ad (non conforme)</li>
        <li>ref-0123#ABc (conforme)</li>
        <li>Ref-0124#ABCDE (non conforme)</li>
    </ul>Vous pouvez faire un test avec le jeu de donnees suivant :
    <ul>
        <li>orange ; fr ; ref-0123#ABc</li>
        <li>Orange ; fr ; Ref-1234#ABc</li>
        <li>Orange ; fr ; ref-123#Abc</li>
    </ul><hr>
    <fieldset>
        <legend> formulaire </legend>
        <table width='300'>
            <form name='Demande' action='' method='post'<tr>
                <td>Domaine  </td>
                <td><input name='nom' type='text' required></td>
                </tr><tr>
                <td>Extension</td><td>
                <select name='ext'>
                    <option value='fr' checked>fr</option>
                    <option value='net'>net</option>
                    <option value='com'>com</option>
                    <option value='org'>org</option>
                </select>
                </td></tr><tr><td>Reference</td><td>
                <input name='ref' type='text' required>
                </td></tr><tr>
                <td>
                <input name='ok' type='submit' value='Valider'>
                </td><td></td></tr><input type='hidden' name='secret' value='test2'/>
            </form>
        </table>
    </fieldset><hr />
</html>
<?php
    // on vérifie que les données du formulaire sont entrés
    if (isset($_POST['ext'], $_POST['nom'], $_POST['ref'])) {
        // on vérifie que la référence a bien été saisie
        $bonne_saisie = preg_match("/^(ref|Ref)-[0-9]{4}#[A-Za-z]{2,4}$/", $_POST['ref']);
        if ($bonne_saisie == 0)// on affiche un message d'erreur
            echo "<b style='color:#FF0000;'>ERREUR : la reference renseignee est incorrecte.</b>";
        else// sinon on affiche le domaine ; l'extension ; la référence
            echo $_POST['nom']. " ; " . $_POST['ext'] . " ; " . $_POST['ref'];
    }
    
?>