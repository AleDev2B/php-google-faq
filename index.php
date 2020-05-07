<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Domande frequenti – Privacy e termini – Google</title>
    <?php include_once "db.php";
    ?>

  </head>
  <body>
    <header>
      <div class="header-container">
        <div class="logo displayFlexClass">
          <a href="#">
          <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt=""> </a>
          <h2>Privacy e termini</h2>
        </div>
        <div class="prova displayFlexClass">
          <ul>
            <li>
              <a href="#">Introduzione</a>
            </li>
            <li>
              <a href="#">Norme sulla privacy</a>
            </li>
            <li>
              <a href="#">Termini di servizio</a>
            </li>
            <li>
              <a href="#">Tecnologie</a>
            </li>
            <li>
              <a href="#">Domande frequenti</a>
            </li>
          </ul>
          <ul>
            <li><a href="#">Account Google</a></li>
          </ul>
        </div>
      </div>

      <hr>
    </header>

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
