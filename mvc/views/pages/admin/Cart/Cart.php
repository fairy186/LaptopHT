<h1 align="center">Danh Sách Giỏ Hàng</h1>
<?php
if (isset($data['tb'])) {
     echo $data['tb'];
}
?>
<?php
$dcart = $data['dCart'];
echo "<table align='center' class='table table-bordered' cellpadding='2' cellspacing='2'>
<thead class='table-primary'>
<tr align='center' style='font-size:20px'>
     <th width='150px'>STT</th>
     <th>Mã laptop</th>
     <th>Mã khách hàng</th>
     <th>Số lượng</th>
     </tr>
     </thead>";

for ($i = 0; $i < count($dcart); $i++) {
     $dct = $dcart[$i];
     $stt = $i + 1;
     echo "<tr align='center'>
               <td>$stt</td>
               <td>$dct[ID_Lap]</td>
               <td>$dct[ID_Cus]</td>
          </tr>";
}
echo "</table>";

?>