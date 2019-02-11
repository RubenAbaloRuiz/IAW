<html>
<head> <title>Page 1</title> </head>
<body>
<?php
$con=mysql_connect("localhost","root","") or die("Connection problems!");
mysql_select_db("shop",$con) or die("Database problems!");


$sql= "select count(art.CODE) as cantidad, car.NAME,art.NAME from article as art inner join category as car on car.CODE=art.CATEGORYCODE group by art.CODE";
$rows=mysql_query($sql, $con) or die("Select problems:".mysql_error());
while ($row=mysql_fetch_array($rows)) {
    echo "Category Name:".$row['NAME']."<br>";
    echo "Number of Articles:".$row['cantidad']."<br>";
    echo "Articles:".$row['art.NAME']."<br>";
    echo "<hr>";
}
mysql_close($con);
?>
</body>
</html>