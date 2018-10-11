<html>
    <form action="" method="post">
        <input placeholder="mot" name="mot" maxlength="20" required>
        <button type=submit>Ajouter</button>
    </form>
</html>
<?php// inverse la casse : majuscule en minuscule et inversement
    if (isset($_POST['mot']))
    {
        echo strtolower($_POST['mot']) ^ strtoupper($_POST['mot']) ^ $_POST['mot'];
    }
?>
