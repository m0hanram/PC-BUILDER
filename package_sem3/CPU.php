<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = mysqli_connect($servername, $username, $password,"package");
    ?>
    <title>CPU</title>
    <style>
        .bord{
            border: 5px solid rgb(0, 0, 0);
            border-radius: 25px;
            background-color: white;
        }
        .container{
            position: relative;
            text-align: center;
        }
        table,th,td
        {
            border: 3px solid black;
            border-collapse: collapse;
        }
        button{
            margin: auto;
            display: block;
            padding: 5px 100px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            transition-duration: 0.4s;
            font-weight: bold;
        }
        button:hover{
            background-color: #008CBA;
            color: white;
        } 
        a
        {
            text-decoration: none;
        }
    </style>
</head>
<body bgcolor="#f2f2f2">
    <div class="container-fluid bord" style="text-align:center;">
        <h1><font face="verdana" style="color: rgb(34, 20, 155);">CPUs</font></h1>
    </div>
    <br>
    <div><a href="cpucmp.php"><button>COMPARE</button></a></div>
    <br>
    <form action="addcpu.php" method="get">
            CPU: <input type="text" name="cpu">
            
            <input type="submit" value="ADD CPU TO YOUR BUILD"><BR>
    </form>
    <br>
    <div><a href="build.php"><button>BUILD</button></a></div>
    <?php
        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql="SELECT name,date,no_of_cores,no_of_threads,fabrication,INSTRUCTION_SET,CACHE,MAX_TDP,BASE_FREQUENCY,MAX_FREQUENCY,PRICE FROM CPU;";
        $result = $conn->query($sql);

        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                echo "<h2>".$row["name"]."</h2>";
                echo '<table style="width:100%">
                <tr>
                <td><h4>DATE:</h4>'.$row["date"].'</td>
                <td><h4>NO OF CORES:</h4>'.$row["no_of_cores"].'</td>
                <td><h4>NO OF THREADS:</h4>'.$row["no_of_threads"].'</td>
                <td><h4>FABRICATION :</h4>'.$row["fabrication"].'nm</td>
                <td><h4>INSTRUCTION SET:</h4>'.$row["INSTRUCTION_SET"].'bit</td>
                </tr>
                <tr>
                <td><h4>CACHE :</h4>'.$row["CACHE"].'MB</td>
                <td><h4>MAX TDP:</h4>'.$row["MAX_TDP"].'W</td>
                <td><h4>BASE FREQUENCY :</h4>'.$row["BASE_FREQUENCY"].'GHz</td>
                <td><h4>MAX FREQUENCY :</h4>'.$row["MAX_FREQUENCY"].'GHz</td>
                <TD><h4>PRICE :</h4>'.$row["PRICE"].'</TD>
                </tr>
                </table>';
            }   
        }
        else
        {
            echo "error".mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</body>
</html>