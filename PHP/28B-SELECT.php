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

//$rows=mysql_query("insert into article (NAME,DESCRIPTION,PRICE,CATEGORYCODE,BARGAIN) values ('$nombre','$desc','$pric','$cd','$barg')",$con) or die("Select Error:".mysql_error());

$sql="insert into article (NAME,DESCRIPTION,PRICE,CATEGORYCODE,BARGAIN) values ('$nombre','$desc','$pric','$cd','$barg')";
echo "Articulo Añadido";

if ($con->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "Articulo Añadido";

    copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
    echo "File has been uploaded to the server.<br>";
    $name=$_FILES['foto']['name'];
    echo "<img src=\"$name\">";

    //Cambio de Nombre
    $file_name = "FotoArticulo".$last_id; // New unique file name
    move_uploaded_file($_FILES["file"]["tmp_name"], "C:/wamp/www/{$file_name}.png");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



mysql_close($con);
?>


</body>
</html>