<html>
<head> <title>Search for student (2)</title> </head>
<body>

 <?php
$con=mysqli_connect("localhost","root","","shop");
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " .
mysqli_connect_error();
}


//Query

echo "<table border='1'>";
    $id = $_REQUEST["categor"];
	echo "<tr><th>CODIGO</th><th>NOMBRE</th><th>DESCRIPCION</th><th>PRECIO</th><th>CODIGOCAT</th><th>BARGAIN</th></tr>";
	$sql="SELECT * FROM article a left join category c on a.CATEGORYCODE=c.CODE where c.CODE=$id";
	$rs = mysqli_query($con,$sql);

	while($row=mysqli_fetch_array($rs)){
		echo "<tr>";
			echo "<td>".$row['CODE']."</td>";
			echo "<td>".$row['NAME']."</td>";
			echo "<td>".$row['DESCRIPTION']."</td>";
			echo "<td>".$row['PRICE']."</td>";
			echo "<td>".$row['CATEGORYCODE']."</td>";
			echo "<td>".$row['BARGAIN']."</td>";
		echo "</tr>";
	}
echo "</table>";




mysqli_close($con);
?>


</body>
</html>