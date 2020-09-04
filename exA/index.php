<!-- Stampare a schermo una decina di dischi musicali
(vedi screenshot) in due modi diversi:
- Solo con l'utilizzo di PHP, che stampa
direttamente i dischi in pagina: al caricamento
della pagina ci saranno tutti i dischi. -->



<?php
include "data.php";

  foreach ($album["response"] as $response) {


    echo $response["poster"];echo "<br/>";
    echo $response["title"];echo "<br/>";
    echo $response["author"];echo "<br/>";
    echo $response["genre"];echo "<br/>";
    echo $response["year"];echo "<br/>";
    echo "<br/>";

  }



 ?>
