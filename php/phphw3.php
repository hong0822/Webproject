<?php
//Circule rate
define('PI',3.1415926);

//Circule radius
$radius = 10;
//Circulate Circule Area
$area = $radius * $radius * PI;
echo "Circule area is ".$area."\n";

//Cacule Circule length
$length = $radius * 2 * PI;
echo "Circule Length is ".$length."\n";

  $t = true;
  $f = false;
  echo "\$t 值 : $t 數字 : (int)$t "."<br />";
  echo "\$f 值 : $f 數字 : (int)$f "."<br />";

  $x[0] = "Hello";
  echo $x[0];

  $pi = 3.141592;
   echo "\$pi 轉成整數 : ".(int)$pi."\n";
   $input = "3.141592pi";
   echo "pi 轉成浮點數 : ".(float)$input."\n";

   $pi = 3.141592;
  settype($pi, "integer");
  echo "\$pi 轉成整數: ".$pi;
  $piString = "3.141592circle";
  echo "是否有轉成功".settype($piString, "float");
  echo "\$piString 是: ".$piString;

?>