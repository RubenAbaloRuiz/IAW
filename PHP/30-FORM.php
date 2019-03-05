<html>
<head> <title>Page 1</title> </head>
<body>
<?php

if (isset($_COOKIE['poli']))
    echo "NOTICIAS POLITICAS";
elseif (isset($_COOKIE['econ']))
    echo "NOTICIAS ECONOMICAS";
elseif (isset($_COOKIE['spor']))
    echo "NOTICIAS DEPORTIVAS";

?>

<form action="30-SELECT.php" method="post">
    <input type="radio"  name="poli">Politics<br>
    <input type="radio"  name="econ">Economy<br>
    <input type="radio"  name="spor">Sports<br>
    <input type="submit" value="Create cookie">
</form>
</body>
</html>