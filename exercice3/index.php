<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 3</title>
    </head>
    <body>
        
        <?php
        if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
            echo 'startDate = '.$_GET['startDate']; ?>
        <p><?= 'endDate = '.$_GET['endDate']; ?></p>
        <?php
        } else {
            echo 'Désoler mais les paramètres attendus ne sont pas présents dans l\'url';
        }
        ?>
    </body>
</html>