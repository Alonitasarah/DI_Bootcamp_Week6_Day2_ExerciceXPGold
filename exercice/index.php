<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Exercice1 </h1>
    <!-- un factoriel est ce nombre multiplié par ce nombre moins un -->
    <?php
    $nombre = 10;
    $factoriel = 1;
    $cpte = $nombre;
    # cette variable est pour le texte jusqu'au dernier 10
    $result = "Le factoriel de ". $nombre . " est  " .$nombre;

    for ($i=1; $i <= $nombre ; $i++) {
        $factoriel = $factoriel * $i;
        $cpte--;

        if($cpte != 0)
        {
            $result .= " * ". $cpte ;
        }
    }
    echo $result ." = " . $factoriel;

    ?>

    <h2> Exercice2 </h2>
    <table>
    <?php

        $etoile = 1;
        for ($etoile=1; $etoile<=8 ; $etoile++) {
            for ($i=1; $i < $etoile ; $i++) { 
                echo "*"; 
            } 
            echo "<br>"; 
        }
       
    ?>
    </table>

    <h3> Exercice3 </h3>
    <?php
    $annee = 1000;

    switch ($annee) {
        case 1000:
            echo "10th century";
            break;
        case 1001:
            echo "11th century";
            break;
        case 1555:
            echo "16th century";
            break;
        case 1756:
            echo "18th century";
            break;
        case 2005:
            echo "21st century";
            break;
        default:
            echo "Entrez une bonne date";
            break;
    }
    ?>
</body>
</html>