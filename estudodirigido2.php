<?php
 
print "Digite os dias ";
$dias= fgets(STDIN);
 
print "Digite as horas ";
$horas= fgets (STDIN);
 
print "Digite os minutos ";
$minutos= fgets (STDIN);
 
print "Digite os segundos ";
$segundos= fgets (STDIN);
 
$diahoras=$dias*24;
 
$totalhoras=$diahoras + $horas;
 
$horamin= $totalhoras*60;
 
$totalmin= $minutos + $horamin;
 
$minseg= $totalmin*60;
 
$totalseg= $segundos + $minseg;
 
print "O total de segundos é $totalseg";