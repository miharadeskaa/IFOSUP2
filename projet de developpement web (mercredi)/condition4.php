Exo-conditions-04
<?php
//Réalisez à nouveau l'exercice 3, mais cette fois-ci, utilisez la structure conditionnelle switch
$etatEbriete = readline("Quel était l'état d'ébriété du ministre (0 = sobre, 1 = joyeux, 2 = ivre) : ");
switch ($etatEbriete) {
    case 0:
        echo "Le ministre est sobre et responsable !";
        break;
    case 1:
        echo "Le ministre est joyeux !";
        break;
    case 2:
        echo "Le ministre est ivre !";
        break;
    default:
        echo "Erreur ! État d'ébriété inconnu !";
        break;
}   
?>
