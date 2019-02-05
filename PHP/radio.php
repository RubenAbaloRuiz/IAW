<html>
<head></head>
<body>
<?php

echo "Tu nombre es: "; echo $_REQUEST['user'];
echo "<br>";

if ($_REQUEST['radio1']=="no") {
 echo "Esta persona no estudia";
}
elseif ($_REQUEST['radio1']=="pri") {
 echo "Esta persona esta en la escuela primaria";
}
elseif ($_REQUEST['radio1']=="sec") {
 echo "Esta persona esta en la escuela secundaria";
}else {
 echo "Esta persona esta en la universidad";
}

?>
</body>
</html>