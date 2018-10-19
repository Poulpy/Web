<?php
$fp = fsockopen("127.0.0.1", 80, $errno, $errstr, 60);
if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {
    $out = "GET / /tpweb/toto.php\r\n";
    $out .= "Host: localhost\r\n";
    $out .= "Connection: Close\r\n\r\n";

    //print_r($out);
    //print_r($fp);
    
    fwrite($fp, $out);

    $f  = file($fp);
    print_r($f);
    echo "<br><pre>";
    while (!feof($fp)) {
        echo fgets($fp, 128);
    }
    echo '</pre>';
    
    fclose($fp);
    
}

/*
$h = get_headers("http://localhost/tpweb/toto.php");
echo "Le serveur a renvoyé " . count($h) . " lignes";
echo "<hr>";
echo "<pre>";
print_r($h);
echo "</pre>";
require("toto.php");
*/


?>
