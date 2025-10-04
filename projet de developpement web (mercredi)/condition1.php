//Exo-condition-1//
<?php
//Utilisez la structure conditionnelle if...else pour afficher un message approprié à partir de la variable suivante :

//$estPresent;

//Si le ministre était présent : affichez "Le ministre était présent".
//Si le ministre n'était pas présent : affichez "Le ministre était absent".
//Pour tester les deux situations, modifiez manuellement la valeur de la variable $estPresent. Mettez-la d'abord à true pour vérifier le premier cas, puis à false pour vérifier le second.
//Utilisez la structure conditionnelle if...else pour afficher un message approprié à partir de la variable suivante :

$estPresent;
$estPresent = true; // Changez cette valeur pour tester les deux cas        
if ($estPresent) {
    echo "Le ministre était présent." . PHP_EOL;
} else {
    echo "Le ministre était absent." . PHP_EOL;
}

//Exo-conditions-02
//Réalisez à nouveau l'exercice 1, mais cette fois-ci, utilisez la structure conditionnelle ternaire.
$estPresent = false; // Changez cette valeur pour tester les deux cas
$message = $estPresent ? "Le ministre était présent." : "Le ministre était absent.";    
echo $message . PHP_EOL;
?>
