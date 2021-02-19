<?php
include_once 'getAllProducts.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortie formulaire</title>
</head>

<body>
    <nav>
        <a href="index.php">Liste</a>
        <a href="sortie.php">Sortie</a>
        <a href="ajout.php">Ajout</a>
    </nav>

    <div>
        <div>
            <form action="getAllProducts.php" method="post">
                <label for="typesortie">Type de sortie</label>
                <select name="typesortie">
                    <option value="">--</option>
                    <option valeur="pose">Pose</option>
                    <option valeur="retour">Retour FSS</option>
                    <option valeur="desterilisation">Désterilisation</option>
                    <option valeur="pret">Prêt</option>
                </select>
                <label for="patient">Code patient</label>
                <input type="text" name="patient" />
                <label for="chirurgien">Chirurgien</label>
                <select name="chirurgien">
                    <option value="">--</option>
                    <option valeur="amar">Dr Amar</option>
                    <option valeur="marinetti">Dr Marinetti</option>
                </select>
                <label for="codebarre">Code-barre</label>
                <input type="text" name="codebarre" onmouseover="this.focus();" />
                <!-- <textarea name="codebarre" rows="1" onfocus="this.rows=2"></textarea> -->
                <input type="submit" name="validation" value="Envoyer" />
            </form>
        </div>
        <div>
            <table>
                <th>Fournisseur</th>
                <th>Type de prothèse</th>
                <th>Réference</th>
                <th>Numéro de lot</th>
                <th>Numéro de série</th>
                <th>Date de péremption</th>
                <?php
                if (isset($products)) {
                    foreach ($products as $product) {
                ?>
                        <tr>
                            <td><?= $product['fournisseur']; ?></td>
                            <td><?= $product['type_prothese']; ?></td>
                            <td><?= $product['reference']; ?></td>
                            <td><?= $product['numero_lot']; ?></td>
                            <td><?= $product['numero_serie']; ?></td>
                            <td><?= $product['date_peremption']; ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </table>
            <table>
                <th>Identifiant</th>
                <th>Nom du patient</th>
                <?php
                if (isset($patients)) {
                    foreach ($patients as $onePatient) {
                ?>
                        <tr>
                            <td><?= $onePatient['id_interne']; ?></td>
                            <td><?= $onePatient['nom']; ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </table>
            <table>
                <th>Chirurgien</th>
                <?php
                if (isset($chirurgien)) {
                    foreach ($chirurgien as $oneChirurgien) {
                ?>
                        <tr>
                            <td><?= $oneChirurgien['nom_chirurgien']; ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>