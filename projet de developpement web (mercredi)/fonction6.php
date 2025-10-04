<?php

//Exo-fonctions-06
//Créer une fonction permettant de vérifier la validité d'une adresse email.


// Appliquer la déclaration stricte des types.
declare(strict_types=1);

/*
    À COMPLÉTER :
        Déclaration la fonction...
        ...
        ...
*/

// Appeler la fonction "estValideEmail()" pour vérifier si l'adresse email "claudy.focan@gmail.com" est valide.
$estEmailRempli = estValideEmail("claudy.focan@gmail.com");
var_dump($estEmailRempli); // Affiche : bool(true)

// Appeler la fonction "estValideEmail()" pour vérifier si l'adresse email "claudy.focan" est valide.
$estEmailRempli = estValideEmail("claudy.focan");
var_dump($estEmailRempli); // Affiche : bool(false)

//2.Déclarez votre fonction estValideEmail() avec le paramètre suivant :
//$email : L'email dont on veut vérifier la validité.

function estValideEmail(string $email): bool 
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

//Vérifier la validité de l'email entré en argument.
//Retourner true si l'email est valide, sinon retourner false.
 function estValideEmail2(string $email): bool {
    // Utilisation de la fonction filter_var pour valider l'email
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
//filter_var() : Pour vérifier la validité d'une adresse email.


?>