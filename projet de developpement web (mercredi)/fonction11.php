<?php

//Exo-fonctions-11

//Créer une fonction permettant de récupérer les éventuelles erreurs d'un formulaire si les entrées utilisateurs ne respectent pas les règles définies pour les champs.


// Appliquer la déclaration stricte des types.
declare(strict_types=1);

/*
    À COMPLÉTER :
        Déclaration des 6 fonctions...
        ...
        ...
*/

// Les règles des champs du formulaires
$regleDesChamps = [
    'nom' => [
        'requis' => true,
        'longueurMin' => 2,
        'longueurMax' => 255
    ],
   'email' => [
       'requis' => true,
        'type' => 'email'
    ]
];

// Simulation d'entrées utilisateur valides provenant d'un formulaire.
$entreesUtilisateurValides = [
   'nom' => 'Claudy',
    'email' => 'claudy.focan@gmail.com'
];

// Simulation d'entrées utilisateur invalides provenant d'un formulaire.
$entreesUtilisateurInvalides = [
    'email' => 'claudy.focan'
];

// Appeler la fonction "verifierValiditeChamps()" pour vérifier si les entrées utilisateurs respectent les règles de champ du formulaire.
$erreurs = verifierValiditeChamps($regleDesChamps, $entreesUtilisateurValides);
print_r($erreurs);
/*
    Affiche :
        Array
        (
        )
*/

// Appeler la fonction "verifierValiditeChamps()" pour vérifier si les entrées utilisateurs respectent les règles de champ du formulaire.
$erreurs = verifierValiditeChamps($regleDesChamps, $entreesUtilisateurInvalides);
print_r($erreurs);
/*
    Affiche :
        Array
        (
            [nom] => Ce champs est requis!
            [email] => Email invalide!
        )
*/

//2.Copiez les 5 fonctions créées précédement estValideEmail(), respecteLongueurMinimale(), respecteLongueurMaximale(), respecteLongueurMinEtMax() et estRempli().
function estValideEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
function respecteLongueurMinimale($chaine, $longueurMin) {
    return strlen($chaine) >= $longueurMin;
}
function respecteLongueurMaximale($chaine, $longueurMax) {
    return strlen($chaine) <= $longueurMax;
}

function respecteLongueurMinEtMax($chaine, $longueurMin, $longueurMax) {
    $longueur = strlen($chaine);
    return $longueur >= $longueurMin && $longueur <= $longueurMax;
}
function estRempli($chaine) {
    return !empty(trim($chaine));
}
//3.Déclarez votre fonction verifierValiditeChamps() avec les deux paramètres suivants :
$reglesDesChamps : Le tableau avec les règles des champs permettant de valider les entrées utilisateur.
$entreesUtilisateur : Le tableau des entrées utilisateur (provenant du formulaire simulé).

function verifierValiditeChamps($reglesDesChamps, $entreesUtilisateur) {
    $erreurs = [];

    foreach ($reglesDesChamps as $champs => $regles) {
        $valeur = isset($entreesUtilisateur[$champs]) ? $entreesUtilisateur[$champs] : '';

        // Vérification si le champ est requis et s'il est rempli.
        if (($regles['requis'] ?? false) && !estRempli($valeur)) {
            $erreurs[$champs] = "Ce champ est requis!";
            continue; // Passer aux règles suivantes si le champ est requis mais non rempli.
        }

        // Vérification des autres règles si le champ n'est pas vide.
        if (estRempli($valeur)) {
            if (isset($regles['type']) && $regles['type'] === 'email' && !estValideEmail($valeur)) {
                $erreurs[$champs] = "Email invalide!";
                continue;
            }
            if (isset($regles['longueurMin']) && isset($regles['longueurMax'])) {
                if (!respecteLongueurMinEtMax($valeur, $regles['longueurMin'], $regles['longueurMax'])) {
                    $erreurs[$champs] = "Doit contenir entre {$regles['longueurMin']} et {$regles['longueurMax']} caractères!";
                    continue;
                }
            } else {
                if (isset($regles['longueurMin']) && !respecteLongueurMinimale($valeur, $regles['longueurMin'])) {
                    $erreurs[$champs] = "Doit contenir au moins {$regles['longueurMin']} caractères!";
                    continue;
                }
                if (isset($regles['longueurMax']) && !respecteLongueurMaximale($valeur, $regles['longueurMax'])) {
                    $erreurs[$champs] = "Ne doit pas dépasser {$regles['longueurMax']} caractères!";
                    continue;
                }
            }
        }
    }

    return $erreurs;
}
var_dump(verifierValiditeChamps(
    [
        'nom' => [
            'requis' => true,
            'longueurMin' => 1,
            'longueurMax' => 255
        ],
        'email' => [
            'requis' => true,
            'type' => 'email'
        ]
    ],
    [
        'nom' => 'Claudy',
        'email' => 'claudy.focan@gmail.com'
    ]
));

?>