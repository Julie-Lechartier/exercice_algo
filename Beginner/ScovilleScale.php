<?php
//On a une list d'ingrédient avec à chaque fois le nom du piment, la
//quantité incorporée en gramme et son intensité sur l'échelle de Scoville. Les 3 éléments sont séparés par « : ».
$piments = [
    'poivrons:20:0', // 0
    'piment-komodo-dragon:5:1800000',//1800000
    'piment-madagascar:10:125000',//125000
    'piment-bhut-jolokia:10:950000'//950000
];
$totalGram = 700;
// on sépare les noms des quantités pour pouvoir faire les calculs
foreach ($piments as $piment) {
        $extract = explode(":", $piment);
        $name = $extract[0];
        $quantity = $extract[1];
        $pimentScoville = $extract[2];
        $pimentGram = [
            'name' => $name,
            'quantity' => (int)$quantity,
            'pimentScoville' => $pimentScoville
        ];
}
print_r($pimentGram);
// Calcul
// pimentScovilleEchelle * pimentGram / totalGram = resultat
$result = $pimentGram['pimentScoville'] * $pimentGram['quantity'] / $totalGram;
echo ceil($result);