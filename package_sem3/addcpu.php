<?php
	
	$servername = "localhost";
    $username = "root";
    $password = "";


    $conn = mysqli_connect($servername, $username, $password,"package");

    $cpu = $_GET["cpu"];
    $sql2 = "DROP TABLE MYBUILD ;";

    if ($conn->query($sql2) === FALSE) 
    {
        echo "Error creating table: " . $conn->error;
    }

    $sql = "CREATE TABLE MYBUILD (SNO int unique auto_increment,NAME varchar(50) primary key,PRICE numeric(10,2)); ";

	if ($conn->query($sql) === FALSE) 
	{
  		echo "Error creating table: " . $conn->error;
	}
	$price = "SELECT PRICE FROM CPU WHERE NAME='$cpu';";
    if ($conn->query($price) === FALSE) 
    {
        echo "Error price not found " . $conn->error;
    }
    $result = $conn->query($price);
    $row = mysqli_fetch_assoc($result);
    $sql1 = "INSERT INTO MYBUILD(NAME,PRICE) VALUE ('$cpu','".$row['PRICE']."');";
    if ($conn->query($sql1) === FALSE){
	   echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
    else
    {
        echo "<h2>YOUR CPU IS ADDED TO YOUR BUILD !!!! GO BACK AND ADD YOUR MOTHER BOARD</h2>";
    }
 ?>