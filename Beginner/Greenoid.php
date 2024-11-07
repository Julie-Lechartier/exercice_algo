<?php
//Le numéro de série est une suite de chiffres compris entre 1 et 9.
//Tu supposes que s’il y a un chiffre pair, tu dois appuyer sur le bouton de droite. Et si c’est un chiffre impair,
// sur le bouton de gauche.
//Un « L » (Left) correspond à un appui sur le bouton de gauche.
//Un « R » (Right) correspond à un appui sur le bouton de droite.
$serial = '145519867';
$powerSequence = '';
foreach (str_split($serial) as $num) {
    $powerSequence .= $num % 2 ? 'L' : 'R';
}
echo $powerSequence;