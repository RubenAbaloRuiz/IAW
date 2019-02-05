<html>
<head> <title>Search for student (2)</title> </head>
<body>

<?php

$con=mysql_connect("localhost","root","") or die("Connection Problems!");
mysql_select_db("base1",$con) or die("Database Problems!");

 mysql_query("delete from cursos",$con) or die("Delete Error:".mysql_error());
 echo "CURSOS ELIMINADOS.";

mysql_close($con);
?>


</body>
</html>