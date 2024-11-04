<?php
$stop = rand(50, 100);
$somme = 0;
for($i = 0; $i < $stop; $i++) {
    $somme += $i;
}
echo $somme;
