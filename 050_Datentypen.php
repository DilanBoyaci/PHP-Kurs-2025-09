<?php
# Datentypen

//Zeichenkette
print gettype('Hello'); // String
print '<br>';

//Ganzzahl
print gettype(1234567);
print '<br>';

//Fließkommazahl
print gettype(123.456);
print '<br>';

//Unterstrich als Tausendtrenner
print 123_456_789.111;
print '<br>';

//Wahrheitswert
print gettype(true); //boolean
print '<br>';

//Identische-Operator
print 123 == '123';
print '<br>';
var_dump(123 == '123');//bool(true)
print '<br>';
var_dump(123 ==='123'); //bool(false)





