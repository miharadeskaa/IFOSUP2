<?php

//Avec une boucle foreach et sans utiliser les clés pour cibler les éléments du tableau :

//Parcourez tous les éléments du tableau en partant du premier.
//Dans le terminal, affichez l'élément courant de chaque itération.

$fruits = ["pomme", "banane", "orange", "kiwi", "mangue"]; // Déclaration du tableau de fruits  
foreach ($fruits as $fruit) { // Parcours de chaque élément du tableau
    echo $fruit . PHP_EOL; // Affichage de l'élément courant
}

//Exo-boucles-05
//Réalisez l'exercice 4 mais, toujours avec la boucle foreach mais cette fois-ci utilisez les clés pour cibler les éléments du tableau.
foreach ($fruits as $index => $fruit) { // Parcours de chaque élément du tableau avec les clés
    echo "Index $index : $fruit" . PHP_EOL; // Affichage de l'index et de l'élément courant
}   
//Exo-boucles-06
//Réalisez l'exercice 4 mais cette fois-ci avec la boucle for.
for ($i = 0; $i < count($fruits); $i++) { // Parcours du tableau avec une boucle for
    echo $fruits[$i] . PHP_EOL; // Affichage de l'élément courant
}
//Exo-boucles-07
//Réalisez l'exercice 4 mais cette fois-ci avec la boucle for qui parcourt le tableau dans le sens inverse (du dernier au premier élément). 

for ($i = count($fruits) - 1; $i >= 0; $i--) { // Parcours du tableau à l'envers avec une boucle for
    echo $fruits[$i] . PHP_EOL; // Affichage de l'élément courant
}
?>