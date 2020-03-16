<?php

(empty($_POST) ||
  empty($_POST['nom']) ||
  empty($_POST['nom_car']) ||
  empty($_POST['annee']) ||
  empty($_POST['kilometre'])) && exit("Requête invalide");

 if (empty($_POST['visible']))
    $_POST['visible']=1;

require_once 'function/ajoutvoiture.php';
$title = "cible_enregistrement";
require_once 'layout/header.php';
require_once 'layout/nav.php'; ?>

<div class="container mt-4">
  <?php if (ajoutvoiture($_POST['nom'], $_POST['nom_car'], $_POST['annee'], $_POST['kilometre'], $_POST['visible'])) { ?>
    <div class="alert alert-success" role="alert">
      <h2>
        Merci <?php echo $_POST["nom"]; ?> Votre demande a bien été enregistrée
      </h2>
    </div>
  <?php } else { ?>
    <div class="alert alert-danger" role="alert">
      <h2>
        Une erreur est survenue lors de l'enregistrement de votre demande
      </h2>
    </div>
  <?php } ?>
</div>
