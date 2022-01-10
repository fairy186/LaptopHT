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
     <th width='150px'>STT</th>
     <th>Mã đơn hàng</th>
     <th>Tên khách hàng</th>
     <th>Thời gian đặt hàng</th>
     <th>Trạng thái</th>
     <th width='150px'>Tùy chọn</th>
     </tr>
     </thead>";

for ($i = 0; $i < count($dorcus); $i++) {
     $dfull = $dorcus[$i];
     $time_order = $this->format_date($dfull['Time_Order']);
     $stt = $i + 1;
     echo "<tr align='center'>
               <td>$stt</td>
               <td>$dfull[ID_Order]</td>
               <td>$dfull[First_Name] $dfull[Last_Name]</td>
               <td>$time_order </td>
               <td>$dfull[Status_Order]</td>
               <td>
                    <a class='fs-5 btn btn-outline-dark py-0' href='/$data[domain]/Admin/$data[controller]/OrderDetails/$dfull[ID_Order]'><i class='bi bi-ticket-detailed-fill' style='color:red'></i></a>
               </td>
          </tr>";
}
echo "</table>";

?>