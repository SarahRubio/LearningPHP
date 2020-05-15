<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php include 'nomRestaurant.php'; ?></title>
    <link rel="stylesheet" href="<?php echo $_url_base . $_dossier_template ?>css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
  </head>

  <body>

    <header class="bgBlue padtopbot7 flex column jaround">
        <h1 class="tcenter font3 fontwhite"><?php echo $nomRestaurant; ?></h1>
        <?php
        include 'navigation.php';
         ?>
    </header>

  </body>

  <div class="">

  </div>

  <?php include 'footer.php'; ?>
</html>
