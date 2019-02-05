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
/*$sql="CREATE TABLE persons(FirstName CHAR(30),LastName
CHAR(30),Age INT)";

if (mysqli_query($con,$sql))
 {
 echo "Table persons created successfully";
 }
else
 {
 echo "Error creating table: " . mysqli_error($con);
 }
?>*/

$sql="INSERT INTO Persons (FirstName, LastName, Age)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
echo "1 record added";
mysqli_close($con);



?>

</body>
</html>