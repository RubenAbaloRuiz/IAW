<html>
<head> <title>Page 1</title> </head>
<body>
<form action="28B-SELECT.php" method="post" enctype="multipart/form-data">
    Nombre de Articulo: <input type="text" name="nom">
    Descripcion articulo: <input type="text" name="desc">
    Precio: <input type="double" name="price">
    Bargrain: <input type="text" name="barg">
    CodigoCategoria: <select name="cde"><br>

        <?php
        $con=mysql_connect("localhost","root","") or die("Connection Problems!");
        mysql_select_db("shop",$con) or die("Database Problems!");

        $rows=mysql_query("select CODE,NAME from category",$con) or die("Select problems:".mysql_error());
        while ($row=mysql_fetch_array($rows)) {
            echo "<option value=\"$row[CODE]\">$row[NAME]</option>";
        }
        ?>


        Select a file: <input type="file" name="foto"><br>
    <input type="submit" value="Upload"><br>
</form>
</body>
</html>