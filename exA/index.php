<!-- Stampare a schermo una decina di dischi musicali
(vedi screenshot) in due modi diversi:
- Solo con l'utilizzo di PHP, che stampa
direttamente i dischi in pagina: al caricamento
della pagina ci saranno tutti i dischi. -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>musica es A</title>
  </head>

  <body>

    <section class="container">

      <div class="album-cube">







        <?php

          include "data.php";

          foreach ($album["response"] as $response) {

        ?>
          <?php
            //<img src="" alt="">
            echo $response["poster"];echo "<br/>";
          ?>

          <h3>
            <?php
              echo $response["title"];echo "<br/>";
            ?>
          </h3>

          <span class="author">
            <?php
              echo $response["author"];echo "<br/>";
            ?>
          </span>

          <span class="genere">
            <?php
            echo $response["genre"];echo "<br/>";
            ?>
          </span>

          <span class="year">
            <?php
            echo $response["year"];echo "<br/>";
            ?>
          </span>
          <?php





          //echo "<br/>";

        }



        ?>




      </div>



    </section>







  </body>
</html>
