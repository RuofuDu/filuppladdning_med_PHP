<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "webbserverprogrammering";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

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
if ($anvandernamn == "holros") {
    $sql = "INSERT INTO uploads (filename, user, uploadtime, snuskig)
	VALUES ('$fil', '" . $anvandernamn . "', NOW(), TRUE)";
    $conn->query($sql);
} else {
    $sql = "INSERT INTO uploads (filename, user, uploadtime, snuskig) VALUES ('$fil', '" . $anvandernamn . "', NOW(), TRUE)";
    $result = $conn->query($sql);
}

echo "<br><a href='http://localhost/filuppladdning_med_php/filuppladdning_med_PHP.html'>Tillbaka till inloggningen</a>";
