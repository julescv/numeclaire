<?php


include __DIR__."/../config/database.php";

function connectDatabase() : PDO {
    
    try {
        $dsn = "pgsql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME;
        $connexion = new PDO($dsn, DB_USER, DB_PASSWORD);
        return $connexion;
    } catch (PDOException $erreur) {
        echo "erreur ; " . $erreur->getMessage();
        exit;
    }
}

?>