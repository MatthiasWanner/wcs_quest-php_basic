<?php

function decodeMessage($string){
    $keyNumber = strlen($string) / 2;
    $substring = substr($string, 5, $keyNumber);
    $filteredString = str_replace('@#?', ' ', $substring);
    return strrev($filteredString);
}

$secretMessage = decodeMessage("0@sn9sirppa@#?ia'jgtvryko1") // output "j'ai appris"
. ' ' 
. decodeMessage("q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj") // output "toutes les ficelles"
. ' '
. decodeMessage("aopi?sgnirts@#?sedhtg+p9l!"); // output "des strings" 

?>

<p>
    <?= $secretMessage ?> 
    <!-- J'ai appris toutes les ficelles des strings -->
</p>
