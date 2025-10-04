<?php
//Exo-fonctions-10
//Créer une fonction permettant de vérifier si un champ spécifique d'un formulaire a bien été rempli.


// Appliquer la déclaration stricte des types.
//declare(strict_types=1);

/*
    À COMPLÉTER :
        Déclaration la fonction...
        ...
        ...
*/

// Simulation d'entrées utilisateur provenant d'un formulaire.
//$entreesUtilisateur = [
   // 'nom' => 'Claudy',
   // 'email' => 'claudy.focan@gmail.com'
//];

// Appeler la fonction "estRempli()" pour vérifier que le champ requis nommé "nom" a bien été rempli.
//$estNomRempli = estRempli("nom", $entreesUtilisateur);
//var_dump($estNomRempli); // Affiche : bool(true)

// Appeler la fonction "estRempli()" pour vérifier que le champ requis nommé "prenom" a bien été rempli.
//$estPrenomRempli = estRempli("prenom", $entreesUtilisateur);
//var_dump($estPrenomRempli); // Affiche : bool(false)

//2.Déclarez votre fonction estRempli() avec les deux paramètres suivants :
//$nomDuChampnom : Nom de la clé textuelle dont on veut vérifier la valeur.
//$entreesUtilisateur : Le tableau des entrées utilisateur dans lequel on va chercher la valeur de la clé textuelle passée en premier argument.
function estRempli(string $nomDuChamp, array $entreesUtilisateur): bool 
{
    return isset($entreesUtilisateur[$nomDuChamp]) && trim($entreesUtilisateur[$nomDuChamp]) !== '';
}
var_dump(estRempli("nom", ["nom" => "claudy", "email" => ""]));

?>