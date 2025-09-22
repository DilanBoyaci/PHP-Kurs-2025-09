<?php

// Funktionen

// Funktionsdefinition
function addiere($zahl1, $zahl2){
    return $zahl1 + $zahl2;
}

// Funktionsaufruf mit Argumenten.
// Selber tippen nur: 4, 7
echo addiere(zahl1:4, zahl2:7); // 11
echo "\n";

// Standard/ Default-Werte festlegen
function addiere2($zahl1, $zahl2 = 1){
    return $zahl1 + $zahl2;
}

echo addiere2(zahl1:4, zahl2:7); //11
echo "\n";
echo addiere2(zahl1:4); // 5



