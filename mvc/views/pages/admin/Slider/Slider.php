<h2 class="text-center text-primary fw-bold">Danh Sách</h2>
<h3><a href='<?php echo "/$data[domain]/Admin/$data[controller]/Add" ?>'><i class="bi bi-plus-circle"></i></a></h3>
<?php
$valuepe = $data['dSlider'];
echo "<table align='center' class='table table-bordered table-striped' cellpadding='2' cellspacing='2'>
<thead class='table-primary'>
<tr align='center' style='font-size:20px'>
     <th>Mã</th>
     <th>Title</th></th>
     <th>Ảnh</th>
     <th>Trạng thái</th>
     <th width='150px'>Tùy chọn</th>
     </tr>
     </thead>";
foreach ($data['dSlider'] as $key => $value) {
     echo "<tr align='center'>
               <td>$value[ID_Slider]</td>
               <td>$value[Title]</td>
               <td><img src='/$data[domain]/images/slider/$value[Image]' style='height: 75px;'  /></td>
               <td>$value[Status]</td>
               <td>
                    <a href='/$data[domain]/Admin/$data[controller]/Edit/$value[ID_Slider]'><i class='bi bi-pencil-square' style='color:lime'></i></a>
                    <a href='/$data[domain]/Admin/$data[controller]/Delete/$value[ID_Slider]'><i class='bi bi-trash-fill' style='color:red''></i></a>               
               </td>
          </tr>";
}
echo "</table>";
?>