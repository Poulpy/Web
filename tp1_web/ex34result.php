<?php
    function e_l_s($value, $which) {
        if ($which == 1)
            return round(exp($value), 2);
        else if ($which == 2)
            return round(log($value), 2);
        else
            return round(sin($value), 2);
    }
    $tab = array ('x' => array(1, 2, 3, 4, 5, 6 ,7 , 8, 9));
    if (isset($_POST['func'])) {
        echo "<table border='1' cellpading='5'>";
        foreach ($tab as $k => $v) {
            echo '<tr><th>' . $k . '</th>';

                foreach ($v as $value) {
                    echo '<td>' . $value . '</td>';
                }

            echo '</tr><tr><th>y</th>';
                foreach ($v as $value) {
                    echo '<td>' . e_l_s($value, $_POST['func']) . '</td>';
                }
            echo '</tr>';
        }
        echo '</table>';
    }

?>
