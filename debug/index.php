<?php

$characters = [
    "Negan" => [
        "city" => "The Sanctuary",
        "weapon" => "Lucille"
    ],
    "Daryl" => [
        "city" => "Alexandria",
        "weapon" => "crossbow"
    ],
    "Ezekiel" => [
        "city" => "The Kingdom",
        "weapon" => "Shiva"
    ],
    "Matthias" => [
        "city" => "Anglet",
        "weapon" => "Flame Thrower"
    ]
];
?>

<p><-- Débogguer avec echo --></p>

<?php
echo "Hello World";
echo '</br>';
echo $characters["Daryl"]["weapon"];
echo '</br>';
print $characters["Negan"]["city"];
echo '</br>';
echo $characters["Negan"]; // output an error
echo '</br>';
?>

<p><-- Débogguer avec var_dump --></p>

<?php
var_dump($characters["Ezekiel"]["weapon"]);
echo '</br>';
var_dump($characters["Negan"]);

echo '<pre>';
var_dump($characters["Negan"]);
echo '</pre>';
echo '</br>';

var_dump($characters["Daryl"]);
var_dump($characters);
exit();
header("location: https://www.google.fr");