<h1 align="center">Danh Sách Khách Hàng</h1>
<?php
if (isset($data['tb'])) {
     echo $data['tb'];
}
?>
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

foreach ($dcus as $key => $value){
     echo "<tr align='center'>
               <td>$value[ID_Cus]</td>
               <td>$value[First_Name]</td>
               <td>$value[Last_Name]</td>
               <td>$value[Address]</td>
               <td>$value[Phone]</td>
               <td>$value[Email]</td>
               <td>$value[Account]</td>
               <td>$value[Password]</td>
               <td>
                    <a href='/$data[domain]/Admin/$data[controller]/Edit/$value[ID_Cus]'><i class='bi bi-pencil-square' style='color:lime'></i></a>
                    <a href='/$data[domain]/Admin/$data[controller]/Delete/$value[ID_Cus]'><i class='bi bi-trash-fill' style='color:red'></i></a>               
               </td>
          </tr>";
}
echo "</table>";

?>