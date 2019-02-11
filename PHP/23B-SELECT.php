<html>
<head> <title>Search for student (2)</title> </head>
<body>

<?php
$con=mysql_connect("localhost","root","") or die("Connection Problems!");
mysql_select_db("shop",$con) or die("Database Problems!");

$nombre = $_REQUEST["cde"];


$rows=mysql_query("select * from article where CODE='$nombre'",$con) or die("Select Error:".mysql_error());
if ($row=mysql_fetch_array($rows)) {
    echo "Code:".$row['CODE']."<br>";
    echo "Name:".$row['NAME']."<br>";
    echo "Description:".$row['DESCRIPTION']."<br>";
    echo "Price:".$row['PRICE']."<br>";
    echo "CateCode:".$row['CATEGORYCODE']."<br>";
    echo "Barg:".$row['BARGAIN']."<br>";
}else {
    echo "La categoria no existe";
}


mysql_close($con);
?>


</body>
</html>