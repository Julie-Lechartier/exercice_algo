<?php
//***************************************************Partie #1********************************************************//
//Tu es un aventurier qui découvre un nouveau monde merveilleux rempli de petits monstres mignons !
// Tu décides de ne pas les déranger et de les étudier tranquillement à distance. Tu cherches à comprendre comment
// ils se comportent, qu’est ce qu’ils mangent, comment ils grandissent, etc.
//
//En les observant, tu remarques qu’ils ont 4 types d’alimentation :
//
//Certains mangent des pierres (Rocks)
//Certains mangent de l’herbe (Grass)
//Certains mangent du bois (Wood)
//Et certains mangent des fruits (Fruits)
//Un monstre ne mange qu’un seul type d’aliments.
//
//Ces monstres sont rigolos, dès qu’ils mangent, ils grossissent. On va essayer de suivre un petit monstre et
// comprendre comment il va évoluer.

// Règles
//Selon leur forme on peut déduire une formule mathématique qui décrit comment le monstre va grossir :
//
//Poids gagné = a * (poids aliment) + b.
//
//a et b sont 2 coefficients entiers inférieurs à 10
//Dans ce challenge, on considérera que le poids de l’aliment est toujours égal à 1.
//Tu as à ta disposition ces informations :
//
//weight : le poids de départ du petit monstre
//formula : sa formule de grossissement, sous la forme « 2G3 ». Ici cela signifie que a vaut 2, b vaut 3.
// Et le monstre ne pourra manger que de l’herbe (Grass).
//foods : une liste d’aliments que va rencontrer le petit monstre
//Tu dois retourner :
//
//Le poids final du petit monstre en considérant qu’il va manger tout ce qui lui est possible de manger.
// Pour rappel, on considère que chaque aliment pèse 1.
// Eléments donnés de base
$weight = 1;
$formula = '4W9';
$foodsSequenced = 'RWRRGRRRWG';
////////////////////////////////////////
$weightGained = $weight;
$calculElement = str_split($formula);
$a = $calculElement[0];
$food = $calculElement[1];
$b = $calculElement[2];

$formulaElement = [
    'a' => $a,
    'food' => $food,
    'b' => $b
];
$foodSequenced  = str_split($foodsSequenced, 1);
print_r($formulaElement);
for($i = 0; $i < count($foodSequenced); $i++){
   if($foodSequenced[$i] == $formulaElement['food']){
      $weightGained += $formulaElement['a'] * $weight + $formulaElement['b'];
   }
}
echo 'Le petit Monstre mignon vas peser '.$weightGained . "\n";
// réponse attendue : 27
//***************************************************Partie #2********************************************************//
//Les petits monstres se mettent en couple, 2 par 2, de la façon suivante :
//Les petits monstres de type Fruits (F) avec les petits monstres de type Rock (R)
//Les petits monstres de type Wood (W) avec les petits monstres de type Grass (G)
//Chaque couple est formé de 2 petits monstres différents : « F+R » ou « W+G »
//Il va falloir trouver l’indice de rapprochement, qui se calcule de la façon suivante :
//Couples FR * Couples WG + petits monstres seuls
$monsters = ['R', 'F', 'G', 'F', 'F', 'G', 'W', 'R', 'W', 'G', 'G', 'R', 'G', 'R', 'W'];
$monstersType = [
    'Fruit' => 'F',
    'Rock' => 'R',
    'Wood' => 'W',
    'Grass' => 'G'
];
$coupleFR = 0;
$coupleGW = 0;
$monsterAlone = 0;


//ajout d'un tableau pour ne pas lire deux fois la même lettre
$supp = array_fill(0, count($monsters), false);

for($i = 0; $i < count($monsters); $i++){
    if($supp[$i]){
        continue;
    }

    if($monsters[$i] == $monstersType['Fruit']){
        for($j = $i + 1 ; $j < count($monsters); $j++){
            if($monsters[$j] == $monstersType['Rock'] && !$supp[$j]){
                $coupleFR++;
                $supp[$i] = true;
                $supp[$j] = true;
                break;
            }
        }

    } elseif ($monsters[$i] == $monstersType['Grass']) {
        for ($j = $i + 1; $j < count($monsters); $j++) {
            if ($monsters[$j] == $monstersType['Wood'] && !$supp[$j]) {
                $coupleGW++;
                $supp[$i] = true;
                $supp[$j] = true;
                break;
            }
        }
    }
}
for ($i = 0; $i < count($monsters); $i++) {
    if (!$supp[$i]) {
        $monsterAlone++;
    }
}
$calcul = ($coupleFR * $coupleGW) + $monsterAlone;

echo $coupleFR . "\n";
echo $coupleGW . "\n";
echo $monsterAlone . "\n";
echo "L'indice est donc " . $calcul;




