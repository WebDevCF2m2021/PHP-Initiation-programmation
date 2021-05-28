<?php
// si il existe une variable POST nommée eau => on a envoyé le formulaire
if (isset($_POST['eau'])) {
    
    // si la variable n'est pas au bon format, on la convertit en int
    $tempWater = (float) $_POST['eau'];

    
// le formulaire n'est pas envoyé    
} else {
    // variable par défaut
    $tempWater = 20;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Température de l'eau</title>
    </head>
    <body>
        <h1>Température de l'eau</h1>
        <p>Quelle est la température de l'eau?</p>
        <form action="" method="POST" name='water'>
            <input type="number" name='eau' required/><br>
            <input type="submit"/>
        </form>
        <p><?php
// vérification, condition if
            if ($tempWater <= 0) { // si plus petit ou égal à 0
                echo "L'eau est gelée à $tempWater °C";

// sinon si (le if a renvoyé false)  
            } elseif ($tempWater < 100) {
                echo "L'eau est liquide à $tempWater °C";

// sinon (le if et le elseif sont false)
            } else {
                echo "L'eau est gazeuse à $tempWater °C";
            }
            ?></p>
    </body>
</html>
