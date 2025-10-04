<?php
//Exo-boucles-03
//L'objectif de l'exercice suivant est de réaliser un petit programme avec la boucle while qui vous demandera de trouver un nombre mystère (entre 1 et 20) :

//Déclarez et initialisez la variable $nombreMystere avec la fonction rand() pour qu'elle renvoie un nombre entier de façon pseudo-aléatoire compris entre 1 et 20.
//Déclarez et initialisez la variable $compteur qui sera utiliser pour stocker le nombre de tentatives.
//Utilisez la fonction readline() pour que le programme vous demande de proposer un nombre jusqu'au moment votre nombre sera égal à celui du nombre mystère.
//Si le nombre que vous proposez n'est pas le bon, le programme vous affichera ceci dans la console avant de vous demander une nouvelle proposition :
//Si le nombre mystère est plus petit que le nombre proposé : "Le nombre mystère est plus petit!"
//Si le nombre mystère est plus grand que le nombre proposé : "Le nombre mystère est plus grand!"
//Finalement, lorsque le nombre mystère est trouvé, le programme affichera ceci : "Félicitations, vous avez découvert le nombre mystère : $nombreMystere en $compteur tentatives."

$nombreMystere = rand(1, 20); // Génère un nombre mystère entre 1 et 20         
$compteur = 0; // Initialisation du compteur de tentatives

do {
    $proposition = (int)readline("Proposez un nombre entre 1 et 20 : "); // Demande une proposition à l'utilisateur
    $compteur++; // Incrémente le compteur de tentatives

    if ($proposition < $nombreMystere) {
        echo "Le nombre mystère est plus grand!" . PHP_EOL; // Indique que le nombre mystère est plus grand
    } elseif ($proposition > $nombreMystere) {
        echo "Le nombre mystère est plus petit!" . PHP_EOL; // Indique que le nombre mystère est plus petit
    }
} while ($proposition !== $nombreMystere); // Continue jusqu'à ce que la proposition soit correcte
echo "Félicitations, vous avez découvert le nombre mystère : $nombreMystere en $compteur tentatives." . PHP_EOL; // Félicite l'utilisateur
?>