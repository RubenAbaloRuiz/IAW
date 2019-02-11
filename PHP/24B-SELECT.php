<html>
<head> <title>Search for student (2)</title> </head>
<body>

<?php
$con=mysql_connect("localhost","root","") or die("Connection Problems!");
mysql_select_db("base1",$con) or die("Database Problems!");



$rows=mysql_query("select * from alumnos",$con) or die("Select Error:".mysql_error());
while ($row=mysql_fetch_array($rows)) {
    echo "Code:" . $row['codigo'] . "<br>";
    echo "Name:" . $row['nombre'] . "<br>";
    echo "Email:" . $row['mail'] . "<br>";
    echo "Course:" . $row['codigocurso'] . "<br>";
    echo "<br>";
}

$rows=mysql_query("select count(*) as numero from alumnos",$con) or die("Select Error:".mysql_error());
echo "There are ".$row['numero']." students.";

mysql_close($con);
?>


</body>
</html>