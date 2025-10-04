Exo-conditions-05
<?php
//Écrivez un programme qui évalue la réaction du ministre en fonction de plusieurs scénarios à l'aide de structures conditionnelles imbriquées :

//Pour faciliter la lecture, utilisez trois variables pouvant accueillir une valeur booléenne : $estPresent, $aFaitPipi, et $estEmeche, qui correspondent respectivement à la présence du ministre, au fait qu'il ait été vu en train de faire pipi, et à son état d'ébriété. Par exemple :

$estPresent = true;
$aFaitPipi = false;
$estEmeche = true;

//Si le ministre était présent :
//Si le ministre a été vu en train de faire pipi :
//Si le ministre était éméché, affichez le message "Le ministre ne se souvient pas de tout à cause de son état d'ébriété."
//Sinon, affichez le message "Le ministre était en train de jouer un air de guitare devant ses invités."
//Si le ministre n'a pas été vu en train de faire pipi, affichez le message "Le ministre était là, mais il ne savait rien des agissements de ses invités."
//Si le ministre n'était pas présent, affichez le message "Le ministre n'était pas là pendant l'incident."
//Testez votre programme en modifiant les valeurs des variables pour chaque scénario, et vérifiez que les messages s'affichent correctement en fonction des conditions.
if ($estPresent) {
    if ($aFaitPipi) {
        if ($estEmeche) {
            echo "Le ministre ne se souvient pas de tout à cause de son état d'ébriété." ;
        } else {
            echo "Le ministre était en train de jouer un air de guitare devant ses invités." ;
        }
    } else {
        echo "Le ministre était là, mais il ne savait rien des agissements de ses invités." ;
    }
} else {
    echo "Le ministre n'était pas là pendant l'incident.";
}
?>
