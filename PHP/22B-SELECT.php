<html>
<head> <title>Search for student (2)</title> </head>
<body>

<?php
$con=mysql_connect("localhost","root","") or die("Connection Problems!");
mysql_select_db("shop",$con) or die("Database Problems!");

$nombre = $_REQUEST["nom"];
$desc = $_REQUEST["desc"];
$pric = $_REQUEST["price"];
$barg = $_REQUEST["barg"];
$cd = $_REQUEST["cde"];

$rows=mysql_query("insert into article (NAME,DESCRIPTION,PRICE,CATEGORYCODE,BARGAIN) values ('$nombre','$desc','$pric','$cd','$barg')",$con) or die("Select Error:".mysql_error());
echo "Articulo Añadido";
mysql_close($con);
?>


</body>
</html>