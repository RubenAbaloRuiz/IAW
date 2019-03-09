<?php

if (isset($_COOKIE['cook'])) {
    setcookie("cook", "poli", time() - 3600);
    setcookie("cook", "econ", time() - 3600);
    setcookie("cook", "spor", time() - 3600);
    setcookie("cook", "todo", time() - 3600);
    echo "Cookie Borrada"."<br>";
}


if ($_REQUEST['cook']=="poli"){
    setcookie("cook","poli",time()+(60*60*24*365),"/");
    echo "Cookie Politicas Creada";
    }
elseif ($_REQUEST['cook']=="econ"){
    setcookie("cook","econ",time()+(60*60*24*365),"/");
    echo "Cookie Economicas Creada";
    }
elseif ($_REQUEST['cook']=="spor") {
    setcookie("cook", "spor", time() + (60 * 60 * 24 * 365), "/");
    echo "Cookie Spor Creada";
}
elseif ($_REQUEST['cook']=="todo") {
    setcookie("cook", "todo", time() + (60 * 60 * 24 * 365), "/");
    echo "Cookie TODO Creada";
}




?>

<html>
<head> <title>Page 2</title> </head>
<body>

<br>
<a href="30-FORM.php">Go to page1 </a>
</body>
</html> 