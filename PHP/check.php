<html>
<head></head>
<body>
<?php

$numero=0;
$deportes="";


if (isset($_REQUEST['check1'])) {
 $numero++;
 $deportes.= "Futbol ";
}

if (isset($_REQUEST['check2'])) {
 $numero++;
  $deportes.= "Tenis ";
}

if (isset($_REQUEST['check3'])) {
 $numero++;
  $deportes.= "Basket ";
}

if (isset($_REQUEST['check4'])) {
 $numero++;
  $deportes.= "Golf ";
}

echo "Tu nombre es: "; echo $_REQUEST['user'];echo "<br>";
echo "Se han marcado en total: ".$numero." deportes";echo "<br>";
echo "Los deportes que se han marcado han sido: ".$deportes;
echo "<br>";


?>
</body>
</html>