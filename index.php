<?php 

$varTesto = "le infomazioni sulla privacy sono cambiate";

$risultato = trim($varTesto);

var_dump($_GET);
//parola passata dall'utente  tramite GET da cdnsurare
$parolaCensurata = $_GET["parola"];
var_dump($parolaCensurata);
//sostituire con tre *** la parola get passata all'utente
$testoCensurato = str_replace($parolaCensurata, "***", $varTesto);

$nome = $_GET["nome"];
$cognome = $_GET["cognome"];





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Ciao <?php echo $nome; ?> <?php echo $cognome; ?> <?php echo $pass; ?></h1>

<p>leggi le info: <?php echo $varTesto ?></p>
<p>il numero delle parole sono: <?php echo strlen($varTesto) ?></p>

<br>

<p>leggi le info: <?php echo $testoCensurato ?></p>
<p>il numero delle parole sono: <?php echo strlen($testoCensurato) ?></p>



    
</body>
</html>