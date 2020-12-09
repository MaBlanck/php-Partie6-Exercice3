<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 Partie 6</title>
</head>

<body>
    <h1>Exercice 3 Partie 6</h1>
    <?php
    if (isset($_GET['startDate']) AND isset($_GET['endDate'])) : ?>
        <p><?= 'From ' . $_GET['startDate'] . ' to ' . $_GET['endDate'] ?></p>
    <?php endif ?>
</body>

</html>