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

### 03-shortcut-php.php

    <?=
    // le raccourci PHP <?= qui effectue un echo est activé par défaut depuis PHP 7
    // Le raccourci <? sans le = doit lui être activé => short_open_tag = true
    "coucou";
    ?>

