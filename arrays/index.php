<?php
$indianaJonesMovies = [
    "Indiana Jones and the Last Crusade" => 1989,
    "Raiders of the Lost Ark" => 1981,
    "Indiana Jones and the Temple of Doom" => 1984,
];

function getMOvieListSortedByYear(array $moviesArray){
    asort($moviesArray);
    foreach($moviesArray as $movie => $year){
        echo "> $year - $movie <br>";
    };
};

?>

<p><?= getMOvieListSortedByYear($indianaJonesMovies) ?></p>