<h1>Danh Sách</h1>
<?php
if (isset($data['tb'])) {
     echo $data['tb'];
}
?>
<h3><a href='LaptopType/Add'>Add</a></h3>

<?php
$dtype = $data['dType'];
echo "<table align='center' class='table table-bordered' cellpadding='2' cellspacing='2'>
<thead class='table-primary'>
<tr align='center'>
     <th>STT</th>
     <th>Mã</th>
     <th>Tên</th>
     <th>Tùy chọn</th>
     </tr>
     </thead>";

for ($i=0; $i < count($dtype) ; $i++) { 
     $dty=$dtype[$i];
     $stt=$i+1;
     echo "<tr align='center'>
               <td>$stt</td>
               <td>$dty[ID_Type]</td>
               <td>$dty[Name_Type]</td>
               <td>
                    <a href='./LaptopType/Edit/$dty[ID_Type]'>Edit</a> |
                    <a href='./LaptopType/Delete/$dty[ID_Type]'>Delete</a>               
               </td>
          </tr>";
}
echo "</table>";

?>