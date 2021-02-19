<?php
include_once 'pdo.php';

// On récupère tout le contenu du stock
function GetAllProducts()
{
    global $PDO;
    $req = $PDO->query(
        "SELECT * FROM produits"
    );
    return $req->fetchAll();
};

$products = GetAllProducts();

// function GetPatientById($patient)
// {
//     global $PDO;
//     $response = $PDO->query(
//         "SELECT nom FROM patient WHERE id_interne = '$patient'"
//     );
//     return $response->fetch();
// }

// $patient = $_POST['patient'];
// $patients = GetPatientById($patient);

// On récupère tous les patients
function GetAllPatient()
{
    global $PDO;
    $response = $PDO->query(
        "SELECT * FROM patient"
    );
    return $response->fetchAll();
}

$patients = GetAllPatient();

// On récupère tous les chirurgiens
function GetAllChirurgien()
{
    global $PDO;
    $response = $PDO->query(
        "SELECT * FROM chirurgien"
    );
    return $response->fetchAll();
}

$chirurgien = GetAllChirurgien();

// SELECT fournisseur, type_prothese, reference, numero_lot, numero_serie, date_peremption, id_interne, nom, nom_chirurgien FROM produits, patient, chirurgien WHERE produits.codebarre = 'ERSD-380Q' AND patient.nom = 'TEST' AND chirurgien.nom_chirurgien = 'Amar'

// SELECT fournisseur, type_prothese, reference, numero_lot, numero_serie, date_peremption, id_interne, nom, nom_chirurgien FROM produits, patient, chirurgien WHERE produits.codebarre = 'ERSD-380Q' AND patient.nom = 'TEST' AND chirurgien.nom_chirurgien = 'Amar'