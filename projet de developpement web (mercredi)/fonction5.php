<?php
//Exo-fonctions-05
//Objectif : Créer un programme qui permet de convertir un prix toutes taxes comprises ( TTC ) en prix hors taxes ( HT ) en utilisant 2 fonctions distinctes.


// Appliquer la déclaration stricte des types.
declare(strict_types=1);

/*
    À COMPLÉTER :
        Déclaration des 2 fonctions...
        ...
        ...
*/

// Afficher le prix HT d'un article de 100 euros TTC, la TVA est de 21%.
echo retirerTva(100, 21) . PHP_EOL; // Affiche : 82.645

// Afficher le prix HT d'un article de 100 euros TTC, la TVA est de 12%.
echo retirerTva(100, 12) . PHP_EOL; // Affiche : 89.286

//2.Déclarez votre fonction calculerMontantTvaPrixTTC() avec les paramètres suivants :
// $prixTtc : Le prix avec TVA.
// $tva : Le taux de TVA.
//Calculer et retourner le montant de la TVA à partir d'un avec TVA :
//(prix avec TVA * taux de la TVA) / (100 + taux de la TVA).
function calculerMontantTvaPrixTTC(float $prixTtc, float $tva): float {
    return ($prixTtc * $tva) / (100 + $tva);
}
echo calculerMontantTvaPrixTTC(100, 21) . PHP_EOL; // Affiche : 17.355
echo calculerMontantTvaPrixTTC(100, 12) . PHP_EOL;   // Affiche : 10.714
//3.Déclarez votre fonction retirerTva() avec les paramètres suivants :
// $prixTtc : Le prix avec TVA.
// $tva : Le taux de TVA.

function retirertva(float $prixTtc, float $tva): float {
    $montantTva = calculerMontantTvaPrixTTC($prixTtc, $tva);
    return round($prixTtc - $montantTva, 3);
}

?>