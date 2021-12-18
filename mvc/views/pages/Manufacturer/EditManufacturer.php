<h1 style='color: blue;' align='center'>CHỈNH SỬA HẢNG LAPTOP</h1>
<form action="" method="post">
	<div class="mb-3">
		<label for="field1" class="form-label">Mã hảng</label>
		<input id="field1" type="text" name="ma" value="<?php echo $data['id'] ?>"  class="form-control" disabled>
	</div>
	<div class="mb-3">
		<label for="field2" class="form-label">Tên hảng</label>
		<input id="field2" type="text" name="ten" value="<?php echo $data['name'] ?>" class="form-control" >
		<label mess="ten">
	</div>
	<div class="col-12 my-0 p-1">
          <center><button class="btn btn-primary disabled" type="submit" name="sm">Cập nhật</button></center>
     </div>
</form>
<?php
if (isset($data['tb'])) {
	echo $data['tb'];
}
?>