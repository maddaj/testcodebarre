<?php
include_once 'pdo.php';

$typestock = $_POST['typestock'];
$fournisseur = $_POST['fournisseur'];
$typeProthese = $_POST['typeProthese'];
$reference = $_POST['reference'];
$lot = $_POST['numLot'];
$serie = $_POST['numSerie'];
$peremption = $_POST['datePeremption'];
$code = $_POST['codebarre'];
$quantite = $_POST['quantite'];

// Ajouter une entrée dans le stock en bdd 
$req = $PDO->prepare('INSERT INTO produits(typestock, fournisseur, type_prothese, reference, numero_lot, numero_serie, date_peremption, codebarre, quantite) VALUES(:typestock, :fournisseur, :typeProthese, :reference, :lot, :serie, :peremption, :code, :quantite)');
$req->execute(array(
    'typestock' => $typestock,
    'fournisseur' => $fournisseur,
    'typeProthese' => $typeProthese,
    'reference' => $reference,
    'lot' => $lot,
    'serie' => $serie,
    'peremption' => $peremption,
    'code' => $code,
    'quantite' => $quantite
));

function UpdateProducts()
{
    global $PDO;
    $req = $PDO->prepare("UPDATE produits SET quantite = '0' WHERE codebarre = :code");
    $req->execute(array(
        'quantite' => $quantite,
    ));
    return $req->fetch();
};
// On récupère un produit par son code-barre
// function GetProductByBarcode()
// {
//     global $PDO;
//     $response = $PDO->query(
//         "SELECT codebarre, quantite FROM produit WHERE codebarre = '$code'"
//     );
//     return $response->fetchAll();
// }

// var_dump(GetProductByBarcode());
