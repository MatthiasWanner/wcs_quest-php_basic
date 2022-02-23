<?php
include "declarations.php";
$indyWeapon = 'fists';
$game = fight($indyWeapon);
?>
<p>L'arme de Indy: <?= $game['player'] ?></p>
<p>L'arme en face: <?= $game['opponent'] ?></p>

<p><?= $game['result'] ?></p>