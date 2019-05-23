<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 1</title>
    </head>
    <body>
        
        <?php
        if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
            echo 'lastname = '.$_GET['lastname']; ?>
        <p><?= 'firstname = '.$_GET['firstname']; ?></p>
        <?php
        } else {
            echo 'Désoler mais les variables GET attendus ne sont pas présentent dans l\'url';
        }
        ?>
    </body>
</html>