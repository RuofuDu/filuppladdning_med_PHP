<?php
session_start();
$fil = $_POST["fil"];
$anvandernamn = $_SESSION["anvandernamn"];


if ($fil && $anvandernamn) {
    $textfil = fopen('textfil.txt', 'a');
    fwrite($textfil, "$anvandernamn:$fil <br>");
    fclose($textfil);
    $textfil = fopen('textfil.txt', 'r');
    $readfile = fread($textfil, filesize('textfil.txt'));
    echo $readfile;
    fclose($textfil);
} else {
    echo "fil saknas.";
}
