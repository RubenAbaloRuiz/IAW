<html>
<head> <title>Page 1</title> </head>
<body>
<?php
$con=mysql_connect("localhost","root","") or die("Connection problems!");
mysql_select_db("base1",$con) or die("Database problems!");


$sql= "select count(alu.codigo) as cantidad, nombrecurso,nombre from alumnos as alu inner join cursos as cur on cur.codigo=alu.codigocurso group by alu.codigocurso";
$rows=mysql_query($sql, $con) or die("Select problems:".mysql_error());
while ($row=mysql_fetch_array($rows)) {
    echo "Course Name:".$row['nombrecurso']."<br>";
    echo "Number of Students:".$row['cantidad']."<br>";
    echo "Students:".$row['nombre']."<br>";
    echo "<hr>";
}
mysql_close($con);
?>
</body>
</html>