<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="nome" placeholder="inserisci nome">
        <input type="text" name="email" placeholder="inserisci e-mail">
        <input type="text" name="eta" placeholder="inserisci età">
        <button type="submit">invia</button>
    </form>
</body>
</html>

<?php
    $nome=$_GET['nome'];
    $mail=$_GET['email'];
    $eta=$_GET['eta'];
    echo "<p>" .'il nome è '  ."$nome". "</p>";
    echo "<p>" .'la mail è ' ."$mail". "</p>";
    echo "<p>" .'l età è '. "$eta "."</p>";


    if (strlen($nome) > 3 && is_numeric($eta) && strpos($mail, '@') && strpos($mail, '.')) {
        echo 'accesso riuscito';
    } else {
        echo 'accesso negato';
    }
?>