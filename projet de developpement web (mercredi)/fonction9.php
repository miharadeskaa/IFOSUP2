<?php

//Exo-fonctions-09
//Créer une fonction permettant de vérifier que le nombre de caractères d'une chaîne est compris entre une valeur minimale et une valeur maximale.

// Appliquer la déclaration stricte des types.
//declare(strict_types=1);

/*
    À COMPLÉTER :
        Déclaration la fonction...
        ...
        ...
*/

// Appeler la fonction "respecteLongueurMinEtMax()" pour vérifier si le nombre de caractères de la chaîne "saperlipopette" est comprise entre 2 et 30 caractères.
//$estLongueurValide = respecteLongueurMinEtMax("saperlipopette", 2, 30);
//var_dump($estLongueurValide); // Affiche : bool(true)

// Appeler la fonction "respecteLongueurMinEtMax()" pour vérifier si le nombre de caractères de la chaîne "saperlipopette" est comprise entre 2 et 8 caractères.
//$estLongueurValide = respecteLongueurMinEtMax("saperlipopette", 2, 8);
//var_dump($estLongueurValide); // Affiche : bool(false)

//2.Copiez les deux fonctions créées précédement respecteLongueurMinimale() et respecteLongueurMaximale().
function respecteLongueurMinEtMax(string $entreeUtilisateur, int $longueurMin, int $longueurMax): bool 
{
    return strlen($entreeUtilisateur) >= $longueurMin && strlen($entreeUtilisateur) <= $longueurMax;
    if (strlen($entreeUtilisateur) >= $longueurMin && strlen($entreeUtilisateur) <= $longueurMax) {
        return true;
        
    } 
    else 
    {
        return false;
        
    }
    
}
      var_dump(respecteLongueurMinEtMax("saperlipopette", 14, 15)); // Affiche : bool(true)

?>
