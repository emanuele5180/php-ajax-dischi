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



        <?php
          include "data.php";


          foreach ($album["response"] as $response) {
        ?>

        <div class="album-cube">

          <div class="img">
            <img src="<?php echo $response["poster"];?>" alt="<?php echo $response['title']; ?>">
          </div>
          <h3><?php echo $response["title"] . "<br/>";?></h3>
          <span class="author"><?php echo $response["author"] . "<br/>";?></span>
          <span class="genere"><?php echo $response["genre"] . "<br/>";?></span>
          <span class="year"><?php echo $response["year"] . "<br/>";?></span>
        </div>
          <?php
            echo "<br/>";
        }



        ?>








    </section>







  </body>
</html>
