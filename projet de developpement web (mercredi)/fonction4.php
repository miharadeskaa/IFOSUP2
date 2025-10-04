<?php
//Créer un programme qui permet de convertir un prix hors taxes ( HT ) en prix toutes taxes comprises ( TTC ) en utilisant 2 fonctions distinctes.

// Appliquer la déclaration stricte des types.
declare(strict_types=1);

/*
    À COMPLÉTER :
        Déclaration des 2 fonctions...
        ...
        ...
*/

// Afficher le prix TTC d'un article de 100 euros HT, la TVA est de 21%.
echo ajouterTva(100, 21) . PHP_EOL; // Affiche : 121

// Afficher le prix TTC d'un article de 100 euros HT, la TVA est de 12%.
echo ajouterTva(100, 12) . PHP_EOL; // Affiche : 112

//2.Déclarez votre fonction calculerMontantTvaPrixHT() avec les paramètres suivants :
//$prixHt : Le prix hors TVA.
//$tva : Le taux de TVA.
function calculerMontantTvaPrixHT(float $prixHt, float $tva): float {
    return ($prixHt * $tva) / 100;
}
echo calculerMontantTvaPrixHT(100, 21) . PHP_EOL; // Affiche : 21
echo calculerMontantTvaPrixHT(100, 12) . PHP_EOL;   // Affiche : 12

//3.Déclarez votre fonction ajouterTva() avec les paramètres suivants :
//$prixHt : Le prix hors TVA.
//$tva : Le taux de TVA.
/*
Obtenir le montant de la TVA à l'aide de la fonction calculerMontantTvaPrixHT().
Ajouter le montant de la TVA au prix hors TVA.
Arrondir le montant à 3 décimales.
Retourner le montant arrondi.
*/
function ajouterTva(float $prixHt, float $tva): float {
    $montantTva = calculerMontantTvaPrixHT($prixHt, $tva);
    return round($prixHt + $montantTva, 3);
}

?>