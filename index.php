<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <?php include_once "db.php" ?>

  </head>
  <body>
    <h2>
      <?php
      foreach ($googlefaq as $domanda) {
        echo $domanda["domanda"] . "<br>";
      }
       ?>

    </h2>

    <p>
      <?php
      foreach ($googlefaq as $risposta) {
          echo $risposta["risposta"]. "<br>";
      }

        ?>
    </p>


  </body>
</html>
