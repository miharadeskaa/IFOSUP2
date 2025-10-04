<?php
//Exo-boucles-02
//Créer un compteur paramétrable dont la valeur de départ et la valeur de fin peuvent être définies à partir des variables $valDebut et $valFin.

//Déclarez et initialisez deux variables :
//$valDebut, qui représentera la valeur de départ du compteur
//$valFin, qui représentera la valeur d'arrêt
//À l'aide d'une boucle while, faites en sorte que le compteur commence à la valeur contenue dans $valDebut et s'arrête une fois qu'il atteint la valeur contenue dans $valFin.
//Affichez dans le terminal la valeur du compteur à chaque itération de la boucle, de $valDebut jusqu'à $valFin.

$valDebut = 3; // Valeur de départ du compteur          
$valFin = 7;   // Valeur d'arrêt du compteur
$compteur = $valDebut; // Initialisation du compteur avec la valeur de départ
while ($compteur <= $valFin) {            
    echo $compteur . PHP_EOL;
    $compteur++;
}
?>