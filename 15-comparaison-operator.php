<?php

// variables
$x = 5;
$y = 2;
$z = "5";

// == vérifie si 2 valeurs sont identiques, sans vérifier le type

if ($x == $z) { // vaut true
    echo '$x==$z sont bien égaux!<br>';
}

// === vérifie si 2 valeurs sont identiques et du même type

if ($x === $z) { // vaut false
    echo '$x===$z sont bien égaux!<br>';

    // si le if est false, exécution du else
} else {
    echo '$x===$z ne sont pas identiques (typage différent)<br>';
    echo $x . " est un " . gettype($x) . " $z est un " . gettype($z) . "<br>";
}

// != différent de

if ($x != $y) {
    echo '$x!=$y est différent<br>';
}