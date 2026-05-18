<?php
require_once __DIR__."/../database/connection.php";

function findAllProduits(): array {
    
    $connexion = connectDatabase();

    $requeteSQL = "Select * From Produits";
    $requete = $connexion -> prepare($requeteSQL);
    $requete->execute();

    $requete->setFetchMode(PDO::FETCH_ASSOC);
    $films = $requete->fetchAll();
    return $films;
};

?>

