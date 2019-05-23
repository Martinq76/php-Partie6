<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 6</title>
    </head>
    <body>
        
        <?php
        if (isset($_GET['building']) && isset($_GET['room'])) {
            echo 'building = '.$_GET['building']; ?>
        <p><?= 'room = '.$_GET['room']; ?></p>
        <?php
        } else {
            echo 'Désoler mais les paramètres attendus ne sont pas présents dans l\'url';
        }
        ?>
    </body>
</html>