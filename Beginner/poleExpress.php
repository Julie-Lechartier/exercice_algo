<?php
//Tu es le cuisinier du wagon restaurant du Pôle Express et tu dois préparer une tournée de chocolat chaud pour
// les enfants à bord. Néanmoins, les commandes sont variées et tu dois déterminer à quelle température
// idéale tu dois faire chauffer tous les chocolats chauds pour les réussir à la perfection !
//*******RULES******//
//Le type de chocolat :
//
//Chocolat noir : Monter la température de 5°
//Chocolat au lait : Monter la température de 10°
//Chocolat blanc : Monter la température de 15°
//Mélange de chocolats : Monter la température de 12°
//Le type d’épices ajoutée(s) :
//
//Cannelle : Monter la température de 4°
//Muscade : Monter la température de 7°
//Piment : Monter la température de 9°
//Vanille : Monter la température de 1°
//Comme il y a beaucoup de commandes, il peut y avoir un évènement particulier durant la préparation.
//
//Le chocolat brûle ! Il faut baisser la température de 10°
//Une épice surprise est tombée dans la tasse : Il faut monter la température de 10°
//La tasse est froide : Il faut multiplier la température par 2 (après effets du chocolat et des épices)
$orders = [
    '62,blanc,piment,epice_surprise',
    '80,noir,piment,epice_surprise',
    '66,melange,cannelle',
    '74,noir,vanille,tasse_froide',
    '68,au_lait,vanille'
];
$temp = [];
//separation of the elements
foreach($orders as $order){
    $detailOrders[] = explode(",", $order);
}
print_r($detailOrders);
//loop
for($i = 0; $i < count($detailOrders); $i++){
    $degree = 0;
    if($detailOrders[$i][1] == 'noir'){
        $degree += $detailOrders[$i][0] + 5;
    } elseif($detailOrders[$i][1] == 'au_lait'){
        $degree += $detailOrders[$i][0] + 10;
    }elseif ($detailOrders[$i][1] == 'blanc'){
        $degree += $detailOrders[$i][0] + 15;
    }elseif ($detailOrders[$i][1] == 'melange'){
        $degree += $detailOrders[$i][0] + 12;
    }
    if($detailOrders[$i][2] == 'piment'){
        $degree += 9;
    } elseif ($detailOrders[$i][2] == 'cannelle'){
        $degree += 4;
    } elseif ($detailOrders[$i][2] == 'vanille'){
        $degree += 1;
    } elseif ($detailOrders[$i][2] == 'muscade'){
        $degree += 7;
    }
    if($detailOrders[$i][3] == 'epice_surprise'){
        $degree += 10;
    } elseif ($detailOrders[$i][3] == 'tasse_froide'){
        $degree *= 2;
    }elseif ($detailOrders[$i][3] == 'brule'){
        $degree -= 10;
    } elseif (null){
        continue;
    }

    $temp[] = $degree;
}
for($j = 0; $j < count($temp); $j++){
    $moyenne += $temp[$j];
}
$moyenne /= count($temp);

print_r($temp);
echo 'La temperature moyenne est de : ' . ceil($moyenne);

