<?php
session_start();

$anvandernamn = $_POST["användarnamn"];
$password = $_POST["losenord"];

$_SESSION["anvandernamn"] = $anvandernamn;

if ($anvandernamn && $password) {
    echo "Hej $anvandernamn, du är inloggad. :)";
} else {
    echo "Tyvärr, det gick inte att logga in. :(";
}

anteckningar
