<?php
//Le grnich effrai des enfant, le enfant on chacun une degrès de peur
$kids = ['Lea_1', 'Eve_10', 'Pauline_10', 'Mia_7', 'Tiago_1', 'Beatrice_3', 'Kevin_1'];
$fear = 4;
$time = 44;

// take information in the kids array
foreach ($kids as $kid){
    $childs[] = explode('_', $kid);
}
print_r($childs);

$childAfraid = [];
print_r($childs);
//
for ($i = 0; $i < count($kids); $i++) {
    if($fear > $childs[$i][1]) {
        $time -= 3;
    }
    elseif ($fear < $childs[$i][1]){
        $time -= 5;
    }
}
echo $time;