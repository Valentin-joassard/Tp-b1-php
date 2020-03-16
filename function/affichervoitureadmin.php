<?php
require_once __DIR__ . "/connexionBDD.php";

function affichevoitureadmin(): array
{
  $pdo = connexionBDD();

  $stmt = $pdo->query("SELECT id,nom_car ,annee_sortie,nb_km,prix FROM voiture");
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}