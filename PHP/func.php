<html>
<head></head>
<body>
<?php


$pass=$_REQUEST['pass'];
$pass2=$_REQUEST['pass2'];


if($pass==$pass2){
    echo "La contrasenya es correcta";
}else{
    echo "Las contrasenyas no coinciden";
}

?>
</body>
</html>
