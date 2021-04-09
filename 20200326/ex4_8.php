<?php

$sum = 2;
$i = 10;

do {
    $i++;
    $sum = $sum + $i;
} while($i < 50);
printf("总计:%d",$sum);
?>