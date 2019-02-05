<html>
<head></head>
<body>
<?php



for($f=1;$f<=10;$f++) {
$x= $f * 2;
echo "2x".$f."= ".$x;
echo "<br>";
}

echo "<br>";

$initial=1;

while($initial<=10) {
$y= $initial * 2;
echo "2x".$initial."= ".$y;
echo "<br>";
$initial++;
}

echo "<br>";

$numero=1;

do {
$a = $numero * 2;
echo "2x".$numero."= ".$a;
echo "<br>";
$numero++;
}while($numero<=10);



?>

</body>
</html>