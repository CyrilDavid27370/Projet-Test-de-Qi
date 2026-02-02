<?php
session_start();

require('../shared/openHtml.php');

if(!empty($_POST)){
  $goodAnswer = [
    "reponse3" => "18",
    "reponse5" => "116",
    "reponse6" => "1000",
  ]; 
    $answer = $_POST;
    if ($answer === $goodAnswer ){
      $score = 20;
    }else {
      $score = 0;
    }
    }

    $_SESSION ['score'] = $_SESSION ['score'] + $score;
?>

<?php 
$score = $_SESSION['score'];
$qi = 60 + $score;

if ($qi === 60) {
  $message = "Si vous avez répondu au hasard, vous n'avez vraiment pas eu de chance";
} elseif ($qi === 80) {
  $message = "Il est temps de remettre votre cerveau au travail !";
} elseif ($qi === 100) {
  $message = "Vous êtes pile dans la moyenne !";
} elseif ($qi === 120) {
    $message = "Vous êtes doté d'une intelligence supérieure.";
} elseif ($qi === 140) {
    $message = "Un tel score est rare, vous êtes HPI !";
} elseif ($qi === 160) {
    $message = "Vous pouvez vous asseoir à la table des Einstein et consort !";
}
?>

<div class="container">
  <h1 class="resultat">Votre résultat</h1>
  <p class="qi">Votre avez un quotient intellectuel de <?php echo $qi; ?></p>
  <p class="message"><?php echo $message?></p>
  <p>Pour passer un test de QI grandeur nature, n'hésitez pas à contacter M.Cuy psychologue de l'esprit au 06.01.01.01.01</p>
  <a href="../index.php">Retour à l'accueil</a>
</div>

<?php
require('../shared/closeHtml.php'); 
?>


