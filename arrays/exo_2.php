<?php
$family= ["Gabriel" , "Any" , "Samuel" , "Pascale" , "Louise" , "Victor" , "Noé" , "Violette"];
$moi = [
  'prenom' => 'Jesse',
  'nom' => 'Fumba',
  'age' => '30',
  'annee_naissance' => '1988',
  'aime_la_biere' => true,
  'metis' => true,
  'hobby' =>['daydreaming' , 'music'],
  'famille' => $family ];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo '<pre>';
        print_r($moi);
      echo '</pre>';
    ?>
  </body>
</html>
