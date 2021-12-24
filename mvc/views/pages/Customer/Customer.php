<h1 align="center">Danh Sách Khách Hàng</h1>
<?php
if (isset($data['tb'])) {
     echo $data['tb'];
}
?>
<h3><a href='<?php echo "/".$data['domain']."/".$data['controller']."/Add"?>'><i class="bi bi-plus-circle"></i></a></h3>
<?php
$dcus = $data['dCus'];
echo "<table align='center' class='table table-bordered' cellpadding='2' cellspacing='2'>
<thead class='table-primary'>
<tr align='center' style='font-size:20px'>
     <th width='150px'>Mã</th>
     <th>Họ</th>
     <th>Tên</th>
     <th>Địa chỉ</th>
     <th>Số điện thoại</th>
     <th>Email</th>
     <th>Tài khoản</th>
     <th>Mật khẩu</th>
     <th width='150px'>Tùy chọn</th>
     </tr>
     </thead>";

for ($i = 0; $i < count($dcus); $i++) {
     $dctm = $dcus[$i];
     echo "<tr align='center'>
               <td>$dctm[ID_Cus]</td>
               <td>$dctm[First_Name]</td>
               <td>$dctm[Last_Name]</td>
               <td>$dctm[Address]</td>
               <td>$dctm[Phone]</td>
               <td>$dctm[Email]</td>
               <td>$dctm[Account]</td>
               <td>$dctm[Password]</td>
               <td>
                    <a href='/$data[domain]/$data[controller]/Edit/$dctm[ID_Cus]'><i class='bi bi-pencil-square' style='color:lime'></i></a>
                    <a href='/$data[domain]/$data[controller]/Delete/$dctm[ID_Cus]'><i class='bi bi-trash-fill' style='color:red'></i></a>               
               </td>
          </tr>";
}
echo "</table>";

?>