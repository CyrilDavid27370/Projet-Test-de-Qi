<?php
// ouvrir la session pour que $_SESSION soit créé (attention toujours le placer tout au début du code)
session_start();
require('../shared/openHtml.php');

if (!empty($_POST)) {   // On vérifie que le formulaire a été soumis
   // Récupérer la réponse soumise dans le formulaire
   $answer = $_POST['reponse'];

   // Transformer la réponse en minuscule pour que DIMANCHE ou Dimanche ou dimAnche soit valides
   $answer = strtolower($answer);

   // Comparer la réponse pour voir si elle est bonne ou pas et affecter les points en fonction de la validité de la réponse
   if ($answer === 'dimanche') {
      $score = 20;
   } else {
      $score = 0;
   }

   // Stocker le score
   $_SESSION['score'] = $score;
}

/*
code non détaillé
if (!empty($_POST)) {
   $answer = $_POST['reponse'];
   if(strtolower($answer) ==='dimanche'){
      $_SESSION['score'] = 20;
   }else{
      $_SESSION['score'] = 0;
   }    
}
*/
?>

