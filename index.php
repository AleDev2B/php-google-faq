<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>

    <?php include_once "db.php";
    ?>

  </head>
  <body>

    <div class="container">
      <?php

      foreach ($googlefaq as $domanda) {
        $h1 = $domanda["domanda"];
        $p = $domanda["risposta"];
        echo
        "<h1>$h1</h1>" .
        "<p>$p</p>";
      }
       ?>
    </div>




  </body>
</html>
