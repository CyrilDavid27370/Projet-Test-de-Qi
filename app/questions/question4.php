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

?>

<h1>Question 4</h1>
<p>Kate, Joanna et Nathalie sont toutes les trois soeurs. Si les affirmations sont vraies, laquelle d'entre elles est la plus jeune?</p>
<ul>
    <li>Kate est la plus agée.</li>
    <li>Nathalie n'est pas la plus agée.</li>
    <li>jonanna n'est pas la plus jeune.</li>
</ul>
<form action="../questions/question5.php" method="post">
    <label for="reponse">Réponse</label>
    <select name="reponse" required>
        <option value="">choisir la bonne réponse</option>
        <option value="Kate">Kate</option>
        <option value="Jonanna">Joanna</option>
        <option value="Nathalie">Nathalie</option>
    </select><br>
    <input type="submit" value="Valider">
</form>

<?php
require('../shared/closeHtml.php'); 
?>