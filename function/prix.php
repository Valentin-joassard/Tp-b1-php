<?php
function prix(
    int $annee,
    int $kilometre
){
    $prix=$annee*$kilometre/10000;
    return $prix;
}
?>