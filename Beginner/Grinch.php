<?php
//Le grnich effrai des enfant, le enfant on chacun une degrès de peur
$kids = ['Henri_7', 'Catherine_10', 'Gabriel_1', 'Elena_6', 'Juliette_6', 'Arthur_9', 'Anna_7'];
$fear = 5;
$time = 59;

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
        $childAfraid[] = substr($childs[$i][0], 0, 1);
    }
    elseif ($fear < $childs[$i][1]){
        $time -= 5;
    }
}
echo $time;
print_r($childAfraid);
echo 'Les enfants effrayé sont ' . $childAfraid[0];