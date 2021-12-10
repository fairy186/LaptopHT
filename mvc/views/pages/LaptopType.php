<!-- <h1>
     <?php
          var_export($data['dType']);
     ?>
</h1> -->



<!-- <?php
if(mysqli_num_rows() == 0)
{
	echo "Chưa có dữ liệu";
}
else
{
	echo "<table align='center' width='800' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse;'>
			<tr style='background-color: #0084ab;' align='center'>
				<td><b> Mã loại </b></td>
				<td><b> Tên </b></td>
			</tr>";
	$stt=1;
	while($row = mysqli_fetch_array())
	{
		if($stt%2!=0)
		{
			echo "<tr>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
		}
		else
		{
			echo "<tr style='background-color: #ffb1007a;'>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
		}
			$stt+=1;
	}
	echo '</table>';
}
mysqli_close($dbc);
?> -->