<?php

// while

// Kopfgesteuerte Schleife

$i = 1;
while ($i <= 10){
    echo $i . ' ';
    $i++;
}

echo '<br>';

// Die Stärke von while:
// Die Anzahl der durchläufe ist nicht bekannt.
while (rand(1, 6) != 6){
    echo 'Bäh!';
}

echo '<br>';


// do while
// Fußgesteuerte Schleife.
// Läuft mindestens einmal durch.

do {
    $wurf = rand(1, 6);
    echo $wurf . ' ';
} while ($wurf != 6);
echo '<br>';

// Python
$wurf = rand(1, 6);
echo $wurf . ' ';
while($wurf != 6){
    $wurf = rand(1, 6);
    echo $wurf . ' ';
}


