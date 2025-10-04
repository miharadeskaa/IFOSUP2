<?php
//Exo-variables-13//
//Vérifiez si le film "Dune" est présent dans le tableau suivant.

$films = ['Blade Runner 2049', 'Dune', 'Minority Report', 'Gattaca', 'Interstellar'];
if (in_array('Dune', $films)) {
    echo "Le film 'Dune' est présent dans le tableau." . PHP_EOL;
} else {
    echo "Le film 'Dune' n'est pas présent dans le tableau." . PHP_EOL;
}
?>