<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Conversion Page2</title>
  </head>
  <body>
    <h1>Page 2[Conversion Rate]</h1><br>
    <h3>Consersion Site</h3><br>
    1.<a href="Home.php"> Home </a> 2. <a href=" ConversionRate.php"> Conversion Rate </a> 3. <a href="history.php"> history </a>
	<br>
	<br>
    
    <h2>Conversion Rate:</h2><br>

     <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="POST">
       Catagory: <input type="text" name="Catagory" > Unit:<input type="text" name="unit" > Rate:<input type="text" name="Rate"> <input type="submit"  name="submit"  value="Submit"><br><br>

     </form>
     <?php

   		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   			$catagory= $_POST['Catagory'];
   			$unit = $_POST['unit'];
        	$rate = $_POST['Rate'];

   			if (empty($catagory) || empty($unit) || empty($rate)) {
   				echo "Please fill all the fields properly";
   			}
   			else {
   				$catagory = validate($catagory);
   				$unit = validate($unit);
          		$rate = validate($rate);


   				$handle = fopen("data.json", "a");
   				$arr1 = array('Catagory' => $catagory, 'Unit' => $unit,'Rate'=>$rate);
   				$arr1 = json_encode($arr1);
   				fwrite($handle, $arr1 . "\n");

   				echo " new convertion rate addition successfull  ";
   			}
   		}

   		function validate($data) {
   			$data = trim($data);
   			$data = stripslashes($data);
   			$data = htmlspecialchars($data);
   			return $data;
   		}

   	
   	echo "<table border='1'>

<tr>

<th>catagory</th>

<th>unit</th>

<th>rate</th>

</tr>";

 

while($row = array('Catagory' => $catagory, 'Unit' => $unit,'Rate'=>$rate) )

  {

  echo "<tr>";

  echo "<td>" . $row['catagory'] . "</td>";

  echo "<td>" . $row['Rate'] . "</td>";

  echo "<td>" . $row['Unit'] . "</td>";

  echo "</tr>";

  }

echo "</table>";
?>
  </body>
</html>