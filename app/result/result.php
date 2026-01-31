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

<div class="space">
<h1>votre résultat</h1>
<p>vous avez un quotient intellectuele de 80.
<p>il est temps de remetrre votre cerveau au travail !</p><br>
<p>pour passer untest de Qi grandeur nature,n'éshitez pas à contacter M.cuy psychologue de l'esprit au 06.01.01.01.01</p>
  <a href="">Retour à l'acceuil</a></div>