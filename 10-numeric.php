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
      $addition = $int1+$int2; 
      echo $addition ." => type ". gettype($addition);
      ?>
      <br>
      <?php
      // affichage des variables '
      echo '$int1 / $int2 = ';
      // affichage du résultat du calcul de division signe "/"
      $division = $int1/$int2;  // résultat en float automatiquement
      echo $division." => type ". gettype($division);
      ?>
      <h2>Décimal | Float | Double</h2>
      <?php
      $float1 = 5.025;
      $float2 = -4.5550874982;
      ?>
    </body>
</html>