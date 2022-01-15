<h1 class="text-center text-primary fw-bold m-3">Danh Sách Giỏ Hàng</h1>
<div class="container mb-3" style="max-width: 400px;">
<div class="input-group">
     <input id="search" class="form-control border-2 border-primary"  name="info" value="<?php echo @$data['info'] ?>" type="search" onsearch="search()" placeholder="Tìm kiếm" aria-label="Search">
     <button class="btn btn-dark border-2 border-primary"  type="button" onclick="search()"><i class="bi bi-search"></i></button>
</div>
</div>
<?php
$prev = @$data['np'] - 1;
$next = @$data['np'] + 1;
echo "<table align='center' class='table table-bordered ' cellpadding='2' cellspacing='2'>
          <tr class='table-primary' align='center' style='font-size:20px'>
               <th width='150px'>STT</th>
               <th>Họ</th>
               <th>Tên</th>
               <th>Tên laptop</th>
               <th>Số lượng</th>
          </tr>";

foreach($data['dCart'] as $key => $value) {
     $stt = $key + 1;
     echo "<tr align='center'>
               <td>$stt</td>
               <td>$value[First_Name]</td>
               <td> $value[Last_Name]</td>
               <td>$value[Name_Lap]</td>
               <td>$value[Quantity]</td>
          </tr>";
}
echo "</table>";

?>
<nav aria-label="Page navigation">
     <ul class="pagination d-flex justify-content-center fs-5">
          <li id="prev" class="page-item"><a class="page-link" href='<?php echo "$data[domain]/Admin/$data[controller]/$prev" ?>'>Previous</a></li>
          <?php
          for ($i = 1; $i <= $data['tp']; $i++) {
               echo "<li class='page-item'><a class='page-link' href='$data[domain]/Admin/$data[controller]/$i'>$i</a></li>";
          }
          ?>
          <li id="next" class="page-item"><a class="page-link" href='<?php echo "$data[domain]/Admin/$data[controller]/$next" ?>'>Next</a></li>
     </ul>
</nav>
<script>
      $(document).ready(function() {
          <?php
          if ($prev <= 0)
               echo ("$('#prev').addClass('invisible');");
          if ($next > $data['tp'])
               echo ("$('#next').addClass('invisible');");
          ?>
     })
</script>