<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>partie 3 exercice 4</title>
</head>
<body>
    <?php
        $nb1 = 1;
        while ($nb1 < 10) {?>
            <p><?php echo $nb1 ?></p>
            <?php $nb1 = $nb1 + ($nb1 / 2);
        }?>
</body>
</html>