<?php
session_start();
require('../shared/openHtml.php'); 
?>

<form action="question2.php" method="post"> 
    <h2>Question 1</h2>
    <p class= "p1"> quel jour serons nous demain si mercredi était il y a trois jours ?</p>
    <label for="reponse">Réponse :</label>
    <input type="text" name="reponse" required><br>
    <input type="submit" value="Valider">
</form> 

<?php
require('../shared/closeHtml.php'); 
?>
     