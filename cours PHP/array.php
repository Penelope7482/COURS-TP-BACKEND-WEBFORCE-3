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
    "$user01" => [
        "firstname" =>  "john",
    "lastname"  =>  "doe",
    "age"       =>  "54",
    "job"       =>  "developpeur"
    ], 
    "$user02"=> [
        "firstname" =>  "hermion",
        "lastname"  =>  "granger",
        "age"       =>  "20",
        "job"       =>  "magicienne"
    ]
    ];
var_dump($users);
echo $users ["$user01"]["job"];

?>
