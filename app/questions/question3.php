<?php
session_start();
require('../shared/openHtml.php');


if(!empty($_POST)){
     $answer = $_POST['reponse'];
    if ($answer ==='1500'){
        $score = 20;
    }else {
        $score= 0;
    }

    $_SESSION ['score'] = $_SESSION ['score'] + $score;
}

?>
<main>
    <div class="description">
        <h1>question3</h1>
        <img class ="cube"src="../images/dice.jpg" alt="imge cube">
    </div>  

    <div class="radio">
        <form action="../questions/question4.php" method="post">
            <p class= "p2"> À quoi ressemblera le cube fini?</p>
            <label for="response"></label>
          <label><input type="radio" name="reponse" value ="A" >A </label><br>
          <label><input type="radio" name="reponse" value ="B" >B</label><br>
          <label><input type="radio" name="reponse" value ="C" >C</label><br>
          <label><input type="radio" name="reponse" value ="D" >D</label><br>
            <input type="submit" value ="valider">
        </form>
    </div>
</main> 

<?php
require('../shared/closeHtml.php'); 
?>


    