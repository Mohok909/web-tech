<?php
		$hostname = "localhost";
    	$username = "root";
    	$password = "";
    	$database = "task";

    	$con = new mysqli($hostname, $username, $password, $database);

		if ($_SERVER['REQUEST_METHOD'] === "POST" ) 	
		{
		 

		 $user = $_POST["username"] ;
		 $pass = $_POST["pass"];
			
			$sql = "SELECT * FROM registration WHERE username= '$user' AND pass = '$pass'  ";
			$stmt = $con->prepare($sql);

			$stmt->execute();
			$result = $stmt->get_result();

		

			if($result > 0)
			{
				echo "login successfull";
			}
			else 
			{
				echo "Login error";
			}
	}

?>