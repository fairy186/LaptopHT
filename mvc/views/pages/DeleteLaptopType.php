<h1 style='color: blue;' align='center'>XÓA LOẠI LAPTOP</h1>
<form action="" method="post">
	<div class="col-12 my-0 p-1">
		<center>Bạn có chắc muốn xóa loại lap top có id là <?php echo $data['id']?> không ?</center>
	</div>
	<div class="col-12 my-0 p-1">
		<center><button class="btn btn-primary" type="submit" name="sm">Xác nhận</button></center>
	</div>
</form>
<?php
if (isset($data['dType'])) {
	if ($data['dType'] == 1)
		echo "Đã xóa";
	else
		echo "Lỗi";
}
?>