<?php

require_once __DIR__ . '/connexionBDD.php';
require_once __DIR__ . '/prix.php';

function ajoutvoiture(
  string $nom,
  string $nom_car,
  int $annee,
  int $kilometre,
  string $visible
) {
  $pdo = connexionBDD();
  $prix = prix($annee,$kilometre);
  $query = "INSERT INTO voiture (nom, nom_car, annee_sortie, nb_km,prix, visible) VALUES (:nom, :nom_car, :annee, :kilometre,:prix, :visible)";

  $stmt = $pdo->prepare($query);

  return $stmt->execute([
    'nom' => $nom,
    'nom_car' => $nom_car,
    'annee' => $annee,
    'kilometre' => $kilometre,
    'visible' => $visible,
    'prix'=> $prix
  ]);
}