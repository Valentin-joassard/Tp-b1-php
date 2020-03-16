<?php
$title = "Enregistrement";
require_once 'layout/header.php';

?>
<div class="container mt-4">
  <form action="cible_enregistrement.php" method="POST">
    <div class="form-group">
      <label for="nom">Votre nom et prenom</label>
      <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nomHelp">
      <small id="nomHelp" class="form-text text-muted">Entrez votre nom</small>
    </div>
    <div class="form-group">
      <label for="prenom">Nom de la voiture</label>
      <input type="text" class="form-control" id="nom_car" name="nom_car" aria-describedby="nom_carHelp">
      <small id="prenomHelp" class="form-text text-muted">Entrez le nom de votre voiture</small>
    </div>
    <div class="form-group">
      <label for="annee">Année du véhicule</label>
      <input type="text" class="form-control" id="annee" name="annee" aria-describedby="anneeHelp">
      <small id="anneeHelp" class="form-text text-muted">Entrez l'année du véhicule</small>
    </div>
    
    <div class="form-group">
      <label for="jilometre">Nombre de kilometres </label>
      <input type="int" class="form-control" id="kilometre" name="kilometre" aria-describedby="kilometreHelp">
      <small id="kilometreHelp" class="form-text text-muted">Entrez le nombre de kilometre de votre véhiculef</small>
    </div>
    <div class="form-check">
    <input type="checkbox" class="form-check-input" id="visible" name="visible">
    <label class="form-check-label" for="visible">véhicule visible</label>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    
  </form>
</div>
<?php require_once 'layout/footer.php'; ?>