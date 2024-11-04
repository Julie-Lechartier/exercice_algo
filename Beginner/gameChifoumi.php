<?php
//Le système renvoie la liste des coups de ton adversaire sous la forme d’une chaîne de caractères.
//Ici, on ne rigole pas, ce n’est pas le premier à 3 qui gagne, il faut gagner tous les coups !
//Si ton adversaire fait Pierre, tu dois faire Feuille, s’il fait Feuille, tu dois faire Ciseaux,
// s’il fait Ciseaux, tu dois faire Pierre !
//Pierre : P
//Feuille : F
//Ciseaux : C
$coupAdverse = 'FCPPC';
$coup  = str_split($coupAdverse,1);
print_r($coup);
$coupJoueur = [];
for ($i = 0; $i < count($coup); $i++) {
    if ($coup[$i] == 'F') {
        $coupJoueur[$i] = 'C';
    } elseif ($coup[$i] == 'P') {
        $coupJoueur[$i] = 'F';
    } elseif ($coup[$i] == 'C') {
        $coupJoueur[$i] = 'P';
    }
}
print_r($coupJoueur);

//verification du resultat
$result = ['C', 'P', 'F', 'F', 'P'];
if($coupJoueur == $result) {
    echo "WINNER !";
}


