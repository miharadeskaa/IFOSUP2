<?php

//Exo-boucles-08
//Nous aimerions conserver la structure d'une matrice 3x3 après sa conversion d'un tableau bidimensionnel en une chaîne de caractères. L'objectif est de parcourir les valeurs du tableau une à une, de les concaténer dans une variable, et d'insérer des retours à la ligne au bon moment afin d'obtenir une présentation identique à celle du tableau d'origine (3x3 cases).
//$matrice = [
//    ['-1-', '-2-', '-3-'],
//    ['-4-', '-5-', '-6-'],
//    ['-7-', '-8-', '-9-']
//];
//$resultat = "";
//Utilisez deux boucles imbriquées pour parcourir le tableau bidimensionnel $matrice : la première pour parcourir les rangées, la seconde pour parcourir les colonnes de chaque rangée. À chaque itération, ajoutez la valeur correspondante dans la variable $resultat.
//Après chaque valeur, concaténez un espace pour les séparer, et insérez un retour à la ligne une fois qu'une rangée complète a été parcourue.
//Une fois la conversion terminée, affichez dans le terminal la valeur de la variable $resultat afin d'obtenir le résultat suivant :
//-1- -2- -3-
//-4- -5- -6-
//-7- -8- -9-
$matrice = [
    ['-1-', '-2-', '-3-'],
    ['-4-', '-5-', '-6-'],
    ['-7-', '-8-', '-9-']
];
$resultat = ""; // Initialisation de la variable pour stocker le résultat
for ($i = 0; $i < count($matrice); $i++) { // Parcourt les rangées
    for ($j = 0; $j < count($matrice[$i]); $j++) { // Parcourt les colonnes de chaque rangée
        $resultat .= $matrice[$i][$j] . " "; // Concatène la valeur et un espace
    }
    $resultat .= PHP_EOL; // Ajoute un retour à la ligne après chaque rangée
}
echo $resultat; // Affiche le résultat final


//Exo-boucles-09
//Reproduisez le même affichage que dans l'exercice 8, mais cette fois en partant uniquement de la variable $matriceHauteurLargeur (qui définit à la fois la hauteur et la largeur de la matrice) et de la variable $resultat. Vous devez donc construire la matrice dynamiquement sans tableau prédéfini.
$matriceHauteurLargeur = 4; // Définition de la hauteur et de la largeur de la matrice      
$resultat = ""; // Initialisation de la variable pour stocker le résultat
for ($i = 0; $i < $matriceHauteurLargeur; $i++) { // Parcourt les rangées
    for ($j = 0; $j < $matriceHauteurLargeur; $j++) { // Parcourt les colonnes de chaque rangée
        $resultat .= "-" . ($i * $matriceHauteurLargeur + $j + 1) . "- "; // Concatène la valeur formatée et un espace
    }
    $resultat .= PHP_EOL; // Ajoute un retour à la ligne après chaque rangée
}
echo $resultat; // Affiche le résultat final
?>