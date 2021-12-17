<h1 style='color: blue;' align='center'> CHỈNH SỬA LOẠI LAPTOP</h1>
<form action="" method="post">
	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">Mã loại laptop</label>
		<input type="text" name="ma" value="<?php echo $data['id'] ?>" disabled required class="form-control" id="exampleFormControlInput1">
	</div>
	<div class="mb-3">
		<label for="exampleFormControlInput2" class="form-label">Tên loại laptop</label>
		<input type="text" name="ten" value="<?php echo $data['name'] ?>" required class="form-control" id="exampleFormControlInput2">
		<label mess="ten">
	</div>
	<div class="col-12 my-0 p-1">
          <center><button class="btn btn-primary disabled" type="submit" name="sm">Thêm</button></center>
     </div>
</form>
<?php
if (isset($data['tb'])) {
	echo $data['tb'];
}
?>