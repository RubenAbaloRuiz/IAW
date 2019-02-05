<html>
<head> <title>Search for student (2)</title> </head>
<body>

<?php
$con=mysql_connect("localhost","root","") or die("Connection Problems!");
mysql_select_db("base1",$con) or die("Database Problems!");

$id = $_REQUEST["curs"];
$rows=mysql_query("SELECT nombrecurso from cursos where nombrecurso='$id'",$con) or die("Select Error:".mysql_error());

if ($row=mysql_fetch_array($rows)) {
 mysql_query("delete from cursos where nombrecurso='$id'",$con) or die("Delete Error:".mysql_error());
 echo "Curso Eliminado.";
} else {
 echo "El nombre del curso no es correcto.";
}
mysql_close($con);
?>


</body>
</html>