<?php
	
	$servername = "localhost";
    $username = "root";
    $password = "";


    $conn = mysqli_connect($servername, $username, $password,"package");

    $mb = $_GET["mb"];
	$cpu = "SELECT name FROM MYBUILD WHERE sno=1;";
    if ($conn->query($cpu) === FALSE) 
    {
        echo "Error cpu name not found " . $conn->error;
    }
    $result = $conn->query($cpu);
    $row = mysqli_fetch_assoc($result);
    $cpuname=$row['name'];
    echo $cpuname;

    $price = "SELECT PRICE FROM MOTHERBOARD WHERE NAME='$mb';";
    if ($conn->query($price) === FALSE) 
    {
        echo "Error price not found " . $conn->error;
    }
    $result = $conn->query($price);
    $row = mysqli_fetch_assoc($result);

    $check = "SELECT NAME FROM MOTHERBOARD WHERE NAME IN(SELECT M.NAME FROM MOTHERBOARD M INNER JOIN CPU C ON  SUBSTRING(C.NAME,1,3)=SUBSTRING(M.CHIPSET,1,3) WHERE C.NAME='$cpuname' AND M.NAME='$mb');";
    if ($conn->query($check) === FALSE)
    {
       echo "Error: " . $check . "<br>" . $conn->error;
    }
    $result = $conn->query($check);
    $row2 = mysqli_fetch_assoc($result);
    echo is_null($row2['NAME']);
    if(is_null($row2['NAME']))
    {
        echo '<h2>'.$mb.' IS NOT COMPATIBLE  WITH YOUR CPU !!!  GO BACK AND SELECT ANOTHER MOTHERBOARD !!!</h2>';
    }
    else
    {
        $sql1 = "INSERT INTO MYBUILD(NAME,PRICE) VALUE ('$mb','".$row['PRICE']."');";    
        if ($conn->query($sql1) === FALSE)
        {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }

        else
        {
            echo "<h2>YOUR MOTHERBOARD IS ADDED TO YOUR BUILD !!!! GO BACK AND ADD YOUR GPU</h2>";
        }
    }
 ?>