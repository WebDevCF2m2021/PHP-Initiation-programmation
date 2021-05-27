# PHP-Initiation-programmation

Pour cette initiation, nous allons utiliser le langage PHP en suivant un cours sur Sololearn pour y voir les bases:

https://www.sololearn.com/learning/1059

Pour comprendre l'importance de PHP, qui est très loin d'être dépassé dans votre future métier de développeur:

https://w3techs.com/technologies/overview/programming_language

Pour cette entrée en matière, nous allons utiliser des "sandbox" (bacs à sable) externes.

Par exemple 1 de ces 3 ci-dessous:

- https://sandbox.onlinephpfunctions.com/
- https://extendsclass.com/php.html
- http://phptester.net/  

Je coderai en local et mettrai ce dépôt github à jour.

### 01-hello-world.php

    <?php // commentaire => ouverture de PHP

    // echo permet d'afficher une chaîne de caractère
    echo "Hello World";

    // fermeture de PHP => ?>
    // cette balise est inutile si aucun texte après la balise (bonnes pratiques)

**echo** est une fonction native (devenue structure/construction du langage) permettant d'afficher une chaîne de caractère. Très proche de la fonction **print**, elle est généralement préférée par la communauté PHP.

### 02-hello-world-html.php


    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "Hello world !!!"; ?></title>
    </head>
    <body>
        <?php
        echo "<h1>Hello world</h1>";
        ?>
    </body>
    </html>

Les balises PHP peuvent se mettrent n'importe où dans le code html (au dessus, dedans, en dessous)

Ouverture : `<?php`

Fermeture : `?>`

### 03-shortcut-php.php

    <?=
    // le raccourci PHP <?= qui effectue un echo est activé par défaut depuis PHP 7
    // Le raccourci <? sans le = doit lui être activé => short_open_tag = true
    "coucou";
    ?>

Version longue :

    ...<title><?php echo "Admin";?></title>

Version courte :

    ...<title><?="Admin"?></title>


### 04-html-into-php.php

    <?php
    echo "<p>I love</p> PHP<br>!";

Exécute le code html côté utilisateur

### 05-semicolon.php

    <?php
    // La seul fin d'instruction est le ;
    echo "A";
    
    
    
    
                    echo                                        
    
    "B"
    
    
    
    
                ;
    
    echo            "C";
    
    echo "ABC";
        // concaténation averc le .
	echo "A"."B"."C";
        // concaténation averc le ,
	echo "A","B","C";
        // les () ne sont plus obligatoires (fonction qui est devenue une structure du langage)
	echo("ABC");

Seul le ; termine une ligne d'instruction.

Les espaces et retours à la ligne comme dans cet exemple ne sont pas "une bonne pratique", Il vaut mieux un code bien indenté (**indentation** : https://fr.wikipedia.org/wiki/Style_d%27indentation )

La **concaténation** permet de mettre un à la suite de l'autre des chaînes de caractère: 
https://fr.wikipedia.org/wiki/Concat%C3%A9nation


### 06-comment-one-line.php

    <?php

    echo "commentaire sur une ligne avec //<br>";
    // ceci est un commentaire sur une ligne
    echo "commentaire sur une ligne avec #<br>"; 
    # autre commentaire sur une ligne

Les commentaires ne sont jamais visibles côté utilisateur!

### 07-comment-multi.php

    <?php
    echo "commentaire sur plusieures lignes /* */<br>";
    /*

    Ici on met un commentaire de la 
    longueur souhaîtée sur plusieures lignes

    */echo "Cette balise n'est pas auto-fermante!";

Les commentaires ne sont jamais visibles côté utilisateur!

### 08-basic-variables.php

Les variables sont des conteneurs dont la valeur peut être modifiée.

En PHP, les variables sont représentées par un signe dollar "$" suivi du nom de la variable. Le nom est sensible à la casse.

Les noms de variables suivent les mêmes règles de nommage que les autres entités PHP. Un nom de variable valide doit commencer par une lettre ou un souligné (_), suivi de lettres, chiffres ou soulignés, en évitant les caractères spéciaux.

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

### 09-constantes.php


Une constante est un identifiant (un nom) qui représente une valeur simple. Comme son nom le suggère, cette valeur ne peut jamais être modifiée durant l'exécution du script (sauf les constantes magiques). Les constantes sont sensibles à la casse. Par convention, les constantes sont toujours écrites en majuscule.

On utilise la fonction define() ("const" étant plus souvant utilisé en orienté objet)

    <?php
    // déclaration de constantes, sont invariables et doivent être définies dès leur création. Bonne pratique: le nom toujours en majuscule séparé par des _


    define("MA_CONSTANTE",125);
    define("MA_CONSTANTE2","coucou");

    echo MA_CONSTANTE;
    echo "<br>";
    echo MA_CONSTANTE2;
    echo "<br>";
    // impossible de modifier une constante !
    define("MA_CONSTANTE",3000);
    echo MA_CONSTANTE;

