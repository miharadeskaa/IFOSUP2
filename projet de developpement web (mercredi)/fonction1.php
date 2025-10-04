<?php
//Exo-fonctions-01
//Objectif : Créer une fonction permettant de calculer la moyenne des nombres contenus dans un tableau et d'afficher un résultat détaillé sous forme de chaîne de caractères.

// Appliquer la déclaration stricte des types.
declare(strict_types=1);

/*
    À COMPLÉTER :
        Déclaration de la fonction...
        ...
        ...
*/

// Le tableau dont en veut calculer la moyenne.
$listeDeNombres = [8, 7, 6.5, 4.5, 7, 8];

// Appeler la fonction "afficherMoyenne()" pour afficher la liste des nombres du tableau listeDeNombres, ainsi que leur moyenne.
afficherMoyenne($listeDeNombres); // Affiche : La moyenne des nombres [ 8, 7, 6.5, 4.5, 7, 8 ] : 6.8333333333333



//Déclarez votre fonction afficherMoyenne() avec le paramètre suivant :
//$nombres : Le tableau des nombres dont il faut calculer la moyenne.
//Complétez son bloc d'instructions :
//Calculer la moyenne des nombres du tableau passé en argument. Attention aux erreurs pouvant être générées par un tableau vide (division par zéro)
//Convertir le tableau en chaîne de caractères.
//Afficher la chaîne de caractères (liste des nombres) suivie du résultat de la moyenne.
//Vous aurez besoin des fonctions prédéfinies suivantes :

//implode() : Permet de convertir un tableau en chaîne de caractères.
//array_sum() : Permet de calculer la somme des éléments d'un tableau.
//Pour obtenir plus d'informations concernant cette méthode, rendez-vous sur la documentation officielle de PHP.
function afficherMoyenne(array $nombres): void {
    if (count($nombres) === 0) {
        echo "Le tableau est vide, impossible de calculer la moyenne.";
        return;
    }
    
    $somme = array_sum($nombres);
    $moyenne = $somme / count($nombres);
    $chaineNombres = implode(", ", $nombres);
    
    echo "La moyenne des nombres [ $chaineNombres ] : $moyenne";
}
?>