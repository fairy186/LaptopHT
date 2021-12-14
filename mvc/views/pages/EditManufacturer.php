<h1 style='color: blue;' align='center'>CHỈNH SỬA HÃNG SẢN XUẤT</h1>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td>Mã hãng sản xuất </td>
				<td><input type="text" name="ma" value="<?php echo $data['id']?>" disabled required></td>
			</tr>
			<tr>
				<td>Tên hãng sản xuất </td>
				<td><input type="text" name="ten" required></td>
			</tr>
			<tr>
				<td colspan="2"><center><input type="submit" name="sm" value="Cập nhật"></center></td>
			</tr>
		</table>
	</form>
<?php
	if(isset($data['dManu'])){
		if($data['dManu']==1)
			echo "Đã chỉnh sửa";
		else
			echo "Vui lòng nhập lại";
	}
?>