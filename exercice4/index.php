<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        
        <?php
        if (isset($_GET['language']) && isset($_GET['server'])) {
            echo 'language = '.$_GET['language']; ?>
        <p><?= 'server = '.$_GET['server']; ?></p>
        <?php
        } else {
            echo 'Désoler mais les paramètres attendus ne sont pas présents dans l\'url';
        }
        ?>
    </body>
</html>