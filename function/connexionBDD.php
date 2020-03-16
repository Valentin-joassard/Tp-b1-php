<?php


function connexionBDD(): PDO
{
  try {
    $pdo = new PDO(
      "mysql:host=localhost;dbname=voiture",
      "voiture",
      "voiture123"
    );
    return $pdo;
  } catch(PDOException $ex) {

    
    exit("Erreur lors de la connexion à la base de données");
  }
}