<?php

$dLap = $data["dLap"];
$dManu = $data["dManu"];
$dType = $data["dType"];
for ($i=0; $i < count($dLap); $i++) { 
     $dLap1=$dLap[$i];
     for ($j=0; $j < count($dLap1)/2; $j++) { 
          echo $dLap1[$j]."----";
     }
     echo "</br>";
}
?>

<h1></h1>