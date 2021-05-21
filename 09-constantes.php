<?php
// déclaration de constantes, sont invariables et doivent être définies dès leur création. bonne pratique, toujours en majuscule séparée par des _

define("MA_CONSTANTE",125);
define("MA_CONSTANTE2","coucou");

echo MA_CONSTANTE;
echo "<br>";
echo MA_CONSTANTE2;
echo "<br>";
// impossible de modifier une constante !
define("MA_CONSTANTE",3000);
echo MA_CONSTANTE;
