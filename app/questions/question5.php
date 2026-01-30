<?php
session_start();
require('../shared/openHtml.php');

if(!empty($_POST)){
    $answer = $_POST['reponse'];
    if ($answer === 'Nathalie' ){
        $score= 20;
    }else {
        $score = 0;
    }

    $_SESSION ['score'] = $_SESSION ['score'] + $score;
}
?>
<h1>Question 5</h1>
<p>Quels sont les nombres qui n'ont pas de racine carrée entière ?</p>
<form action="../result/result.php" method="post">
  <label><input type="checkbox" name="reponse">1</label><br>
  <label><input type="checkbox" name="reponse">9</label><br>
  <label><input type="checkbox" name="reponse">18</label><br>
  <label><input type="checkbox" name="reponse">49</label><br>
  <label><input type="checkbox" name="reponse">116</label><br>
  <label><input type="checkbox" name="reponse">1000</label><br>
  <input type="submit" value="Valider">
</form>

<?php
require('../shared/closeHtml.php'); 
?>