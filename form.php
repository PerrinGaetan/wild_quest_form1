
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    


<form action="thanks.php" method="post">
    <fieldset>
        <legend>Contact : </legend>
        <div>
            <label for="firstname">Prenom :</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label for="mail">e-mail : </label>
            <input type="email" name="mail" id="mail">
        </div>
        <div>
            <label for="tel">Téléphone :</label>
            <input type="tel" name="tel" id="tel">
        </div>
        <div>
            <label for="categorie">Catégorie</label>
            <select name="categorie" id="categorie">
                <option value="renseignement">Renseignement</option>
                <option value="plainte">Plainte</option>
                <option value="encouragement">Encouragement</option>
                <option value="suivi_de_commande">Suivi de commande</option>
                <option value="remboursement">Remboursement</option>
            </select>
        </div>
        <div class="textarea">
            <label for="message">Message : </label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <div class="button">
            <input type="submit" value="Envoyer le message">
        </div>
    </fieldset>
</form>

</body>
</html>