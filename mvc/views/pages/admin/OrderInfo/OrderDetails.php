<?php
if (!empty($_SESSION['Notification'])) {
     echo "<script>$(document).ready(function(){alert('$_SESSION[Notification]');})</script>";
     unset($_SESSION['Notification']);
}
?>
<h2 style='color: blue;' align='center'>CHI TIẾT ĐƠN HÀNG</h2>
<form action="" method="post" class="col-12 col-xl-6 container">
     <div>
          <?php
          echo "<table align='center' class='table table-bordered' cellpadding='2' cellspacing='2'>
<thead class='table-primary'>
<tr align='center' style='font-size:20px'>
     <th>Mã đơn hàng</th>
     <th>Mã laptop</th>
     <th>Số lượng</th>
     <th>Đơn giá</th>
     </tr>
     </thead>";

          foreach ($data['dOrDe'] as $key => $value) {
               $price = num_to_price($value['Price']);
               echo "<tr align='center'>
               <td>$value[ID_Order]</td>
               <td>$value[ID_Lap]</td>
               <td>$value[Quantity]</td>
               <td>$price</td>
          </tr>";
          }
          echo "</table>";


          ?>
     </div>
     <div>
          <table>
               <tr>
                    <td>
                         Mã đơn hàng
                    </td>
                    <td>
                         <?php echo @$data['dOrIn']['ID_Order'] ?>
                    </td>
               </tr>
               <tr>
                    <td>
                         Tên khách hàng
                    </td>
                    <td>
                         <?php echo @$data['dOrIn']['First_Name'] . " " . @$data['dOrIn']['Last_Name'] ?>
                    </td>
               </tr>
               <tr>
                    <td>
                         Thời gian đặt hàng
                    </td>
                    <td>
                         <?php echo format_date(@$data['dOrIn']['Time_Order']) ?>
                    </td>
               </tr>
               <tr>
                    <td>
                         Tổng tiền
                    </td>
                    <td>
                         <?php echo num_to_price(@$data['dOrIn']['Cost']) ?>
                    </td>
               </tr>
          </table>
     </div>
     <div>
          <select class="form-select form-select-sm" name="status">
               <option <?php if ($data['dOrIn']['Status_Order'] == 1) echo "selected"?> value="1">Chờ xác nhận (1)</option>
               <option <?php if ($data['dOrIn']['Status_Order'] == 2) echo "selected"?> value="2">Xác nhận, đóng gói (2)</option>
               <option <?php if ($data['dOrIn']['Status_Order'] == 3) echo "selected"?> value="3">Đang vận chuyển (3)</option>
               <option <?php if ($data['dOrIn']['Status_Order'] == 4) echo "selected"?> value="4">Đang giao hàng (4)</option>
               <option <?php if ($data['dOrIn']['Status_Order'] == 5) echo "selected"?> value="5">Đã giao hàng (5)</option>
               <option <?php if ($data['dOrIn']['Status_Order'] == 0) echo "selected"?> value="0">Đã bị hủy (0)</option>

          </select>
     </div>

     <div>
          <center>
               <button class="btn btn-outline-dark mt-3" name="sm" type="submit">
                    <h4 class="mx-3 my-1">Xác nhận</h4>
               </button>
          </center>
     </div>
     <div class="col-12 my-0 p-1">
</form>