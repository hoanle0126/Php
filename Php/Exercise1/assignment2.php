<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<table border="1">
			<tr><th colspan="5">Giải phương trình bậc 1</th></tr>
			<tr>
				<td>Phương trình</td>
				<td><input type="text" name="a"></td>
				<td>X+</td>
				<td><input type="text" name="b"></td>
				<td>=0</td>
			</tr>
			<tr>
				<td>Nghiệm</td>
				<td colspan="4">
					<?php 
                        if(isset($_POST['xuat'])){
                        	echo -$_POST['b']/$_POST['a'];
                        }
					 ?>
				</td>
			</tr>
			<tr><td colspan="5"><center><button name="xuat">Xuất</button></center></td></tr>
		</table>
	</form>
</body>
</html>