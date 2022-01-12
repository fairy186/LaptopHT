<h1 class="text-center text-primary fw-bold m-3">Danh Sách Hảng Laptop <a href='<?php echo "/$data[domain]/Admin/$data[controller]/Add" ?>'><i class="bi bi-plus-circle"></i></a></h1>
<div class="container mb-3" style="max-width: 400px;">
<div class="input-group">
     <input id="search" class="form-control border-2 border-primary"  name="info" value="<?php echo @$data['info'] ?>" type="search" onsearch="search()" placeholder="Tìm kiếm" aria-label="Search">
     <button class="btn btn-dark border-2 border-primary"  type="button" onclick="search()"><i class="bi bi-search"></i></button>
</div>
</div>
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
               <a href='/$data[domain]/Admin/$data[controller]/Edit/$dman[ID_Manu]'><i class='bi bi-pencil-square btn btn-success rounded-circle shadow-lg' style='color:white; font-size: 20px;'></i></a> 
               <a href='/$data[domain]/Admin/$data[controller]/Delete/$dman[ID_Manu]'><i class='bi bi-trash-fill btn btn-danger rounded-circle shadow-lg' style='color:white; font-size: 20px;'></i></a>               
          </td>
     </tr>";
}
echo "</table>";
?>