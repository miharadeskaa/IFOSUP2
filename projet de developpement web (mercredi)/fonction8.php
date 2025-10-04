<?php
//Exo-fonctions-08

//Créer une fonction permettant de vérifier qu'une chaîne de caractères ne dépasse pas une longueur maximale.

// Appliquer la déclaration stricte des types.
//declare(strict_types=1);

/*
    À COMPLÉTER :
        Déclaration la fonction...
        ...
        ...
*/

// Appeler la fonction "respecteLongueurMaximale()" pour vérifier si la chaîne "saperlipopette" ne dépasse pas la limites de 30 caractères.
//$estLongueurValide = respecteLongueurMaximale("saperlipopette", 30);
//var_dump($estLongueurValide ); // Affiche : bool(true)

// Appeler la fonction "respecteLongueurMaximale()" pour vérifier si la chaîne "saperlipopette" ne dépasse pas les limites de 2 caractères.
//$estLongueurValide = respecteLongueurMaximale("saperlipopette", 2);
//var_dump($estLongueurValide ); // Affiche : bool(false)

//2.Déclarez votre fonction respecteLongueurMaximale() avec les paramètres suivants :
//$entreeUtilisateur : La chaîne de caractères dont il faut vérifier si elle ne dépasse pas la longueur maximale.
//$longueurMax : La valeur maximale que peut posséder la chaîne de caractères.

function respecteLongueurMaximale(string $entreeUtilisateur, int $longueurMax): bool 
{
    return strlen($entreeUtilisateur) <= $longueurMax;
    if (strlen($entreeUtilisateur) <= $longueurMax) {
        return true;
        
    } 
    else 
    
        return false;
        
}
var_dump (respecteLongueurMaximale("saperlipopette",2));

?>