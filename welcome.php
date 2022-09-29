<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <?php
    session_start();

    $anvandernamn = $_POST["användarnamn"];
    $password = $_POST["losenord"];

    $_SESSION["anvandernamn"] = $anvandernamn;

    if ($anvandernamn && $password) {
        echo "Välkommen! Du är inloggad :) <br> <br>";
        echo "<form action='laddaupp.php' method='post'>
        <input type='file' name='fil' id='fil'>
        <input type='submit'>
        </form>";
    } else {
        echo "Tyvärr, det gick inte att logga in. :( <br> <br>";
    }
    ?>

</body>

</html>