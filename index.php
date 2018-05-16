<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
    <title>Exercice 8 Partie 2 PHP</title>
  </head>
  <body>
  <?php
  // On donne à $maVariable une valeur random entre 0 et 1 / True et False
  $maVariable = random_int(0, 1);
  echo 'Le contenu de $maVariable est: ' . $maVariable . '<br />';
  // Si la condition est false
  if ($maVariable == false)
  {
    echo 'C\'est pas bon!!';
  }
  // Sinon on affiche ce message
  else
  {
    echo 'C\'est ok!!';
  }
  ?>
  </body>
</html>
