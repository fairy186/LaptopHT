<h1 align="center">Danh Sách Quản Trị Viên</h1>
<?php
if (isset($data['tb'])) {
     echo $data['tb'];
}
?>
<h3><a href='<?php echo "/$data[domain]/Admin/$data[controller]/Add" ?>'><i class="bi bi-plus-circle"></i></a></h3>
<?php
echo "<table align='center' class='table table-bordered rounded-3' cellpadding='2' cellspacing='2'>
<thead class='table-primary' >
<tr align='center' style='font-size:20px'>
     <th width='150px'>Mã</th>
     <th width='500px'>Họ</th>
     <th>Tên</th>
     <th>Tài khoản</th>
     <th width='150px'>Tùy chọn</th>
     </tr>
     </thead>";

foreach ($data['dAdmin'] as $key => $value) {
     $dad = $value;
     echo "<tr align='center'>
               <td>$dad[ID_Admin]</td>
               <td>$dad[First_Name]</td>
               <td>$dad[Last_Name]</td>
               <td>$dad[Account]</td>
               <td>
                    <a href='/$data[domain]/Admin/$data[controller]/Edit/$dad[ID_Admin]'><i class='bi-pencil-square' style='color:lime'></i></a>
                    <a href='/$data[domain]/Admin/$data[controller]/Delete/$dad[ID_Admin]'><i class='bi bi-trash-fill' style='color:red'></i></a>               
               </td>
          </tr>";
}
echo "</table>";

?>