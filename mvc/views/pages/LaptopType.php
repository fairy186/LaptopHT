<h1>Danh Sách</h1>
<h3><a href='./LaptopType/Add'>Add</a></h3>
<?php
$dtype = $data['dType'];
echo "<table align='center' width='800' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse;' ><tr style='background-color: #0084ab;' align='center'>
     <th>STT</th>
     <th>Mã</th>
     <th>Tên</th>
     <th>Tùy chọn</th>
     </tr>";

for ($i=0; $i < count($dtype) ; $i++) { 
     $dty=$dtype[$i];
     $stt=$i+1;
     echo "<tr>
               <td>$stt</td>
               <td>$dty[ID_Type]</td>
               <td>$dty[Name_Type]</td>
               <td>
                    <a href='./LaptopType/Edit/$dty[ID_Type]'>Edit</a> |
                    <a href='./LaptopType/Delete/$dty[ID_Type]'>Delete</a>               
               </td>
          </tr>
          ";
}
echo "</table>";

?>