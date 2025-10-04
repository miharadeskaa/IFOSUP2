<?php
//Exo-fonctions-07
//Créer une fonction permettant de vérifier qu'une chaîne de caractères respecte une longueur minimale.


// Appliquer la déclaration stricte des types.
//declare(strict_types=1);

/*
    À COMPLÉTER :
        Déclaration la fonction...
        ...
        ...
*/

// Appeler la fonction "respecteLongueurMinimale()" pour vérifier si la chaîne "saperlipopette" possède au moins 2 caractères.
//$estLongueurValide = respecteLongueurMinimale("saperlipopette", 2);
//var_dump($estLongueurValide ); // Affiche : bool(true)

// Appeler la fonction "respecteLongueurMinimale()" pour vérifier si la chaîne "saperlipopette" possède au moins 30 caractères.
//$estLongueurValide = respecteLongueurMinimale("saperlipopette", 30);
//var_dump($estLongueurValide ); // Affiche : bool(false)

//2.Déclarez votre fonction respecteLongueurMinimale() avec les paramètres suivants :
//$entreeUtilisateur : La chaîne de caractères dont il faut vérifier la longueur minimale.
//$longueurMin : La valeur minimale que doit posséder la chaîne de caractères.
function respecteLongueurMinimale(string $entreeUtilisateur, int $longueurMin): bool 
{
    return strlen($entreeUtilisateur) >= $longueurMin;
    if (strlen($entreeUtilisateur) >= $longueurMin) {
        return true;
        
    } 
    else 
    {
        return false;
        
    }
    
}
var_dump (respecteLongueurMinimale("",100));

?>