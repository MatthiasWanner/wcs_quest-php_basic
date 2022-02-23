<?php

$indianaMovies = [
        'raidersOfTheLostArk' => [
            'originalTitle' => 'Raiders of the Lost Ark',
            'frenchTitle' => "Les Aventuriers de l'arche perdue",
            'year' => 1981,
            'rating' => 8.4,
            'genre' => 'Action',
            'actors' => [
                'Harrison Ford',
                'Karen Allen',
                'Paul Freeman',
            ],
        ],
        'theTempleOfDoom' => [
            'originalTitle' => 'Indiana Jones and the Temple of Doom',
            'frenchTitle' => 'Indiana Jones et le Temple maudit',
            'year' => 1984,
            'rating' => 7.5,
            'genre' => 'Action',
            'actors' => [
                'Harrison Ford',
                'Kate Capshaw',
                'Ke Huy Quan',
            ],
        ],
        'kingdomOfTheCrystalSkull' => [
            'originalTitle' => 'Indiana Jones and the Kingdom of the Crystal Skull',
            'frenchTitle' => 'Indiana Jones et le royaume du crâne de cristal',
            'year' => 2008,
            'rating' => 6.1,
            'genre' => 'Action',
            'actors' => [
                'Harrison Ford',
                'Cate Blanchett',
                'Shia LaBeouf',
            ],
        ],
];

function getMoviesInfos(array $moviesArray) 
{
    foreach ($moviesArray as $movie => $movieInfos) {
        ?>
        <p> Dans le film  <?= $movieInfos['frenchTitle']?>, les acteurs principaux sont: <?= implode(', ', $movieInfos['actors']) ?>. </p>
        <?php
    }
}
?>

<?= getMoviesInfos($indianaMovies) ?>