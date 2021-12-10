
<?php
$dtype = $data['dType'];
echo "<table border='1'><tr>
     <th>STT</th>
     <th>Mã</th>
     <th>Tên</th>
     </tr>";

for ($i=0; $i < count($dtype) ; $i++) { 
     $dty=$dtype[$i];
     $stt=$i+1;
     echo "<tr>
               <td>$stt</td>
               <td>$dty[ID_Type]</td>
               <td>$dty[Name_Type]</td>
          </tr>";
}
echo "</table>";
?>