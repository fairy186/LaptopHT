<h1>Danh Sách</h1>
<h3><a href='./Manufacturer/Add'><i class="bi bi-plus-circle"></i></a></h3>
<?php
$dmanu = $data['dManu'];
echo "<table class='table table-bordered table-striped' align='center' cellpadding='2' cellspacing='2'>
<thead class='table-warning'>
     <tr align='center' >
          <th>STT</th>
          <th>Mã</th>
          <th>Tên</th>
          <th>Tùy chọn</th>
     </tr>
</thead>";

for ($i = 0; $i < count($dmanu); $i++) {
     $dman = $dmanu[$i];
     $stt = $i + 1;
     echo "
     <tr align='center'>
          <td>$stt</td>
          <td>$dman[ID_Manu]</td>
          <td>$dman[Name_Manu]</td>
          <td>
               <a href='./Manufacturer/Edit/$dman[ID_Manu]'>Edit</a> |
               <a href='./Manufacturer/Delete/$dman[ID_Manu]'>Delete</a>               
          </td>
     </tr>";
}
echo "</table>";
?>