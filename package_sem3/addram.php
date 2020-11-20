<?php
	
	$servername = "localhost";
    $username = "root";
    $password = "";


    $conn = mysqli_connect($servername, $username, $password,"package");

    $ram = $_GET["ram"];
    
	$price = "SELECT PRICE FROM GPU WHERE NAME='$gpu';";
    if ($conn->query($price) === FALSE) 
    {
        echo "Error price not found " . $conn->error;
    }
    $result = $conn->query($price);
    $row = mysqli_fetch_assoc($result);
    $sql1 = "INSERT INTO MYBUILD(NAME,PRICE) VALUE ('$gpu','".$row['PRICE']."');";
    if ($conn->query($sql1) === FALSE){
	   echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
    else
    {
        echo "<h2>YOUR GPU IS ADDED TO YOUR BUILD !!!! GO BACK AND ADD YOUR RAM</h2>";
    }
 ?>