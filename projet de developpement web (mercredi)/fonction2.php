<?php
//Exo-fonctions-02
//Objectif : Réorganiser le code réalisé lors de l'exercice précédent en décomposant la logique en 2 petites fonctions. Cela permettra à chaque fonction de se concentrer sur une tâche spécifique, rendant le code plus clair, plus facile à maintenir et plus évolutif.

// Appliquer la déclaration stricte des types.
declare(strict_types=1);

/*
    À COMPLÉTER :
        Déclaration des deux fonctions...
        ...
        ...
*/

// Le tableau dont en veut calculer la moyenne.
$listeDeNombres = [8, 7, 6.5, 4.5, 7, 8];

// Appeler la fonction "calculerMoyenne()" pour calculer les nombres présents dans le tableau "$listeDeNombres".
$moyenne = calculerMoyenne($listeDeNombres);

// Convertir le tableau en chaîne de caractères.
$listeDeNombres = convertirTableauEnChaineDeCaracteres($listeDeNombres);

// Afficher la moyenne.
echo "La moyenne des nombres [ $listeDeNombres ] : $moyenne"; // Affiche : La moyenne des nombres [ 8, 7, 6.5, 4.5, 7, 8 ] : 6.8333333333333

//Déclarez votre fonction calculerMoyenne() avec le paramètre suivant :
//$nombres : Un tableau avec les nombres dont il faut calculer la moyenne.

//Complétez son bloc d'instructions :
//Retourner la moyenne des nombres contenus dans le tableau passé en argument, tout en évitant les erreurs en cas de tableau vide (division par zéro).
function calculerMoyenne(array $nombres): float {
    if (count($nombres) === 0) {
        return 0.0;
    }
    
    $somme = array_sum($nombres);
    return $somme / count($nombres);
}

function convertirTableauEnChaineDeCaracteres(array $nombres): string {
    $chaine = "";
    foreach ($nombres as $index => $nombre) {
        $chaine .= $nombre;
        if ($index < count($nombres) - 1) {
            $chaine .= ", ";
        }
    }
    return $chaine;
}
?>