<h1 align="center">Danh Sách Quản Trị Viên</h1>
<?php
if (isset($data['tb'])) {
     echo $data['tb'];
}
?>
<h3><a href='<?php echo "/".$data['domain']."/".$data['controller']."/Add"?>'><i class="bi bi-plus-circle"></i></a></h3>
<?php
$dadmin = $data['dAdmin'];
echo "<table align='center' class='table table-bordered' cellpadding='2' cellspacing='2'>
<thead class='table-primary' >
<tr align='center' style='font-size:20px'>
     <th width='150px'>Mã</th>
     <th>Họ</th>
     <th>Tên</th>
     <th>Tài khoản</th>
     <th>Mật khẩu</th>
     <th width='150px'>Tùy chọn</th>
     </tr>
     </thead>";

for ($i = 0; $i < count($dadmin); $i++) {
     $dad = $dadmin[$i];
     echo "<tr align='center'>
               <td>$dad[ID_Admin]</td>
               <td>$dad[First_Name]</td>
               <td>$dad[Last_Name]</td>
               <td>$dad[Account]</td>
               <td>$dad[Password]</td>
               <td>
                    <a href='/$data[domain]/$data[controller]/Edit/$dad[ID_Admin]'><i class='bi bi-pencil-square' style='color:lime'></a>
                    <a href='/$data[domain]/$data[controller]/Delete/$dad[ID_Admin]'><i class='bi bi-trash-fill' style='color:black'></a>               
               </td>
          </tr>";
}
echo "</table>";

?>