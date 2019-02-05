<html>
<head></head>
<body>
<?php


$user=array('ruben'=>'1234', 'paco'=>'1234');
$nombre=$_REQUEST['nombre'];
$pass=$_REQUEST['pass'];
$login=false;

foreach($user as $key => $val){
    if($key==$nombre && $val==$pass){
        $login=true;
        break;
    }else{
        $login=false;
        break;
    }
}

if($login){
    echo "El usuario es correcto";
}else{
    echo "El usuario es incorrecto";
}

?>
</body>
</html>
