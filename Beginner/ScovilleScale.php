<?php
//On a une list d'ingrédient avec à chaque fois le nom du piment, la
//quantité incorporée en gramme et son intensité sur l'échelle de Scoville. Les 3 éléments sont séparés par « : ».
$piments = [
    'piment-poblano:17:1500', 'piment-habanero:7:225000', 'piment-tabasco:19:40000', 'piment-poblano:16:1500', 'piment-carolina-reaper:2:1800000'
];
$totalGram = 427;
$result = 0;
// on sépare les noms des quantités pour pouvoir faire les calculs
foreach ($piments as $piment) {
        $extract[] = explode(":", $piment);
}
print_r($extract);
// Calcul
// pimentScovilleEchelle * pimentGram / totalGram = resultat
for ($i = 0; $i < count($extract); $i++) {
    $result += $extract[$i][2] * $extract[$i][1] / $totalGram;
}

echo ceil($result);