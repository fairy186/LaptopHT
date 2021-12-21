<h1>Danh Sách Đơn Hàng</h1>
<?php
if (isset($data['tb'])) {
     echo $data['tb'];
}
?>
<?php
$dorin = $data['dOrIn'];
echo "<table align='center' class='table table-bordered' cellpadding='2' cellspacing='2'>
<thead class='table-primary'>
<tr align='center'>
     <th>Mã đơn hàng</th>
     <th>Mã khách hàng</th>
     <th>Thời gian đặt hàng</th>
     <th>Trạng thái</th>
     <th>Tùy chọn</th>
     </tr>
     </thead>";

for ($i = 0; $i < count($dorin); $i++) {
     $dorderinfo = $dorin[$i];
     echo "<tr align='center'>
               <td>$dorderinfo[ID_Order]</td>
               <td>$dorderinfo[ID_Cus]</td>
               <td>$dorderinfo[Time_Order]</td>
               <td>$dorderinfo[Status_Order]</td>
               <td>
                    <a href='/$data[domain]/$data[controller]/Edit/$dorderinfo[ID_Order]'>Edit</a> |
                    <a href='/$data[domain]/OrderDetails/$dorderinfo[ID_Order]'>Details</a>
               </td>
          </tr>";
}
echo "</table>";

?>