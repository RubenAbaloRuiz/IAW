<html>
<head> <title>Search for student (2)</title> </head>
<body>

 <?php
$con=mysqli_connect("localhost","root","","base1");
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " .
mysqli_connect_error();
}


//Query

echo "<table border='1'>";
    $id = $_REQUEST["curso"];
	echo "<tr><th>CODIGO</th><th>NOMBRE</th><th>MAIL</th><th>CODIGOCURSO</th></tr>";
	$sql="SELECT * FROM alumnos a left join cursos c on a.codigocurso=c.codigo where codigocurso=$id";
	$rs = mysqli_query($con,$sql);

	while($row=mysqli_fetch_array($rs)){
		echo "<tr>";
			echo "<td>".$row['codigo']."</td>";
			echo "<td>".$row['nombre']."</td>";
			echo "<td>".$row['mail']."</td>";
			echo "<td>".$row['nombrecurso']."</td>";
		echo "</tr>";
	}
echo "</table>";




mysqli_close($con);
?>


</body>
</html>