<?php

?>
<html>
    <head>
        <title>Les variables numériques</title>
    </head>
    <body>
      <h1>Les variables numériques</h1>
      <h2>Entier | Integer | int</h2>
      <?php
      $int1 = 54; // int
      $int2 = -7; // int
      // avec la concaténation, il n'y a pas de calcul car les variables sont transtypées automatiquement par PHP en string (str)
      echo $int1.$int2;
      ?>
      <br>
      <?php
      // affichage des variables '
      echo '$int1 + $int2 = ';
      // affichage du résultat du calcul d'addition signe "+"
      echo $int1+$int2;  
      ?>
    </body>
</html>