<html>
<head> <title>Search for student (2)</title> </head>
<body>

<?php
$con=mysql_connect("localhost","root","") or die("Connection Problems!");
mysql_select_db("shop",$con) or die("Database Problems!");

$rows=mysql_query("SELECT PRICE from article where BARGAIN=1",$con) or die("Select Error:".mysql_error());


while ($row=mysql_fetch_array($rows)) {
$nombre = $row['PRICE'];
$reducto = $row['PRICE']*0.5;
 mysql_query("UPDATE article SET PRICE='$reducto' where PRICE='$nombre'",$con) or die("Delete Error:".mysql_error());
 echo "Precio reducido un 50%."."<br>";
}

mysql_close($con);
?>


</body>
</html>