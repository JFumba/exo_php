<?php
$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
    foreach ($pronoms_personnels as $n => $pronom_personnel) {
      if ($n == 0) {
        echo $pronom_personnel . ' code';
      } elseif ($n == 1) {
        echo $pronom_personnel . ' codes';
      } elseif ($n == 2) {
        echo $pronom_personnel . ' code';
      } elseif ($n == 3) {
        echo $pronom_personnel . ' codons';
      } elseif ($n == 4) {
        echo $pronom_personnel . ' codez';
      } elseif ($n == 5) {
        echo $pronom_personnel . ' codent';
      }
      echo '<br>';
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php

   ?>
  </body>
</html>
