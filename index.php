<?php 

$varTesto = " Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci reprehenderit qui neque accusantium. Aperiam, consequuntur asperiores cumque suscipit repellendus distinctio ipsa officia earum nihil, neque voluptate dolores ea, quibusdam esse. ";

$risultato = trim($varTesto);

var_dump($risultato);

$nome = $_GET["name"];
$cognome = $GET["cognome"];

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

<h1>Ciao <?php echo $nome; ?> <?php echo $cognome; ?></h1>


    
</body>
</html>