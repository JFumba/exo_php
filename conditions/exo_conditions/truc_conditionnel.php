<?php
$age = "33";
$sexe = "masculin";
$message = "Désolé, vous ne remplissez pas les critères de sélection.";
if ($age >= 21 && $age <= 40 && $sexe == "féminin") {
  $message =  "Bonjour, bienvenue parmi nous!";
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php echo $message; ?>
  </body>
</html>
