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
		<tr><td colspan="3">Đọc số</td></tr>
		<tr>
			<td>Nhập số(0-9)</td>
			<td rowspan="2" style="vertical-align: middle;"><button name="xuat">Xuất</button></td>
			<td>Bằng chữ</td>
		</tr>
		<tr>
			<td><input type="text" name="so"></td>
			<td>
				<?php 
					if(isset($_POST['xuat'])){
						switch($_POST['so'])
						{
							case 1: echo "Một"; break;
							case 2: echo "Hai"; break;
							case 3: echo "Ba"; break;
							case 4: echo "Bốn"; break;
							case 5: echo "Năm"; break;
							case 6: echo "Sáu"; break;
							case 7: echo "Bảy"; break;
							case 8: echo "Tám"; break;
							case 9: echo "Chín"; break;
						}
					}
				 ?>
			</td>
		</tr>
	</table
	</form>
</body>
</html>