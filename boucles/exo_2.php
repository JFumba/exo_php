<?php
  $n = 1;
  while ($n <= 120) {
    echo $n;
    echo " ";
    $n++;
  }

  echo "<br><br>";
  for ($i=1; $i <= 120 ; $i++) {
    echo $i;
    echo " ";
  }
  
  echo "<br><br>";
  $johnson2 = [
    'Adrien',
    'Ajay',
    'Alex',
    'Antoni',
    'Colombe',
    'Charlotte',
    'Eric',
    'Géraldine',
    'Guillaume D',
    'Guillaume K',
    'Hakan',
    'JF',
    'Jesse',
    'Liam',
    'Marco',
    'Marie-Louise',
    'Marie',
    'Massimo',
    'Mery',
    'Nicolas',
    'Nathan',
    'Thib',
    'Stephane'
  ];
  $i = 0;
  while ($i < count($johnson2)) {
     $a = $johnson2[$i];
     echo $a ."\n";
     $i++;
  }
  echo "<br><br>";
  $worlds = [
    'BE' => 'Belgique',
    'BS' => 'Bahamas',
    'BI' => 'Burundi',
    'DE' => 'Allemagne',
    'HN' => 'Honduras',
    'ES' => 'Espagne',
    'RU' => 'Russie',
    'IL' => 'Israël',
    'CN' => 'Chine',
    'US' => 'États-Unis'
  ];
  $w = 0;
  echo "<form action='ex02.php' method='get'>";
  echo "<select name='countries'>";
  foreach ($worlds as $key => $world) {
   echo "<option value=" . $key . ">" . $world . "</option>";
  }
  echo "</select>";
  echo "<input type='submit' value='Submit'>";
  echo "</form>";
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  </body>
</html>
