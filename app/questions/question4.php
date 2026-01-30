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

     <h1>question4</h1>
    <p>kate , johanna et nathalie sont toutes les trois soeurs. Si les affirmations suivantes sont toutes vraies,laquelle d'entre elles est la plus jeune?</p>
     <ul>
        <li>kate et </li>
        <li></li>
        <li></li>
     </ul>
