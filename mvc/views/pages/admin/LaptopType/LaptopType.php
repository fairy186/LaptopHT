
<h1 align="center">Danh Sách</h1>
<h3><a href='<?php echo "/$data[domain]/Admin/$data[controller]/Add"?>'><i class="bi bi-plus-circle"></i></a></h3>
<?php
$dtype = $data['dType'];
echo "<table align='center' class='table table-bordered table-striped' cellpadding='2' cellspacing='2'>
<thead class='table-primary'>
<tr align='center' style='font-size:20px'>
     <th width='150px'>STT</th>
     <th>Mã</th>
     <th>Tên</th>
     <th width='150px'>Tùy chọn</th>
     </tr>
     </thead>";

for ($i = 0; $i < count($dtype); $i++) {
     $dty = $dtype[$i];
     $stt = $i + 1;
     echo "<tr align='center'>
               <td>$stt</td>
               <td>$dty[ID_Type]</td>
               <td>$dty[Name_Type]</td>
               <td>
                    <a href='/$data[domain]/Admin/$data[controller]/Edit/$dty[ID_Type]'><i class='bi bi-pencil-square btn btn-success rounded-circle shadow-lg' style='color:white; font-size: 20px;'></i></a>
                    <a href='/$data[domain]/Admin/$data[controller]/Delete/$dty[ID_Type]'><i class='bi bi-trash-fill btn btn-danger rounded-circle shadow-lg' style='color:white; font-size: 20px;'></i></a>               
               </td>
          </tr>";
}
echo "</table>";
?>