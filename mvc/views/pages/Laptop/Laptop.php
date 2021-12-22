<h1 align="center">Danh Sách Laptop</h1>
<?php
if (isset($data['tb'])) {
     echo $data['tb'];
}
?>
<h3><a href='<?php echo "/".$data['domain']."/".$data['controller']."/Add"?>'><i class="bi bi-plus-circle"></i></a></h3>
<?php
$dlaptop = $data['dLap'];
echo "<table align='center' class='table table-bordered' cellpadding='2' cellspacing='2' style='border-collapse:collapse;'>
     <thead class='table-info'>
     <tr align='center' style='vertical-align: middle;'>
     <th>STT</th>
     <th>Mã</th>
     <th>Tên</th>
     <th>Bảo hành</th>
     <th>Mã loại laptop</th>
     <th>Mã hãng</th>
     <th>Hình ảnh</th>
     <th>Thời điểm ra mắt</th>
     <th>Tùy chọn</th>
     </tr></thead>";

for ($i = 0; $i < count($dlaptop); $i++) {
     $dlap = $dlaptop[$i];
     $stt = $i + 1;
     echo "<tr align='center'>
               <td>$stt</td>
               <td>$dlap[ID_Lap]</td>
               <td>$dlap[Name_Lap]</td>
               <td>$dlap[Insurance]</td>
               <td>$dlap[ID_Type]</td>
               <td>$dlap[ID_Manu]</td>
               <td>$dlap[Images]</td>
               <td>$dlap[Release_Time]</td>
               <td>
                    <a href='/$data[domain]/$data[controller]/Edit/$dlap[ID_Lap]'>Edit</a> |
                    <a href='/$data[domain]/$data[controller]/Delete/$dlap[ID_Lap]'>Delete</a>               
               </td>
          </tr>";
}
echo "</table>";

?>