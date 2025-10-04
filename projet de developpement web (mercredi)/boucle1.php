<?php
//Créer un programme qui affiche un compte à rebours de 5 à 1.

//À l'aide d'une boucle while, faites en sorte que le compteur commence à 5 et s'arrête lorsqu'il atteint 1.
//Affichez dans le terminal la valeur du compteur à chaque itération de la boucle.
$compteur = 5;
while ($compteur >= 1) {            
    echo $compteur . PHP_EOL;
    $compteur--;
}
