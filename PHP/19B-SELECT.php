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
	echo "<tr><th>CODIGO</th><th>NOMBRE</th></tr>";
	$sql="SELECT * FROM category order by name ASC";
	$rs = mysqli_query($con,$sql);

	while($row=mysqli_fetch_array($rs)){
		echo "<tr>";
			echo "<td>".$row['CODE']."</td>";
			echo "<td>".$row['NAME']."</td>";
		echo "</tr>";
	}
echo "</table>";




mysqli_close($con);
?>


</body>
</html>