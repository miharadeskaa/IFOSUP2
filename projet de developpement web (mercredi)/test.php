
<?php
#Exercice 1 : Afficher une chaîne de caractères"

$eleve1 = 'Sébastien';
$eleve2 = 'Martine';
$eleve1NoteMath = 4;
$eleve1NoteFrancais = 2;
echo "Comme dirait $eleve2 : \"$eleve1 est vraiment un cancre, il n'a que " . (($eleve1NoteMath + $eleve1NoteFrancais) / 2) . " de moyenne ";



$claudyVousDitBonjour = 'coucou petite perruche !' . PHP_EOL;

$claudyVousDitAurevoir = str_replace('coucou', 'au revoir', $claudyVousDitBonjour);
ucfirst($claudyVousDitBonjour);
echo strtoupper($claudyVousDitBonjour);

#Exercice 2 : Manipuler des chaînes de caractères

//Exo-variables-03
//Construisez un tableau multidimensionnel nommé $listeDeFilmsParCategorie basé sur les clés et le contenu suivant :

//horreur:0:
//nomDuFilm: Hellraiser
//realisateur: Clive Barker
//annee: 1987
//1:
//nomDuFilm: La Colline a des Yeux
//realisateur: Alexandre Aja
//annee: 2006
//comedie:
//0:
//nomDuFilm: Dikkenek
//realisateur: Olivier Van Hoofstadt
//annee: 2006
//Vérifiez la bonne structure du tableau $listeDeFilmsParCategorie en affichant son contenu avec la fonction prédéfinie print_r(), qui permet de visualiser un tableau de manière lisible.
$films = [
    'horreur' => [
        [
            'nom du film' => 'Hellraiser',
            'realisateur' => 'Clive Barker',
            'annee' => 1987
        ],
        [
            'nom du film' => 'La Colline a des Yeux',
            'realisateur' => 'Alexandre Aja',
            'annee' => 2006
        ]
    ],
    'comedie' => [
        [
            'nom du film' => 'Dikkenek',
            'realisateur' => 'Olivier Van Hoofstadt',
            'annee' => 2006
        ]
    ]
];
print_r($films);

//Exo-variables-04
//À partir du tableau $listeDeFilmsParCategorie, affichez l'année de sortie du film "La Colline a des Yeux" en accédant à la valeur correspondante à l'aide des clés appropriées.
echo $films['horreur'][1]['annee'] . PHP_EOL;
//Exo-variables-05
//Réalisez une mutation du tableau associatif $listeDeFilmsParCategorie en y ajoutant une nouvelle catégorie "science fiction" et ses films.
//scienceFiction:0:
//nomDuFilm: Blade Runner 2049
//realisateur: Denis Villeneuve
//annee: 2017
//1:
//nomDuFilm: Dune
//realisateur: Denis Villeneuve
//annee: 2021
//2:
//nomDuFilm: Minority Report
//realisateur: Steven Spielberg
//annee: 2002
//Assurez-vous que la catégorie ainsi que ses films ont été ajoutés au bon emplacement en affichant le contenu du tableau $listeDeFilmsParCategorie à l'aide de la fonction prédéfinie print_r
$films['scienceFiction'] = [
    [
        'nomDuFilm' => 'Blade Runner 2049',
        'realisateur' => 'Denis Villeneuve',
        'annee' => 2017
    ],
    [
        'nomDuFilm' => 'Dune',
        'realisateur' => 'Denis Villeneuve',
        'annee' => 2021
    ],
    [
        'nomDuFilm' => 'Minority Report',
        'realisateur' => 'Steven Spielberg',
        'annee' => 2002
    ]
];
print_r($films);


//Exo-variables-06//
//Réalisez une mutation du tableau $listeDeFilmsParCategorie en ajoutant un nouveau film dans la catégorie "comédie", à l'aide d'une affectation avec les clés appropriées :

//nomDuFilm: Le Dîner de cons
//realisateur: Francis Veber
//annee: 1998
//Assurez-vous que le film a été ajouté au bon emplacement en affichant le contenu de la catégorie comédie à l'aide de la fonction prédéfinie print_r().
$films['comedie'][] = [
    'nomDuFilm' => 'Le Dîner de cons',
    'realisateur' => 'Francis Veber',
    'annee' => 1998
];
print_r($films['comedie']);

//Exo-variables-07//
//À partir du tableau $listeDeFilmsParCategorie, réalisez une mutation en supprimant (avec unset()) le film Dune dans la catégorie "Science fiction".//
//Affichez ensuite la catégorie avec print_r() pour constater le "trou" d'indexation (observez les index).//

unset($films['scienceFiction'][1]);
print_r($films['scienceFiction']);


//Exo-variables-08//
//Réindexez la catégorie "Science fiction" avec array_values().//
//Affichez le contenu de la catégorie "Science fiction" avec la fonction prédéfinie print_r() pour vous assurer que le tableau a bien été réindexé (observez les index).//

$films['scienceFiction'] = array_values($films['scienceFiction']);
print_r($films['scienceFiction']);

//Exo-variables-09//
//Supprimez l'année de sortie du film "Le dîner de cons" (avec unset()).
//Affichez ensuite les informations concernant le film avec print_r() pour vous assurer que l'année de sortie a bien été supprimée.
unset($films['comedie'][1]['annee']);
print_r($films['comedie'][1]);

//Exo-variables-10//
//Créez la phrase suivante : "Hellraiser n'est pas un film de Steven Spielberg !" en ciblant les éléments appropriés du tableau $listeDeFilmsParCategorie. Utilisez la concaténation implicite (par exemple : "blablabla... {$monTableau['maCle'][0]} blibli...") et stockez le résultat dans une nouvelle variable.
//Affichez ensuite le contenu de cette variable afin de vérifier que la chaîne a bien été construite comme attendu.
$Phrasehrase = "{$films['horreur'][0]['nom du film']} n'est pas un film de {$films['scienceFiction'][2]['realisateur']} !";
echo $Phrase;

#Exercices - Part 03
//Exo-variables-11//
//Combinez les deux tableaux ci-dessous, stockez le résultat dans une nouvelle variable, puis affichez ce résultat.

$tab1 = ['Blade Runner 2049', 'Dune', 'minority Report'];
$tab2 = ['Gattaca', 'Dune', 'Interstellar'];
$tab3 = array_merge($tab1, $tab2);
print_r($tab3);


