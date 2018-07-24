<?php
$family= ["Gabriel" , "Any" , "Samuel" , "Pascale" , "Louise" , "Victor" , "Noé" , "Violette"];
$favorite_meal= ["poulet aux arachides" , "poulet tikka masala" , "paté gaumais" , "sushi"];
$favorite_movie = ["equilibrium" , "the witch" , "matrix" , "blade"]
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    print_r($family);
    ?>
    <br>
    <?php
    print_r($favorite_meal);
     ?>
    <br>
    <?php
    print_r($favorite_movie[1]);
     ?>

  </body>
</html>
