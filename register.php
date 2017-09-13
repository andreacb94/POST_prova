<?php

    $username = $_POST["username"];
    $password = $_POST["password"];
    $error = "";

    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    if(!$username || !$password)
        $error = "Username e password sono obbligatori!";

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1> Risultati registrazione</h1>

        <?php if($error): ?>
            <p style="color: red;"> <?php echo $error ?> </p>

        <?php else: ?>
            <p>Benvenuto <?php echo $username ?> </p>

        <?php endif ?>

    </body>

    <a href="http://www.html.it/pag/62463/le-richieste-http-get-e-post/">Powered by html.it</a>
</html>
