<?php
  function table99($i=2,$j=1){
    if ($j > 8){
      $i++;
      $j = 1;
      echo "\n";
    }
    if ( $i <= 8 ){
      printf("%d*%d=%d \t",$i,$j,($i*$j));
      $j++;
      table99($i,$j);
    }
  }
  echo table99();
?>