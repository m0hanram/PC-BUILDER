<?php
	$servername = "localhost";
	$username = "root";
	$password = "";


	$conn = mysqli_connect($servername, $username, $password,"package");


	if (!$conn) 
	{
  		die("Connection failed: " . mysqli_connect_error());
	}

	$sql="SELECT name FROM GPU;";
	$result = $conn->query($sql);

	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			echo '<table style="width:100%,border: 2px solid black">
  									<tr>
    		<th><a href="https://www.w3schools.com">'.$row["name"].'</a></th>';
			echo	'</table>';
		}	
	}
	else
	{
		echo "error".mysqli_error($conn);
	}
	mysqli_close($conn);
?>