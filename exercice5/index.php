<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 5</title>
    </head>
    <body>
        
        <?php
        if (isset($_GET['week'])) {
            echo 'week = '.$_GET['week'];
        } else {
            echo 'Désoler mais les paramètres attendus ne sont pas présents dans l\'url';
        }
        ?>
    </body>
</html>