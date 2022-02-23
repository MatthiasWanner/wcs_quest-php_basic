<?php
// Déclarations and Side effects instructions must be written in separated files to respect PSR1

$winMessage = 'You win 🤠 !';
$looseMessage = 'You loose ⚰️ !';

$fightInfos = [
    'fists' => [
        'whip' => $winMessage,
        'gun' => $looseMessage,
    ],
    'whip' => [
        'fists' => $looseMessage,
        'gun' => $winMessage,
    ],
    'gun' => [
        'fists' => $winMessage,
        'whip' => $looseMessage,
    ],
];

function fight(string $playerWeapon)
{
    global $fightInfos;
    $weapons = ['fists', 'whip', 'gun'];
    $opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.
    $party = [
        'player' => $playerWeapon,
        'opponent' => $opponentWeapon,
    ];

    if (!in_array($playerWeapon, $weapons)) {
        $party['result'] = '⚠️ You must choose a weapon!';
    } else if ($playerWeapon === $opponentWeapon){
        $party['result'] = 'No winner 😰';
    } else {
        $party['result'] = $fightInfos[$playerWeapon][$opponentWeapon];
    }
        
    return $party;
}