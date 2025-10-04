#Exercices - Part 03
<?php
//Exo-variables-11//
//Combinez les deux tableaux ci-dessous, stockez le résultat dans une nouvelle variable, puis affichez ce résultat.

$tab1 = ['Blade Runner 2049', 'Dune', 'minority Report'];
$tab2 = ['Gattaca', 'Dune', 'Interstellar'];
$tab3 = array_merge($tab1, $tab2);
print_r($tab3);
?>

