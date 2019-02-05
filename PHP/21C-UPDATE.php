<html>
<head> <title>Search for student (2)</title> </head>
<body>

<?php
$con=mysql_connect("localhost","root","") or die("Connection Problems!");
mysql_select_db("shop",$con) or die("Database Problems!");

$rows=mysql_query("SELECT PRICE from article",$con) or die("Select Error:".mysql_error());


while ($row=mysql_fetch_array($rows)) {
$nombre = $row['PRICE'];
$aumento = $row['PRICE']*1.1;
 mysql_query("UPDATE article SET PRICE='$aumento' where PRICE='$nombre'",$con) or die("Delete Error:".mysql_error());
 echo "Precio aumentado un 10%."."<br>";
}

mysql_close($con);
?>


</body>
</html>