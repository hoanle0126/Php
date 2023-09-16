<?php 
	
    $future_value = $_POST['amount'];
    for ($i = 1; $i <= $_POST['number']; $i++) {
        $future_value += $future_value * $_POST['rate'] * .01; 
    }
 ?>
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

	<center><h1>Future Value Calculator</h1></center>
	<form action="response.php" method="post">
		<div class="row" style="margin-bottom: 10px;">
			<label class="col-sm-3"  for="description">Investment Amount</label>
			<p class="col-sm-7">$<?php echo number_format($_POST['amount'],2);?></p>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<label class="col-sm-3" for="price">Yearly Interest Rate</label>
			<p class="col-sm-7"><?php echo $_POST['rate']?>%</p>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<label class="col-sm-3"  for="percent">Number Of Year</label>
			<p class="col-sm-7"><?php echo $_POST['number']?></p>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<label class="col-sm-3"  for="percent">Future Value</label>
			<p class="col-sm-7"><?php echo number_format($future_value,2) ?></p>
		</div>
	</form>
	</div>
</body>
</html>