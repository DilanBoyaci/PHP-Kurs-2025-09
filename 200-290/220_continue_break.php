<?php

// continue
// Beendet den aktuellen Schleifendurchlauf vorzeitig.

for ($i = 10; $i > 0; $i--){
    if($i == 7)continue;
    echo $i . ' ';
}
echo '<br>';

// Ohne geschleifte Klammer ist nur die nächste Anweisung im if

// break.
// Beendet die ganze Schleife direkt.
for ($i = 10; $i > 0; $i--){
    if($i == 7)break;
    echo $i . ' ';
}
echo '<br>';

