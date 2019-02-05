<html>
<head> <title>Search for student (2)</title> </head>
<body>

<?php
$con=mysql_connect("localhost","root","") or die("Connection Problems!");
mysql_select_db("base1",$con) or die("Database Problems!");

$rows=mysql_query("SELECT nombrecurso from cursos",$con) or die("Select Error:".mysql_error());


while ($row=mysql_fetch_array($rows)) {
$nombre = $row['nombrecurso'];
 mysql_query("UPDATE cursos SET nombrecurso='$nombre.-2014' where nombrecurso='$nombre'",$con) or die("Delete Error:".mysql_error());
 echo "Nombre Cambiado.";
}

mysql_close($con);
?>


</body>
</html>