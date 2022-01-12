<h1 class="text-center text-primary fw-bold m-3">Danh Sách Đơn Hàng</h1>
<div class="container mb-3" style="max-width: 400px;">
     <div class="input-group">
          <input id="search" class="form-control border-2 border-primary" name="info" value="<?php echo @$data['info'] ?>" type="search" onsearch="search()" placeholder="Tìm kiếm" aria-label="Search">
          <button class="btn btn-dark border-2 border-primary" type="button" onclick="search()"><i class="bi bi-search"></i></button>
     </div>
</div>
<?php
$dorcus = $data['dOr_Cus'];
echo "<table align='center' class='table table-bordered' cellpadding='2' cellspacing='2'>
<thead class='table-primary'>
<tr align='center' style='font-size:20px'>
     <th width='150px'>STT</th>
     <th>Mã đơn hàng</th>
     <th>Họ</th>
     <th>Tên</th>
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
               <td>$dfull[First_Name]</td>
               <td>$dfull[Last_Name]</td>
               <td>$time_order </td>
               <td>$dfull[Status_Order]</td>
               <td>
                    <a class='fs-5 btn btn-outline-dark py-0' href='/$data[domain]/Admin/$data[controller]/OrderDetails/$dfull[ID_Order]'><i class='bi bi-ticket-detailed-fill' style='color:red'></i></a>
               </td>
          </tr>";
}
echo "</table>";

?>