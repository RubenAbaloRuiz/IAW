<html>
<head></head>
<body>
<?php

$names=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

$dia=(date("w"));

echo "La fecha de hoy es ".date("Y/m/d"). " y estamos a ".$names[$dia] ;


?>
</body>
</html>