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