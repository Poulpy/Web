<html>
    <head>
        <meta charset='UTF-8'>
        <title>Test 1 alternance</title>
    </head>


    <body>
    <h1>Test 1 - alternance</h1>
    <h3>REPAIN Paul</h3>
    <hr>
    <fieldset style="width:300px"><legend>Formulaire</legend>
    <table cellpadding='5'>
        <form action='' method='post'>
            <tr>
                <td align='center'>x</td>
                <td align='center'>y</td>
                <td align='center'>choix</td>
            </tr>
            <tr>
                <td><input type='number' min=-10 max=10 name='a'></td>
                <td><input type='number' min=-10 max=10 name='b'></td>
                <td><select name='op'>
                <option value='add'>addition</option>
                <option value='mul'>multiplication</option>
                <option value='pow'>puissance</option>
            </tr>
            <tr>
                <td>
                <input type='submit' name='ok' value='CALCULER'/>
                </td>
            </tr>
        </form>
    </table>
    </fieldset>

    <?php

    if (isset($_POST['op'])) {
        if (!empty($_POST['op'])) {
            echo "Le résultat est : <strong><font color='red'>";
            switch ($_POST['op']) {
                case 'add':
                    $value = $_POST['a'] + $_POST['b'];
                    $signe = '+';
                    break;
                case 'mul':
                    $value = $_POST['a'] * $_POST['b'];
                    $signe = '*';
                    break;
                case 'pow':
                    $value = pow($_POST['a'], $_POST['b']);
                    $signe = '**';
                default:
                    break;
            }
            echo $value . "</font></strong><table border='1' cellpadding='5'><tr><td>";
            echo $_POST['a'] . '</td><td>' . $signe . '</td><td>' . $_POST['b'] . '</td><td>=</td><td>';
            echo $value . '</td></tr></table>';
        }
    }

    ?>
    </body>
</html>