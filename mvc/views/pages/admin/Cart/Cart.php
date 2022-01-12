<h1 class="text-center text-primary fw-bold m-3">Danh Sách Giỏ Hàng</h1>
<div class="container mb-3" style="max-width: 400px;">
<div class="input-group">
     <input id="search" class="form-control border-2 border-primary"  name="info" value="<?php echo @$data['info'] ?>" type="search" onsearch="search()" placeholder="Tìm kiếm" aria-label="Search">
     <button class="btn btn-dark border-2 border-primary"  type="button" onclick="search()"><i class="bi bi-search"></i></button>
</div>
</div>
<?php
$dcart = $data['dCart'];
echo "<table align='center' class='table table-bordered ' cellpadding='2' cellspacing='2'>
<thead class='table-primary'>
<tr align='center' style='font-size:20px'>
     <th width='150px'>STT</th>
     <th>Họ</th>
     <th>Tên</th>
     <th>Tên laptop</th>
     <th>Số lượng</th>
     </tr>
     </thead>";

for ($i = 0; $i < count($dcart); $i++) {
     $dct = $dcart[$i];
     $stt = $i + 1;
     echo "<tr align='center'>
               <td>$stt</td>
               <td>$dct[First_Name]</td>
               <td> $dct[Last_Name]</td>
               <td>$dct[Name_Lap]</td>
               <td>$dct[Quantity]</td>

          </tr>";
}
echo "</table>";

?>