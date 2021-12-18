<h1 style='color: blue;' align='center'>THÊM LOẠI LAPTOP</h1>

<form action="/<?php echo $data['domain'] ?>/LaptopType/Add" method="post" class="row g-3">
     <div class="col-12 my-0 p-1">
          <input type="text" class="form-control" name="ma" placeholder="Mã Loại Laptop" value='<?php if (isset($_POST["ma"])) echo $_POST["ma"] ?>' required>
          <label mess="ma">
          </label>
     </div>

     <div class="col-12 my-0 p-1">
          <input type="text" class="form-control" name="ten" placeholder="Tên Loại Laptop" value='<?php if (isset($_POST["ten"])) echo $_POST["ten"] ?>' required>
          <label mess="ten">
          </label>
     </div>
     <div class="col-12 my-0 p-1">
          <center><button class="btn btn-primary disabled" type="submit" name="sm">Thêm</button></center>
     </div>
     <div class="col-12 my-0 p-1">
          <label>
               <?php
               if (isset($data['tb'])) {
                    echo $data['tb'];
               }
               ?>
          </label>
     </div>
</form>