<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body>

	<h1>Page 1 [ Home ] </h1>
	<h2> Convertor Website </h2> 

	1.<a href="Home.php"> Home </a> 2. <a href=" ConversionRate.php"> Conversion Rate </a> 3. <a href="history.php"> history </a>
	<br>
	<br>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		Select Category :*
			<select name="Category" id="Category" >
			<option value="">None</option>
			</select>
			<br> <br>
		value :*
			<input type="text" name="value" value="">
			<input type="submit" name="Submit">
			<br><br>
		Result :
			<input type="text" name="result" value="">	


	</form>

	


</body>
</html>