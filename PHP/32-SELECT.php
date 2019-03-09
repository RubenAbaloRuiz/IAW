<?php
require_once('32-CON.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>32</title>
</head>
<body>
<?php
$con = returnConnection();

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " .
        mysqli_connect_error();
}

$sql = "SELECT * FROM alumnos";
$rs = mysqli_query($con,$sql);


while ($row=mysqli_fetch_array($rs)) {
    echo "Nombre: " . $row["nombre"] . ", E-mail: " . $row["mail"] . "<br/>";
}
mysqli_close($con);
?>
</body>
</html>