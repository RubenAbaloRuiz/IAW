<html>
<head> <title>Page 2</title> </head>
<body>
<?php
copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
copy($_FILES['foto2']['tmp_name'],$_FILES['foto2']['name']);
copy($_FILES['foto3']['tmp_name'],$_FILES['foto3']['name']);
echo "File has been uploaded to the server.<br>";
$name=$_FILES['foto']['name'];
$name2=$_FILES['foto2']['name'];
$name3=$_FILES['foto3']['name'];
echo "<img src=\"$name\">";
echo "<img src=\"$name2\">";
echo "<img src=\"$name3\">";
?>
</body>
</html>