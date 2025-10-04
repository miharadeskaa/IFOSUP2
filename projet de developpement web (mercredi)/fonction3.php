<?php

//Exo-fonctions-03
//Objectif : Développer une série de fonctions permettant d'afficher la moyenne des nombres contenus dans un tableau, en ne prenant en compte que les valeurs valides (c'est-à-dire les valeurs numériques). Ces fonctions afficheront également le résultat de la somme, en précisant les valeurs utilisées pour le calcul ainsi que celles ayant été rejetées.

// Appliquer la déclaration stricte des types.
declare(strict_types=1);

/*
    À COMPLÉTER :
        Déclaration des 4 fonctions...
        ...
        ...
*/

// Le tableau dont en veut calculer la moyenne.
$listeDeNombres = [8, 'trois', 7, 6.5, 'cinq', 4.5, 7, 8];

// Appeler la fonction "afficherMoyenne()" pour calculer et afficher les nombres présents dans le tableau "$listeDeNombres".
afficherMoyenne($listeDeNombres);
/*
    Affiche :
        La moyenne des nombres [ 8, 7, 6.5, 4.5, 7, 8 ] : 6.8333333333333
        Les valeurs ayant été rejetées ['trois', 'cinq']
*/

//2.Déclarez votre fonction calculerSomme() ( array_sum() maison ) avec le paramètre suivant :
//$nombres : Un tableau avec les nombres dont il faut calculer la somme.
function calculerSomme(array $nombres): float {
    $somme = 0.0;
    foreach ($nombres as $nombre) {
        $somme += $nombre;
    }
    return $somme;
}   
//Parcourir les valeurs du tableau passé en argument $nombres, additionner chaque valeur numérique au résultat de la somme et ajouter les valeurs valides dans un tableau de sortie.
function filtrerNombres(array $nombres): array {
    $nombresValides = [];
    foreach ($nombres as $nombre) {
        if (is_numeric($nombre)) {
            $nombresValides[] = $nombre;
        }
    }
    return $nombresValides;
}
//Retourner un tableau avec la somme et le tableau avec les nombres valides.
function calculerMoyenne(array $nombres): array {
    $nombresValides = filtrerNombres($nombres);
    $somme = calculerSomme($nombresValides);
    return [$somme, $nombresValides];
}

//3.Déclarez votre fonction calculerMoyenne() avec le paramètre suivant :
//$nombres : Un tableau avec les nombres dont il faut calculer la moyenne.
function afficherMoyenne(array $nombres): void {
    $valides = filtrerNombres($nombres);
    $somme = calculerSomme($valides);
    $moyenne = count($valides) ? $somme / count($valides) : 0;
    echo "La moyenne des nombres [ ";
    $countValides = count($valides);
    foreach ($valides as $i => $val) {
        echo $val;
        if ($i < $countValides - 1) {
            echo ", ";
        }
    }
    echo " ] : $moyenne\n";
    $rejetees = array_diff($nombres, $valides);
    if ($rejetees) {
        echo "Les valeurs ayant été rejetées [ ";
        $countRejetees = count($rejetees);
        $i = 0;
        foreach ($rejetees as $rej) {
            echo $rej;
            if ($i < $countRejetees - 1) {
                echo ", ";
            }
            $i++;
        }
        echo " ]\n";
    }
}
//Récupérer la somme et les tableaux des nombres valides à l'aide de la fonction calculerSomme().
function afficherMoyenneOld(array $nombres): void {
    list($somme, $nombresValides) = calculerMoyenne($nombres);
    if (count($nombresValides) === 0) {
        echo "Le tableau est vide ou ne contient pas de nombres valides, impossible de calculer la moyenne.";
        return;
    }
    $moyenne = $somme / count($nombresValides);
    $chaineNombres = implode(", ", $nombresValides);
    echo "La moyenne des nombres [ $chaineNombres ] : $moyenne\n";
    
    $nombresRejetes = array_diff($nombres, $nombresValides);
    if (!empty($nombresRejetes)) {
        $chaineRejetes = implode(", ", $nombresRejetes);
        echo "Les valeurs ayant été rejetées [ $chaineRejetes ]\n";
    }
}
//Calculer la moyenne.
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