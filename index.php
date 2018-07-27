<?php
  $isEasy = true;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2/2</title>
  </head>
  <body>
    <?php
      if ($isEasy == true) {
        echo 'C\'est facile !';
      } else {
        echo 'C\'est difficile !!!';
      }
/* POSSIBILITE n°2 :
      if ($isEasy) {
        echo 'C\'est facile !';
      } else {
        echo 'C\'est difficile !!!';
      }

POSSIBILITE n°3 :
      if (!$isEasy) {
        echo 'C\'est difficile !!!';
      } else {
        echo 'C\'est facile !';
      }

POSSIBILITE n°4 : Conditions ternaire
      echo ($isEasy) ? 'C\'est facile !' : 'C\'est difficile !!!';
*/
    ?>
  </body>
</html>
