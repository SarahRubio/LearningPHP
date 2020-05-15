<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php include 'nomRestaurant.php'; ?> : Le menu</title>
    <link rel="stylesheet" href="<?php echo $_url_base . $_dossier_template ?>css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
  </head>

  <body>

    <header class="bgBlue padtopbot7">
        <h1 class="tcenter font3 fontwhite"><?php echo $nomRestaurant; ?></h1>
    </header>

    <h2>Le menu du <?php echo $jour; ?></h2>

    <h2>entrée</h2>
    <p>
      <?php echo $entree; ?>
    </p>

    <h2>Plat</h2>
    <p>
      <?php echo $plat;?>
    </p>

    <h2>Dessert</h2>
    <p>
      <?php echo $dessert;?>
    </p>

  </body>

  <?php

  include 'footer.php'

   ?>
</html>
