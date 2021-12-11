<h1 style='color: blue;' align='center'>XÓA LOẠI LAPTOP</h1>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td>Mã loại laptop </td>
				<td><input type="text" name="ma" value="<?php echo $data['id']?>" required></td>
			</tr>
			<tr>
				<td colspan="2"><center><input type="submit" name="sm" value="Xóa"></center></td>
			</tr>
		</table>
	</form>
<?php
	if(isset($data['dType'])){
		if($data['dType']==1)
			echo "Đã xóa";
		else
			echo "Lỗi";
	}
?>