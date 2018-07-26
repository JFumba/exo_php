<?php
  //$age = $_GET['age'];
  //$genre = $_GET['gender'];
  //$langue = $_GET['lang'];
  $teacher_gender = $_GET['teacherGender'];
  $teacher_name = $_GET['teacherName'];
  $child_gender = $_GET ['childGender'];
  $child_firstname = $_GET['firstName'];
  $child_lastname = $_GET['lastName'];
  $excuse = $_GET['excuseType'];

  //phrase type => trouver où foutre le madame/monsieur
//  $textBase = 'Bonjour, ' . $prof . '. Mon enfant ' . $child . ' est absent ce ' . $date . ' car il ';
  $standardSentence = $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . $child_lastname
  . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, "
  . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";

  if ($teacher_gender == 'male'){

    if ($child_gender == 'male') {

      if ($excuse == 'sickness') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'death') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'priority') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'whatever') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
    }

    if ($child_gender == 'female') {

      if ($excuse == 'sickness') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car elle " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'death') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car elle " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'priority') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car elle " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'whatever') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car elle " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
    }

    if ($child_gender == 'other') {

      if ($excuse == 'sickness') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'death') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'priority') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'whatever') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
    }
  }
  if ($teacher_gender == 'female'){

    if ($child_gender == 'male') {

      if ($excuse == 'sickness') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'death') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'priority') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'whatever') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
    }

    if ($child_gender == 'female') {

      if ($excuse == 'sickness') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car elle " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'death') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car elle " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'priority') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car elle " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'whatever') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car elle " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
    }

    if ($child_gender == 'other') {

      if ($excuse == 'sickness') {
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'death') {
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'priority') {
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'whatever') {
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $excuse . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
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
