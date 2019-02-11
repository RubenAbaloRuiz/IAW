<html>
<head> <title>Search for student (2)</title> </head>
<body>

<?php
$con=mysql_connect("localhost","root","") or die("Connection Problems!");
mysql_select_db("base1",$con) or die("Database Problems!");

$nombre = $_REQUEST["nom"];
$mai = $_REQUEST["mails"];
$ccurs = $_REQUEST["codigocurso"];

$rows=mysql_query("insert into alumnos (nombre,mail,codigocurso) values ('$nombre','$mai','$ccurs')",$con) or die("Select Error:".mysql_error());
echo "Usuario Añadido";
mysql_close($con);
?>


</body>
</html>