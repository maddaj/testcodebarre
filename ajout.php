<?php
include_once 'getAllProducts.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout formulaire</title>
</head>

<body>
    <nav>
        <a href="index.php">Liste</a>
        <a href="sortie.php">Sortie</a>
        <a href="ajout.php">Ajout</a>
    </nav>

    <div>
        <form action="search.php" method="post">
            <label for="fournisseur">Fournisseur</label>
            <select name="fournisseur">
                <option value="">--</option>
                <option valeur="sebbin">Sebbin</option>
                <option valeur="motiva">Motiva</option>
                <option valeur="eurosilicone">Eurosilicone</option>
            </select>
            <label for="typestock">Type de stock</label>
            <select name="typestock">
                <option value="">--</option>
                <option valeur="permanent">Permanent</option>
                <option valeur="provisoire">Provisoire</option>
            </select>
            <label for="typeProthese">Type de prothèse</label>
            <select name="typeProthese">
                <option value="">--</option>
                <option valeur="mammaire">Mammaire</option>
                <option valeur="fesse">Fesse</option>
            </select>
            <label for="reference">Réference</label>
            <input type="text" name="reference" />
            <label for="numLot">N° lot</label>
            <input type="text" name="numLot" />
            <label for="numSerie">N° série</label>
            <input type="text" name="numSerie" />
            <label for="datePeremption">Date de péremption</label>
            <input type="text" name="datePeremption" />
            <label for="codebarre">Code-barre</label>
            <input type="text" name="codebarre" onmouseover="this.focus();" />
            <label for="quantite"> Quantité</label>
            <input type="text" name="quantite" value="1" aria-disabled="true">
            <!-- <textarea name="codebarre" rows="1" onfocus="this.rows=2"></textarea> -->
            <input type="submit" name="validation" value="Envoyer" />
        </form>
    </div>
</body>

</html>