<?php
$maxNumber = 0;

$arrayNumber = [0, 100, -4, 8, 143, 5, 99, 100];

for($i=0;$i<count($arrayNumber);$i++){
    for($j=0;$j<count($arrayNumber);$j++){
        if($i != $j){
            $count = $arrayNumber[$i] + $arrayNumber[$j];
            if($count > $maxNumber){
                $maxNumber = $count;
            }
        }
    }
}
var_dump($maxNumber);
