<?php
$Zahl = rand(1,6);

print"Gewürfelt wurde: $Zahl\n";

if($Zahl == 6){
    print'Super, eine 6';
}elseif($Zahl == 5){
    print'Immerhin noch eine 5';
}else{
    print'Das reicht nicht! (bei 1-4)';
}