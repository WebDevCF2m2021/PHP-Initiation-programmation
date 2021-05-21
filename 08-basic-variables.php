<?php
// déclaration de variables
$name = "Pitz"; // string
$surname = 'Michaël'; // string
$age = 44; // integer (number)
$height = 170.2; // float (number)

// affichage des variables avec echo, si entre "", les variables sont interpétées, ce n'est pas le cas entre '' !
echo "<p>Mon nom est $name $surname et je suis âgé de $age ans</p>"; // affichage d'une string

// pas d'interprétation entre simple ''
echo '<p>Mon nom est $name $surname et je suis âgé de $age ans</p>';

// concaténation avec . ou ,
echo "<p>Mon nom est ".$name.' ',$surname." et je suis âgé de ".$age.' ans</p>';

// erreur, ne pas commencer par un chiffre
// $45bcd = "lala";

// erreur, pas d'espaces
// $lala lulu = 25;

// pas d'erreur, mais à éviter !
$éçeãö§çcole = 25;