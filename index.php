<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <?php include_once "db.php";
    ?>

  </head>
  <body>

      <?php

      foreach ($googlefaq as $domanda) {
        $h1 = $domanda["domanda"];
        $p = $domanda["risposta"];
        echo "<h1>$h1</h1>";
        echo "<p> $p</p>";
      }
       ?>



  </body>
</html>
