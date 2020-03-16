<?php
$title = "Accueil";
require_once 'layout/header.php';
require_once 'function/affichervoiture.php';

$voiture = affichevoiture();

?>
<div class="container mt-4">
  <div class="row">
    <?php
    foreach ($voiture as $voiture) {
      require 'voiture/voiture.php';
    }
    ?>
  </div>
</div>
<?php require_once 'layout/footer.php'; ?>