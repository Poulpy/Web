<html>
    <form method='post'>
        <fieldset>
            <legend>Fonctions</legend>
            <select name='func'>
                <option value='1'>Exponentielle</option>
                <option  value='2'>Logarithme</option>
                <option  value='3'>Sinus</option>
            </select>
            <input type='submit' name='ok' value='valider'/>
        </fieldset>
    </form>
    <?php
        $tab = array ('x' => array(), 'y' => array());
        if (isset($_POST['func'])) {
            if ($_POST['func'])
        }
    ?>
</html>