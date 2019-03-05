<?php


if ($_REQUEST['poli']=="yes")
    setcookie("poli","POLITICAS",time()+(60*60*24*365),"/");
elseif ($_REQUEST['econ']=="yes")
    setcookie("econ","ECONOMICAS",time()+(60*60*24*365),"/");
elseif ($_REQUEST['spor']=="yes")
    setcookie("spor","DEPORTES",time()+(60*60*24*365),"/");
else
    if (isset($_COOKIE['poli']))
        setcookie("poli","POLITICAS",time()-3600);
    elseif (isset($_COOKIE['econ']))
        setcookie("econ","ECONOMICAS",time()-3600);
    elseif (isset($_COOKIE['spor']))
        setcookie("spor","DEPORTES",time()-3600);


?>

<html>
<head> <title>Page 2</title> </head>
<body>

<br>
<a href="30-FORM.php">Go to page1 </a>
</body>
</html> 