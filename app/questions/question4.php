<?php

session_start();
require('../shared/openHtml.php');

if(!empty($_POST)){
    $answer = $_POST['reponse'];
    if ($answer === 'C' ){
        $score= 20;
    }else {
        $score = 0;
    }

    $_SESSION ['score'] = $_SESSION ['score'] + $score;
}
var_dump($score);




?>

   
