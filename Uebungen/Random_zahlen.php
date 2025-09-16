<?php
$zahl1 = rand(0,10);
$zahl2 = rand(0,10);
$zahl3 = rand(0,10);

if($zahl1 <= $zahl2 && $zahl1 <= $zahl3){
    $min = $zahl1;
}elseif ($zahl2 <= $zahl1 && $zahl2 <= $zahl3) {
    $min = $zahl2;
}else{
    $min = $zahl3;
}

print"zahlen: $zahl1, $zahl2, $zahl3\n";
print"Kleinste Zahl: $min";

