<h1 style='color: blue;' align='center'>THÊM LOẠI LAPTOP</h1>
<form action="" method="post" class="col-12 col-xl-6 container">
     <div>
          <label for="field1" class="form-label">Mã loại laptop</label>
          <input id="field1" type="text" name="ma" value="<?php echo @$_POST['ma'] ?>" class="form-control">
          <label mess="ma"></label>
     </div>
     <div>
          <label for="field2" class="form-label">Tên loại laptop</label>
          <input id="field2" type="text" name="ten" value="<?php echo @$_POST['ten'] ?>" class="form-control">
          <label mess="ten"></label>
     </div>
     <div>
          <center>
               <button class="btn btn-outline-dark mt-3" name="sm" type="submit">
                    <h4 class="mx-3 my-1">Xác nhận</h4>
               </button>
          </center>
     </div>
     <div class="col-12 my-0 p-1">
</form>
<?php
if (isset($data['tb'])) {
     echo "<script>alert('$data[tb]')</script>";
}
?>