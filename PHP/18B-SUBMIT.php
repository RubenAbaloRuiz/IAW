<html>
<head></head>
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
$sql="INSERT INTO category (name) VALUES ('$_REQUEST[nombre]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
echo "1 record added";
mysqli_close($con);
?>




</body>
</html>