<h1 style='color: blue;' align='center'>THÊM HÃNG SẢN XUẤT</h1>

<form action="./Add" method="post" class="row g-3 needs-validation" novalidate>
	<div class="col-12 my-0 p-1">
		<input type="text" class="form-control" name="ma" placeholder="Mã Hãng Sản Xuất" id="validationCustom01" required>
		<label>
			
		</label>
	</div>

	<div class="col-12 my-0 p-1">
		<input type="text" class="form-control" name="ten" placeholder="Tên Hãng Sản Xuất" id="validationCustom02" required>
		<label>

		</label>
	</div>

	<div class="col-12 my-0 p-1">
		<button class="btn btn-primary " type="submit" name="sm">Thêm</button>
	</div>
</form>

<?php
if (isset($data['dManu'])) {
	if ($data['dManu'] == 1)
		echo "Đã thêm";
	else
		echo "Vui lòng nhập lại";
}
?>