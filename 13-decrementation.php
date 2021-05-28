<?php

// variables numériques
$int1 = 5;

// Décrémentation : ajout de 1 à une variable
echo'$int1 => ' . $int1;
echo "<br>";

// Décrémentation longue
$int1 = $int1 - 1;
echo '$int1 = $int1-1 => ' . $int1;
echo "<br>";

// Décrémentation courte (limitée à 1)
$int1--;
echo '$int1--; => ' . $int1;
echo "<br>";

// Décrémentation intermédiaire (non limitative)
$int1 -= 1;
echo '$int1-=1; => ' . $int1;
echo "<br>";

// Retrait de 10 de la valeur de $int1
$int1 -= 10;
echo '$int1-=10; => ' . $int1;
echo "<br>";

// Position de la décrémentation
echo $int1--;
echo "<br>";
echo $int1;
echo "<br>";
echo --$int1;
