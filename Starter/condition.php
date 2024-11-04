<?php
//Est-ce que le nombre est un multiple de 3 ou non

$number = rand(50,3000);

// condition, on calcul avec le modulo !($number % 3 == 0)
if (!($number % 3)){
    echo 'Vrai, '.$number." est un multiple de 3";
}
else{
    echo "Faux, le nombre n'est pas un multiple de 3";
}
