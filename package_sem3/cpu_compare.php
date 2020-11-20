<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<style type="text/css">
	*
	{
		font-size: 30px;
		font-family: verdana;
	}
	.left
	{
		margin-left: 12%;
	}
	.right
	{
		margin-right: 12%;
	}
	.bord{
			width: 29%;
		padding: 20px;
            border: 5px solid rgb(0, 0, 0);
            border-radius: 25px;
            background-color: white;
        }
	 table,tr
        {
            border: 3px solid black;
            border-collapse: collapse;
        }
</style>
<body>
<?php

	$servername = "localhost";
    $username = "root";
    $password = "";


    $conn = mysqli_connect($servername, $username, $password,"package");

	$name1="";
	$name2="";
  	$name1 = $_GET["cpu1"];
	$name2 = $_GET["cpu2"];

	if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql="SELECT name,date,no_of_cores,no_of_threads,fabrication,INSTRUCTION_SET,CACHE,MAX_TDP,BASE_FREQUENCY,MAX_FREQUENCY,PRICE FROM CPU where name='$name1';";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {
           		$row = mysqli_fetch_assoc($result); 
                echo "<div style='float:left' class='bord left'><h2>".$row["name"]."</h2>";
                echo '<table style="width:49%">
                
                <tr><h4>DATE:</h4>'.$row["date"].'</tr>
                <tr><h4>NO OF CORES:</h4>'.$row["no_of_cores"].'</tr>
                <tr><h4>NO OF THREADS:</h4>'.$row["no_of_threads"].'</tr>
                <tr><h4>FABRICATION :</h4>'.$row["fabrication"].'nm</tr>
                <tr><h4>INSTRUCTION SET:</h4>'.$row["INSTRUCTION_SET"].'bit</tr>
                <tr><h4>CACHE :</h4>'.$row["CACHE"].'MB</tr>
                <tr><h4>MAX TDP:</h4>'.$row["MAX_TDP"].'W</tr>
                <tr><h4>BASE FREQUENCY :</h4>'.$row["BASE_FREQUENCY"].'GHz</tr>
                <tr><h4>MAX FREQUENCY :</h4>'.$row["MAX_FREQUENCY"].'GHz</tr>
                <tr><h4>PRICE :</h4>'.$row["PRICE"].'</tr>
                
                </table></div>';
                }
	else {
  echo "0 results";
}

	
        $sql1="SELECT name,date,no_of_cores,no_of_threads,fabrication,INSTRUCTION_SET,CACHE,MAX_TDP,BASE_FREQUENCY,MAX_FREQUENCY,PRICE FROM CPU where name='$name2';";
        $result = $conn->query($sql1);
        if (mysqli_num_rows($result) > 0) {
           		$row = mysqli_fetch_assoc($result); 
                echo "<div style='float:right' class='bord right'><h2>".$row["name"]."</h2>";
                echo '<table style="width:49%">
          
                <tr><h4>DATE:</h4>'.$row["date"].'</tr>
                <tr><h4>NO OF CORES:</h4>'.$row["no_of_cores"].'</tr>
                <tr><h4>NO OF THREADS:</h4>'.$row["no_of_threads"].'</tr>
                <tr><h4>FABRICATION :</h4>'.$row["fabrication"].'nm</tr>
                <tr><h4>INSTRUCTION SET:</h4>'.$row["INSTRUCTION_SET"].'bit</tr>
                
                <tr><h4>CACHE :</h4>'.$row["CACHE"].'MB</tr>
                <tr><h4>MAX TDP:</h4>'.$row["MAX_TDP"].'W</tr>
                <tr><h4>BASE FREQUENCY :</h4>'.$row["BASE_FREQUENCY"].'GHz</tr>
                <tr><h4>MAX FREQUENCY :</h4>'.$row["MAX_FREQUENCY"].'GHz</tr>
                <tr><h4>PRICE :</h4>'.$row["PRICE"].'</tr>
                
                </table></div>';
                }
	else {
  echo "0 results";
}
        mysqli_close($conn);
	
?>
</body>
</html>