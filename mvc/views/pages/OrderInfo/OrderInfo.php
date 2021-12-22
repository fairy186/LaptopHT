<h1 align="center">Danh Sách Đơn Hàng</h1>
<?php
if (isset($data['tb'])) {
     echo $data['tb'];
}
?>
<?php
$dorcus = $data['dOr_Cus'];
echo "<table align='center' class='table table-bordered' cellpadding='2' cellspacing='2'>
<thead class='table-primary'>
<tr align='center' style='font-size:20px'>
     <th>Mã đơn hàng</th>
     <th>Mã khách hàng</th>
     <th>Tên khách hàng</th>
     <th>Thời gian đặt hàng</th>
     <th>Trạng thái</th>
     <th>Tùy chọn</th>
     </tr>
     </thead>";

for ($i = 0; $i < count($dorcus); $i++) {
     $dfull = $dorcus[$i];
     echo "<tr align='center'>
               <td>$dfull[ID_Order]</td>
               <td>$dfull[ID_Cus]</td>
               <td>$dfull[First_Name] $dfull[Last_Name]</td>
               <td>$dfull[Time_Order]</td>
               <td>$dfull[Status_Order]</td>
               <td>
                    <a href='/$data[domain]/$data[controller]/Edit/$dfull[ID_Order]'>Edit</a> |
                    <a href='/$data[domain]/OrderDetails/$dfull[ID_Order]'>Details</a>
               </td>
          </tr>";
}
echo "</table>";

?>