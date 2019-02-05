<html>
<head></head>
<body>

 <?php
// Create connection
$con=mysqli_connect("localhost","root","","prueba");
// Check connection
if (mysqli_connect_errno($con))
{
 echo "Failed to connect to MySQL: " .
 mysqli_connect_error();
}
else {
    echo "<p>Conexion Correcta</p>";
}

// Operacion sobre la BDD

$sql="CREATE DATABASE asix2019";
if (mysqli_query($con,$sql))
 {
 echo "Database my_db created successfully";
 }
else
 {
 echo "Error creating database: " . mysqli_error($con);
 }












//Close connection
mysqli_close($con);
echo "<p>La conexion se ha cerrado</p>"


?>

</body>
</html>