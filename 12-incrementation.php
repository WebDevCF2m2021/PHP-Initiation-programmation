<?php
// variables numériques
$int1=5;

// Incrémentation : ajout de 1 à une variable
echo'$int1 => '.$int1;
echo "<br>";

 // incrémentation longue
$int1 = $int1+1;
echo '$int1 = $int1+1 => '.$int1;
echo "<br>";

 // incrémentation courte (limitée à 1)
$int1++;
echo '$int1++; => '. $int1;
echo "<br>";

// incrémentation intermédiaire (non limitative)
$int1+=1;
echo '$int1+=1; => '.$int1;
echo "<br>";

// Ajout à la valeur de $int1
$int1+=10;
echo '$int1+=10; => '.$int1;
echo "<br>";

// Position de l'incrémentation
echo $int1++; // donne 18 car l'incrémentation ne se fera qu'à la ligne suivante
echo "<br>";
echo $int1; // donne 19
echo "<br>";
echo ++$int1; // donne 20 car l'incrémentation se fait avant l'affichage