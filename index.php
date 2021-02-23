<?php
include_once 'getAllProducts.php';
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste stock</title>
</head>

<body>
    <nav>
        <a href="index.php">Liste</a>
        <a href="sortie.php">Sortie</a>
        <a href="ajout.php">Ajout</a>
    </nav>

    <div>
        <table>
            <th>Fournisseur</th>
            <th>Type de stock</th>
            <th>Type de prothèse</th>
            <th>Réference</th>
            <th>N° de lot</th>
            <th>N° de série</th>
            <th>Date de péremption</th>
            <?php
            if (isset($products)) {
                foreach ($products as $product) {
                    if ($product['quantite'] > 0) {
            ?>
                        <tr>
                            <td><?= $product['fournisseur']; ?></td>
                            <td><?= $product['typestock']; ?></td>
                            <td><?= $product['type_prothese']; ?></td>
                            <td><?= $product['reference']; ?></td>
                            <td><?= $product['numero_lot']; ?></td>
                            <td><?= $product['numero_serie']; ?></td>
                            <td><?= $product['date_peremption']; ?></td>
                        </tr>
            <?php
                    }
                }
            }
            ?>
        </table>
    </div>
</body>

</html>