<?php
if (!empty($_SESSION['Notification'])) {
     echo "<script>$(document).ready(function(){alert('$_SESSION[Notification]');})</script>";
     unset($_SESSION['Notification']);
}
?>
<h1 align="center">Danh Sách Hảng Laptop</h1>
<?php
if (isset($data['tb'])) {
     echo $data['tb'];
}
?>
<h3><a href='<?php echo "/$data[domain]/Admin/$data[controller]/Add"?>'><i class="bi bi-plus-circle"></i></a></h3>
<?php
$dmanu = $data['dManu'];
echo "<table class='table table-bordered table-striped' align='center' cellpadding='2' cellspacing='2'>
<thead class='table-primary'>
     <tr align='center' style='font-size:20px'>
          <th width='150px'>STT</th>
          <th>Mã</th>
          <th>Tên</th>
          <th width='150px'>Tùy chọn</th>
     </tr>
</thead>";

for ($i = 0; $i < count($dmanu); $i++) {
     $dman = $dmanu[$i];
     $stt = $i + 1;
     echo "
     <tr align='center'>
          <td>$stt</td>
          <td>$dman[ID_Manu]</td>
          <td>$dman[Name_Manu]</td>
          <td>
               <a href='/$data[domain]/Admin/$data[controller]/Edit/$dman[ID_Manu]'><i class='bi bi-pencil-square' style='color:lime'></i></a> 
               <a href='/$data[domain]/Admin/$data[controller]/Delete/$dman[ID_Manu]'><i class='bi bi-trash-fill' style='color:red'></i></a>               
          </td>
     </tr>";
}
echo "</table>";
?>