<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<?php 
	$tong = 0;
	$tich=0;
	$tongchan=0;
	if(isset($_POST['xuat'])){
		for ($i=$_POST['n1']; $i <= $_POST['n2']; $i++) { 
			$tong+=$i;
			$tich*=$i;
			if($i % 2 == 0){
				$tongchan+=$i;
			}
		}
	}
 ?>
<body>
	<form method="post">
		<table border="1">
			<tr>
				<td></td>
				<td>Số bắt đầu</td>
				<td><input type="text" name="n1"></td>
				<td>Số kết thúc</td>
				<td><input type="text" name="n2"></td>
			</tr>
			<tr>
			<td>
				<td colspan="4">Kết quả</td>
			</td>
			</tr>
			<tr>
			<td>
				<td>Tổng các số</td>
				<td colspan="3"><?php echo $tong ?></td>
			</td>
		 	</tr>
		 	<tr>
			<td>
				<td>Tích các số</td>
				<td colspan="3"><?php echo $tich ?></td>
			</td>
		 	</tr>
		 	<tr>
			<td>
				<td>Tổng các số chẵn</td>
				<td colspan="3"><?php echo $tongchan ?></td>
			</td>
		 	</tr>
		 	<tr>
			<td>
				<td>Tổng các số lẻ</td>
				<td colspan="3"><?php echo $tong-$tongchan ?></td>
			</td>
		 	</tr>
		 	<tr><td colspan="5"><button name="xuat">Xuất</button></td></tr>
		</table>
	</form>
</body>
</html>