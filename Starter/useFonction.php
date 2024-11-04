<?php
//Tu dois retourner une chaine de caractères contenant
//toutes les valeurs qui sont des multiples de 3, séparées par des tirets.
$values = [];
$stopValue = 20;

for($i = 0; $i <= $stopValue; $i++) {
    $values[] = rand(1, 100);
}
print_r($values);


foreach ($values as $value){
    if (!($value % 3)){
        $reponse = implode('-', $values);
    }
}
echo $reponse;
