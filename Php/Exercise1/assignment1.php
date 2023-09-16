<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div style="width: 40%; margin: auto;margin-top: 20vh;">
		<form method="post">
		<table border="1">
			<tr><th colspan="2" style="text-align: center;">In lời chào</th></tr>
			<tr>
				<td>Họ tên bạn</td>
				<td><input type="text" name="ten"></td>
			</tr>
			<tr><td colspan="2">
				<center>
					<?php 
						if(isset($_POST['xuat'])){
							echo "Chào bạn ",$_POST['ten'];
						}
				 	?>
				</center>
			</td></tr>
			<tr><td colspan="2" style="text-align: center;"><button name="xuat">Xuất</button></td></tr>
		</table>
	</form>
	</div>
</body>
</html>