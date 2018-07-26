<?php

  $maladeArray = array ("a attrapé la scarlatine ",
                        "a attrapé la varicelle ",
                        "a attrapé les oreillons ",
                        "a attrapé la coqueluche ",
                        "a attrapé la rougeole ");
  $ripArray = array ("son grand-père est mort ",
                     "sa grand-mère est morte ",
                     "son chien est mort ",
                     "son chat est mort ",
                     "son oncle est mort ");
  $extrascolaireArray = array ("devait préparer son camp scout ",
                               "devait partir en mission humanitaire ",
                               "avait aqua-poney ",
                               "devait s'entraîner pour le prochain Hunger Game ",
                               "devait venger l'honneur de la famille ");
  $autreArray = array ("n'avait pas envie de venir ",
                       "devait assumer pleinement son rôle de nouveau Messie ",
                       "devait retourner sur sa planète ",
                       "ne passait pas le contrôle technique et devait repasser au garage ",
                       "avait réussi à sortir de sa cage ");
  $randSick = $maladeArray[array_rand($maladeArray)];
  $randRip = $ripArray[array_rand($ripArray)];
  $randPriority = $extrascolaireArray[array_rand($extrascolaireArray)];
  $randOther = $autreArray[array_rand($autreArray)];

  $teacher_gender = $_GET['teacherGender'];
  $teacher_name = $_GET['teacherName'];
  $child_gender = $_GET ['childGender'];
  $child_firstname = $_GET['firstName'];
  $child_lastname = $_GET['lastName'];
  $excuse = $_GET['excuseType'];

  if ($teacher_gender == 'male'){

    if ($child_gender == 'male') {

      if ($excuse == 'sickness') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $randSick . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'death') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car " . $randRip . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'priority') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $randPriority . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'whatever') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $randOther . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
    }

    if ($child_gender == 'female') {

      if ($excuse == 'sickness') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car elle " . $randSick . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'death') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car " . $randRip . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'priority') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car elle " . $randPriority . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'whatever') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car elle " . $randOther . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
    }

    if ($child_gender == 'other') {

      if ($excuse == 'sickness') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $randSick . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'death') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car " . $randRip . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'priority') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $randPriority . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'whatever') {
        //foutre la bonne phrase
        $standardSentence = "Monsieur " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $randOther . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Monsieur  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
    }
  }
  if ($teacher_gender == 'female'){

    if ($child_gender == 'male') {

      if ($excuse == 'sickness') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $randSick . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'death') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car " . $randRip . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'priority') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $randPriority . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'whatever') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de mon fils " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $randOther . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
    }

    if ($child_gender == 'female') {

      if ($excuse == 'sickness') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car elle " . $randSick . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'death') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car " . $randRip . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'priority') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car elle " . $randPriority . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'whatever') {
        //foutre la bonne phrase
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de ma fille " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car elle " . $randOther . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
    }

    if ($child_gender == 'other') {

      if ($excuse == 'sickness') {
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $randSick . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'death') {
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car " . $randRip . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'priority') {
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $randPriority . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
      elseif ($excuse == 'whatever') {
        $standardSentence = "Madame " . $teacher_name . " , je vous prie de bien vouloir excuser l'absence de " . $child_firstname . " " . $child_lastname
        . " .<br>En effet, mon enfant n'a pas pu se rendre en classe car il " . $randOther . " .<br>Je vous saurais gré d'en prendre note et m'en remets à votre compréhension. <br>Je vous prie de croire, Madame  "
        . $teacher_name . " , à l'assurance de mes salutations les plus sincères .";
      }
    }
  }
echo $standardSentence;
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


  </body>
</html>
