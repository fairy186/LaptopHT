<h1>Danh Sách</h1>
<h3><a href='./Manufacturer/Add'>Add</a></h3>
<?php
$dmanu = $data['dManu'];
echo "<table align='center' width='800' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse;' ><tr style='background-color: #0084ab;' align='center'>
     <th>STT</th>
     <th>Mã</th>
     <th>Tên</th>
     <th>Tùy chọn</th>
     </tr>";

for ($i=0; $i < count($dmanu) ; $i++) { 
     $dman=$dmanu[$i];
     $stt=$i+1;
     echo "<tr>
               <td>$stt</td>
               <td>$dman[Id_Manu]</td>
               <td>$dman[Name_Manu]</td>
               <td>
                    <a href='./Manufacturer/Edit/$dman[Id_Manu]'>Edit</a> |
                    <a href='./Manufacturer/Delete/$dman[Id_Manu]'>Delete</a>               
               </td>
          </tr>
          ";
}
echo "</table>";

?>