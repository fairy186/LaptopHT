<h1 style='color: blue;' align='center'>THÊM LOẠI LAPTOP</h1>

<form action="./Add" method="post" class="row g-3 needs-validation" novalidate>
	<div class="col-12 my-0 p-1">
		<input id="ma" type="text" class="form-control" name="ma" placeholder="Mã Loại Laptop" id="validationCustom01" required>
		<label id="IDmessage">
			
		</label>
	</div>

	<div class="col-12 my-0 p-1">
		<input type="text" class="form-control" name="ten" placeholder="Tên Loại Laptop" id="validationCustom02" required>
		<label id="NameMessage" ></label>
	</div>

	<div class="col-12 my-0 p-1">
		<button class="btn btn-primary " type="submit" name="sm">Thêm</button>
	</div>
</form>

<?php
if (isset($data['dType'])) {
	if ($data['dType'] == 1)
		echo "Đã thêm";
	else
		echo "Vui lòng nhập lại";
}
?>
