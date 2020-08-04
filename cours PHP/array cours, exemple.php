<?php

$result = 1/2;

$array = [
    "a", 
    true, 
    2, 
    $result,
    ['
    été', 
    'printemps',
    'automne',
    'hiver'
    ]
];

var_dump($array);

echo $array[2];

var_dump($array[4]);
echo $array[4][3]; 

echo "<hr>";

/**tableau associatif */

$user =[
    "firstname" =>  "john",
    "lastname"  =>  "doe",
    "age"       =>  "54",
    "job"       =>  "developpeur"
];

echo $user ["age"];

$users = [
    [
    "firstname" =>  "john",
    "lastname"  =>  "doe",
    "age"       =>  "54",
    "job"       =>  "developpeur"
    ], 
    [
        "firstname" =>  "hermion",
        "lastname"  =>  "granger",
        "age"       =>  "20",
        "job"       =>  "magicienne"
    ]
    ];
var_dump($users);
echo $users [0]["job"];

echo "<hr>";


/**tableau associatif dans tableau associatif*/

$users = [
    user01 => [
        "firstname" =>  "john",
    "lastname"  =>  "doe",
    "age"       =>  "54",
    "job"       =>  "developpeur"
    ], 
    user02 => [
        "firstname" =>  "hermion",
        "lastname"  =>  "granger",
        "age"       =>  "20",
        "job"       =>  "magicienne"
    ]
    ];
var_dump($users);
echo $users ["user01"]["job"];




// Ajouter un élément de liste à $user :
$user[] = "42 rue des champs";
// Ajouter un élément associatif "commandes" (qui contiendra un sous tableau) à $user :
$user["commandes"][] = [
    "patates",
    "pommes"
];


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
        "pomems de terre" => [
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
    ],
    "printemps" => [
        "bananes" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "noix" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ],
];

//Boucles sur arrays en PHP :
$nombresPairs = [2, 4, 6, 8];
var_dump($nombresPairs);
foreach($nombresPairs as $nombre) {
    echo $nombre;
    echo "<br>";
}
foreach ($nombresPairs as $i => $nombre) {
    echo $i . ": " . $nombre;
    echo "<br>";
}
$user = [
    "firstname" => "john",
    "lastname"  => "doe",
    "age"       => "54",
    "job"       => "developpeur"
];
echo "<hr>";
echo "<ul>";
foreach($user as $carac => $valeur) {
    echo "<li><strong>" . $carac . "</strong> : " . $valeur . "</li>";
}
echo "</ul>";
?>