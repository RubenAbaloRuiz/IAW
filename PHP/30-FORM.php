<html>
<head> <title>Page 1</title> </head>
<body>
<?php

if (isset($_COOKIE['cook']) && $_COOKIE['cook']=="poli")
    echo "NOTICIAS POLITICAS";
elseif (isset($_COOKIE['cook']) && $_COOKIE['cook']=="econ")
    echo "NOTICIAS ECONOMICAS";
elseif (isset($_COOKIE['cook']) && $_COOKIE['cook']=="spor")
    echo "NOTICIAS DEPORTIVAS";
elseif (isset($_COOKIE['cook']) && $_COOKIE['cook']=="todo") {
    echo "NOTICIAS DEPORTIVAS" . "<br>";
    echo "NOTICIAS ECONOMICAS" . "<br>";
    echo "NOTICIAS POLITICAS" . "<br>";
}

?>

<form action="30-SELECT.php" method="post">
    <input type="radio"  name="cook" value="poli">Politics<br>
    <input type="radio"  name="cook" value="econ">Economy<br>
    <input type="radio"  name="cook" value="spor">Sports<br>
    <input type="radio"  name="cook" value="todo">TODO<br>
    <input type="submit" value="Create cookie">
</form>
</body>
</html>