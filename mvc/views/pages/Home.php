<?php
$dLap = $data["dLap"];
for ($i=0; $i < count($dLap); $i++) { 
     $dLap1=$dLap[$i];
     for ($j=0; $j < count($dLap1)/2; $j++) { 
          echo $dLap1[$j]." ";
     }
     
     echo "</br>";
}
?>

<h1></h1>