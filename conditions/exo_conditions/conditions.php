
<?php
// exo O
 $etatChambre = "en ordre";

 if ($etatChambre == "dégoutante") {
   $response = "Wouah, c'est dégoutant, c'est quoi ce bordel.";
 } elseif ($etatChambre == "sale") {
   $response = "C'est sale, va vite me nettoyer ta chambre.";
 } elseif ($etatChambre == "en ordre") {
   $response = "C'est trop en ordre, va vite foutre un peu le bordel.";
 } elseif ($etatChambre == "immaculée") {
   $response = "C'est quoi ce truc ? T'es humain ?";
 } elseif ($etatChambre == "maniaque") {
   $response = "Si je change la place de ton bic, tu rales ?";
 } else {
   $response = "Tu as une chambre ?";
 };

 // exo 1
 $heure = date('G');

 if ($heure >= '05:00' && $heure <= '09:00') {
   // Si l'heure est entre 05h00 et 9h00 du matin, affiche "Bonjour!".
   $messageDate = "Bonjour!";
 } elseif ($heure >= '09:01' && $heure <= '12:00') {
   // Si l'heure est entre 9h01 et 12h00, affiche "Bonne journée!".
   $messageDate = "Bonne journée!";
 } elseif ($heure >= '12:01' && $heure <= '16:00') {
   // Si l'heure est entre 12h01 et 16h00, affiche "Bon après-midi!".
   $messageDate = "Bon après-midi!";
 } elseif ($heure >= '16:01' && $heure <= '21:00') {
   // Si l'heure est entre 16h01 et 21h00, affiche "Bonne soirée!".
   $messageDate = "Bonne soirée!";
 } elseif ($heure >= '21:01' && $heure <= '04:59') {
   // Si l'heure est entre 21h01 et 04h59, affiche "Bonne nuit!".
   $messageDate = "Bonne nuit!";
 } else {
   $messageDate = "Tu as l'heure ?";
 }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title></title>
 </head>
 <body>
   <!--<?php echo $response; ?>
   <br>

   <br>

   </form>

   <?php echo $messageDate; ?>
   <p>Veuillez indiquer votre age :</p>
   <form action="cible.php" method="post">
     <p>
       <input type="text" name="prenom" /> <input type="submit" value="Valider" />
     </p>
   </form>
   <form action="cible.php" method="get">
     <label>Quel est ton genre ?</label>
     <input type="radio" name="gender" value="homme"> Homme
     <input type="radio" name="gender" value="femme"> Femme
     <br>
     <label>Parles-tu anglais ?</label>
     <input type="radio" name="lang" value="yes"> Yes
     <input type="radio" name="lang" value="non"> Non
     <br>
     <label>Quel est ton age ?</label>
     <input type="number" name="age">
     <br>
  </form>-->
  <form action="note.php" method="post">
    <label>Indiquez votre résultat : </label>
    <input type="number" name="note">
  </form>
 </body>
</html>
