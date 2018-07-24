<?php
$name = "emile";
$Name = ucfirst($name);
echo $Name . '<br><br>';
echo date("Y") . '<br><br>';
echo date('l jS \of F Y h:i:s A') . '<br><br>';
function sum($x, $y) {
    $z = $x + $y;
    //return $z;
    echo $z;
};
function summ($a, $b) {
  if (is_int($a) == true && is_int($b) == true) {
    $c = $a + $b;
    echo $c;
  }

  else {
    echo "Erreur, argument non numérique...";
  }
}
sum(3,9);
 ?>
 <br><br>
 <?php
 summ(4, 3.2);
 ?>
 <br><br>
 <?php
 $string = "on en a gros";

function initials($str) {
    $ret = '';
    foreach (explode(' ', $str) as $word)
        $ret .= strtoupper($word[0]);
    return $ret;
}

echo initials($string);

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
