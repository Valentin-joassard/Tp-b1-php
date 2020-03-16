<?php
require_once __DIR__ . "/connexionBDD.php";

function affichevoiture(): array
{
  $pdo = connexionBDD();

  $stmt = $pdo->query("SELECT id,nom_car ,annee_sortie,nb_km,prix FROM voiture WHERE visible=0");
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}