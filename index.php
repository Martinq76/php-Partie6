<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Home</title>
    </head>
    <body>
        
        <?php
        for ($i = 1; $i <= 6; $i++) {
        ?>
        <p><a href="exercice<?= $i ?>/liens.php">Exercice <?= $i ?></a></p>
        <?php
        }
        ?>
    </body>
</html>