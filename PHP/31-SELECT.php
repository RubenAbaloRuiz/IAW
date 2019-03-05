<?php

$con=mysql_connect("localhost","root","") or die("Connection Problems!");
mysql_select_db("base1",$con) or die("Database Problems!");



$rows=mysql_query("select * from alumnos",$con) or die("Select Error:".mysql_error());
while ($row=mysql_fetch_array($rows)) {
    if ($row['mail']==$_REQUEST['user']){
        $guard=$row['nombre'];
    }

}



session_start();
$_SESSION['user']=$guard;



mysql_close($con);
?>
<html>
<head> <title>Page 2</title> </head>
<body> Session variables have been stored.<br><br>
<a href="31-SESSION.php">Go to Page 3</a>
</body>
</html>

