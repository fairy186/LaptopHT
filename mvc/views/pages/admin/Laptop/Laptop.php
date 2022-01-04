<?php
if (!empty($_SESSION['Notification'])) {
     echo "<script>$(document).ready(function(){alert('$_SESSION[Notification]');})</script>";
     unset($_SESSION['Notification']);
}
?>
<h1 align="center">Danh Sách Laptop</h1>
<h3><a href='<?php echo "/$data[domain]/Admin/$data[controller]/Add" ?>'><i class="bi bi-plus-circle"></i></a></h3>
<?php
$dlaptop = $data['dLap'];
echo "<table align='center' class='table table-bordered' cellpadding='2' cellspacing='2'>
     <thead class='table-primary'>
     <tr align='center' style='vertical-align: middle; font-size:20px;' >
     <th width='150px'>STT</th>
     <th>Mã</th>
     <th>Tên</th>
     <th>Giá</th>
     <th>Bảo hành</th>
     <th>Mã loại laptop</th>
     <th>Mã hãng</th>
     <th>Hình ảnh</th>
     <th>Thời điểm ra mắt</th>
     <th width='150px'>Tùy chọn</th>
     </tr></thead>";
for ($i = 0; $i < count($dlaptop); $i++) {
     $dlap = $dlaptop[$i];
     $images = json_decode($dlap['Images']);
     $stt = $i + 1;
     echo "<tr align='center'>
               <td>$stt</td>
               <td>$dlap[ID_Lap]</td>
               <td>$dlap[Name_Lap]</td>
               <td>$dlap[Price]</td>
               <td>$dlap[Insurance]</td>
               <td>$dlap[ID_Type]</td>
               <td>$dlap[ID_Manu]</td>
               <td><img class='col' src='/$data[domain]/images/$dlap[ID_Lap]/$images[0]' style='max-height:80px;'/></td>
               <td>$dlap[Release_Time]</td>
               <td>
                    <a href='/$data[domain]/Admin/$data[controller]/Edit/$dlap[ID_Lap]'><i class='bi bi-pencil-square' style='color:lime'></i></a>
                    <a href='/$data[domain]/Admin/$data[controller]/Delete/$dlap[ID_Lap]'><i class='bi bi-trash-fill' style='color:red'></i></a>  
               </td>
          </tr>";
}
echo "</table>";

?>