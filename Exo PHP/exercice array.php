<?php
/**
 * 3. a. Déclarez un tableau simple :
 * => "tomates", "navets", "carottes", "oignons"
 * 3. b. Affichez dans un var_dump la valeur "carottes".
 */
/**
 * 4. a. Déclarez un tableau associatif, qui contient des des noms de légumes en clés (ceux-ci dessus par exemple), et  en valeur le prix du légume.
 * 4. b. Affichez dans un var_dump la valeur du prix du 3ème légume.
 */
/**
 * 5. a. Déclarez un tableau multi-dimentionnel, qui contient des saisons, lesquelles contiennent des 2 légumes, lesquels contiennent les clés "quantité" et "prix"
 * 5. b. Affichez dans un var_dump le prix du premier légume d'été.
 */
$legume = [
    'tomates', 
    'navets', 
    'carottes', 
    'oignons'];
var_dump($legume [2]);

$legumeSaison =[
    'tomates'   => "4", 
    'navets'    => "5", 
    'carottes'  => "2", 
    'oignons'   => "3"
];

var_dump($legumeSaison["carottes"]);
/**
 * 5. a. Déclarez un tableau multi-dimentionnel, qui contient des saisons, lesquelles contiennent des 2 légumes, lesquels contiennent les clés "quantité" et "prix"
 * 5. b. Affichez dans un var_dump le prix du premier légume d'été.
 */


$legumeSaisonPrixQuantité = [
    "printemps" => [
        "tomates" => [
            "quantité" => 7,
            "prix" => 3
        ],
        "navets" => [
            "quantité" => 2,
            "prix" => 23
        ]
    ],
    "été" => [
        "carottes" => [
            "quantité" => 4,
            "prix" => 55
        ],
        "oignons"   => [
            "quantité" => 26,
            "prix" => 7
        ] 
        ],
    "automne" => [
        "topinambour"   => [
            "quantité" => 22,
            "prix" => 31
        ], 
        "petit_pois"   => [
            "quantité" => 9,
            "prix" => 87
        ] 
    ],
    "hiver" => [
        "PdT"      => [
            "quantité" => 66,
            "prix" => 56 
        ], 
        "crosnes"  => [           
            "quantité" => 5,
            "prix" => 43
        ] 
    ]    
];


$legumeSaisonPrixQuantité["nouvelle saison"]=[];
$legumeSaisonPrixQuantité["nouvelle saison"]["poireau"]=[] ;
$legumeSaisonPrixQuantité["nouvelle saison"]["poireau"]["quantité"] = 4;
$legumeSaisonPrixQuantité["nouvelle saison"]["poireau"]["prix"] = 7 ;

$legumeSaisonPrixQuantité["été"]["carottes"]["prixTotal"]= ($legumeSaisonPrixQuantité ["été"] ["carottes"] ["prix"]) * ($legumeSaisonPrixQuantité ["été"] ["carottes"] ["quantité"]);
var_dump($legumeSaisonPrixQuantité);
echo $legumeSaisonPrixQuantité ["été"]["carottes"]["prix"];
echo '<hr>';
echo $legumeSaisonPrixQuantité["été"]["carottes"]["prixTotal"];



echo "<hr>";

// Faire une liste ul>li avec les éléments suivants :


echo "<ul>";

$saisons1 = ["été", "automne", "printemps", "hiver"];
foreach ($saisons1 as $saison){
    echo "<li>". $saison. "</li>";
}

echo "</ul>";

echo "<hr>";

// Faire une liste ul>li avec les éléments suivants (afficher "clé: valeur")
$aubergines = [
    "quantité" => 12,
    "prix" => 5
];
echo "<ul>";
foreach($aubergines as $key => $value){
    echo "<li>". $key. ": " .$value. "</li>";
}
echo "</ul>";

echo "<hr>";

// Faire une liste ul>li qui affiche aubergines et tomates
// Faire un autre ul>li (à l'intérieur du premier) qui affiche quantité et prix pour  aubergines et tomates
$ete = [
    "aubergines" => [
        "quantité" => 12,
        "prix" => 5
    ],
    "tomates" => [
        "quantité" => 10,
        "prix" => 6
    ]
];
echo "<ul>";
foreach($ete as $legume => $caracteristiques){
    echo "<li>". $legume. "</li>";
    echo"<ul>";
        foreach ($caracteristiques as $key2 => $value2) {
            echo "<li>". $key2 . ":" . $value2. "</li>";
        }
    echo"</ul>";
}
echo "</ul>";

echo "<hr>";

// Afficher la liste des saisons, puis des légumes de chaque saison, puis des caractéristiques de chaque légume
// dans plusieurs ul>li successifs
$saisons = [
    "été" => [
        "aubergines" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "tomates" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ],
    "automne" => [
        "pommes de terre" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "carottes" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ],
    "hiver" => [
        "avocats" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "pêches" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ]
];

echo "<ul>";
foreach($saisons as $saison=>$legumes){
    echo "<li>". $saison. "</li>";
    echo"<ul>";
        foreach ($legumes as $legume => $caracteristiques){
            echo "<li>". $legume. "</li>";
             echo"<ul>";
            foreach ($caracteristiques as $key => $value2){
            echo "<li>". $key. ": ". $value2. "</li>";
            }
            echo"</ul>";
        }
    echo"</ul>";
}
echo "</ul>";

echo "<hr>";
 
?>