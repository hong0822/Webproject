<?php
//caculate the summary

function summary(...$numbers){
    $sum = 0;
    foreach($numbers as $i){
        $sum += $i;
    }
    return $sum;
}

$total = summary(1,3,5,7,100,5654,98456);
printf("总计:%d" , $total);

?>