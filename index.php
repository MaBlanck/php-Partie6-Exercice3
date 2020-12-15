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
    if (!isset($_GET['startDate'])):?>
    <p>Début de période manquante</p>
    <?php endif; ?>
    <?php if(!isset($_GET['endDate'])): ?>
    <p>Fin de la période manquante</p>
    <?php endif; ?>
    <?php if(isset($_GET['startDate']) && isset($_GET['endDate'])):?>
        <p>Votre voyage du <?=  $_GET['startDate']?> au <?= $_GET['endDate'] ?></p>
    <?php endif ?>
    <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Vérifier vos dates</a>
</body>

</html>