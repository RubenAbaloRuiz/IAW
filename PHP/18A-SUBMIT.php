<html>
<head></head>
<body>

 <?php


$con=mysqli_connect("localhost","root","","base1");
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " .
mysqli_connect_error();
}

$sql="INSERT INTO cursos (nombrecurso) VALUES ('$_REQUEST[nombre]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
echo "1 record added";
mysqli_close($con);
?>




</body>
</html>