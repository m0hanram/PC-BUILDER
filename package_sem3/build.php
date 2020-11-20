<!DOCTYPE html>
<html>
<head>
	<title>YOUR PC BUILD</title>
</head>
<style type="text/css">
div.form
{
    display: block;
    text-align: center;
}
form
{
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
    font-size: 30px;
    font-family: verdana;
}
</style>
<body>
	<div class="form">
		<form action="mainbuild.php" method="get">
			CPU: <input type="text" name="cpu">
			
			<input type="submit" value="ADD CPU TO YOUR BUILD"><BR>
			MOTHER BOARD: <input type="text" name="mb">
			
			<input type="submit" value="ADD MB TO YOUR BUILD"><BR>
			GPU: <input type="text" name="gpu">
			
			<input type="submit" value="ADD GPU TO YOUR BUILD"><BR>
			RAM: <input type="text" name="ram">
			
			<input type="submit" value="ADD RAM TO YOUR BUILD"><BR>
			SSD: <input type="text" name="ssd">
			
			<input type="submit" value="ADD SSD TO YOUR BUILD"><BR>
			PSU: <input type="text" name="psu">
			
			<input type="submit" value="ADD PSU TO YOUR BUILD"><BR>
			CASE: <input type="text" name="case">
			
			<input type="submit" value="ADD CASE TO YOUR BUILD"><BR>
		<input type="submit">
		</form>
		<BR>
		<a href="CPU.php"><button>CPU</button></a><BR><BR>
		<A HREF="Motherboard.php"><button>MOTHER BOARD</button></A><BR><BR>
		<A HREF="GPU.php"><button>GPU</button></A><BR><BR>
		<A HREF="RAM.php"><button>RAM</button></A><BR><BR>
		<A HREF="SSD.php"><button>SSD</button></A><BR><BR>
		<A HREF="PSU.php"><button>PSU</button></A><BR><BR>
		<A HREF="CASES.php"><button>CASE</button></A><BR><BR>
	</div>
</body>
</html>