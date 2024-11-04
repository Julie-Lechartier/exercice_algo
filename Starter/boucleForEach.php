<?php
//values est un tableau qui contient une vingtaine de valeurs entières comprises entre 1 et 10
//Tu dois retourner la somme des valeurs supérieures ou égales à 5 comprises dans values.

$number = [];
$stopNumber = 20;
for ($i = 1; $i <= $stopNumber; $i++) {
    $number[] = rand(1, 10);
}


$somme = 0;
forEach ($number as $numbers){
    if($numbers >= 5){
        $somme += $numbers;
    }
}
echo $somme;