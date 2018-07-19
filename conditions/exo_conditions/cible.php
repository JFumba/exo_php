<?php
  $age = $_GET['age'];
  $genre = $_GET['gender'];
  $langue = $_GET['lang'];
  if ($langue == "yes") {
    if ($genre == "homme") {
      if ($age < 12) {
        echo "Hello boy!";
      } elseif ($age >= 12 && $age <= 18) {
        echo "Hello Teenage boy!";
      } elseif ($age >= 18 && $age <= 115) {
        echo "Hello Sir!";
      } elseif ($age > 115) {
        echo "Wow! Still alive, old man?";
      }
    }  elseif ($genre == "femme") {
      if ($age < 12) {
        echo "Hello Girl!";
      } elseif ($age >= 12 && $age <= 18) {
        echo "Hello Teenage girl!";
      } elseif ($age >= 18 && $age <= 115) {
        echo "Hello Lady!";
      } elseif ($age > 115) {
        echo "Wow! Still alive, old lady?";
      }
    }
  } elseif ($langue == "non") {
    if ($genre == "homme") {
      if ($age < 12) {
        echo "Salut petit!";
      } elseif ($age >= 12 && $age <= 18) {
        echo "Salut l'ado!";
      } elseif ($age >= 18 && $age <= 115) {
        echo "Salut l'adulte!";
      } elseif ($age > 115) {
        echo "Wow! Toujours vivant?";
      }
    }  elseif ($genre == "femme") {
      if ($age < 12) {
        echo "Salut petite!";
      } elseif ($age >= 12 && $age <= 18) {
        echo "Salut l'ado!";
      } elseif ($age >= 18 && $age <= 115) {
        echo "Salut l'adulte!";
      } elseif ($age > 115) {
        echo "Wow! Toujours vivante?";
      }
    }
  }
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


  </body>
</html>
