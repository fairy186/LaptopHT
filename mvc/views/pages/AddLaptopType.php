<h1 style='color: blue;' align='center'>THÊM LOẠI LAPTOP</h1>
	<form action="./Add" method="post">
		<table align="center">
			<tr>
				<td>Mã loại laptop </td>
				<td><input type="text" name="ma" required></td>
			</tr>
			<tr>
				<td>Tên loại laptop </td>
				<td><input type="text" name="ten" required></td>
			</tr>
			<tr>
				<td colspan="2"><center><input type="submit" name="sm" value="Thêm"></center></td>
			</tr>
		</table>
	</form>
<?php
	if(isset($data['dType'])){
		if($data['dType']==1)
			echo "Đã thêm";
		else
			echo "Vui lòng nhập lại";
	}
?>