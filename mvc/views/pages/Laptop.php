<h1>Danh Sách</h1>
<h3><a href='./Laptop/Add'>Add</a></h3>
<?php
$dlaptop = $data['dLap'];
echo "<table align='center' width='800' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse;' ><tr style='background-color: #0084ab;' align='center'>
     <th>STT</th>
     <th>Mã</th>
     <th>Tên</th>
     <th>Bảo hành</th>
     <th>Mã loại laptop</th>
     <th>Mã hãng</th>
     <th>Hình ảnh</th>
     <th>CPU</th>
     <th>GPU</th>
     <th>RAM</th>
     <th>Ổ cứng</th>
     <th>Màn hình</th>
     <th>Âm thanh</th>
     <th>Kết nối</th>
     <th>Tính năng khác</th>
     <th>Kích thước</th>
     <th>Chất liệu</th>
     <th>Pin</th>
     <th>Hệ điều hành</th>
     <th>Thời gian phát hành</th>
     <th>Tùy chọn</th>
     </tr>";

for ($i=0; $i < count($dlaptop) ; $i++) { 
     $dlap=$dlaptop[$i];
     $stt=$i+1;
     echo "<tr>
               <td>$stt</td>
               <td>$dlap[ID_Lap]</td>
               <td>$dlap[Name_Lap]</td>
               <td>$dlap[Insurance]</td>
               <td>$dlap[ID_Type]</td>
               <td>$dlap[ID_Manu]</td>
               <td>$dlap[Images]</td>
               <td>$dlap[CPU]</td>
               <td>$dlap[GPU]</td>
               <td>$dlap[RAM]</td>
               <td>$dlap[Storage]</td>
               <td>$dlap[Screen]</td>
               <td>$dlap[Audio]</td>
               <td>$dlap[Connection]</td>
               <td>$dlap[Other_Feature]</td>
               <td>$dlap[Dimen_Wei]</td>
               <td>$dlap[Material]</td>
               <td>$dlap[Battery]</td>
               <td>$dlap[OS]</td>
               <td>$dlap[Release_Time]</td>
               <td>
                    <a href='./Laptop/Edit/$dlap[ID_Lap]'>Edit</a> |
                    <a href='./Laptop/Delete/$dlap[ID_Lap]'>Delete</a>               
               </td>
          </tr>
          ";
}
echo "</table>";

?>