<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 2</title>
    </head>
    <body>
        
        <?php
        if (isset($_GET['age'])) {
            echo 'age = '.$_GET['age'];
        } else {
            echo 'Désoler mais le paramètre age attendu n\'est pas contenue dans l\'url';
        }
        ?>
    </body>
</html>