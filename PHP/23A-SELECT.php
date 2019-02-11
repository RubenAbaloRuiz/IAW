<html>
<head> <title>Search for student (2)</title> </head>
<body>

<?php
$con=mysql_connect("localhost","root","") or die("Connection Problems!");
mysql_select_db("base1",$con) or die("Database Problems!");

$nombre = $_REQUEST["ids"];


$rows=mysql_query("select * from alumnos where codigo='$nombre'",$con) or die("Select Error:".mysql_error());
if ($row=mysql_fetch_array($rows)) {
    echo "Code:".$row['codigo']."<br>";
    echo "Name:".$row['nombre']."<br>";
    echo "Email:".$row['mail']."<br>";
    echo "Course:".$row['codigocurso']."<br>";
}else {
    echo "This student code doesn't exist!";
}


mysql_close($con);
?>


</body>
</html>