<html>
<head> <title>Search for student (2)</title> </head>
<body>

<?php
$con=mysql_connect("localhost","root","") or die("Connection Problems!");
mysql_select_db("futbol",$con) or die("Database Problems!");


echo "<table border='1'>";
echo "<tr><th>ID</th><th>NOM</th><th>POSICIO</th><th>PUNTS</th></tr>";
$rows = mysql_query("Select * from equip",$con) or die("Delete Error:".mysql_error());

while($row=mysql_fetch_array($rows)){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nom']."</td>";
    echo "<td>".$row['posicio']."</td>";
    echo "<td>".$row['punts']."</td>";
    echo "</tr>";
}
echo "</table>";





mysql_close($con);
?>


</body>
</html>