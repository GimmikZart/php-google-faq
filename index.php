<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>google faq</title>

    <?php
      include "oggetti.php";
      include "funzioni.php";
    ?>
    </head>

  <body>
    <!-- HEADER -->
    <header>
      <!-- logo -->
      <div class="logo">
        <img src="img/googlelogo_color_74x24dp.png" alt="">
        <span>Privacy e termini</span>
      </div>
      <!-- navbar -->
      <div class="navbar">
        <ul>
          <li>Introduzione</li>
          <li>Norme sulla privacy</li>
          <li>Termini di servizio</li>
          <li>Tecnologie</li>
          <li class="selected">Domande frequenti</li>
        </ul>
        <span>Account Google</span>

      </div>
    </header>

    <!-- MAIN -->
    <main>
      <h1 id="numeroFaq">
        <?php  echo stampaNum($faq); ?>
      </h1>

      <?php foreach ($faq as  $domande) { ?>
      <h1 class="titolo">
        <?php echo $domande["titolo"]; ?>
      </h1>
      <p class="paragrafo">
        <?php echo $domande["paragrafo"];  ?>
      </p>
      <?php } ?>


    </main>

  </body>
</html>
