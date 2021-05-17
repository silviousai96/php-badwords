<?php

    $testo = "Ciao ho notato l'annuncio dell'auto. Vorrei saperne di piu.";

    $badword = $_GET["badword"];

    $lunghezza = strlen($testo);
    
    $nuovoTesto = str_replace($badword, '***', $testo)
?>

<h1> <?php echo $testo ?> </h1>

<p> (Lunghezza: <?php echo $lunghezza ?>) <?php echo $nuovoTesto ?> </p>

