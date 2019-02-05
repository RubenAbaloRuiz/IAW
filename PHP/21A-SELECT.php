<html>
<head> <title>Search for student (2)</title> </head>
<body>

<?php
$con=mysql_connect("localhost","root","") or die("Connection Problems!");
mysql_select_db("base1",$con) or die("Database Problems!");

$old = $_REQUEST["oldcurs"];
$new = $_REQUEST["newcurs"];

$rows = mysql_query("update cursos set nombrecurso='$new' where nombrecurso='$old'",$con) or die("Delete Error:".mysql_error());
echo "Nombre de curso modificado.";

mysql_close($con);
?>


</body>
</html>