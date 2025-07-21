<?php
function getsquareArea($base,$height) {
    return $base * $height ;
}
function gettriangleArea($base,$height) {
    return $base * $height /2 ;
}
function getrapezoidArea($upperbse,$lowerbase,$height) {
    return ($upperbse + $lowerbase ) * $height /2 ;
}
$getsquareArea = getsquareArea(5, 5) ;
$gettriangleArea = gettriangleArea(7, 8) ;
$getrapezoidArea = getrapezoidArea(4, 5, 4) ;
 
echo $getsquareArea  ."\n";
echo $gettriangleArea . "\n";
echo $getrapezoidArea; 
