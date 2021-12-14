


<h1 style='color: blue;' align='center'>THÊM LOẠI LAPTOP</h1>

<form action="/php/LaptopHT/LaptopType/Add" method="post" class="row g-3">
     <div class="col-12 my-0 p-1">
          <input id="ma" type="text" class="form-control" name="ma" placeholder="Mã Loại Laptop" required>
          <label id="IDmessage">
          </label>
     </div>

     <div class="col-12 my-0 p-1">
          <input type="text" class="form-control" name="ten" placeholder="Tên Loại Laptop" required>
          <label id="NameMessage"></label>
     </div>

     <div class="col-12 my-0 p-1">
          <button class="btn btn-primary" type="submit" name="sm">Thêm</button>
     </div>
</form>

<?php
if (isset($data['tb'])) {
     echo $data['tb'];
}
?>