<html>
<head></head>
<body>
<?php

echo "Tu nombre es: "; echo $_REQUEST['n1'];
echo "<br>";
if ($_REQUEST['range']=="min") {
 echo "Ha escogido el rango de 1-1000euros";
}
elseif ($_REQUEST['range']=="mid") {
 echo "Ha escogido el rango de 1000-3000euros";
}
elseif ($_REQUEST['range']=="max") {
 echo "Ha escogido el rango de +3000euros<br>";
 echo "Debe pagar tasas adicionales";
}

?>
</body>
</html>