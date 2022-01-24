<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    
    
    <title>Tables de multiplication</title>
</head>
<body>

<?php
session_start();

echo '<center><H1>Les tables de multiplication</H1>';
$min = 0;
$max = 10;
//random un nombre entre 0&10
$nombre1 = rand($min, $max);
$nombre2 = rand($min, $max);
//Imprimer le calcul à l'écran
print '<h2>' . $nombre1 . 'x' . $nombre2 . ' = </h2>';
//on crée le formulaire
?>

<form name="formulaire" method="post">
    <input type="hidden" value="<?= $nombre1 ?>" name="nombre1">
    <input type="hidden" value="<?= $nombre2 ?>" name="nombre2">
    <input type="number" value="" name="reponse" size="5" id="mareponse" autofocus></td>
    
    <input type="submit" value="Valider" name="bEnvoyer" class="button">


    <?php
    //Imprimer la réponse: 
    if ($_POST != null) {
        echo "<br><br><center><h2>Résultat</h2>";
        $reponse = $_POST['nombre1'] * $_POST['nombre2'];
        echo '<h3>';
        if ($_POST['reponse'] == $reponse) {
            echo $reponse . ' est la bonne réponse!!!!!!!!!';
        } else {
            echo $_POST['reponse'] . ' est la mauvaise réponse...<br>';
            echo $_POST['nombre1'] . 'x' . $_POST['nombre2'] . '=' .$reponse . ' était la bonne réponse';
        };
    }

    ?>
    </body>
</html>
