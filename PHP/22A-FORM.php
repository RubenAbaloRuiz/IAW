<html>
<body>
<form action="22A-SELECT.php" method="post">
Nombre de Alumno: <input type="text" name="nom">
Mail del alumno: <input type="text" name="mails">
Select course: <select name="codigocurso">
        <?php
        $con=mysql_connect("localhost","root","") or die("Connection Problems!");
        mysql_select_db("base1",$con) or die("Database Problems!");

        $rows=mysql_query("select codigo,nombrecurso from cursos",$con) or die("Select problems:".mysql_error());
        while ($row=mysql_fetch_array($rows)) {
            echo "<option value=\"$row[codigo]\">$row[nombrecurso]</option>";
        }
        ?>
<input type="submit">
</form>
</body>
</html>