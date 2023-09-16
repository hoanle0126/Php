<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div style="width:60%;margin:auto;margin-top: 10vh;border: 1px solid black;padding: 50px">
		
	<center><h1>Product Discount Calculator</h1></center>
	<form action="response.php" method="post">
		<div class="row" style="margin-bottom: 10px;">
			<label class="col-sm-3"  for="description">Product Description</label>
			<p class="col-sm-7"><?php echo $_POST['description'];?></p>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<label class="col-sm-3" for="price">List Price</label>
			<p class="col-sm-7">$<?php echo number_format($_POST['price'],2)?></p>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<label class="col-sm-3"  for="percent">Standard Discount</label>
			<p class="col-sm-7"><?php echo $_POST['percent']?>%</p>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<label class="col-sm-3"  for="percent">Discount Amount</label>
			<p class="col-sm-7">$<?php echo number_format($_POST['price']*$_POST['percent']/100) ?></p>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<label class="col-sm-3"  for="percent">Discount Price</label>
			<p class="col-sm-7">$<?php echo number_format($_POST['price']-$_POST['price']*$_POST['percent']/100) ?></p>
		</div>
	</form>
	</div>
</body>
</html>