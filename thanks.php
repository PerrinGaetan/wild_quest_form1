<?php
$methodPost = $_SERVER["REQUEST_METHOD"];
$nom = $firstname = $mail = $tel = $categorie = $message = ""; 
$error_nom = $error_firstname = $error_mail = $error_tel = $error_categorie = $error_message = $error = ""; 

function secure_data(string $data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// $_SERVER["REQUEST_METHOD]== POST  ?  verifie : fait rien
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    // si POST => Verifie que les infos de post soit pas vide : 
    if (empty($_POST["nom"])){
        $error_nom = "Le champ 'nom' est nécessaire";
        $error = "true";
    } else {
        $nom = secure_data($_POST["nom"]);
    };
    if (empty($_POST["firstname"])){
        $error_firstname = "Le champ 'firstname' est nécessaire";
        $error = "true";
    } else {
        $firstname = secure_data($_POST["firstname"]);
    };
    if (empty($_POST["mail"])){
        $error_mail = "Le champ 'mail' est nécessaire";
        $error = "true";
    } else {
        $mail = secure_data($_POST["mail"]);
        if(filter_var($mail, FILTER_VALIDATE_EMAIL) === FALSE){
            $error_mail = "L'adresse mail saisie est invalide";
            $error = "true";
        } else {
            $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
        };
    };
    if (empty($_POST["tel"])){
        $error_tel = "Le champ 'tel' est nécessaire";
        $error = "true";
    } else {
        $tel = secure_data($_POST["tel"]);
    };
    if (empty($_POST["categorie"])){
        $error_categorie = "Le champ 'categorie' est nécessaire";
        $error = "true";
    } else {
        $categorie = secure_data($_POST["categorie"]);
    };
    if (empty($_POST["message"])){
        $error_message = "Le champ 'message' est nécessaire";
        $error = "true";
    } else {
        $message = secure_data($_POST["message"]);
    };
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php var_dump($_POST["mail"], $mail); ?>
<?php if ($error === "true") : ?>
    <div class="error"><?= $error_firstname ?></div>
    <div class="error"><?= $error_name ?></div>
    <div class="error"><?= $error_mail ?></div>
    <div class="error"><?= $error_tel ?></div>
    <div class="error"><?= $error_categorie ?></div>
    <div class="error"><?= $error_message ?></div>
<?php else : ?>
    <p>Merci <?=htmlentities($firstname) . ' ' . htmlentities($nom) ?> de nous avoir contacté à propos de "<?= htmlentities($categorie) ?>".</p>
    <p>Un de nos conseiller vous contactera soit à l'adresse <?=htmlentities($mail) ?> ou par téléphone au <?= htmlentities($tel) ?> dans les plus bref délais pour traiter votre demande :</p>
    <p><?= htmlentities($message) ?></p>
<?php endif; ?>
</body>
</html>