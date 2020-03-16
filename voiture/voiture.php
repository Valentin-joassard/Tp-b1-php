<div class="card col-4">
  <div class="card-body">
    <h5 class="card-title">
      <?php echo $voiture['nom_car']; ?>
    </h5>
    <p class="card-text"><?php echo 'kilometres: '. $voiture['nb_km'].' kilometres'; ?></p>
    <p class="card-text"><?php echo 'annee: '. $voiture['annee_sortie']; ?></p>
    <p class="card-text"><?php echo 'prix: '. $voiture['prix'].' euros'; ?></p>
  </div>
</div>