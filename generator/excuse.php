<?php
// define variables and set to empty values
$firstNameErr = $lastNameErr =$childGenderErr = $teacherNameErr = $teacherGenderErr = $excuseTypeErr = "";
$firstName = $lastName = $childGender = $teacherName = $teacherGender = $excuseType = "";

//child informations
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstName"])) {
    $firstNameErr = "Veuillez indiquer un prénom";
  } else {
    $firstName = test_input($_POST["firstName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
      $firstNameErr = "Seules les lettres (a-z) sont autorisées";
    }
  }


  if (empty($_POST["lastName"])) {
    $lastNameErr = "Veuillez indiquer un nom de famille";
  } else {
    $lastName = test_input($_POST["lastName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
      $lastNameErr = "Seules les lettres (a-z) sont autorisées";
    }
  }

  if (empty($_POST["childGender"])) {
    $childGenderErr = "Veuillez indiquer le genre de votre enfant,cochez la case 'autre' si vous ne le trouvez pas,ou ne souhaitez pas l'indiquer";
  } else {
    $childGender = test_input($_POST["childGender"]);
  }


//teacher

  if (empty($_POST["teacherName"])) {
    $teacherNameErr = "Veuillez indiquer le nom du/de la professeur/e";
  } else {
    $teacherName = test_input($_POST["teacherName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$teacherName)) {
      $teacherNameErr = "Seules les lettres (a-z) sont autorisées";
    }
  }

  if (empty($_POST["teacherGender"])) {
    $teacherGenderErr = "Veuillez indiquer le genre du/de la professeur/e";
  } else {
    $teacherGender = test_input($_POST["teacherGender"]);
  }

  if (empty($_POST["excuseType"])) {
    $excuseTypeErr = "Choisissez la raison de l'absence";
  } else {
    $excuseType = test_input($_POST["excuseType"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    .error {color: #FF0000;}
    </style>
  </head>
  <body>
    <h2>Générateur de lettres d'excuse</h2>
  <p><span class="error">* champ obligatoire</span></p>


  <!--<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">-->
  <form action="excuse_cond.php" method="get">

    Prénom de votre enfant: <input type="text" name="firstName" value="<?php echo $firstName;?>">
    <span class="error">* <?php echo $firstNameErr;?></span>
    <br><br>

    Son nom de famille: <input type="text" name="lastName" value="<?php echo $lastName;?>">
    <span class="error">* <?php echo $lastNameErr;?></span>
    <br><br>

    Son genre:
    <input type="radio" name="childGender" <?php if (isset($childGender) && $childGender=="female") echo "checked";?> value="female">Fille
    <input type="radio" name="childGender" <?php if (isset($childGender) && $childGender=="male") echo "checked";?> value="male">Garçon
    <input type="radio" name="childGender" <?php if (isset($childGender) && $childGender=="other") echo "checked";?> value="other">autre
    <span class="error">* <?php echo $childGenderErr;?></span>
    <br><br>

    Nom du/de la professeur/e: <input type="text" name="teacherName" value="<?php echo $teacherName;?>">
    <span class="error">* <?php echo $teacherNameErr;?></span>
    <br><br>

    Son genre:
    <input type="radio" name="teacherGender" <?php if (isset($teacherGender) && $teacherGender=="female") echo "checked";?> value="female">Femme
    <input type="radio" name="teacherGender" <?php if (isset($teacherGender) && $teacherGender=="male") echo "checked";?> value="male">Homme
    <span class="error">* <?php echo $teacherGenderErr;?></span>
    <br><br>

    Type d'excuses:
    <input type="radio" name="excuseType" <?php if (isset($excuseType) && $excuseType=="sickness") echo "checked";?> value="sickness">Maladie
    <input type="radio" name="excuseType" <?php if (isset($excuseType) && $excuseType=="death") echo "checked";?> value="death">Perte d'un être cher
    <input type="radio" name="excuseType" <?php if (isset($excuseType) && $excuseType=="priority") echo "checked";?> value="priority">Activité extra-scolaire importante
    <input type="radio" name="excuseType" <?php if (isset($excuseType) && $excuseType=="whatever") echo "checked";?> value="whatever">Autre
    <span class="error">* <?php echo $excuseTypeErr;?></span>
    <br><br>
    <button type="submit" class="btn btn-info">Générer la lettre d'excuse</button>


  </form>

  <!--<?php
  echo "<h2>Votre lettre d'excuse:</h2>";
  echo $firstName;
  echo "<br>";
  echo $lastName;
  echo "<br>";
  echo $childGender;
  echo "<br>";
  echo $teacherName;
  echo "<br>";
  echo $teacherGender;
  echo "<br>";
  echo $excuseType;
  ?>-->
  </body>
</html>
