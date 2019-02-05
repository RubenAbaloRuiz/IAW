<html>
<head></head>
<body>
<?php
echo "Your name is: "; echo $_REQUEST['nombre'];
echo "Your age is: "; echo $_REQUEST['edad'];

$edad = $_REQUEST['edad'];
echo "<br>";

if($edad>=18){
echo "La persona es mayor de edad";
}
else{
echo "La persona es menor de edad";
}
?>
</body>
</html>