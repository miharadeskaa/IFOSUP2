//Exo-condition-3//

<?php
//Utilisez la structure conditionnelle if... elseif... else pour afficher le message approprié en fonction de la valeur entrée par l'utilisateur à l'aide de la fonction readline() et stockée dans la variable $etatEbriete. 3 états d'ébriété sont acceptés : (0 = sobre, 1 = joyeux, 2 = ivre) :

//$etatEbriete = readline("Quel était l'état d'ébriété du ministre (0 = sobre, 1 = joyeux, 2 = ivre) : ");

//Si l'état d'ébriété est 0, affichez "Le ministre est sobre et responsable !"
//Si l'état d'ébriété est 1, affichez "Le ministre est joyeux !"
//Si l'état d'ébriété est 2, affichez "Le ministre est ivre !"
//Si l'état d'ébriété ne correspond à aucune de ces valeurs, affichez "Erreur ! État d'ébriété inconnu !"
//Testez les différentes valeurs de la variable $etatEbriete pour vous assurer que les messages s'affichent correctement en fonction de l'état d'ébriété.
$etatEbriete = readline("Quel était l'état d'ébriété du ministre (0 = sobre, 1 = joyeux, 2 = ivre) : ");
if ($etatEbriete == 0) {    
    echo "Le ministre est sobre et responsable !" . PHP_EOL;
} elseif ($etatEbriete == 1) {
    echo "Le ministre est joyeux !" . PHP_EOL;
} elseif ($etatEbriete == 2) {
    echo "Le ministre est ivre !" . PHP_EOL;
} else {
    echo "Erreur ! État d'ébriété inconnu !" . PHP_EOL;
}
?>
