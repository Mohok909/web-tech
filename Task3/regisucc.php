<!DOCTYPE html>
<html>
<body>

<h1>Registration Successful</h1>
<style> h1 , h2 , p {text-align: center;}</style>
 
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
 <h2> Do you want to continue </h2>
<p><button name="click" type="submit" value="yes">YES</button>
<button name="click" type="submit" value="no">NO</button></p>
<?php

echo "<br>";
echo "<br>";

if ($_SERVER['REQUEST_METHOD'] === "POST")

	{ 
		$click = $_POST['click'];

		if ( $click === "yes")

		{
			header("Location: login.php");

		}
		else 
		{
			header("Location: formreg.php");

		}
	}
	?>

</form>
 
</body>
</html>