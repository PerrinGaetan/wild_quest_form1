<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Merci <?= $_POST["firstname"] . ' ' . $_POST["nom"] ?> de nous avoir contacté à propos de "<?= $_POST["categorie"] ?>".</p>
    <p>Un de nos conseiller vous contactera soit à m'adresse <?= $_POST["mail"] ?> ou par téléphone au <?= $_POST["tel"] ?> dans les plus bref délais pour traiter votre demande :</p>
    <p><?= $_POST["message"] ?></p>
</body>
</html>