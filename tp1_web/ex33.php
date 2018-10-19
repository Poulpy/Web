<html>
    <?php

    // CREATION COOKIE
    if (isset($_POST['test'])) {
        if (!empty($_POST['test'])) {
            setcookie('test', $_POST['test']);
            header("Location: ex33.php");
        }
    }

    // SUPPRESSION COOKIE
    if (isset($_POST['supprimer'])) {
        if (!empty($_POST['supprimer'])) {
            if ($_POST['supprimer'] == "supprimer") {
                if (isset($_COOKIE['test'])) {
                    setcookie('test');
                    header("Location: ex33.php");
                }
            }
        }
    }

    if (isset($_COOKIE['test'])) :
        if (!empty($_COOKIE['test'])) :
            echo '<table cellpadding="10"><tr>';
            echo '<td>' . $_COOKIE['test'] . '</td>';
    ?>

            <td>
                <form action="" method="post">
                    <input placeholder="modification du cookie" name="test">
                    <input type="submit">
                </form>
            </td>
            <td>
                <form action="" method="post">
                    <input type="submit" value="supprimer" name="supprimer">
                </form>
            </td>
        </tr>
    </table>

    <?php
    
    else:

    ?>
    <form action="" method="post">
        <input placeholder="cookie" name="test">
        <input type="submit">
    </form>
    <?php

        endif;
    endif;

    ?>
</html>