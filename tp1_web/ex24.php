<html>

<?php
    if (isset($_POST['mot']))
    {
        echo strtolower($_POST['mot']) ^ strtoupper($_POST['mot']) ^ $_POST['mot'];
    }
?>

    <form action="" method="post">
		<input placeholder="mot" name="mot" required>
		<button type=submit>Ajouter</button>
    </form>

</html>