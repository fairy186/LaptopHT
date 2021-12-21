<h1>Danh Sách Đơn Hàng</h1>
<?php
if (isset($data['tb'])) {
     echo $data['tb'];
}
?>
<?php
$dorde = $data['dOrDe'];
echo "<table align='center' class='table table-bordered' cellpadding='2' cellspacing='2'>
<thead class='table-primary'>
<tr align='center'>
     <th>Mã đơn hàng</th>
     <th>Mã laptop</th>
     <th>Số lượng</th>
     </tr>
     </thead>";

for ($i = 0; $i < count($dorde); $i++) {
     $dorderdetails = $dorde[$i];
     echo "<tr align='center'>
               <td>$dorderdetails[ID_Order]</td>
               <td>$dorderdetails[ID_Lap]</td>
               <td>$dorderdetails[Quantity]</td>
          </tr>";
}
echo "</table>";

?>