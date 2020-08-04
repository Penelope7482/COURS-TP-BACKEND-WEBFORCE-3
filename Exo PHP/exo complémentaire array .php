<?php

/**https://gist.github.com/tomsihap/0ce95ee46a6b57d55144a67d68baed35 */
/** 1 - Soit un tableau $a = array( 0, 1, 2, 3, 4 );, comment afficher la valeur 3 du tableau ?*/
$a = array( 0, 1, 2, 3, 4 );
echo "<h1>Exercice 1</h1>";
echo $a[3];

echo "<hr> <h1>Exercice 2</h1>";
/* 2 -Afficher la valeur 3 du tableau suivant :

$a = [
  "zero"  => 0,
  "un"    => 1,
  "deux"  => 2,
  "trois" => 3,
  "quatre"=> 4,
]; */

$a = [
    "zero"  => 0,
    "un"    => 1,
    "deux"  => 2,
    "trois" => 3,
    "quatre"=> 4,
  ];
echo $a["trois"];

echo "<hr><h1>Exercice 3</h1>";

/*3- Afficher la valeur 3 du tableau suivant :
$a = [
  [0, 1],
  [2,[3]],
  "zero"  => 0,
  "un"    => 1,
  "deux"  => 2,
  "quatre"=> 4,
];*/


$a = [
    [0, 1],
    [2,[3]],
    "zero"  => 0,
    "un"    => 1,
    "deux"  => 2,
    "quatre"=> 4,
  ];

echo $a["un"];
echo "<br/>";
echo $a[1][1][0];

echo "<hr><h1>Exercice 4</h1>";

/*4
Afficher la valeur 3 du tableau suivant :
$a = [
    "a" => [
        "b" => 0,
        "c" => 1,
    ],
    "d" => [
        "e" =>  2,
        "f" => [
            "g" => 3
        ]
    ]
];*/

$a = [
    "a" => [
        "b" => 0,
        "c" => 1,
    ],
    "d" => [
        "e" =>  2,
        "f" => [
            "g" => 3
        ]
    ]
];

echo $a["d"]["f"]["g"];

echo "<hr><h1>Exercice 5</h1>";

/* 5- 
Terreur ! Un élève a oublié d'indenter son code. Indentez cet array correctement et corrigez l'erreur.
$a = [ "a" => [
   "b" => 0,  "c" => 1,],"d" => [
 2, "f" =>    [
   "g" => 3
 ]];*/

 $a = [ 
        "a" => [
                "b" => 0,  
                "c" => 1,
        ],
        "d" => [
                2,
                "f" => [
                        "g" => 3
                ]
        ]
];

 echo $a["d"]["f"]["g"];
 echo "<hr> <h1>Exercice 6</h1>";

/*6-Trouver la somme de cet tableau de nombres : $a = [ 0, 1, 2, 3, 4, 5, 6 ];.*/

$a = [ 0, 1, 2, 3, 4, 5, 6 ];
echo "La somme des valeurs du tableau est de: ". array_sum($a);


echo "<hr> <h1>Exercice 7</h1>";

/*7- Créez un array $films contenant les données suivantes :

- The Shawshank Redemption
    Année : 1994
    Note : 9.2		
- The Godfather
    Année : 1972
    Note : 9.1		
- The Dark Knight
    Année : 2008
    Note : 9.0		
- The Lord of the Rings: The Return of the King
    Année : 2003
    Note : 8.9
- Pulp Fiction
    Année : 1994
    Note : 8.9 */

$film = [
    "The Shawshank Redemption"  => [
                                "Année" => 1994,
                                "Note" => 9.2	
    ],    	
    "The Godfather"                                 => [
                                                    "Année" => 1972,
                                                    "Note"  => 9.1	
    ],    	
    "The Dark Knight"                               => [
                                                    "Année" => 2008,
                                                    "Note"  => 9.0	
    ],       
    "The Lord of the Rings: The Return of the King" => [
                                                    "Année" => 2003,
                                                    "Note" => 8.9
    ],
    "Pulp Fiction"              =>[
                                "Année" => 1994,
                                "Note" => 8.9 
    ]
    ];

echo "<hr> <h1>Exercice 8a, b, c</h1>";

/* 8a.B.c Créez le tableau suivant :

- The Shawshank Redemption	
- The Godfather
- The Dark Knight
- The Lord of the Rings: The Return of the King
- Pulp Fiction */
/*8b. Affichez tous ses éléments grâce à une boucle foreach($films as $film) { //code } */

$film = [
    "The Shawshank Redemption" ,
    "The Godfather",    	
    "The Dark Knight",       
    "The Lord of the Rings: The Return of the King",
    "Pulp Fiction"
    ];

foreach ($film as $film){
    echo $film. "<br/>";
}



/*Exemple :

foreach($saisons as $saison) {
  var_dump($saison);
}*/


/*8c. Affichez, toujours grâce à une boucle, plutôt avec à un echo. N'oubliez pas de sauter une ligne entre chaque film !

Exemple :

// Afficher du PHP et du HTML en même temps :

// Solution 1 : concaténation
<body>
  <?php
  echo "<h1>" . $prenom . "</h1>";
  ?>
</body>

// Solution 2 : PHP dans HTML
<body>
  <h1><?php echo $prenom; ?></h1>
</body>*/



echo "<hr> <h1>Exercice 8d</h1>";
/*8d. Affichez ces éléments, toujours grâce à une boucle, plutôt dans une liste <ul> <li>.*/
$film = [
    "The Shawshank Redemption" ,
    "The Godfather",    	
    "The Dark Knight",       
    "The Lord of the Rings: The Return of the King",
    "Pulp Fiction"
    ];
echo "<ul>";
foreach ($film as $film){
    echo "<li>". $film . "</li>";
}
echo "</ul>";
echo "<hr> <h1>Exercice 9a, b</h1>";

/*9a.B Soit le tableau suivant :

- The Shawshank Redemption : Frank Darabont
- The Godfather : Francis Ford Coppola
- The Dark Knight : Christopher Nolan
- The Lord of the Rings: The Return of the King : Peter Jackson
- Pulp Fiction : Quentin Tarantino
Créez un tableau de clés => valeurs avec ce tableau, avec le film en clé et le réalisateur en valeur rappel :

$array = [
    "cle" => "valeur",
    "cle2" => "valeur2",
]*/

$film = [
    "The Shawshank Redemption" => "Frank Darabont",
    "The Godfather"=> "Francis Ford Coppola",    	
    "The Dark Knight"=> "Christopher Nolan",       
    "The Lord of the Rings: The Return of the King"=> "Peter Jackson",
    "Pulp Fiction"=> "Quentin Tarantino"
    ];
echo "<ul>";
foreach ($film as $key=>$titre){
    echo "<li>". $key . ": " . $titre. "</li>" ;
    }
echo "</ul>";



/*9b. Reprennez le tableau de l'exercice 9a. Grâce à une boucle dans une boucle, affichez le tableau dans une liste <ul> <li> toutes les informations affichées de la façon suivante :
Exemple :

// Soit un tableau :

$saisons = [
  "ete" => "juin",
  "automne" => "septembre",
  "hiver" => "decembre",
  "printemps" => "mars"
];

// Il s'agit d'un tableau de clés/valeurs.
// La clé : le nom de la saison
// La valeur : le tableau contenant les détails de la saison

// Dans ce cas, on précise dans le foreach qu'il s'agit non plus d'une simple valeur (comme l'exemple ci-dessus, $saisons)
// mais d'un ensemble de clés => valeurs : $saison => $detail

// Ainsi, on a accès à la clé avec $saison, et au détail avec $detail

foreach($saisons as $saison => $detail) {

  // Afficher la saison :
  echo $saison;
  
  // Afficher le détail :
  echo $detail;

  // Afficher les deux en concaténation sous la forme "la saison $saison débute en $detail"
  echo "La saison " $saison . " débute en ". $detail;
}*/



echo "<hr> <h1>Exercice 9c</h1>";

/*9c. Reprennez le tableau de l'exercice 6. Grâce à une boucle dans une boucle, affichez le tableau dans une liste <ul> <li> toutes les informations affichées de la façon suivante :

- The Shawshank Redemption
    Année : 1994
    Note : 9.2		
- The Godfather
    Année : 1972
    Note : 9.1		
- The Dark Knight
    Année : 2008
    Note : 9.0		
- The Lord of the Rings: The Return of the King
    Année : 2003
    Note : 8.9
- Pulp Fiction
    Année : 1994
    Note : 8.9
Exemple

$saisons = [
    "ete" => [
        "debut" => "juin",
        "fin"   => "septembre",
    ],
    "hiver" => [
        "debut" => "decembre",
        "fin"   => "mars",
    ]
];


foreach ($saisons as $saison => $details) {

    // Afficher la saison
    echo $saison;

    // Afficher le détail de chaque saison, on boucle le sous-tableau $details :

    foreach ($details as $detail) {

        // Afficher le début de la saison
        echo $detail['debut'];

        // Afficher la fin de la saison
        echo $detail['fin'];
    }

 */

$film = [
    "The Shawshank Redemption"                      => [
                                                    "Année" => 1994,
                                                    "Note" => 9.2	
    ],    	
    "The Godfather"                                 => [
                                                    "Année" => 1972,
                                                    "Note"  => 9.1	
    ],    	
    "The Dark Knight"                               => [
                                                    "Année" => 2008,
                                                    "Note"  => 9.0	
    ],       
    "The Lord of the Rings: The Return of the King" => [
                                                    "Année" => 2003,
                                                    "Note" => 8.9
    ],
    "Pulp Fiction"                                  => [
                                                    "Année" => 1994,
                                                    "Note" => 8.9 
    ]
    ];

echo "<ul>";
foreach ($film as $key=>$titre){
    echo "<li>". $key ."</li>" ;
    echo "<ul>";
        foreach ($titre as $key2 => $valeur2){
            echo "<li>".$key2. ": ".$valeur2."</li>";
        }
    echo "</ul>";
}
echo "</ul>"
?>