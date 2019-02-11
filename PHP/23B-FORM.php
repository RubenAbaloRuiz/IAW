<html>
<body>
<form action="23B-SELECT.php" method="post">
    Categoria: <select name="cde">


        <?php
        $con=mysql_connect("localhost","root","") or die("Connection Problems!");
        mysql_select_db("shop",$con) or die("Database Problems!");

        $rows=mysql_query("select CODE,NAME from category",$con) or die("Select problems:".mysql_error());
        while ($row=mysql_fetch_array($rows)) {
            echo "<option value=\"$row[CODE]\">$row[NAME]</option>";
        }
        ?>
        <input type="submit">
</form>
</body>
</html>