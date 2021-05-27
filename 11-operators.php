<?php

$var1 = 25;
$var2 = -12;
$var3 = 5.25;
$var4 = 0.017;

// Addition

echo '$var1 + $var3 = '.($var1 + $var3)."<br>";

// Soustraction

echo '$var1 - $var3 = '.($var1 - $var3)."<br>";

// Multiplication

echo '$var2 * $var4 = '.($var2 * $var4)."<br>";

// Division

echo '$var2 / $var4 = '.($var2 / $var4)."<br>";

// utilisation du modulo % boucles et conditions pas encore vues

for($i=1;$i<=10;$i++){ // une boucle de 1 à 10
  // si impair
  if($i%2){
    echo "<p style='background-color:grey;'>$i</p>";
  }else{
    echo "<p style='background-color:white;'>$i</p>";
  }
}