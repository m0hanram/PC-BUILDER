<?php
	
	$servername = "localhost";
    $username = "root";
    $password = "";


    $conn = mysqli_connect($servername, $username, $password,"package");

    $cpu = $_GET["cpu"];
    $mb = $_GET["mb"];
    $gpu = $_GET["gpu"];
    $ram = $_GET["ram"];
    $ssd = $_GET["ssd"];
    $psu = $_GET["psu"];
    $case = $_GET["case"];

    $sql = "CREATE TABLE MYBUILD (SNO int unique auto_increment,NAME varchar(50) primary key,PRICE numeric(10,2)); ";

	if ($conn->query($sql) === FALSE) 
	{
  		echo "Error creating table: " . $conn->error;
	}
	
    $sql1 = "INSERT INTO MYBUILD (NAME,PRICE) VALUE('$cpu',)";

		if ($conn->query($sql) === TRUE) {
  			echo "New record created successfully";
		} else {
  	echo "Error: " . $sql . "<br>" . $conn->error;
		}
?>