<?php 
include 'functions.php'; 
$firstAnimal = '🐶';
$secondAnimal = '🐱';
?>

<p>Le premier animal est:<?= $firstAnimal ?></p>
<p>Le second animal est: <?= $secondAnimal ?></p>
<p>La phrase secrète sera donc: <?= writeSecretSentence($firstAnimal, $secondAnimal) ?></p>
<p>Test des arguments nommés: <?= writeSecretSentence(param2: $firstAnimal, param1: $secondAnimal) ?></p>
